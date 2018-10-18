<?php

include '../_app/conexao.php';

$cod = filter_input(INPUT_POST,'id',FILTER_DEFAULT);

$sth = $pdo->prepare("DELETE from tbl_usuario WHERE usu_cod = :cod ");

$sth->bindValue (":cod", $cod, PDO::PARAM_INT);

$sth->execute();

if( $sth->execute() )
{
  echo "Usuário excluido com sucesso...";
}
else
{
  echo "Por algum motivo nõ foi possível excluir determinado usuário...";
}
header(:LOCATION:usuários.php);
?>
