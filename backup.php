<?php

// Incluindo o autoload do Composer para carregar a biblioteca
require_once 'vendor/autoload.php';

// Incluindo a classe que criamos
require_once 'class/BackupDatabase.php';

// Como a geração do backup pode ser demorada, retiramos
// o limite de execução do script
set_time_limit(0);

// Utilizando a classe para gerar um backup na pasta 'backups'
$backup = new BackupDatabase('backups', 14); //Serão mantidos os últimos 14 backups gerados recentemente
$backup->setDatabase('localhost', 'database', 'username', 'password'); //Servidor local, Nome do banco de dados, Username, Password
$backup->generate();