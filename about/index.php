<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2017 15:53:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="../images/apple-icon.png" rel="icon" type="image/png">
    <link href="../images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Efinance Title -->
    <title>Loomis About</title>

    <!-- css file -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="../css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader"></div>
    <!-- Main Header Start -->
    <?php include('../header.php'); ?>
    <!-- Main Header end -->

    <!-- Inner page hedaing start -->
    <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="irs-inner-heading">
                        <h2>About Us</h2>
                      <br>
                        <p><a href="index.php">HOME</a> > <a href="#">About</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner page hedaing end -->

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
          <input name="tracking_id" placeholder="Tracking ID">
          <br>
          <button class="irs-log-reg">Submit</button>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

    <!-- About start -->
   <?php include('../whatwedo.php');?>
    <!-- Divider end -->

   <?php include('../knowmore.php');?>
    <!-- Discription end  -->

    <!-- Counter start -->
    <?php include('../counter.php');?>
    <!-- Counter end -->

    <!-- Newsletter start -->
    <?php include('../newsletter.php'); ?>
    <!-- Newsletter end -->

    <!-- Footer start -->
   <?php include('../footer.php');?>
    

    <!-- script start from here -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="../js/css3-animate-it.js"></script>
    <script type="text/javascript" src="../js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="../js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="../js/classie.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="../js/script.js"></script>

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


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2017 15:53:42 GMT -->
</html>