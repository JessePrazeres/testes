<?php 
    $dbHost = 'Localhost';
    $dbUsername= 'root';
    $dbPassword = '';
    $dbName = 'fabricante';

    $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conn->connect_error){
        echo "erro";
    }else{
        echo "Conexão efetuada com sucesso";
    }
    
    
    
    
    
    
    
    ?>