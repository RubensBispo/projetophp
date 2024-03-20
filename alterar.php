<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM pessoa WHERE id = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);
	}
?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Pessoa</h3>
			
			<form action="php_action/alterar_pessoa.php" method="POST">

				<input type="hidden" name = "id" value="<?php echo $dados['id']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>"
					>
					<label for="sobrenome">Sobrenome</label>
				</div>
				<!--
				<div class="input-field col s12">
					<input type="text" name="email" id="email" value="<//?php echo $dados['emailCli']; ?>">
					<label for="email">E-mail</label>
				</div>
				-->
				<div class="input-field col s12">
					<input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
					<label for="idade">Idade</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de pessoas</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>