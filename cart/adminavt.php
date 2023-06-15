<?php
$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'Vadim' && $pas == 1231321)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'adminpanel.php';
  } else {
$script = 'avtadministrator.php';
header("Location: $script");}
?>