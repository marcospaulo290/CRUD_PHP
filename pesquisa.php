<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    <title>CRUD</title>
  </head>
  <body>

  <?php
  if(isset($_POST['busca'])){
    $pesquisa = $_POST['busca'];
  }else{
    $pesquisa = '';
  }

  include "conexao.php";

  $sql = "SELECT * FROM cadastro WHERE nome LIKE '%$pesquisa%'";

  $dados = mysqli_query($conn,$sql);

  ?>





    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pesquisar</h1>
        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" action="pesquisa.php" method="POST" >
      <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>
    
  </div>
</nav>

<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($linha=mysqli_fetch_assoc($dados)){
      $codPessoa=$linha['cod_pessoa'];
      $nome = $linha['nome'];
      $sobrenome =$linha['sobrenome'];
      $email = $linha['email'];
      $senha = $linha['senha'];

      echo "<tr>
      
      <td>$nome</td>
      <td>$sobrenome</td>
      <td>$email</td>
      <td>$senha</td>
      <td>
      <a href='cadastro_edit.php?id=$codPessoa' class='btn btn-success btn-sm'>Editar</a>
      <a href '#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'>Excluir</a>
      </td>
      </tr>";
  };

?>
  
    
  </tbody>
</table>

<a class="btn btn-primary " href="index.php" role="button">Voltar</a>
    </div>
  </div>
</div> 

<div class="modal" tabindex="-1" id="confirma">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmação de exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="delete.php" method="POST">
        <p>Deseja realmente excluir?</p>
        <p id="nome_pessoa"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Sim</button>
</form>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>