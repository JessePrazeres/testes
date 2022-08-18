<?php
 switch(@$_REQUEST["açao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $fabricante = $_POST["fabricante"];
        $categoria = $_POST["categoria"];
        $preço = $_POST["preço"];

        $sql = "INSERT INTO fabricante (nome, fabricante, categoria, preco) VALUES(
            '{$nome}', '{$fabricante}', '{$categoria}', '{$preço}')";

            $res = $conn->query($sql);

            if($res==true){
                 print "<script>alert('Cadastrado com sucesso');</script>";
                 print "<script>locaion.href='?page=listar';</script";
            }else{
                print"<script>
                alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
          
    case 'editar':
        // code...
        break;

    case 'excluir':
        // code...
        break;    

 }
 ?>