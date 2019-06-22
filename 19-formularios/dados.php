<?php
// COLETAR OS DADOS DO index.php

// COLETANDO COM O POST
// $nome = $_POST['nome'];
// $email = $_POST['email'];

//COLETANDO COM O GET
$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $nome seu email é $email <br>";
var_dump($_GET);