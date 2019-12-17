<?php
session_start();

include( "config.php" );

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM miembros WHERE mail = ? AND pass = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['usuario'] = $userinfo['usuario'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Email o contraseña incorrectos!";
      }
   } else {
      $erreur = "Todos los campos deben de ser rellenados!";
   }
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>LSPD ~ Inicio de Sesión</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body class="align">

  <div class="grid">

<form method="POST" action="" class="form login">

      <header class="login__header">
      <img src="assets/img/lspdlogo.png">
      <br></br>
        <h3 class="login__title">SISTEMA DE GESTIÓN <br> · LSPD ·</h3> 
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="email" name ="mailconnect" placeholder="Correo Electrónico">
        </div>

        <div class="form__field">
          <input type="password" name="mdpconnect" placeholder="Contraseña">
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="INICIAR SESIÓN" name="formconnexion">

        <p><span class="icon icon--info">?</span><a href="https://truelife.es">TRUELIFE LTD.</a></p>
      </footer>

    </form>
<?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
  </div>

</body>
  
  
</body>
</html>
