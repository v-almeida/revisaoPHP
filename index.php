<?php

require_once("class/database.class.php")

$con = new Database();
$link = $con->getConexao();

$smtm = $link->prepare("select * from meu_teste");
$smtm->execute();

$data = $smtm->fetchAll();

print_r($data);

echo "Olá mundo!";