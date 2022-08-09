<?php 

require_once("dashboard/include/config.php");

require_once("dashboard/class/post.php");
require_once("dashboard/class/user.php");

 //create useer object
    $readU = new user($db_conn);
    $readU->id = 2;
    $result = $readU->read_user();
    $num = $result->rowCount();
    if($num>0){
    $row = $result->fetch(PDO::FETCH_ASSOC);




  }
        // $pic_split = explode("/",$row['file']);
        // $pic_val = $pic_split[1];

















?>











<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Musa Sharon</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.7.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
  
     img, iframe {
    max-width: 100%;
    height: auto !important;
  }


  </style>
</head>

<body>
<?php include("header.php"); ?>

  <!-- ======= Hero Section ======= -->
  <div id="pages" class="mt-4">
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1><?php echo $row['fname']."  ".$row['lname']; ?></h1>
      <h2 class="text-dark"><?php echo $row['about']; ?>....</h2>
      <a href="about.php" class="btn-about">About Me</a>
    </div>
  </section>

  </div><!-- End Hero -->

  <!-- ======= Footer ======= -->

  <?php include('footer.php'); ?>
<!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/purecounter/purecounter.js"></script>
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


  <!-- Template Main JS File -->
  <script src="ckeditor/ckeditor.js"></script>
  <script src="asset/js/main.js"></script>
<script type="text/javascript">
      $(document).ready(function(){


        $(document).on('click',".aboutbtn", function(){
                 var about = $(this).attr("id");
                 alert(about);
                 
                  $.ajax({
    
                   url:"pages.php",
                    method :"POST",
                     data:{
                     about:about },
                     success:function(data){
                      
                    $('#pages').html(data);
                }

            });

         });



          $(document).on('click',".resume", function(){
                 var update_id = $(this).attr("id");
                 var update = "update";
                 
                  $.ajax({
    
                   url:"pages.php",
                    method :"POST",
                     data:{
                     update_id:update_id,update:update },
                     success:function(data){
                      
                    $('#pages').html(data);
                }

            });

         });








        });
  </script>




</body>

</html>