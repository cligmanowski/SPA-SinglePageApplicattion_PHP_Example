<?php
if (function_exists('init_set')) 
{
	
	// desabilita exibição de erros para o usuário
	ini_set('display_errors', false);


	// habilita a escrita de erros no arquivo de log
	ini_set('log_errors', true);


	// define o nome do arquivo de log. Nessa aplicação: app.log
	ini_set('error_log', APP_ROOT_PATH . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'app.log' );

}

?>