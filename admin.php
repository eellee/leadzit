<?php

include_once('inc/header.php');
include_once('inc/db.php');

if(isset($_SESSION['email'])){
  $email = $_SESSION['email']

?>

<section class="adminCover">
    <div class="container">
        <h1>Welcome back!</h1>
        <h2>You're logged in</h2>
    </div>
</section>

<?php

  }else{
    header('Location: login_page.php?rejected');
  }
  include_once("inc/footer.php");

?>
