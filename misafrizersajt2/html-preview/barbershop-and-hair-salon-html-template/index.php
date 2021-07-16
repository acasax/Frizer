 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Meta -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Awaiken Theme">
     <meta name='robots' content='noindex,nofollow' />
     <!-- Page Title -->
     <title>Barbershop and Hair Salon HTML Template</title>
     <!-- Google Fonts css-->
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700%7CMontserrat:400,500,600,700,800,900" rel="stylesheet">
     <!-- Bootstrap css -->
     <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
     <!-- Font Awesome & Flat icon css-->
     <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
     <link href="css/flaticon.css" rel="stylesheet" media="screen">
     <!-- Carousel css -->
     <link rel="stylesheet" href="css/owl.carousel.css">
     <!-- Slick nav css -->
     <link rel="stylesheet" href="css/slicknav.css">
     <!-- Main custom css -->
     <link href="css/custom.css" rel="stylesheet" media="screen">

     <link rel="stylesheet" href="css/sweetalert.css">

     <link href="css/mobiscroll.javascript.min.css" rel="stylesheet" />

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>

 <body data-spy="scroll" data-target="#navigation" data-offset="71">
     <!-- Preloader starts -->
     <div class="preloader">
         <div class="browser-screen-loading-content">
             <div class="loading-dots dark-gray">
                 <i></i>
                 <i></i>
                 <i></i>
                 <i></i>
             </div>
             <p class="loading-text">Loading</p>
         </div>
     </div>
     <!-- Preloader Ends -->

     <!-- Header Section Starts-->
     <header>
         <nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
             <div class="container">
                 <div class="navbar-header">
                     <!-- Logo starts -->
                     <a class="navbar-brand" href="#">
                         <img src="images/logo.png" style="width: 100px;" alt="Barbershop" />
                     </a>
                     <!-- Logo Ends -->

                     <!-- Responsive Menu button starts -->
                     <div class="navbar-toggle">
                     </div>
                     <!-- Responsive Menu button Ends -->
                 </div>

                 <div id="responsive-menu"></div>

                 <!-- Navigation starts -->
                 <div class="navbar-collapse collapse" id="navigation">
                     <ul class="nav navbar-nav navbar-right main-navigation" id="main-menu">
                         <li class="active"><a href="#home">Početna</a></li>
                         <li><a href="#about">O nama</a></li>
                         <li><a href="#service">Usluge</a></li>
                         <li><a href="#ourteam">Tim</a></li>
                         <li><a href="#gallery">Galerija</a></li>
                         <li><a href="#pricing">Cene</a></li>
                         <li><a href="#testimonial">Utisci</a></li>
                         <li><a href="#contact">Kontakt</a></li>
                     </ul>
                 </div>
                 <!-- Navigation Ends -->
             </div>
         </nav>
     </header>
     <!-- Header Section Ends-->

     <!-- Banner Section Starts -->
     <section class="banner" id="home">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="header-banner">
                         <p>Dope barber shop</p>
                         <h3>Vaš novi savršen <br />Stil & Dizajn</h3>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-4">
                     <div class="banner-info-single">
                         <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                         <h3>Radno vreme</h3>
                         <p>Ponedeljak – Petak: 09:00 – 22:00</p>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="banner-info-single">
                         <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                         <h3>Naša lokacija</h3>
                         <p>100 Mainstreet Center, Sydney</p>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="banner-info-single">
                         <div class="icon-box"><i class="fa fa-phone"></i></div>
                         <h3>Rezerviši odmah </h3>
                         <p>+208 333 9296</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="banner-icon"><i class="flaticon-hair-salon-situation"></i></div>
     </section>
     <!-- Banner Section Ends -->

     <!-- Contactus section starts -->
     <section class="contactus" id="contact">
         <div class="container-fluid">
             <div class="row no-pad">
                 <div class="col-md-4"></div>
                 <div class="col-md-4">
                     <div class="contact-form">
                         <h2 class="contact-form-title">Rezerviši odmah</h2>

                         <form id="reservationForm" data-form-type="contact" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                 <input type="text" class="form-control" id="name" name="name" placeholder="Ime i prezime" />
                             </div>

                             <div class="form-group" hidden>
                                 <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                             </div>

                             <div class="form-group">
                                 <input type="text" class="form-control" id="phone" name="phone" placeholder="Broj telefona" />
                             </div>

                             <script>
                                 $(document).ready(function() {
                                     var today = new Date().toISOString().split('T')[0];
                                     document.getElementsByName("date")[0].setAttribute('min', today);

                                     var nextWeekDate = new Date(new Date().getTime() + 6 * 24 * 60 * 60 * 1000).toISOString().split('T')[0]
                                     document.getElementsByName("date")[0].setAttribute('max', nextWeekDate);
                                 })
                             </script>

                             <div class="form-group">
                                 <input type="datetime-local" class="form-control" id="date" name="date" placeholder="" />
                             </div>

                             <div class="form-group">
                                 <select class="form-control" name="service" id="service">
                                     <option>Usluga</option>
                                     <option value="dope haircut">Dope haircut</option>
                                     <option value="dope buzzcut">Dope buzzcut</option>
                                     <option value="buzzcut">Buzzcut</option>
                                     <option value="head shaving">Head shaving</option>
                                     <option value="dope shaving">Dope shaving</option>
                                     <option value="dope beard">Dope beard</option>
                                     <option value="buzz beard">Buzz beard</option>
                                     <option value="dope washing">Dope washing</option>
                                     <option value="dope haircut & dope beard">Dope haircut & Dope beard</option>
                                     <option value="buzzcut & dope beard">Buzzcut & Dope beard</option>
                                     <option value="buzzcut & Buzzbeard">Buzzcut & BuzzBeard</option>
                                     <option value="kids haircut">Kids haircut</option>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <textarea class="form-control" rows="5" id="note" name="note" placeholder="Napomena"></textarea>
                             </div>

                             <div class="form-group">
                                 <button type="submit" class="btn-contact" value="Posalji">Zakaži</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- About us section starts -->
     <section class="aboutus" id="about">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="main-title">
                         <h2>O frizerskom salonu</h2>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-12">
                     <div class="about-image">
                         <div class="about-img-single">
                             <img src="images/slika3.jpeg" alt="" />
                         </div>

                         <div class="about-img-single">
                             <img src="images/slika6.jpeg" alt="" />
                         </div>

                         <div class="about-img-single">
                             <img src="images/slika4.jpeg" alt="" />
                         </div>
                     </div>

                     <div class="about-desc">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                             specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                             passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- About us section ends -->

     <section class="contactus">
         <video src="images/video01.mp4" id="video" autoplay loop width="100%" controls>
         </video>
     </section>

     <!-- Services section starts -->
     <section class="service" id="service">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="main-title">
                         <h2>Usluge</h2>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-4 col-sm-6">
                     <div class="service-single">
                         <div class="icon-box-outer">
                             <div class="icon-box">
                                 <i class="flaticon-shaver"></i>
                             </div>
                         </div>

                         <h3>Oblikovanje brade</h3>
                         <p>Lior sit amet, consectetur adipisg elit,sed do eiusmod tempor incdunt ut</p>
                         <h5>Vreme : 60 Min</h5>
                     </div>
                 </div>

                 <div class="col-md-4 col-sm-6">
                     <div class="service-single">
                         <div class="icon-box-outer">
                             <div class="icon-box">
                                 <i class="flaticon-razor"></i>
                             </div>
                         </div>

                         <h3>Brijanje</h3>
                         <p>Lior sit amet, consectetur adipisg elit,sed do eiusmod tempor incdunt ut</p>
                         <h5>Vreme : 60 Min</h5>
                     </div>
                 </div>

                 <div class="col-md-4 col-sm-6">
                     <div class="service-single">
                         <div class="icon-box-outer">
                             <div class="icon-box">
                                 <i class="flaticon-scissors"></i>
                             </div>
                         </div>

                         <h3>Šišanje</h3>
                         <p>Lior sit amet, consectetur adipisg elit,sed do eiusmod tempor incdunt ut</p>
                         <h5>Vreme : 60 Min</h5>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Services section ends -->

     <!-- Our Team section starts -->
     <section class="ourteam" id="ourteam">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="main-title">
                         <h2>Naš tim</h2>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-4 col-md-4">
                     <div class="team-box">
                         <figure>
                             <img src="images/vektor-1.png" alt="" />
                         </figure>

                         <div class="team-entry">

                         </div>
                     </div>
                 </div>
                 <div class="col-4 col-md-4">
                     <div class="team-box">
                         <figure>
                             <img src="images/Misina slika.jpeg" alt="" />
                         </figure>

                         <div class="team-entry">
                             <p>Expert Barber</p>
                             <h3>Miloš Stojaković</h3>
                             <div class="team-social">
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div class="col-4 col-md-4">
                     <div class="team-box">
                         <figure>
                             <img src="images/vektor-2.png" alt="" />
                         </figure>

                         <div class="team-entry">

                         </div>
                     </div>
                 </div>
             </div>


         </div>
     </section>
     <!-- Our Team section ends -->

     <!-- Photo Gallery section starts -->
     <section class="gallery" id="gallery">
         <div class="container-fluid">
             <div class="row no-pad">
                 <div class="col-md-12">
                     <div class="main-title">
                         <h2>Naš rad</h2>
                     </div>
                 </div>
             </div>

             <div class="row no-pad">
                 <div class="col-md-3 col-sm-4 col-xs-6">
                     <div class="gallery-box">
                         <figure>
                             <img class="image-padding" src="images/image1.jpeg" alt="" />
                         </figure>

                         <div class="gallery-overlay">
                             <div class="gallery-info">
                                 <p>Hair Style 1</p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-3 col-sm-4 col-xs-6">
                     <div class="gallery-box">
                         <figure>
                             <img class="image-padding" src="images/image2.jpeg" alt="" />
                         </figure>

                         <div class="gallery-overlay">
                             <div class="gallery-info">
                                 <p>Hair Style 2</p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-3 col-sm-4 col-xs-6">
                     <div class="gallery-box">
                         <figure>
                             <img class="image-padding" src="images/image3.jpeg" alt="" />
                         </figure>

                         <div class="gallery-overlay">
                             <div class="gallery-info">
                                 <p>Hair Style 3</p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-3 col-sm-4 col-xs-6">
                     <div class="gallery-box">
                         <figure>
                             <img class="image-padding" src="images/image5.jpeg" alt="" />
                         </figure>

                         <div class="gallery-overlay">
                             <div class="gallery-info">
                                 <p>Hair Style 4</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Photo Gallery section ends -->

     <!-- Pricing Section starts -->
     <div class="pricing" id="pricing">
         <div class="container">
             <div class="row no-pad">
                 <div class="col-md-6">
                     <div class="store-image">
                         <img src="images/store.jpg" alt="" />
                     </div>
                 </div>

                 <div class="col-md-6">
                     <div class="pricing-logo">
                         <img src="images/logo.png" alt="" />
                     </div>

                     <div class="price-list">
                         <div class="price-item">Dope Haircut</div>
                         <div class="price-line"></div>
                         <div class="price-amount">1300 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">Dope Buzzcut</div>
                         <div class="price-line"></div>
                         <div class="price-amount">900 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">BuzzCut</div>
                         <div class="price-line"></div>
                         <div class="price-amount">600 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">Head Shaving</div>
                         <div class="price-line"></div>
                         <div class="price-amount">900 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">Dope Shaving</div>
                         <div class="price-line"></div>
                         <div class="price-amount">1400 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">Dope Beard</div>
                         <div class="price-line"></div>
                         <div class="price-amount">900 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">Buzz Beard</div>
                         <div class="price-line"></div>
                         <div class="price-amount">600 RSD</div>
                     </div>
                     <div class="price-list">
                         <div class="price-item">Dope Washing </div>
                         <div class="price-line"></div>
                         <div class="price-amount">900 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">Dope Haircut & Dope Beard</div>
                         <div class="price-line"></div>
                         <div class="price-amount">1800 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">BuzzCut & Dope Beard</div>
                         <div class="price-line"></div>
                         <div class="price-amount">1200 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">BuzzCut & BuzzBeard</div>
                         <div class="price-line"></div>
                         <div class="price-amount">1000 RSD</div>
                     </div>

                     <div class="price-list">
                         <div class="price-item">Kids HairCut</div>
                         <div class="price-line"></div>
                         <div class="price-amount">800 RSD</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Pricing Section ends -->

     <!-- Testimonial section ends -->


     <!-- Contactus section ends -->

     <footer>
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="footer-social">
                         <a href="#">Facebook</a>
                         <a href="#">Twitter</a>
                         <a href="#">Instagram</a>
                         <a href="#"></a>
                         <a href="#"></a>
                         <a href="#"></a>
                     </div>

                     <div class="site-info">
                         <p>Copyright &copy; Untitled. All rights reserved. Design By <a href="www.resivoje" target="_blank">Resivoje</a> <a href="" target="_blank"></a> <a href="" target="_blank"></a> <a href="" target="_blank"></a> <a href="" target="_blank"></a></p>
                     </div>

                     <div class="footer-menu">
                         <ul>
                             <li><a href="#">Početna</a></li>
                             <li><a href="#">O nama</a></li>
                             <li><a href="#">Usluge</a></li>
                             <li><a href="#">Tim</a></li>
                             <li><a href="#">Galerija</a></li>
                             <li><a href="#">Cene</a></li>
                             <li><a href="#">Utisci</a></li>
                             <li><a href="#">Kontakt</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </footer>

     <!-- Jquery Library File -->
     <script src="js/jquery-1.12.4.min.js"></script>
     <script src="js/jquery.validate.min.js"></script>
     <!-- SmoothScroll -->
     <script src="js/SmoothScroll.js"></script>
     <!-- Bootstrap js file -->
     <script src="js/bootstrap.min.js"></script>
     <!-- Slick Nav js file -->
     <script src="js/jquery.slicknav.js"></script>
     <!-- Owl Carousel js file -->
     <script src="js/owl.carousel.js"></script>
     <!-- Main Custom js file -->
     <script src="js/function.js"></script>
     <script src="js/reservation.js"></script>

     <script src="js/sweetalert.js"></script>
     <script src="js/datecontrol.js"></script>

     <script src="js/mobiscroll.javascript.min.js"></script>


 </body>
 <script>
     'undefined' === typeof _trfq || (window._trfq = []);
     'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
         'tccl.baseHost': 'secureserver.net'
     }), _trfd.push({
         'ap': 'cpsh'
     }, {
         'server': 'a2plcpnl0108'
     }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
 </script>
 <script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

 </html>