<?php
session_start();

 $username = $_POST['username'];
 $password = $_POST['password'];
 
if(isset($_POST['log'])){
  if($username == "sven" && $password == "123456"){ // Edit admin here
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      header('Location: /inbox.php');
  }
  else{
      header('Location: /login-admin.php');
  }
}
?>
