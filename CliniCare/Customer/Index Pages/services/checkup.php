<?php
include "../../db_conn.php";
session_start();
$email = $_SESSION['email'];
$query = mysqli_query($con, "SELECT * FROM customer WHERE email='$email' ");
$row = mysqli_fetch_array($query);
if (!isset($_SESSION['email'])) {
  header("Location: ../../../index.php");
  exit;
}
?>

<!-- PAGE FOR MY PROFILE CUSTOMER -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Medical Check-Up | CliniCare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../assets/img/gambar/icon.jpeg" rel="icon">
  <link href="../../../assets/img/gambar/icon.jpeg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- Services CSS File -->
  <link href="services.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:info@clinicare.com.my">info@clinicare.com.my</a>
        <i class="bi bi-phone"></i> 03-3289 6079
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://twitter.com/klinikdamai?s=20" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/klinikdamaikualaselangor24jam/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/klinikdamaikualaselangor24jam/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="../../CustomerHomePage/index.php" class="logo me-auto">
        <img src="../assets/img/gambar/logobanner.png" alt="" class="img-fluid">
      </a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="../../CustomerHomePage/index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../../CustomerHomePage/index.php">About</a></li>
          <li class="dropdown"><a class="nav-link scrollto"><span class="d-none d-md-inline"></span>Services<i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="../../Index Pages/services/primaryCare.php">Primary Care</a></li>
              <li><a href="../../Index Pages/services/checkup.php">Medical Check-Up</a></li>
              <li><a href="../../Index Pages/services/smoking.php">Smoking Cessation</a></li>
              <li><a href="../../Index Pages/services/momBaby.php">Mom & Baby Care</a></li>
              <li><a href="../../Index Pages/services/pharmacy.php">Pharmacy</a></li>
              <li><a href="../../Index Pages/services/covid.php">Covid-19 Centre</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="../../CustomerHomePage/index.php">Doctors</a></li>
          <li><a class="nav-link scrollto" href="../../CustomerHomePage/index.php">FAQ</a></li>
          <li><a class="nav-link scrollto" href="../../CustomerHomePage/index.php">Contact Us</a></li>
          <li class="dropdown"><a class="play-btn"><span class="d-none d-md-inline"></span>Medicine<i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="../medicine/MedicineCatalogueUser.php">Catalogue</a></li>
              <li><a href="../medicine/viewCart.php">View My Cart</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="play-btn"><span class="d-none d-md-inline"></span><?php echo "Hello " . $row['name']; ?><i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="../Profile/myProfile.php">View Profile</a></li>
              <li><a href="../History/myHistory.php">View History</a></li>
              <li><a href="../Appointment/AppointmentSlot.php">Make an Appointment</a></li>
              <form action="../../CustomerEntry.php" method="POST">
                <li>
                  <a><button type="submit" href="#" style="background: transparent; border: none; padding: 0; margin:0; position:relative; color:red" name="signout">
                      Sign Out</button></a>
                </li>
              </form>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- MAIN CONTENT -->
  <main id="main">
    <br><br><br><br>

    <!-- ======= Main My Profile Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Medical Check-Up - Services</h2>
        </div>

        <div class="row">
          <div class="col-md-4 grid-margin stretch-card">
            <p>
              <img src="../assets/img/gambar/medical.png" style="width : 300px">
            </p>
          </div>

          <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6>We provide a regular check-up</h6>
                <p class="card-description"></p>

                <ul class="list-star">

                  <li>Health check-ups are not merely the physical check-ups by
                    a doctor but also include screening in
                    the form of laboratory tests and other scans.
                    The doctors can also help advise patients on
                    how they can work towards avoiding
                    any impending problems because of their lifestyle.</li>

                  <br>

                  <li>Regular health check-ups are essential because
                    they help identify potential problems at an early stage.</li>

                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-8 grid-margin stretch-card">
            <br>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="card-title">How we care for you?</h4>
                    <p class="card-description">We offer a full range of basic medical check-up services for our patients.</p>

                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                      <ul class="list-arrow">
                        <li><strong>Physical Examination</strong>
                          <p>Measure height & weight, check vital signs, review personal health concerns
                            , review medication list and more.
                        </li>

                        <li><strong>Blood Tests</strong>
                          <p>Taking a blood sample from a
                            blood vessel in your arm for laboratory analysis to assess
                            general state of health, organ function, infection, genetic
                            condition and many more.
                        </li>

                        <li><strong>Urine Tests</strong>
                          <p>A complete urinalysis consists of visual examination, chemical
                            examination, and microscopic examination, to detect
                            and/or measure several substances in the urine.
                        </li>

                        <li><strong>Imaging</strong>
                          <p>Modern diagnostic imaging technologies enable to have visual diagnosis
                            of your health condition by virtually looking
                            indside your body.
                        </li>

                        <li><strong>Insurance Medical Examination</strong>
                          <p>It is a requirement by most of the insurance companies
                            for their potential policyholders to
                            undergo a set of medical examination for
                            their judgement on the insurance premium to be paid.
                        </li>

                        <li><strong>Diabetes Checks & Tests</strong>
                          <p>Include a fasting blood sugar level test,
                            which measures the amount of glucose in your blood after
                            you have fasted (haven’t eaten for a while).
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <br>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Gallery</h4>
                <p class="card-description"></p>
                <br>

                <div class="template-demo">
                  <p>
                    <img src="../assets/img/gambar/vital.jpg" style="width : 280px">
                  </p>
                  <br>
                  <p>
                    <img src="../assets/img/gambar/ctScan.jpg" style="width : 280px">
                  </p>
                  <br>
                </div>
              </div>
            </div>
          </div>
    </section><!-- End Testimonials Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color : white">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>C L I N I C A R E</span>
          </strong>. All Rights Reserved
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/klinikdamai?s=20" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/klinikdamaikualaselangor24jam/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/klinikdamaikualaselangor24jam/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>