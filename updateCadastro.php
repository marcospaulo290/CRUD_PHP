<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  <div class="container">
      <div class="row">
        <div class="col">
        <?php 
        
        include "conexao.php";
         
         $id= $_POST['id'];
         $nome = $_POST['nome'];
         $sobrenome = $_POST['sobrenome'];
         $email= $_POST['email'];
         $senha= $_POST['senha'];
        
        $sql = "UPDATE `cadastro` set `nome` ='$nome', `sobrenome` ='$sobrenome', `email`='$email', `senha`='$senha' WHERE cod_pessoa = $id ";


        if(mysqli_query($conn, $sql)):
          mensagem("$nome alterado com sucesso!", 'success');
        
        else:
          mensagem("$nome não alterado!", 'danger');
        endif;


        ?>
        <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>