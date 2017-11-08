<?php 

	
	namespace Controllers;



	class PessoaController
	{


		public static function store()
		{

			$postdata = file_get_contents("php://input");

			if(isset($postdata) && !empty($postdata))
			{				
    			$request = json_decode($postdata);

    			$nome = $request->nome ;
				$sobrenome = $request->sobrenome;
				$endereco = $request->endereco;
				$numero = $request->numero; 
				$cidade = $request->cidade;
				$estado = $request->estado;
				$cep = $request->cep; 
				$data = date( 'Y-m-d H:i:s' );

				$db = new \DB;

				$sql =  " INSERT INTO pessoa (nome,sobrenome,endereco,numero,cidade,estado,cep,created_at,updated_at) " .
						" VALUES (:nome,:sobrenome,:endereco,:numero,:cidade,:estado,:cep,:created_at,:updated_at)";

				$stmt = $db->prepare( $sql );

				$stmt->bindParam( ':nome', $nome );
				$stmt->bindParam( ':sobrenome', $sobrenome );
				$stmt->bindParam( ':endereco', $endereco );
				$stmt->bindParam( ':numero', $numero, \PDO::PARAM_INT );
				$stmt->bindParam( ':cidade', $cidade );
				$stmt->bindParam( ':estado', $estado );
				$stmt->bindParam( ':cep', $cep, \PDO::PARAM_INT );
				$stmt->bindParam( ':created_at', $data );
				$stmt->bindParam( ':updated_at', $data );


				// colocar verificação de erro aqui 
				$stmt->execute();
    		}

    		//else com erros aqui
			


		} // fim store()


	

		public static function delete() 
		{

			$postdata = file_get_contents("php://input");

			if(isset($postdata) && !empty($postdata))
			{				
				$request = json_decode($postdata);
				$db = new \DB;

				$sql = " DELETE 
						 FROM pessoa 
						 WHERE id = :id ";

				$stmt = $db->prepare( $sql );

				$stmt->bindParam( ':id', $request->idPessoa);

			// colocar verificação de erro aqui 
				$stmt->execute();
			}

			// else com erros
		} //fim delete()

		public static function edit()
		{

			$postdata = file_get_contents("php://input");

			if(isset($postdata) && !empty($postdata))
			{				
				$request = json_decode($postdata);

				$id = $request->idPessoa;
				$nome = $request->nome ;
				$sobrenome = $request->sobrenome;
				$endereco = $request->endereco;
				$numero = $request->numero; 
				$cidade = $request->cidade;
				$estado = $request->estado;
				$cep = $request->cep; 
				$data = date( 'Y-m-d H:i:s' );

				echo $data;

				$db = new \DB;

				$sql = " UPDATE pessoa 
						 SET nome = :nome,
						 sobrenome = :sobrenome,
						 endereco = :endereco,
						 numero = :numero,
						 cidade = :cidade,
						 estado = :estado,
						 cep = :cep,
						 updated_at = :updated_at
						 WHERE id = :id ";

				$stmt = $db->prepare( $sql );

				$stmt->bindParam( ':id', $id, \PDO::PARAM_INT);
				$stmt->bindParam( ':nome', $nome );
				$stmt->bindParam( ':sobrenome', $sobrenome );
				$stmt->bindParam( ':endereco', $endereco );
				$stmt->bindParam( ':numero', $numero, \PDO::PARAM_INT );
				$stmt->bindParam( ':cidade', $cidade );
				$stmt->bindParam( ':estado', $estado );
				$stmt->bindParam( ':cep', $cep, \PDO::PARAM_INT );
				$stmt->bindParam( ':updated_at', $data );
			// colocar verificação de erro aqui 
				$stmt->execute();
			}	


		} //fim edit()
	}	

 ?>