  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/frontend')}}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
      <!-- Site Icon -->
    <link rel="shortcut icon" href="{{asset('/frontend')}}/img/LogoJp.jpg">
    <!-- Site Title -->
    <title>JP DICTIONARY</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/linearicons.css">
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">             
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.min.css">
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">      
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">     
      <link rel="stylesheet" href="{{asset('/frontend')}}/css/main.css">
    </head>
    <body>  
      
      <header id="header" id="home">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                <ul>

                <li><a href="https://www.facebook.com/jakpost/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/jakpost?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/jakpostimages/?hl=en"><i class="fa fa-instagram"></i></a></li>
                </ul>     
              </div>
              <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                <a href="tel:+62215300476"><span class="lnr lnr-phone-handset"></span> <span class="text">Phone: (62) 21 5300-476/78</span></a>
                <a href="mailto:life@jakpost.com"><span class="lnr lnr-envelope"></span> <span class="text">life@jakpost.com</span></a>
                <a href="/logout"><span class="person"></span> <span class="text">Logout</span></a>     
              </div>
            </div>                  
          </div>
      </div>
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/kamusmainadmin"><img src="{{asset('/frontend')}}/img/Thejakartapostlogo.png" width="250px" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/A">A</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/B">B</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/C">C</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/D">D</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/E">E</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/F">F</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/G">G</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/H">H</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/I">I</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/J">J</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/K">K</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/L">L</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/M">M</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/N">N</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/O">O</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/P">P</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/Q">Q</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/R">R</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/S">S</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/T">T</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/U">U</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/V">V</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/W">W</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/X">X</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/Y">Y</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/alphabet/Z">Z</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->            
          </div>
        </div>
      </header><!-- #header -->
      <!-- start banner Area -->
      <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>  
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-9 col-md-12">
              <h1 class="text-uppercase">
                <br><br>
              </h1>
              <p class="pt-10 pb-10">
                @yield('container')
              </p>
            </div>                    
          </div>
        </div>          
      </section>
      <!-- End banner Area -->
      <!-- start footer Area -->    
      <footer class="footer-area section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                   <div class="single-footer-widget">
                    <h2 style="color: white">About Us</h2>
                    <br>
                    <ul>
                     <li><a href="mailto:life@jakpost.com"><span class="lnr lnr-envelope"></span> <span class="text">life@jakpost.com</span></li>
                     <li><a href="tel:+62215300476"><span class="lnr lnr-phone-handset"></span> <span class="text">Phone: (62) 21 5300-476/78</span></a></li>
                     <li><a href="#">The Jkt Post Building, Jl. Palmerah Barat No.142-143 1 2, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270</a></li>
                    </ul>        
                   </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
              <!-- /////////////////////////////// -->
            </div>
            <div class="col-lg-1 col-md-6 col-sm-6">
              <!-- ///////////////// -->
            </div>                                  
            <div class="col-lg-4  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h4>Newsletter</h4>
                <p>Stay update with our latest</p>
                <div class="" id="mc_embed_signup">
                   <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                    <div class="input-group">
                      <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                      <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                          <span class="lnr lnr-arrow-right"></span>
                        </button>    
                      </div>
                        <div class="info"></div>  
                    </div>
                  </form> 
                </div>
              </div>
            </div>                      
          </div>
          <div class="footer-bottom row align-items-center justify-content-between">
            <p class="footer-text m-0 col-lg-6 col-md-12"></p>
            <div class="col-lg-6 col-sm-12 footer-social">
              <a href="https://www.facebook.com/jakpost/"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/jakpost?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a>
            </div>
          </div>            
        </div>
      </footer> 
      <!-- End footer Area -->  
      <script src="{{asset('/frontend')}}/js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="{{asset('/frontend')}}/js/vendor/bootstrap.min.js"></script>     
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="{{asset('/frontend')}}/js/easing.min.js"></script>     
      <script src="{{asset('/frontend')}}/js/hoverIntent.js"></script>
      <script src="{{asset('/frontend')}}/js/superfish.min.js"></script>  
      <script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
      <script src="