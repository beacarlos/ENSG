<?php
session_start();
require "crud.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" >
		cpf:
		<input type="cpf" name="cpf">

		nome da equipe:
		<input type="nome" name="Nome_Equipe">

		modalidade:
		<input type="modalidade" name="modalidade">


		<input type="submit" name="enviar">
	</form>
</body>
</html>
<?php 
	$cpf = $_POST['cpf']; 


 $crud = new Usuario($_SESSION['id']);
 $consulta = $crud->validaCPF($cpf);

	
	if($consulta == true){

		$cpf = $crud->SetCpf($cpf);
    	$modalidade = $crud->SetModalidade($_POST['modalidade']);
		$idcap = $crud->SetIdCapitao($_SESSION['id']);
		$nomeEquipe = $crud->SetNome_Equipe($_POST['Nome_Equipe']);
		$pcpf = $crud->Getcpf();
		$cadastro = $crud->CadastroEquipe();


		echo $pcpf;

 		
 	}



?>

