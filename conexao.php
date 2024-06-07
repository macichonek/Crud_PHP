<?php

try{

    //Faz conexão com o banco de dados
    $conectar = new PDO ("mysql:host=localhost;port=8111;dbname=pdo;", "root", "");
    

} catch (PDOException $e) {

    //Caso ocorra erro na conexão com banco, exibe a mensagem
    echo 'Falha ao conectar com o banco de dados: '. $e->getMessage();

}