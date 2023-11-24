<?php

if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   
 
 
 $nome_do_paciente= $_POST["nome_paciente"];
 $data_horario = $_POST["data_horario"];
 $endereco= $_POST['endereco'];
 $telefone= $_POST['telefone'];

$cadastrar = new crud();

$cadastrar->cadastrar_consulta($nome_do_paciente,$data_horario,$endereco,$telefone); 
 
 
}