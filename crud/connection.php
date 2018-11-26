<?php

$host      = "localhost";
$user      = "root";
$password  = "";
$dbname    = "crud";

try {
    $con = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
} catch (PDOException $erroPDO) {
    print "Erro ao tentar se conectar ao banco de dados: " . $erroPDO->getMessage() . "<br/>";
    die();
}
