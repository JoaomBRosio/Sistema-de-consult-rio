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
        <title>Excluir</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    </head>
    <body>
        <div class="container" style="padding: 30px; box-shadow: 0 1px 2px; margin-top: 10px">
            <legend>Cancelar Consultas</legend>
                <form class="formulario"  action="../Controller/controller_excluir.php" method="POST">
        <div class="col-md-11">
                <label for="nome_paciente">Nome do paciente:</label>
                        <input type="text" id="trecho" name="nome_paciente"  class="form-control" placeholder="Digite o nome do paciente para cancelar a consulta*"><br>
                        <input type="submit" value="Cancelar Consulta"  class="btn btn-danger" name="acao">
                </form><br><br>
                <form  class="formulario" action="frm_funcionario_acesso.php">
                     <input type="submit"  class="btn btn-primary" value="Voltar">
                </form>
        </div></div>
</body>
</html>

<?php }	