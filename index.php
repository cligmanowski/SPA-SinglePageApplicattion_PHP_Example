<?php  

require_once 'init.php';

// tira '/' do início e do final da string 
// REQUEST_URI - armazena parte da URL após o domínio
$uri = trim( $_SERVER['REQUEST_URI'] , '/');

// lista com cada valor entre '/' na URL
$pages = explode( '/' , $uri ) ;

// página atual na URL
$page = isset( $pages[0] )  ? $pages[0] : 'home';



switch ( $page ) {
	case 'home':
		require_once viewsPath() . 'home.php';
		break;
	case 'pessoas':
		require_once viewsPath() . 'pessoas.php';
		break;
	case 'adicionar-pessoa':
		\Controllers\PessoaController::store();
		break;

	case 'apagar-pessoa':
		\Controllers\PessoaController::delete();
		break;

	case 'salvar-pessoa':
		\Controllers\PessoaController::edit();
		break;
	default:
		echo "Página não encontrada!";
}




?>
