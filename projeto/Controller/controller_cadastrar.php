<?php

if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha = md5($_POST['senha']);

$inserir = new crud();

$inserir->inserir_Usuario($email,$senha,$nome);
       

}