<?php


    function conectar(){
    $conn = mysqli_connect('localhost', 'root', '', 'hospital');
	if(!$conn){     
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    
}
