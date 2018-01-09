<?php

  ini_set('error_reporting', 2047);
  ini_set('display_errors', 1);

  include_once('db.php');
  session_start();


  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $sql = "select * from signin where email = '$email' and password = '$pwd'";
    $result = $db->query($sql);
    $row = $result->fetchObject();

    if($row){
      $_SESSION['userid'] = $row->userid;
      $_SESSION['firstname'] = $row->firstname;
      $_SESSION['lastname'] = $row->lastname;
      $_SESSION['email'] = $row->email;
      $firstname = $_SESSION['firstname'];

      header('Location: ../index.php');

    }else{
      header('Location: ../login_page.php?rejected');
    }
  }

?>
