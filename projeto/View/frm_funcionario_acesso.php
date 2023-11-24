<?php
session_start();
           
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>
	<html>
		<head>
		<title>Perfil Funcionário </title>
 		<meta charset="UTF-8">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		</head>
			<body>
				<div class="container" style="padding: 30px; box-shadow: 0 1px 2px; margin-top: 10px">
				<div class="col-md-6"> 
					<fieldset>
						<legend>Sistema de Consultas</legend>
							<form  class="formulario" action="frm_cadastro_paciente.php">
							<input type="submit" value="Cadastrar Consulta" class="btn btn-link"name="cadastrar_consulta">
							</form>

							<form  class="formulario" action="frm_alterar.php">
							<input type="submit" value="Alterar Consulta" class="btn btn-link"  name="alterar_consulta">
							</form>

							<form  class="formulario" action="../Controller/controller_acessar_consultas.php">
							<input type="submit" value="Consultas Cadastradas" class="btn btn-link" name="alterar_consulta">
							</form>

							<form  class="formulario" action="frm_excluir.php">
							<input type="submit" value="Cancelar Consultas" class="btn btn-link" name="alterar_consulta">
							</form>

							<form  class="formulario" action="../Controller/controller_consulta_conectados.php">
							<input type="submit" value="Funcionários" class="btn btn-link" name="alterar_consulta">
							</form>
							
							<hr></hr>
							<br><br>
							<form  class="formulario" action="sair.php">
							<input type="submit" value="Deslogar" class="btn btn-danger" name="deslogar">
							</form>
							<form  class="formulario" action="frm_perfil_usuario.php">
							<input type="submit" class="btn btn-primary" value="Voltar">
							</form>
						</div>
		</div>
</body>
</html>
<?php }?>	