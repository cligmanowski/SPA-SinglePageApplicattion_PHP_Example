<!DOCTYPE html>
<html lang="pt">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Teste Prático</title>


		<link href="<?php getBaseURL() ?>/css/style.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		
		
	</head>
	<body>

		<h1 text="center">Cadastro Simples de Pessoas</h1>

		<div ng-app="meuApp" ng-controller="meuCtrl">

			<form class="adicionar_pessoa"> 
		       
		        <h2>Pessoas</h2>
		        
		        <div>
		            <label> Nome: </label>
		            <input type="text" ng-model="nome" required>
		        </div>
		            
		        <div>
		            <label> Sobrenome: </label>
		            <input type="text" ng-model="sobrenome">
		        </div>

		        <div>
		            <label> Endereço: </label>
		            <input type="text" ng-model="endereco">
		        </div>

		        <div>
		        	<label> Número: </label>
		            <input type="number" ng-model="numero">
		        </div>

		        <div>
		            <label> Cidade: </label>
		            <input type="text" ng-model="cidade">
		        </div>

		        <div>
		            <label> Estado: </label>
		            <input type="text" ng-model="estado">
		        </div>

				<div>
		            <label> Cep: </label>
		            <input type="number" ng-model="cep" required>		
		        </div>
		    
		        <input type="button" value="Adicionar" ng-click="adicionarPessoa()" ng-if="inserir">
		        <input type="button" value="Salvar" ng-click="salvarPessoa()" ng-if="salvar">
		        
	    	</form>

			<br>

			<table>
				<thead>
					<tr>
						<th>Nome</th>
						<th>Sobrenome</th> 
						<th>Endereço</th> 
						<th>Número </th>
						<th>Cidade </th>
						<th>Estado </th>
						<th>CEP</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="pessoa in pessoas">
						<td> {{pessoa.nome}} </td>
						<td> {{pessoa.sobrenome}} </td>
						<td> {{pessoa.endereco}} </td>
						<td> {{pessoa.numero}} </td>
						<td> {{pessoa.cidade}} </td>
						<td> {{pessoa.estado}} </td>
						<td> {{pessoa.cep}} </td>
						<td> <input type="button" ng-click="editarPessoa(pessoa)" value="Editar Pessoa"</td>
						<td> <input type="button" ng-click="apagarPessoa(pessoa.id)" value="Remover Pessoa"> </td>

					</tr>
				</tbody>
			</table>
			
		</div>


		<script type="text/javascript" src="<?php getBaseURL() ?>/js/app.js"></script>


		
	</body>
</html>