<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-excluir'])) {
				
		$id = mysqli_escape_string($connection,$_POST['id']);

		$sql = "DELETE FROM pessoa WHERE id = '$id'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Excluir com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../index.php');	
		}
	}
