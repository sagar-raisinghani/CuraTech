<?php 
include('../connect.php');
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../index.php");
}
$user=$_SESSION['username'];
 ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CuraTech</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="../assets/css/style-projects.css">
        

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    </head>


    <body>
<?php 
include('../sosf.php');
 ?>
 <a href="../messaging/message.php"><img src="../chat.png" style="float: right; z-index: 20; position: fixed; bottom: 75px; right: 30px; width: 7%;"></a>
        <!-- Header -->
        <div style="margin: 0px; width: 100px;"><?php include('../language_support.php');?></div>
        <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
            <div class="container">
        
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand animated fadeInDownBig" href="index.php"><img src="../assets/img/slider/Office.png" width="100" alt="Office"></a>      
                </div>
        
                <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="blog.php">Blog</a>
                        </li>
                        <li>
                            <a href="newsfeed.php">Consult a Doctor</a>
                        </li>
                        <li>
                        <a href="indexsearch.php">Search Medicine</a>
                    </li>
                        <li class="active">
                            <a href="contact.php"><span>Contact</span></a>
                        </li>
                        <li>
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user; ?></a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding: 10px; line-height: 45px;">
                            <a class="dropdown-item" href="../profile.php?user=<?php echo $user; ?>">View Profile</a><br>
                            <a class="dropdown-item" href="reports.php">Report upload</a><br>
                            <a class="dropdown-item" href="../logout.php">Log Out</a>
                          </div>
                    </li>
                    </ul>         
                </div>
            </div>
        </nav>

        <!--End Header -->


        <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                <div>
                    <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4167133364986!2d72.88674071488664!3d19.045407487105464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8addc79943b%3A0x9844a97325ad7a4f!2sVivekanand+Education+Society&#39;s+Institute+Of+Technology!5e0!3m2!1sen!2sin!4v1519141785033"></iframe>
                    <br />
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <h4>Find us at:</h4>
                    <p class="block-author"> CuraTech</p>
                    <p>495/497, Collector Colony, Chembur East, Mumbai, Maharashtra 400074</p>
                    <p>Phone: +91-8411011058 / +91-8149459354</p>
                    <em class="block-author">Email: hello@curatech.org</em> <br>
                    <br>
                    <p class="lead">Social Link</p><hr>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#"><img src="../assets/img/social-icons/btn_skype.png" alt="Skype"></a>
                        Call us
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#"><img src="../assets/img/social-icons/btn_facebook.png" alt="Facebook"></a>
                        Like us
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                        <a href="#"><img src="../assets/img/social-icons/btn_twitter.png" alt="Twitter"></a>
                        Follow us
                    </div>
                    <br>
                </div>
                <div class="col-lg-5">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>
            
                        <form action="http://templates.designorbital.com/baleen/contact.php" method="post" id="contact-form">
                            <fieldset>
                                <div class="form-group form-group-fullname">
                                    <label class="control-label" for="fullname">NAME *</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">E-MAIL *</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail">
                                </div>
                                <div class="form-group form-group-message">
                                    <label class="control-label" for="message">MESSAGE *</label>
                                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                </div>           
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->


    <!-- Footer -->
    <footer> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i> Contact:</h3>
                    <p class="footer-contact">
                        495/497, Collector Colony, Chembur East, Mumbai, Maharashtra 400074<br>
                        Phone: +91-8411011058 / +91-8149459354<br>
                        Email: hello@curatech.org<br>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-external-link"></i> Links</h3>
                    <p> <a href="about.php"> About ( Who we are )</a></p>
                    <p> <a href="blog.php"> Blog</a></p>
                    <p> <a href="newsfeed.php"> Consult a Doctor ( How do you feel )</a></p>
                    <p> <a href="indexsearch.php"> Search Medicine ( Find a generic )</a></p>
                    <p> <a href="contact.php"> Contact ( Feel free to contact )</a></p> 
                </div>
                 
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <p>&copy; Copyright 2018, <a href="#">CuraTech</a></p>
    </div>


    
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

  </body>
</html>
