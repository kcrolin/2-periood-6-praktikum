<?php
require('validation.php');
?>

<!DOCTYPE HTML>
<html>
  <head>
  <title>Praktikum 6 ja 7</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  </head>
  
  <body>

  <div class="content">
<?php
  if ($isSubmitted) {
    echo '<div class="form-message">' . $usernameMessage . '</div>';
  }
?>
<p>
<form name="login" action="index.php" method="post">
<span>Kasutajanimi:</span> <input type="text" name="username"><br>
<span>Email:</span> <input type="text" name="email"><?php
  if ($isSubmitted) {
    echo '<div class="form-message">' . $emailMessage . '</div>';
  }
?><br>
<span>Salasõna:</span> <input type="password" class="passw" name="password"></br>
<span>Kes sa oled?</span> <input type="text" name="group"><?php
  if ($isSubmitted) {
    echo '<div class="form-error-age">' . $groupMessage .'</div>';
  }
?><br>
<span>Vanus:</span> <input type="text" name="age"><?php
  if ($isSubmitted) {
    echo '<div class="form-error-age">' . $ageMessage .'</div>';
  }
?><br>
<input type="submit" name="submit">
</form> 
</div>
   </body>
</html>
