<?php
    // Obtendo os valores enviados pelo formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
  <div class="formulario">
      <form method="post" action="cadastro.php">

        <h1 style="text-align: center">Cadastro</h1>
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required="required" placeholder="Nome Sobrenome">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required="required" placeholder="contato@gmail.com">

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required="required" placeholder="123456">
        
        <input type="checkbox" id="aceitarTermos"> Eu li e aceito os termos e condições. <br><br>
        <div style="text-align: center"><input type="submit" value="Cadastrar" class="button"><br></div><br>
        <h4 style="text-align: right;">Eu já tenho <a href="Login.html">Conta</a></h4>
      
      <?php
        if(isset($nome) && isset($email) && isset($password)){
          echo "Cadastro bem-sucedido!"; // Verificando os dados do cadastro
        } else {
          echo "Cadastro inválido. Tente novamente.";
        }
      ?>
      </form><br><br><br>
    </div>
  </body>
</html>
