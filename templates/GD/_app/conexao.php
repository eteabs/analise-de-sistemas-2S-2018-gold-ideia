<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=goldideia;charset=utf8','root','');
}
catch(PDOException $e)
{
    echo $e->getMessage() . "</p>";
    die("Não foi possível realizar a coneção com o banco de dados....");
}
