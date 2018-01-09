<?php
  include_once('inc/header.php');
?>

<section class="register-section">
  <div class="container">
  <h2> Tell us about yourself </h2>
  <p> Lead Generation Assessment Form </p>
    <div class="row">
      <form class="form-horizontal loginForm" action="inc/register.php" method="post" enctype="multipart/form-data" id="registerForm">
        <div class="form-group">
          <label for="inputFirstname" class="col-sm-4 control-label">First name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputFirstname" placeholder="First name" name="firstname" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputLastname" class="col-sm-4 control-label">Last name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputLastname" placeholder="Last name" name="lastname" required>
          </div>
        </div>
        <div class="form-group">
            <label for="inputCompay" class="col-sm-4 control-label">Country</label>
               <div class="col-sm-8">
                   <input type="text" class="form-control" id="inputCountry" placeholder="Country" name="country" required>
               </div>
        </div>
        <div class="form-group">
            <label for="inputIndustry" class="col-sm-4 control-label">Industry</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCompany" placeholder="Industry" name="industry" required>
                </div>
         </div>
        <div class="form-group">
           <label for="inputCompany" class="col-sm-4 control-label">Company</label>
               <div class="col-sm-8">
                   <input type="text" class="form-control" id="inputCompany" placeholder="Company" name="company" required>
               </div>
        </div>
        <div class="form-group">
            <label for="inputRole" class="col-sm-4 control-label">Job Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputRole" placeholder="Role" name="role" required>
                </div>
        </div>
        <div class="form-group">
            <label for="inputSize" class="col-sm-4 control-label">Company Size</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputRole" placeholder="Size" name="size" required>
                </div>
        </div>
        <div class="form-group">
          <label for="inputEmail2" class="col-sm-4 control-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="inputEmail2" placeholder="Email" name="email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword2" class="col-sm-4 control-label" id="password-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-5">
            <div class="checkbox">
              <label>
                <input type="checkbox">Subscribe to our newsletter
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4">
            <button type="submit" class="btnHoverOrange btn btn-medium callToAction btn-md btn-block" name="button" id="registerButton">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include("inc/footer.php"); ?>