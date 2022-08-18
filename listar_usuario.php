<h1> Listar usuário</h1>

<?php 
    $sql = "SELECT * FROM fabricante";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        while($row = $res->fetch_object()){
            
            print "<tr"; 
            print $row-id;
            print $row->nome;
            print $row->fabricante;
        }
    }else{
      
    }
         
    












    ?>