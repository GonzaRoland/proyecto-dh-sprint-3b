<?php

class Connector
{

    public static function make()
    {
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=dogo;port=3306", "root", ""); //cambiar por data de las tablas de productos o usuarios
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;

        } catch (PDOException $e){
            echo $e->getMessage();
            //die('No pude conectarme');
        }
    }

}