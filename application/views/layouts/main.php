
<?php

if ( function_exists( 'date_default_timezone_set' ) ) {
    date_default_timezone_set('Asia/Jakarta');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>PT. Indotrans Data | Jasa Penyedia Internet</title>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="jasa internet bogor,jasa pembuatan software aplikasi daerah jabodetabek">
    <meta name="keywords" content="jasa internet murah,internet bogor,internet rumah,jasa internet jabodetabek,isp di bogor">
    <meta name="author" content="adirahman@kukode.com">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A400%2C700%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CPlayfair+Display%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Unify -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-core.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-components.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-globals.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
  <!-- syntaxhighlight plugin -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugin/syntax/styles/shCore.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugin/syntax/styles/shThemeDefault.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.op-business.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"

    
</head>
<body>
    <main>  
      <!-- Header v1 -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance"
              data-header-fix-moment="100">
        <div class="u-header__section g-transition-0_3 g-py-25"
             data-header-fix-moment-exclude="g-py-25"
             data-header-fix-moment-classes="g-py-20" style="background-color: #ffa600">
          <nav class="navbar navbar-expand-lg py-0">
            <div class="container g-pos-rel">
              <!-- Logo -->
              <a href="#" class="navbar-brand u-header__logo">
                <img class="u-header__logo-img u-header__logo-img--main" src="assets/img/logo.png" alt="Image Description">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-letter-spacing-2 g-font-size-14  g-pt-20 g-pt-0--lg ml-auto">
                  <li class="nav-item g-mr-15--lg g-mb-7 g-mb-0--lg active">
                    <a href="#beranda" class="nav-link g-color-white p-0">Beranda<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="#tentang" class="nav-link g-color-white p-0">Tentang Kami</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="#produklayanan" class="nav-link g-color-white p-0">Produk dan Layanan</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="#powered" class="nav-link g-color-white p-0">Client</a>
                  </li>
                  
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="#kontak" class="nav-link g-color-white p-0">Kontak</a>
                  </li>
                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-10 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header v1 -->
   

      <!-- Body v1 -->
      <div style="margin-top: 140px">
      <?php $this->load->view($main) ?>
      <!-- End Body v1 -->
    </div>
    </main>
  
    <!-- JS Global Compulsory -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery.easing/js/jquery.easing.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?php echo base_url();?>assets/vendor/appear.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Unify -->
    <script src="<?php echo base_url();?>assets/js/hs.core.js"></script>
    <script src="<?php echo base_url();?>assets/js/components/hs.header.js"></script>
    <script src="<?php echo base_url();?>assets/js/helpers/hs.hamburgers.js"></script>
    <script src="<?php echo base_url();?>assets/js/components/hs.scroll-nav.js"></script>
    <script src="<?php echo base_url();?>assets/js/components/hs.carousel.js"></script>
    <script src="<?php echo base_url();?>assets/js/components/gmap/hs.map.js"></script>
    <script src="<?php echo base_url();?>assets/js/components/hs.go-to.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- JS Customization -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#slider').bxSlider({
              mode : 'vertical',
              auto : true,
              touchEnabled : true,
              controls : false
            });
          });
    </script>
    <!-- JS Plugins Init. -->
    <script>
      // initialization of google map
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }

      $(document).on('ready', function () {
        // initialization of carousel

        $.HSCore.components.HSCarousel.init('.js-carousel');

        

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700,
          easing: 'easeOutExpo'
        });
      });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnhyOH5k4NfRrrhr72QVh_NSQpLsFk3c4&callback=initMap" async></script>
  

</body>
</html>