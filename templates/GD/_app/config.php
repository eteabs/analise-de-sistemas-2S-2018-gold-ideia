<?php

define('HOST', 'localhost');
define('DBNAME', 'goldideia');
define('USER', 'root');
define('PASS', '');

define('HOME', 'http://localhost/goldideia/templates/GD');
define('REQUIRE_PATH', 'pages/');
define('INCLUDE_PATH', HOME . '/pages/');

session_start();

require 'conexao.php';