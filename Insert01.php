<?php

include '../_app/conexao.php';

$nome = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
$confirmacao = filter_input(INPUT_POST, 'confirmacao', FILTER_DEFAULT);

if($senha == $confirmacao):

  $sth = $pdo->prepare('select *from tbl_usuario where usu_email = :email');
  $sth->bindValue(":email", $email);
  $sth->execute();

    if ($sth->rowCount() == 0):

    $linha = $sth->fetch(PDO::FETCH_ASSOC);
    extract($linha);
    $sth = $pdo->prepare("INSERT INTO tbl_usuario (usu_nome,usu_email) VALUES (  :nome, :email )");

    $sth->bindValue(":nome",$nome);
    $sth->bindValue(":email",$email);

    $sth->execute();

    $sth = $pdo->prepare("INSERT INTO tbl_login (log_login,log_senha) VALUES (  :user, :senha )");
    $sth->bindValue(":senha",$senha);
    $sth->bindValue(":user",$email);
    $sth->execute();

    echo $pdo->lastInsertId(). "Cadastro realizado com sucesso....";

    header('LOCATION:../log/login.php');
    else:

    header('LOCATION:cadastro.php');
    endif;
else:

  header('LOCATION:cadastro.php');

endif;
?>
