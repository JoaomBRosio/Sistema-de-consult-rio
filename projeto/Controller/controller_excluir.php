<?php  
      
if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   

$nome_do_paciente= $_POST['nome_paciente'];


$excluir = new crud();

$excluir->excluir_consulta($nome_do_paciente);
}      
   