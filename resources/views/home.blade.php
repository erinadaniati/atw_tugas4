<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Penjualan Jus</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('home')}}"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('about')}}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('belijus')}}">Beli Jus</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('testimoni')}}">Testimoni</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('kontakkami')}}">Kontak Kami</a>
                              </li>
                               <li class="nav-item">
                                 <a class="nav-link" href="{{url('login')}}">Logout</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->

      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="test_box">
                     <div class="text-bg">
                        <h1><span>Selamat Datang!</span> <br>Jus Buah Erina</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="read_more" href="#">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="banner1" class="carousel slide banner_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#banner1" data-slide-to="0" class="active"></li>
                        <li data-target="#banner1" data-slide-to="1"></li>
                        <li data-target="#banner1" data-slide-to="2"></li>
                        <li data-target="#banner1" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="banner_img">
                                          <figure><img src="images/banner_img.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="banner_img">
                                          <figure><img src="images/banner_img.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="banner_img">
                                          <figure><img src="images/banner_img.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="banner_img">
                                          <figure><img src="images/banner_img.png" alt="#"/></figure>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/about.png" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Tentang Kami</h2>
                     <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum t is a long established fact that a reader will be distracted by the readable content of a page when looking at </p>
                     <a class="read_more" href="#">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->

      <!-- Our Juices -->
      <div class="juices ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Menu Jus Kami</h2>
                     <p>is a long established fact that a reader will be distracted by the readable content of a page when looking at </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="images/our1.png" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4>Rp.<strong class="yellow">10.000</strong></h4>
                        <h3>Jus Jeruk</h3>
                        <p>is a long established fact that a reader will be</p>
                        <a class="read_more" href="#">Beli Sekarang</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
               </div>
               <div class="col-md-4">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="images/our2.png" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4>Rp.<strong class="yellow">10.000</strong></h4>
                        <h3>Jus Leci</h3>
                        <p>is a long established fact that a reader will be</p>
                        <a class="read_more" href="#">Beli Sekarang</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 ">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="images/our3.png" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4>Rp.<strong class="yellow">10.000</strong></h4>
                        <h3>Jus Delima</h3>
                        <p>is a long established fact that a reader will be</p>
                        <a class="read_more" href="#">Beli Sekarang</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 margin_top">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="images/our4.png" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4>Rp.<strong class="yellow">10.000</strong></h4>
                        <h3>Jus Apel</h3>
                        <p>is a long established fact that a reader will be</p>
                        <a class="read_more" href="#">Beli Sekarang</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="our_main_box">
                     <div class="our_img">
                        <figure><img src="images/our5.png" alt="#"/></figure>
                     </div>
                     <div class="our_text">
                        <h4>Rp.<strong class="yellow">10.000</strong></h4>
                        <h3>Jus Nanas</h3>
                        <p>is a long established fact that a reader will be</p>
                        <a class="read_more" href="#">Beli Sekarang</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our Juices  section -->
      
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimoni</h2>
                     <p>is a long established fact that a reader will be distracted by the readable content of a page when looking at </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/tes1.png" alt="#"/></i>
                                          <h4>Mark Due</h4>
                                          <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposedt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/tes1.png" alt="#"/></i>
                                          <h4>Mark Due</h4>
                                          <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposedt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="test_box">
                                          <i><img src="images/tes1.png" alt="#"/></i>
                                          <h4>Mark Due</h4>
                                          <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposedt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
 
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Kontak Kami</h2>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Nama Lengkap" type="type" name="Nama Lengkap"> 
                           </div>
                           <div class="col-md-7">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-7">
                              <input class="contactus" placeholder="Nomor Telepon" type="type" name="Nomor Telepon">                          
                           </div>
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <ul class="social_icon">
                                 <h3>Ikuti Aku</h3>
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> Erina Daniati </li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> @erinaadn </li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> erinaadn </li>
                              </ul>
                           </div>
                           <div class="col-md-12">
                              <textarea class="contactus1" placeholder="Pesan" type="type" Pesan="Name">Pesan </textarea>
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn">Kirim</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Jl. H. Saman Hudi</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> 089528802157</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>erinadaniati01@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
