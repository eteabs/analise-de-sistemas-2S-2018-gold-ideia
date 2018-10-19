<?php

try
{
    $pdo = new PDO('mysql:host='. HOST .';dbname='.DBNAME.';charset=utf8', USER , PASS);
}
catch(PDOException $e)
{
    echo $e->getMessage() . "</p>";
    die("Não foi possível realizar a coneção com o banco de dados....");
}
