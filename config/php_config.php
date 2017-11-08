<?php

/*
 * Lista com os hostnames (nome do computador) dos ambientes de
 * desenvolvimento. Sempre que o sistema for executado em uma máquina
 * de desenvolvimento, as devidas configurações do PHP (como exibição de
 * erros e logs) serão usadas. Caso contrário, serão usadas configurações de
 * ambiente de produção
 */
$devHostnames = [
    'Carloss-MacBook-Pro.local',
];
 

// Fuso-Horário (Timezone)
// Lista de timezones suportadors pelo PHP: http://php.net/manual/pt_BR/timezones.php
date_default_timezone_set('America/Sao_Paulo');


// essa configuração é geral, tanto para produção quanto
// para desenvolvimento, pois desejamos exibir todos os níveis
// de erro, seja na tela ou no arquivo de log.
// O que muda, conforme o ambiente, é a configuração display_errors
error_reporting(E_ALL);

// qual máquina a aplicação está rodando
$hostname = gethostname();

if ( in_array($hostname, $devHostnames) )
{
	define('ENV', 'dev');
	require_once APP_ROOT_PATH . DIRECTORY_SEPARATOR . 'config'. DIRECTORY_SEPARATOR . 'env' . DIRECTORY_SEPARATOR . 'dev.php';
}

else 
{
	define('ENV', 'prod');
	require_once APP_ROOT_PATH . DIRECTORY_SEPARATOR . 'config'. DIRECTORY_SEPARATOR . 'env' . DIRECTORY_SEPARATOR . 'prod.php';
}



?>