<?php
include 'C:\xampp\htdocs\wix\controllers\connection.php';

class Controller
{

    function getAllMenu()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM menu";

        $q = $connection->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAllindirimli()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM indirimli";

        $q = $connection->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAllproduct()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM products";

        $q = $connection->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAllyeni()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM yeni";

        $q = $connection->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAlldeger()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM deger";

        $q = $connection->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAllcompany()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM company";

        $q = $connection->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAllprocess()
    {
        $connection = new Connection();
        $sql = "SELECT * FROM process";

        $q = $connection->connect()->prepare($sql);
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }

}
