var app = angular.module('app', []);

// Controller principal
app.controller('MyCtrl', function($scope, $http){

	$scope.pesquisar = function(pesquisa){

		// Se a pesquisa for vazia
		if (pesquisa == ""){

			// Retira o autocomplete
			$scope.completing = false;

		}else{

			// Pesquisa no banco via AJAX
			//$http.post('alunoListaws.php', { "data" : pesquisa}).
			$http.post('alunoListaws.php', { "data" : pesquisa}).
	        success(function(data) {

				// Coloca o autocomplemento
				$scope.completing = true;	

				// JSON retornado do banco
				$scope.dicas = data;     
	        })
	        .
	        error(function(data) {
				// Se deu algum erro, mostro no log do console
				console.log("Ocorreu um erro no banco de dados ao trazer auto-ajuda da home");
	        });		
		}
	};
  
  $scope.incluir = function(aluno, idMateria){
    if (aluno == ''){
      alert('O nome deve ser preenchido');
    }else{
      
			$http.post('../controller/aluno_controller.php', { "nome" : aluno, "idMateria" : idMateria}).
	        success(function(data) {
          $scope.nome = '';
					$scope.idMateria = '';
          //alert('ok');
      }).error(function(data){
          alert('Erro ao incluir o aluno: ' + data);
      });
    }
  };
});