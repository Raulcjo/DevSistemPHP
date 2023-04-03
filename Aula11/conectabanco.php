<?php
//conectar no base
$mysql = new mysqli("127.0.0.1", "root", "", "faculdade", "3310");
if($mysql->connect_errno){
    echo "ERRO de conexão com banco de dados".
    $mysql->get_connection_stats;
}
?>