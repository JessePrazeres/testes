<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="
    stylesheet">
    
    <h1> Fabricante e Categoria</h1>
<form action="?page=salvar" method="POST">
    
    <div class="mb-3">
        <label>FABRICANTE</label>
        <input type="text" name="nome" class="
        form control">
</div>
    <div class="mb-3">
        <label>CATEGORIA</label>
         <input type="text" name="categoria" class= 
        "form-control">
        <input type="text" name="categoria" class= 
        "form-control">
        <input type="text" name="categoria" class= 
        "form-control">
</div>


<div class="mb-3">
    <button type="submit" class="btn
    btn-primary">Adicionar</button>
</div>
</form> 

<h1> PRODUTOS</h1>
<form action="?page=salvar" method="POST">
    
    <div class="mb-3">
        <label>NOME DO PRODUTO </label>
        <input type="text" name="nome" class="
        form control">
</div>
    <div class="mb-3">
        <label>FABRICANTE</label>
         <input type="text" name="categoria" class= 
        "form-control">
       
</div>
<div class="mb-3">
        <label>CATEGORIA</label>
         <input type="text" name="categoria" class= 
        "form-control">
</div>
       

<div class="mb-3">
        <label>PREÇO</label>
         <input type="text" name="categoria" class= 
        "form-control">
       
</div>
<button type="submit" class="btn
    btn-primary">Adicionar</button>



    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Categoria</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nescau</td>
      <td>Nestle</td>
      <td>Achocolatado</td>
      <td>R$ 04,00</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Nescau</td>
      <td>Nestle</td>
      <td>Achocolatado</td>
      <td>R$ 04,00</td> 
    </tr>
    
    <tr>
    <th scope="row">1</th>
      <td>Nescau</td>
      <td>Nestle</td>
      <td>Achocolatado</td>
      <td>R$ 04,00</td>
    </tr>

    <tr>
    <th scope="row">1</th>
      <td>Nescau</td>
      <td>Nestle</td>
      <td>Achocolatado</td>
      <td>R$ 04,00</td>

    </tr>
  </tbody>
</table>
  
</div>

<div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
            switch(@$_REQUEST["page"]){
                        case "listar":
                include("listar_usuario.php");
                break;
                case "salvar":
                    include("salvar_usuario.php");
                break;    
                default:
                print "-";
            }
                ?>  
    
       </div>
     </div>
   </div>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>