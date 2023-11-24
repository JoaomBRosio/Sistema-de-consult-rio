
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
    <title>Banco das consultas cadastradas</title>
     <meta charset="UTF-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
        <body>
            <div class="container" style="padding: 30px; box-shadow: 0 1px 2px; margin-top: 10px">
            <div class="col-md-11">
            <legend><h3>Consultas</h3></legend>
				   
            <?php 
            include_once("../Model/conexao.php");
            
            $conn= conectar();  
            

          $consulta = "SELECT * FROM consulta ORDER BY nome_do_paciente";
            
          $resultado_consulta = mysqli_query($conn, $consulta);
                
          while($row_consulta = mysqli_fetch_assoc($resultado_consulta)):
          
        ?>
            <table celpadding='1'>
            <tr>
            <th>Nome do paciente:</th>
            <td><?php echo $row_consulta['nome_do_paciente'];?></td>
          </tr>

            <tr>
            <th>Data e Horário:</th>
            <td><?php echo  $row_consulta['data_horario'];?></td>
          </tr>

            <tr>
            <th>Endereço:</th>
            <td> <?php echo $row_consulta['endereco'];?></td>
            </tr>

            <tr>
            <th>Telefone:</th>
              <td><?php echo $row_consulta['telefone'];?></td></tr>  
            </table>

            <hr><hr>  
            <?php endwhile;?>
            
            <br> 
              <form  class="formulario" action="../View/frm_funcionario_acesso.php">
              <input type="submit" class="btn btn-primary" value="Voltar">
              </form>
      </div>
  </div>
</body>
</html>
<?php }	