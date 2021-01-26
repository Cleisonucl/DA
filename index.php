<!DOCTYPE html>
<html>
<meta charset="UTF-8"/>
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"
        integrity="sha256-R7aNzoy2gFrVs+pNJ6+SokH04ppcEqJ0yFLkNGoFALQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/sorttable.js"></script>
<head>
    <link rel="stylesheet" type="text/css" href="css/Mystyle1.css">
    <title>Agenda telefônica - Intranet</title>

</head>
<body>
<div id="pesquisar">
    <form>
        <label for="txtColuna1">Para pesquisar, digite abaixo o nome ou sobrenome do funcionário:</label><br>
        <input type="text" id="txtColuna1"/>
    </form>

</div>
<?php
$ldap_password = 'campo';
$ldap_username = 'lerdominio';
$ldapconfig['host'] = '172.16.0.252';
$ldapconfig['port'] = 389;
$domain = 'campo.local';

$ds = ldap_connect($ldapconfig['host'], $ldapconfig['port'])
or die ("Não pôde se conectar ao " . $ldapconfig['host'] . ":" . $ldapconfig['port'] . ".");

ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3)
or die ('Não foi possível definir a versão do protocolo LDAP');
ldap_set_option($ds, LDAP_OPT_REFERRALS, 0); // Precisamos disso para fazer uma pesquisa LDAP.

if ($ds) {
    if ($ldapbind = ldap_bind($ds, $ldap_username . '@' . $domain, $ldap_password)) {
        $ldap_base_dn = 'DC = campo, DC = local';
        //$search_filter = '(& (objectCategory = person) (samaccountname = *))';
        //$search_filter = "(&(objectClass=user)(objectCategory=person)(!(userAccountControl:1.2.840.113556.1.4.803:=2)))";
        $search_filter = "(&(objectClass=user)(objectCategory=person)(displayname=*))";
        $attributes = array();
        $attributes [] = 'displayname';
        $attributes [] = 'telephonenumber';
        $attributes [] = 'ipphone';
        $attributes [] = 'mobile';
        $attributes [] = 'mail';
        $attributes [] = 'useraccountcontrol';

        $result_search = ldap_search($ds, $ldap_base_dn, $search_filter, $attributes);
        if ($result_search) {
            $info = ldap_get_entries($ds, $result_search);
            $retorno = ldap_count_entries($ds, $result_search);
            $tabela = '<div id ="scrollbar">';
            $tabela .= '<table id="myTable">';
            $tabela .= '<thead>';
            $tabela .= '<tr>';
            $tabela .= '<th>Nome</th>';
            $tabela .= '<th>Telefone</th>';
            $tabela .= '<th>Ramal</th>';
            $tabela .= '<th>Celular</th>';
            $tabela .= '<th>Email</th>';
            $tabela .= '</tr>';
            $tabela .= '</thead>';
            $tabela .= '<tbody>';
       // print_r($info);
//            uasort($info, function ($a, $b) {
//                return strcmp($a['displayname'], $b['count']);
//                //Se quiser inverter a ordem basta trocar por return strcmp($b['nome'], $a['nome']);
//            });
            usort($info, function($a, $b) {
                return strcmp($a['displayname'][0], $b['displayname'][0]);
            });

            foreach ($info as $key) {


                if ( isset($key ['displayname'] [0] ) || isset($key['telephonenumber'] [0]  )){
                   if ( isset($key ['ipphone'] [0]) || isset($key ['mobile'] [0]) || isset($key ['mail'] [0])){


                    $tabela .= '<tr>';
                    $tabela .= '<td>'.$key ['displayname'] [0].'</td>';
                    $tabela .= '<td>'.$key ['telephonenumber'] [0].'</td>';
                    $tabela .= '<td>'.$key ['ipphone'] [0].'</td>';
                    $tabela .= '<td>'.$key ['mobile'] [0].'</td>';
                    $tabela .= '<td>'.$key ['mail'] [0].'</td>';
                    $tabela .= '</tr>';}}


//
//
//								}
//
//
//									}
//								}



                                }
                                $tabela .= '</tbody>'; //fecha corpo
                                $tabela .= '</table>';//fecha tabela
                                $tabela .= '</div>'; //fecha cabeçalho

                                echo $tabela; // imprime


                                /*$arrlength = count($value);
                                    echo $arrlength;
                                    for($x = 0; $x < $arrlength; $x++) {
                                          echo $value[$x];
                                          echo "<br>";
                                }*/
                            }

					    	}
} else {
    echo "LDAP ligação falhou ...";
}

ldap_close($ds);
?>

</body>
</html>