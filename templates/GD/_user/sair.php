<?php
session_start();

unset($_SESSION['Login']);

header('LOCATION: ../home/index.html');
?>
