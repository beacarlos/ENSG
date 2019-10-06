   <?php
session_start();
include ("conexão.php");
if (isset($_POST['email']) && empty($_POST['email']) == false) 
	if (isset($_POST['senha']) && empty($_POST['senha']) == false) {
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

	

		try {
			
			$db = new conexao();

			if(isset($db)){
				echo "conexão";
			}

			$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email'");


		if ($db->contador() > 0) {
			$dado = $db->getRetorno();

			$senhaCompare = $dado['senha'];	
			$emailCompare = $dado['email'];
											
			if($senhaCompare != $senha){
					header("location: ../index.html");

			}

			//recepção de dados 

			if($emailCompare == $email && $senhaCompare === $senha){
				$_SESSION['id'] = $dado['id'];
				$_SESSION['email'] = $emailCompare;
				header("Location: ../user/main.php");
				$log = "Logou".getMessage();
			//método de comparaçãop de dados
			}
		}
			else{
				header("location: ../index.html");
				echo "Erro de Conexão".$e.getMessage();
			
		}

			
	} 	catch (PDOException $e) {
				header("location: ../index.html");
				echo "Erro de Conexão".$e.getMessage();
		}


}else{
	header("Location: ../index.html");
}
	

else{
	header("Location: ../index.html");
	$erro = "Você não Entrou Com Todos os Dados!".getMessage();
}

?>
