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
					<form action="frm_funcionario_acesso.php">
					<input type="submit" name= "Consultas" class="btn btn-primary" value="Consultas"><br>
						</form>
						<form action="sair.php">
						<input type="submit" value="Deslogar"  class="btn btn-danger" name="Deslogar">
						</form>
				</div>
			</div>
		</body>
	</html>
<?php }?>	