<?php  

require_once 'init.php';

$nome = 'Carlos';
$sobrenome = 'San';
$endereco = 'Rua Pedro Viriato Parigot de Souza';
$numero = 2500;
$cidade = 'Curitiba';
$estado = 'Parana';
$cep = 81200100;
$data = date( 'Y-m-d H:i:s' );

$sql = "INSERT INTO pessoa (nome,sobrenome,endereco,numero,cidade,estado,cep,created_at,updated_at) " .
		"VALUES (:nome,:sobrenome,:endereco,:numero,:cidade,:estado,:cep,:created_at,:updated_at)";

$db = new DB;
$stmt = $db->prepare( $sql );

$stmt->bindParam( ':nome', $nome );
$stmt->bindParam( ':sobrenome', $sobrenome );
$stmt->bindParam( ':endereco', $endereco );
$stmt->bindParam( ':numero', $numero, PDO::PARAM_INT );
$stmt->bindParam( ':cidade', $cidade );
$stmt->bindParam( ':estado', $estado );
$stmt->bindParam( ':cep', $cep, PDO::PARAM_INT );
$stmt->bindParam( ':created_at', $data );
$stmt->bindParam( ':updated_at', $data );

if ( $stmt->execute() ) 
{
	echo " " . $nome . " " . $sobrenome . " inserido no banco de dados!";
}
else 
{
	echo "Erro ao criar uma pessoa teste!";
	echo "<br><br>";
	$error = $stmt->errorInfo();
	echo $error[2];
}

?>