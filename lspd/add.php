<?php

include( "config.php" );

if(isset($_POST['forminscription'])) {
   $usuario = htmlspecialchars($_POST['usuario']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $pass = sha1($_POST['pass']);
   $pass2 = sha1($_POST['pass2']);
   if(!empty($_POST['usuario']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['pass']) AND !empty($_POST['pass2'])) {
      $usuariolength = strlen($usuario);
      if($usuariolength <= 32) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM miembros WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($pass == $pass2) {
                     $insertmbr = $bdd->prepare("INSERT INTO miembros(usuario, mail, pass) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($usuario, $mail, $pass));
                     $error = "Cuenta creada, <a href=\"login.php\">Inicia sesión</a>";
                  } else {
                     $error = "Las contraseñas no coinciden!";
                  }
               } else {
                  $error = "Email ya en uso!";
               }
            } else {
               $error = "Email inválido!";
            }
         } else {
            $error = "Las contraseñas no concuerdan!";
         }
      } else {
         $error = "32 carácteres solo en el usuario porfavor!";
      }
   } else {
      $error = "Rellena todo, cateto!";
   }
}
?>
<html>
   <head>
      <title>TrueLife Module</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>REGISTRO</h2>
         <br /><br />
		 <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="usuario">USUARIO:</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Usuario" id="usuario" name="usuario" value="<?php if(isset($usuario)) { echo $usuario; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">EMAIL:</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Email" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">CONFIRMAR MAIL:</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmar Mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="pass">CONTRASEÑA:</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Contraseña" id="pass" name="pass" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="pass2">CONFIRMAR CONTRASEÑA:</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmar contraseña" id="pass2" name="pass2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="CONFIRMAR REGISTRO" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($error)) {
            echo '<font color="red">'.$error."</font>";
         }
         ?>
      </div>
   </body>
</html>
