<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php wp_title(); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/aos.css">
  <link href="<?php echo esc_url(get_template_directory_uri());?>/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 " style="background-color: rgb(5,122,85);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3 text-white"><span></span> Kerugoya</a>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp;
            <!-- <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>  -->
            <a href="#" class="small mr-3 text-white"><span class="icon-envelope-o mr-2"></span> info@Kamuiruhigh.sc.ke</a>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="#" class="small mr-3 text-white"><span class="icon-phone2 mr-2"></span> +254 799520412</a>

          </div>
          <!-- <div class="col-lg-3 text-right">
            <a href="login.html" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div> -->
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <nav class="navbar navbar-expand-lg navbar-white bg-white">
  <a class="navbar-brand" href="#"><img src="https://yt3.googleusercontent.com/leCif1jpEF5rs6WIrrmXjAs5S_83owUus5qfSvKflNVhtAMXWXoUM4bYtBnQeVXjwxyCik-JZw=s900-c-k-c0x00ffffff-no-rj" height='60px' alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ABOUT US
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">SCHOOL</a>
          <a class="dropdown-item" href="#">LEADERSHIP</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ACADEMICS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">HOD</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         DEPARTMENTS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">HODS</a>
        </div>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">CALENDER OF EVENTS</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">ALUMNI</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">CONTACT US</a>
      </li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        RESOURCES
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="https://educationnewshub.co.ke/category/departmetss-resources/">DEPARTMENT RESOURCES</a>
        <a class="dropdown-item" href="https://educationnewshub.co.ke/free-updated-form-one-notes/">FORM 1 RESOURCES</a>
        <a class="dropdown-item" href="https://educationnewshub.co.ke/free-updated-form-two-notes/">FORM 2 RESOURCES</a>
        <a class="dropdown-item" href="https://educationnewshub.co.ke/free-updated-form-three-notes/">FORM 3 RESOURCES</a>
        <a class="dropdown-item" href="https://educationnewshub.co.ke/free-updated-form-four-notes/">FORM 4 RESOURCES</a>
        <a class="dropdown-item" href="https://departmets.co.ke/k-c-s-e-past-papers-1996-2021/">KCSE REVISION MATERIAL</a>
        <a class="dropdown-item" href="https://www.freekcsepastpapers.com/districtscounties/?amp=1">PAST MOCK EXAMS</a>
    </div>
</li>

<?php if (is_user_logged_in()): ?>
    <li class="nav-item mx-5">
        <a class="nav-link btn btn-primary" href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>">LOGOUT</a>
    </li>
<?php else: ?>
    <li class="nav-item mx-5">
        <button class="nav-link btn btn-primary" onclick="redirectToLogin()">LOGIN</button>
    </li>
<?php endif; ?>

<script>
    function redirectToLogin() {
        window.location.href = '<?php echo esc_url(home_url('/login')); ?>'; 
    }
</script>

  
    </ul>
  </div>
</nav>

    </header>