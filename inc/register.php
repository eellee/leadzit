<?php
  session_start();

  include_once('db.php');

  if(isset($_POST['firstname'])){
    require_once('db.php');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $industry = $_POST['industry'];
    $company = $_POST['company'];
    $role = $_POST['role'];
    $size = $_POST['size'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO signin
    (firstname, lastname, country, industry, company, role, size, email, password)
    VALUES
    ('$firstname','$lastname', '$country', '$industry', '$company', '$role', '$size', '$email', '$pwd')";

    $result = $db->query($sql);

    if($result){
      header('Location: ../login_page.php?registered');
    }else{
      header('Location: ../register_page.php?fail');
    }
  }else{
    header('Location: ../admin.php');
  }

?>
