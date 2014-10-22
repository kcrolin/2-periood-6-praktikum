<?php $isSubmitted = isset($_POST["submit"]);
if ($isSubmitted){
$username = $_POST['username'];
$group = $_POST['group'];
$email = $_POST['email'];
(int)$age = $_POST["age"];}

if (isset($_POST["submit"])) {
$username = $_POST["username"];
(int)$age = $_POST["age"];
$group = $_POST['group'];
$email = $_POST['email'];
}

$toolid = array("tool", "tugitool", "ratastool", "pink", "taburet");

if (!isset($username) || $username ==""){
$usernameMessage = '<div class="form-error">Palun sisesta kasutajanimi!</div>';
} else {
$usernameMessage = '<div class="form-notice">Kasutajanimi sobis!</div>';}

  if (!isset($username) or $username == "" && $age === "") {
    $usernameMessage = '<div class="form-message form-error">Kasutajanime väli ei tohi olla tühi.</div>';
  } elseif (strlen($username) < 3 ) {
    $usernameMessage = '<div class="form-message form-error">Kasutajanimi peab olema vähemalt 3 tähemärki.</div>';
  } 
  elseif (strlen($username) < 10) { 
  $usernameMessage = '<div class="form-message form-notice">Kasutajanimi on väiksem kui 10 tähemärki</div>';
  } 
  elseif (strlen($username) > 20) { 
  $usernameMessage = '<div class="form-message form-notice">Kasutajanimi on suurem kui 20 tähemärki</div>';
  } 
  else {
    $usernameMessage = '<div class="form-message form-notice">Täname korrektselt sisesatud nime eest!</div>';
  }
  
   if (!isset($age) or $age == "") {
    $ageMessage = '<div class="form-message form-error-age">Ära unusta vanust!</div>';
  } elseif (is_numeric($age)) {
    $ageMessage = '<div class="form-message form-notice-age">Aitäh!</div>';
  } 
  else {
    $ageMessage = '<div class="form-message form-error-age">Väärtus peab olema numbriline!</div>';
  }
  
  if (!isset($group) or $group == "") {
    $groupMessage = '<div class="form-message form-error-age">Identifitseeri ennast!</div>';
  } elseif (in_array(strtolower($group), $toolid)) {
    $groupMessage = '<div class="form-message form-notice-age">Tere tulemast!</div>';
  } 
  else {
    $groupMessage = '<div class="form-message form-error-age">Siin on oodatud ainult toolid!</div>';
  }
  
   if (isset($email) && preg_match("/@/", $email)) {
    $emailMessage = '<div class="form-message form-notice-age">Sobib! Võtame ühendust!</div>';
  }
  else {
    $emailMessage = '<div class="form-message form-error-age">Sisesta enda email!</div>';
  }
?>
