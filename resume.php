<?php 

require_once("dashboard/include/config.php");

require_once("dashboard/class/post.php");
require_once("dashboard/class/user.php");


            

// $createR = new post($db_conn);
// $createR->category = "education";
// $res =  $createR->user_resume();
// $num = $res->rowCount();
// if($num){
//   while($row = $res->fetch(PDO::FETCH_ASSOC)){

// echo $row['resume'];

    
//   }
// }

// $readU = new post($db_conn);
//     $readU->category= "education";
//     $result = $readU->();
//     $num = $result->rowCount();




















?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resume - NORASH</title>
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
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("header.php"); ?><!-- End Header -->

  <main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Alice Barkley</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
              </p>
            </div>

            <h3 class="resume-title">Education</h3>
            <?php 
              $div = '';
              $createR = new post($db_conn);
              $createR->category = "education";
              $res =  $createR->user_resume();
              $num = $res->rowCount();
              if($num){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
              
              $div .= '<div class="resume-item">'. $row['resume'].'</div>';
               echo $div;
                  
                }
              }else{

                echo '<script>alert("Education resume is not available for now thank you ")</script>';
              }



             

            
            
            
            
            ?>
            
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <?php 
              $div = '';
              $createR = new post($db_conn);
              $createR->category = "professional";
              $res =  $createR->user_resume();
              $num = $res->rowCount();
              if($num){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
              
              $div .= '<div class="resume-item">'. $row['resume'].'</div>';
               echo $div;
                  
                }
              }else{

                echo '<script>alert("Education resume is not available for now thank you ")</script>';
              }



             

            
            
            
            
            ?>
            
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include('footer.php'); ?><!-- End  Footer -->

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

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>

</html>