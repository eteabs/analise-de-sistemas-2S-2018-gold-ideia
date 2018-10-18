<?php

session_start();

$login = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

include '../_app/conexao.php';
$sth = $pdo->prepare('select *from tbl_login where log_login = :login and log_senha = :senha ');
$sth->bindValue(":login", $login);
$sth->bindValue(":senha", $senha);
$sth->execute();

if ($sth->rowCount() > 0):
    $linha = $sth->fetch(PDO::FETCH_ASSOC);
    extract($linha);
    $_SESSION['Login']['email'] = $login;
    $_SESSION['Login']['senha'] = $senha;
    header('LOCATION:../_user/home/home.html');
else:
    header('LOCATION:login.php');
endif;
