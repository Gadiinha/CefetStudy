<?php
    // Obtendo os valores enviados pelo formulário
    $username = $_POST['email_login'];
    $password = $_POST['senha_login'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
     body{
        background-image: url('https://images.tcdn.com.br/img/img_prod/1102995/papel_de_parede_bichinhos_do_jardim_193_1_6a5934dfbc3a720cfd7b71ed3c060892.jpg');
      }
    </style>
  </head>
  <body>

       <!--FORMULÁRIO DE LOGIN-->
    <div id="login" class="formulario">
      <form method="post" action="login.php"> 
         <h1 style="text-align: center">Login</h1> <br><br>
          <label for="email_login">E-mail</label><br>
          <input id="email_login" name="email_login" required="required" type="text" placeholder="user@gmail.com"/><br>
          
          <label for="senha_login">Senha</label><br>
          <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234"/>

          <h5 style="text-align: center">Esqueceu <a href="#">Senha?</a></h5>
          
          <div style="text-align: center">
            <input type="submit" value="Logar" class="button" /><a href="Rafael.html"></a>
            <br><br><br>

            
            <h4 style="text-align: right;">Ainda não tem conta? <a href="Cadastro.html">Cadastre-se</a></h4>
        </div>
      
      <?php
        if(isset($username) && isset($password)){
              // Verificando os dados do login
          if ($username === 'soaresemily003@gmail.com' && $password === '0609') {
              echo "Login bem-sucedido!"; // ou redirecionar para uma página após o login
              //header("location: Frame.html ");
              exit;
          } else {
              echo "Login inválido, nome de usuário ou senha incorreto.";
          }
        }
      ?>
 </form>
    </div>
  </body>
</html>