
<?php if(isset($_POST['email'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // the message
$msg = "Email: $email\nName: $name\n Subject: $subject \nMessage: $message";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("info@loomislogistics.com","A CLIENT CONTACTED YOU FROM THE SITE",$msg);
$success = '<div class="alert-success col-md-8 col-md-offset-2" style="padding-left: 200px; padding-top: 20px; padding-bottom: 20px;">
Message recieved, we will reply shortly.
</div>
<div class="clearfix"></div>';
}
?>
    <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2017 15:54:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Favicon -->
    <link href="../images/apple-icon.png" rel="icon" type="image/png">
    <link href="../images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Efinance Title -->
    <title>Loomis Contacts</title>

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
                        <h2>Contact Us</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index-layout1.html">HOME</a> > <a href="#">Contact</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($success)){
            echo"$success";
        }
        ?>
        
        
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

    <!-- Contact start -->
    <section class="irs-contact-field">
        
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="irs-contact-col">
                        <div class="row">
                            <div align=center>Send us a message below</div><br>
                            <form id="contact_form" name="contact_form" action="" method="post" novalidate="novalidate">
                                <div class="col-md-6">
                                    <input id="form_name" name="name" class="form-control" placeholder="Name*" required="required" data-error="Name is required." type="text">
                                </div>
                                <div class="col-md-6">
                                    <input id="form_email" name="email" class="form-control" placeholder="Email*" required="required" data-error="Email is required." type="text">
                                </div>
                                <div class="col-md-12">
                                    <input id="form_subject" name="subject" class="form-control" placeholder="Subject*" required="required" data-error="Subject is required." type="text">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="form_message" name="message" class="form-control irs-textarea" rows="12" placeholder="Comment*" required="required" data-error="Message is required."></textarea>
                                    <button class="btn btn-default irs-big-btn" type="submit">send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="irs-address-col">
                        <i class="icofont icofont-telephone"></i>
                        <p>+16313154392</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="icofont icofont-email"></i>
                        <p>info@loomislogistics.com</p>
                    </div>
                    <div class="irs-address-col">
                        <i class="icofont icofont-social-google-map"></i>
                        <p>50 Rue, Carnot BP, 22575 Dakar Senegal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->

    <!-- Footer start -->
   <?php include('../footer.php');?>

    <!-- script start from here -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="../js/isotope.js"></script>
    <script type="text/javascript" src="../js/stellar.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="../js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="../js/jquery.googlemap.js"></script>
    <script type="text/javascript" src="../js/css3-animate-it.js"></script>
    <script type="text/javascript" src="../js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="../js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="../js/classie.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Google Map Javascript Codes -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
    <script src="js/jquery.googlemap.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="../js/script.js"></script>

    <!-- Google maps -->
    <script type="text/javascript">
        $(window).load(function() {
            $("#map-canvas").googleMap({
                zoom: 5, // Initial zoom level (optional)
                coords: [48.870356, 2.322645], // Map center (optional)
                type: "ROADMAP", // Map type (optional)
                address: "Canal Saint-Martin, Paris, France", // Postale Address
                infoWindow: {
                    content: '<p style="text-align:center;"><strong>Canal Saint-Martin,</strong><br> Paris, France</p>'
                }
            });
            // Marker 2
            $("#map-canvas").addMarker({
                coords: [48.870356, 2.322645]
            });
            // Marker 3
            $("#map-canvas").addMarker({
                coords: [48.865358, 2.348607]
            });
        });
    </script>

</body>


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2017 15:54:06 GMT -->
</html>