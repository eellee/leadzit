<?php
$title = "frontpage";
include_once('inc/header.php');
?>

<!-- INTRO SECTION -->
    <section id="intro" class="intro-section">
        <div class="row">
            <div class="col-sm-8  col-md-6">
                <h1 class="intro-text">Lead Generation made <span class="wodry"> affordable|simple|predictable</span>
                <br>
                    <button type="button" class="btn btn-default btn-lg"><a href="register_page.php">GET STARTED</a>
                    </button></h1>
                </div>
                <div class="col-sm-8 col-md-6" id="intro-image">
                    <img src ="img/macbook.png" class="img-responsive">
                </div>
            </div>
    </section>

    <!-- ARROW NEW ELEMENT -->

    <div class="row justify-content-md-left">
        <div class="col col-lg-2">
            <a href="#features">
                <div class="arrow bounce"><i class="fa fa-chevron-circle-down" aria-hidden="true" href="features"></i></div>
            </a>
        </div>
    </div>


<!-- FEATURES -->
<section id="features" class="features-section">
    <div class="contact-heading">
        <h1 class="title-one">Features</h1>
        <hr></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="about-item scrollpoint sp-effect2 active animated fadeInUp">
                    <i class="fa fa-download fa-2x" ></i>
                    <h3>Lead Generation</h3>
                    <p>Build lists of contacts focused on your needs and on your sales strategy. Research for leads at anytime at anywhere. Edit your campaigns and empower you business network.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="about-item scrollpoint active animated fadeInUp">
                    <i class="fa fa-tachometer fa-2x" aria-hidden="true" ></i>
                    <h3>Analytics</h3>
                    <p>Check the status of your lead qualification. The goals on a weekly, monthly or yearly basis keeping up with how many contacts converted into business. Check your statuses or your team statuses.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="about-item scrollpoint active animated fadeInUp">
                    <i class="fa fa-calendar fa-2x"></i>
                    <h3>Campaign Overview</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="about-item scrollpoint active animated fadeInUp">
                    <i class="fa fa-users fa-2x"></i>
                    <h3>Fast Communication</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--DEMO-->
<section id="demo" class="demo-section">
    <div class="container">
            <h1>Demo</h1>
            <hr>
            <div class="center">
                <div class="container">
                    <div class="row">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/dhd1kKHR6jc" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</section>


<!-- CONTACT SECTION -->

    <!-- CONTACT SECTION -->
    <section id="contact" class="contact-section">
        <h1>Contact Us</h1>
        <hr>
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6">
                    <h3> Improve your lead generation</h3>
                    <h3> Get qualified prospects </h3>
                    <h3> Automate your Marketing </h3>
                    <h3> Increase Sales </h3>
                    <h3><button type="button" class="btn btn-default btn-lg"><a href="register_page.php">GET STARTED</a>
                    </button></h3>
                </div>
                <div class="col-sm-6">
                    <div id="contact-form-section">
                        <form action="mailto:elia3111@stud.kea.dk" method="post" enctype="text/plain">
                            First Name:<br>
                            <input type="text" name="name"><br>
                            Last Name:<br>
                            <input type="text" name="name"><br>
                            E-mail:<br>
                            <input type="email" name="name"><br>
                            Telephone:<br>
                            <input type="number" name="name"><br>Message<br>
                            <input type="text" name="message"<br><br>
                            <input type="submit" value="Send">
                            <input type="reset" value="Reset">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
include_once('inc/footer.php');
?>