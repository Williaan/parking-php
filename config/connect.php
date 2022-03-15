<?php
    session_start();
    
    $host = "127.0.0.1";
    $dbname = "Estacionamento";
    $user = "root";
    $password = "admin";

    global $connect;

    try {
        //Conexão com Banco de Dados
        $connect = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);

        //Ativar o modo Erro    
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $msg) {

        //Erro na conexão
        $error = $msg->getMessage();
        echo "Erro: $error";
    }
  
?>