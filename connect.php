<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'raizV2toorU2');
define('DB', 'nossobanco');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB);

if (!$conn) {
    echo "não conectou ao banco de dados";
    echo 'Erro: Unable to connect to MySQL.' . PHP_EOL;
    echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
    echo 'Debugging erro: ' . mysqli_connect_error() . PHP_EOL;
    exit;
}
