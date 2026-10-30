<?php
abstract class Conexao
{
    public static function getInstance()
    {
        $dsn = 'mysql:host=localhost;dbname=dbphp';
        $user = 'root';
        $pass = '';
        try{
            $pdo = new PDO($dsn, $user, $pass);
            $pdo ->setATTribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch (PDOException $exc){
            echo $exc ->getMessage();
        }
    }
}