
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
<title>Consultar os conectados</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="padding: 30px; box-shadow: 0 1px 2px; margin-top: 10px">
<div class="col-md-11">
<h1> Funcionários Conectados</h1><br>

  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

     $conectados = "SELECT COUNT(email) AS email FROM logar";
    
	$resultado_conectados = mysqli_query($conn, $conectados);
        
	while($row_conectados = mysqli_fetch_assoc($resultado_conectados)){ 
	
 ?>
  <table>
  <tr>
  <th> Número de funcionários: </th>
  <td><?php echo $row_conectados['email'];?></td>
  </tr>
  </table>
  <hr></hr>
  <?php }?>




  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  
    

  $conectados = "SELECT * FROM logar GROUP BY email";
    
	$resultado_conectados = mysqli_query($conn, $conectados);
        
	while($row_conectados = mysqli_fetch_assoc($resultado_conectados)){ 
	
 ?>
  <table>
  <tr>
  <th>Funcionários: </th>
  <td><?php echo $row_conectados['nome'];?></td>
  </tr>
  </table>
  
  <?php }?>

<br>
<form  class="formulario" action="../View/frm_funcionario_acesso.php">
              <input type="submit" class="btn btn-primary" value="Voltar">
              </form>
</div>
</div>
</body>
</html>
    <?php }	