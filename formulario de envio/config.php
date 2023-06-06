<?php
    $dbhost = 'host do database';
    $dbUsername = 'seu usuario database';
    $dbpassword = 'sua senha database';
    $dbName = 'nome do seu banco de dados';

    $conexao = new mysqli($dbhost,$dbUsername, $dbpassword,$dbName);

   // if ($conexao->connect_errno) {
   //    echo 'deu erro';
   // }else{
   //     echo 'conectado';
   // }

   

?>