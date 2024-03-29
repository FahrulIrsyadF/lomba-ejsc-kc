<!DOCTYPE html>
<html lang="en">

<head>

     <title>Nama Toko - Landing Page</title>
     <!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Nama Toko</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Tentang Kami</a></li>
                         <li><a href="#blog" class="smoothScroll">Produk</a></li>
                         <li><a href="#work" class="smoothScroll">Galeri</a></li>
                         <li><a href="#contact" class="smoothScroll">Hubungi Kami</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         </li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>Lengkap, Puas, Harga pas</h1>
                              <a href="#contact" class="btn section-btn smoothScroll">Kunjungi Toko</a>
                              <span>
                                   Kontak Kami +(62)85-815-334-190
                                   <small>Jika Ada Yang di tanyakan</small>
                              </span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="https://www.youtube.com/embed/OkEk1wdd2zk" frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-6">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Profil Toko Kami</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                   incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                         </div>
                    </div>


                    <div class="col-md-4 col-sm-12">
                         <div class="about-image">
                         <img src="images/work-image3.jpg" class="img-responsive" alt="">
                              <!-- <img src="images/about-image.jpg" class="img-responsive" alt=""> -->
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- BLOG -->
     <section id="blog" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Produk Kami</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>
                    <?php
                    include 'koneksi.php';
                    $query = "Select * from tabel_produk";
                    $sql = mysqli_query($connect, $query);
                    while ($data = mysqli_fetch_assoc($sql)) {
                         ?>
                         <div class="col-md-6 col-sm-6">
                              <!-- BLOG THUMB -->
                              <div class="media blog-thumb">
                                   <div class="media-object media-left">
                                        <a href="#"><img src="Admin/images/avatar/<?php echo $data['foto_produk']; ?>" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="media-body blog-info">
                                        <small><i class="fa fa-clock-o"></i> <?php echo $data['tanggal_input']; ?></small>
                                        <h3><a href="#"><?php echo $data['nama_produk']; ?></a></h3>
                                        <a href="" class="btn section-btn">Rp. <?php echo $data['harga_produk']; ?></a>
                                   </div>
                              </div>
                         </div>
                    <?php } ?>

               </div>
          </div>
     </section>


     <!-- WORK -->
     <section id="work" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Galeri</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image1.jpg" class="image-popup">
                                   <img src="images/work-image1.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Mitra Kami</h3>
                                        <small>Toko 1</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image2.jpg" class="image-popup">
                                   <img src="images/work-image2.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Mitra Kami</h3>
                                        <small>Toko 2</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image3.jpg" class="image-popup">
                                   <img src="images/work-image3.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Mitra Kami</h3>
                                        <small>Toko 3</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="images/work-image4.jpg" class="image-popup">
                                   <img src="images/work-image4.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Mitra Kami</h3>
                                        <small>Toko 4</small>
                                   </div>
                              </a>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Hunungi Kami</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">

                         <!-- CONTACT FORM HERE -->
                         <form id="contact-form" role="form" action="#" method="post">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" placeholder="Full Name" id="cf-name" name="cf-name" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" placeholder="Your Email" id="cf-email" name="cf-email" required="">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" placeholder="Pesan" id="cf-message" name="cf-message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="google-map">
                              <!-- How to change your own map point
                              1. Go to Google Maps
                              2. Click on your location point
                              3. Click "Share" and choose "Embed map" tab
                              4. Copy only URL and paste it within the src="" field below
                              -->
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435.148953451446!2d113.71470321164617!3d-8.157739728281904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6951271c09c15%3A0xf21c0a7b53edc843!2sToko%20Grosir%20Pojok%20Mastrip!5e0!3m2!1sen!2sid!4v1574409552205!5m2!1sen!2sid" allowfullscreen></iframe>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info">
                              <h2>Nama Toko</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                   incididunt ut labore et dolore magna aliqua.</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <div class="footer-thumb">
                              <h2>Toko</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Tentang Kami</a></li>
                                   <li><a href="#">Join our team</a></li>
                                   <li><a href="#">Read Blog</a></li>
                                   <li><a href="#">Press</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <div class="footer-thumb">
                              <h2>Layanan</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Pricing</a></li>
                                   <li><a href="#">Documentation</a></li>
                                   <li><a href="#">Support</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-4">
                         <div class="footer-thumb">
                              <h2>Temukan Kami</h2>
                              <p>Lingkungan Panji, Tegalgede,<br>Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68124,</p>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <div class="footer-bottom">
                              <div class="col-md-6 col-sm-5">
                                   <div class="copyright-text">
                                        <p>Copyright &copy; 2019 Temanku Romi</p>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-7">
                                   <div class="phone-contact">
                                        <p>Kontak Kami <span>+(62)85-815-334-190</span></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <h2>Nama Toko</h2>
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Buat Akun</a></li>
                                             <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Masuk</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                                  <form action="#" method="post">
                                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                       <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                  </form>
                                             </div>

                                             <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                                  <form action="#" method="post">
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                       <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                       <a href="https://www.facebook.com/templatemo">Forgot your
                                                            password?</a>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>