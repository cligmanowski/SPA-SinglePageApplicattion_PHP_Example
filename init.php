<?php

// mantém a sessão ativa
session_start();

// define o diretório base da aplicação
define( 'APP_ROOT_PATH', dirname(__FILE__) );

// array com todos os arquivos de configuração que estão no diretório "config"
$configFiles = glob( APP_ROOT_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . '*.php' );


// inclui todos os arquivos de configuração 
foreach ($configFiles as $configFile) 
{
	require_once $configFile;
}

// adiciona o diretório 'lib' no include_path
set_include_path( get_include_path() . PATH_SEPARATOR . APP_ROOT_PATH . DIRECTORY_SEPARATOR . 'lib' );
spl_autoload_extensions( ".php" );
spl_autoload_register();
 

// inclui o arquivo de funções
// como o diretório "lib" está no include path, não é necessário usar o caminho completo no require_once 
require_once 'functions.php';


?>