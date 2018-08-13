<?php
// Start the session
session_start();
?>
<?php

if ($_SERVER['HTTP_HOST'] == "loomis.com")
{
  $url = "https://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header("Location: $url");
} 

if ($_SERVER['HTTP_HOST'] == "http://loomislogistics.com/")
{
  $url = "https://www.loomislogistics.com";
  header("Location: $url");
}
?>

<?php if(isset($_POST['trackingid'])){
    $servername = "localhost";
$username = "flypadic_001";
$password = "An0therrichard3303";
$dbname = "flypadic_001";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    $trackingid = $_POST['trackingid'];
    
    $sql = "SELECT * FROM tracking WHERE trackingid = '$trackingid'";
$result = $conn->query($sql);
if ($result->num_rows == 0 ) {
       echo '<script>window.alert("Tracking ID Does Not Exist!");
</script> <script>window.location = 

"https://www.loomislogistics.com"</script>';
exit();
}else{
    $_SESSION["trackingid"] = "$trackingid";
      session_write_close();
    sleep(2);
 echo '
</script> <script>window.location = 

"https://www.loomislogistics.com/tracking.php"</script>';
exit();
    
}
   
    
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/index-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2017 15:53:40 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="images/apple-icon.png" rel="icon" type="image/png">
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Efinance Title -->
    <title>Loomis Logistics</title>

    <!-- css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<body>
    <div class="preloader"></div>
   <?php include('header.php'); ?>
    <!-- main slider start -->
    <section class="irs-main-slider irs-main-slider-two">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <span>We deliver to your door</span>
                        <h1>we will be at the door<strong> just relax.</strong></h1>
                        <a class="btn btn-default irs-big-btn" role="button" href="" data-toggle="modal" data-target="#myModal">Track</a>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <span>We handle heavy goods</span>
                        <h1>you can send it in if it is <strong>Heavy</strong></h1>
                      	<a  class="btn btn-default irs-big-btn" role="button" href="" data-toggle="modal" data-target="#myModal">Track</a>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <span>Do you need it fast?</span>
                        <h1>our cargo plane is ready to <strong>Deliver</strong></h1>
                        <a class="btn btn-default irs-big-btn" role="button" href="" data-toggle="modal" data-target="#myModal">Track</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main slider end -->

<div class="container">

 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 100px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Track online</h4>
        </div>
        <div class="modal-body">
        	<div align="center">
        	    <form action="" method="post">
          <input name="trackingid" placeholder="Tracking ID">
          <br>
          <button class="irs-log-reg">Submit</button>
          </form>
      	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

    <!-- Discription start -->
   <?php include('knowmore.php');?>
    <!-- Discription end  -->

    <!-- About start -->
   <?php include('whatwedo.php');?>
    <!-- Divider end -->

    <!-- courses start -->
    <section class="irs-courses-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>our <span>solutions</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>Loomis Logistics has brought in amazing solutions in good handling and delivery </p>
                    </div>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-md-4 col-sm-6">
                    <div class="irs-courses-col animated fadeInLeftShort slow delay-250">
                        <div class="irs-courses-img">
                            <img src="images/courses/1.jpg" alt="">
                            <div class="irs-time">
                                <p><a href="#">Quick delivery</a>
                                </p>
                            </div>
                            <div class="irs-courses-img-text">
                                <ul class="clearfix">
                                    <li>
                                        <p><i class="zmdi zmdi-calendar-alt"></i> Instant</p>
                                    </li>
                                    <li class="pull-right">
                                        <p><i class="zmdi zmdi-money"></i> xxxxx</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="irs-courses-content">
                            <h4><a href="course-single.html">Express delivery</a></h4>
                            <p>Your goods can be delivered with the fastest means of transportation available.</p>
                            <a class="btn btn-default irs-btn-transparent-two" href="course-single.html" role="button">Track</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="irs-courses-col animated fadeInUpShort slow delay-500">
                        <div class="irs-courses-img">
                            <img src="images/courses/2.jpg" alt="">
                            <div class="irs-time">
                                <p><a href="#">unsearched</a>
                                </p>
                            </div>
                            <div class="irs-courses-img-text">
                                <ul class="clearfix">
                                    <li>
                                        <p><i class="zmdi zmdi-calendar-alt"></i> Anytime</p>
                                    </li>
                                    <li class="pull-right">
                                        <p><i class="zmdi zmdi-money"></i> xxxx</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="irs-courses-content">
                            <h4><a href="course-single.html">Diplomatic delivery</a></h4>
                            <p>is your package classified?. we can handle your diplomatic deliveries.</p>
                            <a class="btn btn-default irs-btn-transparent-two" href="course-single.html" role="button">Track</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="irs-courses-col animated fadeInRightShort slow delay-250">
                        <div class="irs-courses-img">
                            <img src="images/courses/3.jpg" alt="">
                            <div class="irs-time">
                                <p><a href="#">Round the clock</a>
                                </p>
                            </div>
                            <div class="irs-courses-img-text">
                                <ul class="clearfix">
                                    <li>
                                        <p><i class="zmdi zmdi-calendar-alt"></i>24/7</p>
                                    </li>
                                    <li class="pull-right">
                                        <p><i class="zmdi zmdi-money"></i> xxxxx</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="irs-courses-content">
                            <h4><a href="course-single.html">Perishable delivery</a></h4>
                            <p>Do you have a perishable good you need to deliver?. we have the right exquipments.</p>
                            <a class="btn btn-default irs-btn-transparent-two" href="course-single.html" role="button">Track</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- courses end -->

    <!-- Counter start -->
    <?php include('counter.php');?>
    <!-- Counter end -->

    <!-- Gallery start -->
    
    <!-- Gallery end -->

    <!-- Teachers start -->
    <section class="irs-teachers-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="irs-section-title">
                        <h2>Our <span>Means</span></h2>
                        <div class="irs-title-line">
                            <div class="irs-title-icon">
                                <i class="icofont icofont-education"></i>
                            </div>
                        </div>
                        <p>By all means of transportation available, we make sure you package gets to you at the expected time </p>
                    </div>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-md-3 col-sm-6">
                    <div class="irs-teachers-col animated fadeInUpShort slow delay-250">
                        <a href="teacher-single.html"><img src="images/teachers/1.jpg" alt="">
                        </a>
                        <div class="irs-teachers-name">
                            <h4><a href="teacher-single.html">Loomis freight</a></h4>
                            <p>by sea</p>
                        </div>
                        <div class="irs-teachers-social">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="irs-teachers-col animated fadeInUpShort slow delay-500">
                        <a href="teacher-single.html"><img src="images/teachers/2.jpg" alt="">
                        </a>
                        <div class="irs-teachers-name">
                            <h4><a href="teacher-single.html">Loomis Plane</a></h4>
                            <p>by air</p>
                        </div>
                        <div class="irs-teachers-social">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="irs-teachers-col animated fadeInUpShort slow delay-750">
                        <a href="teacher-single.html"><img src="images/teachers/3.jpg" alt="">
                        </a>
                        <div class="irs-teachers-name">
                            <h4><a href="teacher-single.html">Loomis vehicle</a></h4>
                            <p>by road</p>
                        </div>
                        <div class="irs-teachers-social">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="irs-teachers-col animated fadeInUpShort slow delay-1000">
                        <a href="teacher-single.html"><img src="images/teachers/4.jpg" alt="">
                        </a>
                        <div class="irs-teachers-name">
                            <h4><a href="teacher-single.html">Loomis Extra</a></h4>
                            <p>we beat traffic</p>
                        </div>
                        <div class="irs-teachers-social">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-vimeo"></i></a>
                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Teachers  end -->

    <!-- Testimonial start -->
    <section class="irs-testimonial-field irs-layer-black">
        <img src="images/students.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <div class="testimonial-carousel">
                        <div class="item">
                            <div class="irs-transparent-space"></div>
                            <div class="irs-testimonial-single">
                                <div class="irs-comment-icon">
                                    <i class="icofont icofont-quote-right"></i>
                                </div>
                                <p>Loomis has been delivering my package from my client, honestly they make it so easy and no stress atol.</p>
                                <h4>Richard Andve</h4>
                                <h5>Business man</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="irs-transparent-space"></div>
                            <div class="irs-testimonial-single">
                                <div class="irs-comment-icon">
                                    <i class="icofont icofont-quote-right"></i>
                                </div>
                                <p>Am a soldier and I travle to remote places, I am suprised that Loomis is still able to get to me to send packages to my fiance</h4>
                                <h5>SGT. Peter Schlaber</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="irs-transparent-space"></div>
                            <div class="irs-testimonial-single">
                                <div class="irs-comment-icon">
                                    <i class="icofont icofont-quote-right"></i>
                                </div>
                                <p>I have been using Loomis for years all I can say is they are the best...</p>
                                <h4>Fayed Anken</h4>
                                <h5>Enterprenure</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->

    <!-- Blog start -->
    
    <!-- Blog end -->

    <!-- Newsletter start -->
   <?php include('newsletter.php');?>
    <!-- Newsletter end -->

    <!-- Footer start -->
   <?php include('footer.php');?>

    <!-- script start from here -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/isotope.js"></script>
    <script type="text/javascript" src="js/stellar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="js/script.js"></script>


    <!-- Funfact START -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.start-count').each(function() {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).bind('scroll', function() {
                var speed = 3000;
                $('.start-count').each(function() {
                    var $this = $(this);
                    if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                        $this.data('counted', true);
                        $this.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function(now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                                if (0 < $this.parent('.value').length) {
                                    $this.parent('.value').css('width', val + '%');
                                }
                            }
                        });
                    }
                });
            }).triggerHandler('scroll');
        });
    </script>

</body>


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/index-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2017 15:53:41 GMT -->
</html>