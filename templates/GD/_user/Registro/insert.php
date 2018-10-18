<?php

include '../../_app/conexao.php';

$titulo = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
$cad = filter_input(INPUT_POST, 'message', FILTER_DEFAULT);

$sth = $pdo->prepare("INSERT INTO tbl_ideias (ide_nome,ide_completo) VALUES (  :t, :c )");

$sth->bindValue(":t",$titulo);
$sth->bindValue(":c",$cad);

$sth->execute();


echo $pdo->lastInsertId(). "Ideia cadastrada com sucesso....";

header('LOCATION:cadIdeia.php');
?>
