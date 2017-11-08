 /**
*  Module
*
* Description
*/
var app = angular.module('meuApp', []);


app.controller('meuCtrl', function($scope,$http){



	$scope.listarPessoas = function() { 
		

		$scope.salvar= false;
		$scope.inserir = true;

		$scope.nome = " Franciele ";
		$scope.sobrenome = "Ligmanowski";
		$scope.endereco = " Rua das Flores ";
		$scope.numero = 56;
		$scope.cidade = " Curitiba ";
		$scope.estado = " Paraná ";
		$scope.cep =  81000000 ;
		
		$http.get('pessoas')
		.then(function(response) {

			$scope.pessoas = response.data; 



	// }, function (response) { // se tiver erro aparece no console do Chrome, Safari ... 
		
	// 	console.log(response.data,response.status);
	
		});
	};

	$scope.adicionarPessoa = function() {

		$http({

			method: 'POST',
			url: 'adicionar-pessoa',
			data: {
				nome: $scope.nome,
				sobrenome: $scope.sobrenome,
				endereco: $scope.endereco,
				numero: $scope.numero,
				cidade: $scope.cidade,
				estado: $scope.estado,
				cep: $scope.cep

			}

		}).then( function(response) {
			$scope.listarPessoas();
		});



	};


	$scope.apagarPessoa = function( id ) {
		
		$http({

			method: 'POST',
			url: 'apagar-pessoa',
			data: {
				idPessoa: id
			}
		}).then( function(response) {
			$scope.listarPessoas();
		});

	};


	$scope.editarPessoa = function(pessoa) {
		$scope.salvar= true;
		$scope.inserir = false;
		$scope.nome = pessoa.nome;
		$scope.sobrenome = pessoa.sobrenome;
		$scope.endereco =  pessoa.endereco;
		$scope.numero = parseInt(pessoa.numero);
		$scope.cidade = pessoa.cidade;
		$scope.estado = pessoa.estado;
		$scope.cep =  parseInt(pessoa.cep) ;
		$scope.id = parseInt(pessoa.id);

	};

	$scope.salvarPessoa = function() {


		console.log(typeof($scope.id));

		$http({

			method: 'POST',
			url: 'salvar-pessoa',
			data: {
				nome: $scope.nome,
				sobrenome: $scope.sobrenome,
				endereco: $scope.endereco,
				numero: $scope.numero,
				cidade: $scope.cidade,
				estado: $scope.estado,
				cep: $scope.cep,
				idPessoa: $scope.id

			}

		}).then( function(response) {
			$scope.listarPessoas();
		});
	};


	$scope.listarPessoas();

});