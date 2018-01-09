<?php
  include_once('inc/header.php');
?>

<?php
  if (isset($_GET['rejected'])) {
    echo "<h3>Wrong email or password</h3>";
  }else if (isset($_GET['registered'])) {
    echo "
    <h2>Thank you! </h2>
    <h2>An Account manager will reach you under 48h to activate your account</h2>";

  }
?>

<section class="login-section">
  <div class="container">
    <div class="row">
      <form class="form-horizontal loginForm" action="inc/login.php" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label" id="password-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4">
            <div class="checkbox remember-me">
              <label>
                <input type="checkbox">Remember me
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4">
            <button type="submit" class="btnHoverOrange btn btn-medium callToAction btn-md btn-block" name="button" id="login-button">Log in</button>
          </div>
        </div>
        <div class="form-group" id="createAccount">
          <p class="col-sm-offset-3 col-sm-10"><span class="glyphicon glyphicon-user"></span>  <a href="register_page.php">Create an account</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include("inc/footer.php"); ?>
