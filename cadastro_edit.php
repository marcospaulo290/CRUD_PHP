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

  include "conexao.php";

  $id = $_GET['id'] ?? '';
  $sql = "SELECT * FROM cadastro WHERE cod_pessoa = $id";

  $dados = mysqli_query($conn, $sql);

  $linha = mysqli_fetch_assoc($dados); 

  ?>


    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Alterando cadastro</h1>
          <form action="updateCadastro.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Digite seu nome</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                name="nome"
                required value = "<?php echo $linha['nome']; ?>"
              />
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Digite seu sobrenome</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                name="sobrenome" value = "<?php echo $linha['sobrenome']; ?>"
              />
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Digite seu e-mail</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                name="email" value = "<?php echo $linha['email']; ?>"
              />
              <div id="emailHelp" class="form-text"></div>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Senha</label
              >
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                name="senha" value = "<?php echo $linha['senha']; ?>"
              />
            </div>

            <button type="submit" class="btn btn-primary">Salvar alterações</button>
            <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'];?>">
            <a class="btn btn-primary " href="pesquisa.php" role="button">Voltar</a>
            
          </form>
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