<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Tailwind CSS Template</title>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Manrope:wght@400;500;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="./assets/fonts/unicons/unicons.css">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./assets/css/colors/grape.css">
  <link rel="preload" href="./assets/css/fonts/space.css" as="style" onload="this.rel='stylesheet'">
  <style>
    .active>.page-link,
    .page-link.active,
    .plyr__control--overlaid:focus,
    .plyr__control--overlaid:hover {
      color: #605dba !important;
    }

    .accordion-wrapper .card-header button.collapsed {
      color: #343f52 !important;
    }

    .accordion-wrapper .card-header button:hover,
    .accordion-wrapper .card-header button {
      color: #605dba !important;
    }
  </style>
</head>

<body>
  <div class="grow shrink-0">
    <header>
      <nav class="navbar navbar-expand-lg center-nav transparent !absolute navbar-light caret-none">
        <div class="container xl:flex-row lg:flex-row !flex-nowrap items-center my-3">
          <div class="navbar-brand w-full">
            <a href="/">
              <img src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="image">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header xl:hidden lg:hidden flex items-center justify-between flex-row p-6">
              <h3 class="text-white xl:text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white mr-[-0.75rem] m-0 p-0 leading-none text-[#605dba] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer xl:hidden lg:hidden">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br> 00 (123) 456 78 90 <br>
                  <nav class="nav social social-white mt-4">
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                    <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-full !flex !ml-auto">
            <ul class="navbar-nav !flex-row !items-center !ml-auto">
              <li class="nav-item dropdown language-select uppercase group">
                <a class="nav-link dropdown-item dropdown-toggle after:!text-[#605dba] xl:!text-[.85rem] lg:!text-[.85rem] md:!text-[1.05rem] sm:!text-[1.05rem] xsm:!text-[1.05rem] hover:!text-[#605dba]" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                <ul class="dropdown-menu group-hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">
                  <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]" href="#">En</a></li>
                  <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]" href="#">De</a></li>
                  <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]" href="#">Es</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle before:content-['\eb99'] !text-[1.1rem] hover:!text-[#605dba]"></i></a></li>
              <li class="nav-item xl:hidden lg:hidden">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse !text-[#cacaca] opacity-100" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header flex flex-row items-center justify-between p-[1.5rem]">
          <h3 class="text-white xl:!text-[1.5rem] text-[calc(1.275rem_+_0.3vw)] !leading-[1.4] mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white mr-[-0.5rem] m-0 p-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body !pb-[1.5rem]">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-[0.75rem] !text-[.95rem] !leading-[1.45]">Contact Info</h4>
            <address class=" not-italic leading-[inherit] mb-[1rem]"> Moonshine St. 14/05 <br> Light City, London </address>
            <a class="text-[#cacaca] hover:!text-[#605dba]" href="mailto:first.last@email.com">info@email.com</a><br> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-[0.75rem] !text-[.95rem] !leading-[1.45]">Learn More</h4>
            <ul class="list-unstyled pl-0">
              <li><a class="text-[#cacaca] hover:!text-[#605dba]" href="#">Our Story</a></li>
              <li class="mt-[.35rem]"><a class="text-[#cacaca] hover:!text-[#605dba]" href="#">Terms of Use</a></li>
              <li class="mt-[.35rem]"><a class="text-[#cacaca] hover:!text-[#605dba]" href="#">Privacy Policy</a></li>
              <li class="mt-[.35rem]"><a class="text-[#cacaca] hover:!text-[#605dba]" href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-[0.75rem] !text-[.95rem] !leading-[1.45]">Follow Us</h4>
            <nav class="nav social social-white">
              <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
              <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
              <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
              <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
              <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    <section class="wrapper image-wrapper bg-full bg-image bg-overlay bg-overlay-light-600 [background-size:100%] bg-[center_center] bg-no-repeat bg-scroll relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(255,255,255,.6)]" data-image-src="./assets/img/photos/bg23.png">
      <div class="container pt-24 xl:pt-32 lg:pt-32 md:pt-32 pb-9">
        <div class="flex flex-wrap mx-0 mt-[-50px] items-center text-center lg:text-left xl:text-left">
          <div class="xl:w-6/12 lg:w-6/12 xxl:w-5/12 w-full flex-[0_0_auto] max-w-full !relative mt-[50px]" data-cues="slideInDown" data-group="page-title" data-delay="700">
            <img src="./assets/img/svg/doodle1.svg" class="h-9 !absolute hidden xl:block lg:block" data-cue="fadeIn" data-delay="3000" style="top: -9%; left: -6%" alt="image">
            <img src="./assets/img/svg/doodle2.svg" class="!h-[5rem] !absolute hidden xl:block lg:block" data-cue="fadeIn" data-delay="3000" style="bottom: 9%; right: -22%" alt="image">
            <h1 class="xl:text-[2.5rem] text-[calc(1.375rem_+_1.5vw)] font-semibold !leading-[1.15] mb-4">Manage all your bills, accounts and budgets in <span class="text-gradient gradient-7">one place.</span></h1>
            <p class="lead !text-[1.2rem] !leading-[1.5] font-normal mb-7">Sandbox is available to download from both App Store and Google Play Store.</p>
            <div class="flex justify-center lg:!justify-start xl:!justify-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="1800">
              <span class="inline-flex"><a href="#" class="!mr-2 inline-block"><img src="./assets/img/photos/button-appstore.svg" class="!h-[3rem] !rounded-[0.8rem]" alt="image"></a></span>
              <span class="inline-flex"><a class="inline-block" href="#"><img src="./assets/img/photos/button-google-play.svg" class="!h-[3rem] !rounded-[0.8rem]" alt="image"></a></span>
            </div>
          </div>
          <!-- /column -->
          <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full ml-auto mb-[-10rem] xxl:!mb-[-15rem] mt-[50px]" data-cues="slideInDown" data-delay="600">
            <figure class="m-0 p-0"><img class="w-full max-w-full !h-auto" src="./assets/img/photos/devices3.png" srcset="./assets/img/photos/devices3@2x.png 2x" alt="image"></figure>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="overflow-hidden" style="z-index:1;">
        <div class="divider text-[#fefefe] mx-[-0.5rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
            <g fill="currentColor">
              <polygon points="1440 100 0 100 0 85 1440 0 1440 100" />
            </g>
          </svg>
        </div>
      </div>
      <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
    <section class="wrapper !bg-[#ffffff]">
      <div class="container pt-32 xl:pt-40 lg:pt-40 md:pt-40 pb-[4.5rem] xl:pb-24 lg:pb-24 md:pb-24">
        <div class="flex flex-wrap mx-[-15px] !text-center">
          <div class="lg:w-10/12 xl:w-9/12 xxl:w-8/12 flex-[0_0_auto] px-[15px] max-w-full !mx-auto !relative">
            <img src="./assets/img/svg/doodle3.svg" class="!h-[3rem] absolute hidden xl:block lg:block" style="top: -45%; left: 23%" alt="image">
            <img src="./assets/img/svg/doodle4.svg" class="h-8 absolute hidden xl:block lg:block" style="top: 6%; right: 2%" alt="image">
            <h2 class="text-[0.8rem] !leading-[1.35] tracking-[0.02rem] uppercase text-[#aab0bc] !mb-3">App Features</h2>
            <h3 class="xl:text-[2rem] text-[calc(1.325rem_+_0.9vw)] font-semibold !leading-[1.2] mb-12 lg:!px-5 xl:!px-0 xxl:!px-6">Sandbox makes your spending <span class="text-gradient gradient-7">stress-free</span> for you to have the perfect control.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="flex flex-wrap mx-[-15px] mb-40">
          <div class="xxl:w-11/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <div class="flex flex-wrap mx-[-15px] xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-50px] !text-center">
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg !bg-[#fef3e4] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/cloud-network-2.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">Always up to Date</h4>
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg bg-[#e1f6f0] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/touchscreen.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">Easy Usage</h4>
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg bg-[#e9eaf8] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/lock.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">Secure Payments</h4>
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg bg-[#f8e7ec] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/rocket.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">Fast Transactions</h4>
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg bg-[#f0eaf6] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/bar-chart.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">Reports & Forecasting</h4>
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg bg-[#feece9] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/safe.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">Online Banking</h4>
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg bg-[#e0e9fa] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/controls.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">Configurable Fields</h4>
              </div>
              <!--/column -->
              <div class="md:w-6/12 lg:w-3/12 xl:w-3/12 w-full flex-[0_0_auto] px-[15px] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[50px] max-w-full">
                <div class="svg-bg svg-bg-lg !bg-[#eaf3ef] !rounded-[0.8rem] mb-4"> <img src="./assets/img/icons/solid/checked.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"> </div>
                <h4 class="text-[1rem]">List of Transactions</h4>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="flex flex-wrap mx-[-15px] !text-center">
          <div class="md:w-10/12 lg:w-7/12 xl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !relative">
            <img src="./assets/img/svg/doodle5.svg" class="!w-[5rem] absolute hidden xl:block lg:block" data-delay="1800" style="bottom: -60%; right: 10%" alt="image">
            <img src="./assets/img/svg/doodle6.svg" class="!h-[5rem] !absolute hidden xl:block lg:block" data-delay="1800" style="top: -40%; left: -5%" alt="image">
            <h2 class="text-[0.8rem] tracking-[0.02rem] uppercase text-[#aab0bc] !mb-3 !leading-[1.35]">How It Works</h2>
            <h3 class="text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.2] xl:text-[2rem] !mb-8 xl:!px-6">Download the app, create your profile and <span class="text-gradient gradient-7">voilà</span>, you're all set!</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="flex flex-wrap mx-[-15px] lg:!mb-40 xl:!mb-[17.5rem]">
          <div class="xxl:w-11/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <div class="flex flex-wrap mx-[-15px] mt-[-50px] xl:mt-0 lg:mt-0 !text-center items-center">
              <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto mb-[-2.5rem] lg:!mb-0 xl:!mb-0 mt-[50px] xl:mt-0 lg:mt-0">
                <figure class="mx-auto"><img src="./assets/img/photos/devices4.png" srcset="./assets/img/photos/devices4@2x.png 2x" alt="image"></figure>
              </div>
              <!-- /column -->
              <div class="w-full xl:hidden lg:hidden px-[15px] mt-[50px] xl:mt-0 lg:mt-0"></div>
              <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full lg:!-order-1 xl:!-order-1 mt-[50px] xl:mt-0 lg:mt-0">
                <div class="!mb-8">
                  <span class="xl:text-[3rem] text-[calc(1.425rem_+_2.1vw)] !leading-none mb-3 font-medium text-gradient gradient-7">01</span>
                  <h4 class="text-[1rem]">Download Application</h4>
                  <p class="mb-0 xl:!px-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <!-- /div -->
                <div>
                  <span class="xl:text-[3rem] text-[calc(1.425rem_+_2.1vw)] !leading-none mb-3 font-medium text-gradient gradient-7">02</span>
                  <h4 class="text-[1rem]">Quick Registration</h4>
                  <p class="mb-0 xl:!px-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <!-- /div -->
              </div>
              <!-- /column -->
              <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[50px] xl:mt-0 lg:mt-0">
                <div class="!mb-8">
                  <span class="xl:text-[3rem] text-[calc(1.425rem_+_2.1vw)] !leading-none mb-3 font-medium text-gradient gradient-7">03</span>
                  <h4 class="text-[1rem]">Track Your Spending</h4>
                  <p class="mb-0 xl:!px-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <!-- /div -->
                <div>
                  <span class="xl:text-[3rem] text-[calc(1.425rem_+_2.1vw)] !leading-none mb-3 font-medium text-gradient gradient-7">04</span>
                  <h4 class="text-[1rem]">Have Total Control</h4>
                  <p class="mb-0 xl:!px-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <!-- /div -->
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-full bg-image bg-overlay bg-overlay-light-600 bg-content [background-size:100%] bg-[center_center] bg-no-repeat bg-scroll relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(255,255,255,.6)]" data-image-src="./assets/img/photos/bg23.png">
      <div class="container py-[4.5rem] md:pt-24 lg:pt-0 xl:pt-0 xl:pb-[7rem] lg:pb-[7rem] md:pb-[7rem] !relative" style="z-index: 2;">
        <div class="flex flex-wrap mx-[-15px]">
          <div class="xl:w-11/12 xxl:w-10/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
            <div class="lg:mt-[-10rem] xl:!mt-[-15rem] !mb-[4.5rem] xl:!mb-[6rem] lg:!mb-[6rem] md:!mb-[6rem] !rounded-[0.8rem]">
              <div class="player relative z-[2] rounded-[0.4rem]" data-plyr-provider="vimeo" data-plyr-embed-id="165101721"></div>
            </div>
            <div class="!relative">
              <img src="./assets/img/svg/doodle7.svg" class="h-7 absolute hidden xl:block lg:block" data-delay="1800" style="top: -90%; right: -3%" alt="image">
              <img src="./assets/img/svg/doodle8.svg" class="!h-[4.5rem] absolute hidden xl:block lg:block" data-delay="1800" style="top: -20%; left: -12%" alt="image">
              <h2 class="text-[0.8rem] uppercase text-[#aab0bc] mb-3 !text-center !leading-[1.35]">FAQ</h2>
              <h3 class="text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.2] xl:text-[2rem] mb-12 lg:!px-8 xl:!px-12 !text-center">If you don't see an <span class="text-gradient gradient-7">answer</span> to your question, you can send us an email from our contact form.</h3>
            </div>
            <div class="flex flex-wrap mx-[-15px]">
              <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mb-0">
                <div id="accordion-1" class="accordion-wrapper">
                  <div class="card accordion-item mb-5 !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                    <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !rounded-[0.4rem] !bg-inherit" id="accordion-heading-1-1">
                      <button class="!text-[#343f52] !text-[0.9rem] hover:!text-[#605dba] before:!text-[#605dba] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
                    </div>
                    <!-- /.card-header -->
                    <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                      <div class="card-body flex-[1_1_auto]  p-[0_1.25rem_.25rem_2.35rem]">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.collapse -->
                  </div>
                  <!-- /.card -->
                  <div class="card accordion-item mb-5 !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                    <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !rounded-[0.4rem] !bg-inherit" id="accordion-heading-1-2">
                      <button class="!text-[#343f52] !text-[0.9rem] hover:!text-[#605dba] before:!text-[#605dba] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
                    </div>
                    <!-- /.card-header -->
                    <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                      <div class="card-body flex-[1_1_auto]  p-[0_1.25rem_.25rem_2.35rem]">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.collapse -->
                  </div>
                  <!-- /.card -->
                  <div class="card accordion-item mb-5 !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                    <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !rounded-[0.4rem] !bg-inherit" id="accordion-heading-1-3">
                      <button class="!text-[#343f52] !text-[0.9rem] hover:!text-[#605dba] before:!text-[#605dba] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
                    </div>
                    <!-- /.card-header -->
                    <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                      <div class="card-body flex-[1_1_auto]  p-[0_1.25rem_.25rem_2.35rem]">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.collapse -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.accordion-wrapper -->
              </div>
              <!--/column -->
              <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full">
                <div id="accordion-2" class="accordion-wrapper">
                  <div class="card accordion-item mb-5 !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                    <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !rounded-[0.4rem] !bg-inherit" id="accordion-heading-2-1">
                      <button class="!text-[#343f52] !text-[0.9rem] hover:!text-[#605dba] before:!text-[#605dba] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">How do I get my subscription receipt?</button>
                    </div>
                    <!-- /.card-header -->
                    <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                      <div class="card-body flex-[1_1_auto]  p-[0_1.25rem_.25rem_2.35rem]">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.collapse -->
                  </div>
                  <!-- /.card -->
                  <div class="card accordion-item mb-5 !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                    <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !rounded-[0.4rem] !bg-inherit" id="accordion-heading-2-2">
                      <button class="!text-[#343f52] !text-[0.9rem] hover:!text-[#605dba] before:!text-[#605dba] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Are there any discounts for people in need?</button>
                    </div>
                    <!-- /.card-header -->
                    <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                      <div class="card-body flex-[1_1_auto]  p-[0_1.25rem_.25rem_2.35rem]">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.collapse -->
                  </div>
                  <!-- /.card -->
                  <div class="card accordion-item mb-5 !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                    <div class="card-header !mb-0 !p-[.9rem_1.3rem_.85rem] !border-0 !rounded-[0.4rem] !bg-inherit" id="accordion-heading-2-3">
                      <button class="!text-[#343f52] !text-[0.9rem] hover:!text-[#605dba] before:!text-[#605dba] collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Do you offer a free trial edit?</button>
                    </div>
                    <!-- /.card-header -->
                    <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                      <div class="card-body flex-[1_1_auto]  p-[0_1.25rem_.25rem_2.35rem]">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.collapse -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.accordion-wrapper -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper !bg-[#ffffff]">
      <div class="container py-24 xl:!py-[8rem] lg:!py-[8rem] md:!py-[8rem]">
        <div class="flex flex-wrap mx-[-15px] !text-center">
          <div class="md:w-11/12 lg:w-9/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !relative">
            <img src="./assets/img/svg/doodle3.svg" class="!h-[3rem] absolute hidden xl:block lg:block" style="top: -20%; right: -12%" alt="image">
            <img src="./assets/img/svg/doodle9.svg" class="!h-[7rem] absolute hidden xl:block lg:block" style="bottom: 5%; left: -17%" alt="image">
            <h2 class="text-[0.8rem] uppercase text-[#aab0bc] mb-3 !text-center !leading-[1.35]">Why Choose Sandbox?</h2>
            <h3 class="text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.2] xl:text-[2rem] mb-14 !text-center">Here are a few <span class="text-gradient gradient-7">reasons why</span> our customers choose the Sandbox app.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="flex-wrap mx-[-15px] flex items-start mb-36">
          <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:!sticky lg:!sticky" style="top: 8rem;">
            <figure class="m-0 p-0"><img class="w-full max-w-full !h-auto" src="./assets/img/photos/devices5.png" srcset="./assets/img/photos/devices5@2x.png 2x" alt="image"></figure>
          </div>
          <!-- /column -->
          <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full ml-auto">
            <div class="flex flex-row !mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-[#e6e5f4] !rounded-[0.8rem] mr-5"><img src="./assets/img/icons/solid/calendar.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"></div>
              </div>
              <div>
                <h4 class="text-[1rem]">Scheduled Transactions</h4>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna.</p>
              </div>
            </div>
            <div class="flex flex-row !mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-[#e1f6f0] !rounded-[0.8rem] mr-5"><img src="./assets/img/icons/solid/currency.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"></div>
              </div>
              <div>
                <h4 class="text-[1rem]">Multiple Currencies</h4>
                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum.</p>
              </div>
            </div>
            <div class="flex flex-row !mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-[#f8e7ec] !rounded-[0.8rem] mr-5"><img src="./assets/img/icons/solid/server.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"></div>
              </div>
              <div>
                <h4 class="text-[1rem]">Database Management</h4>
                <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
              </div>
            </div>
            <div class="flex flex-row !mb-8">
              <div>
                <div class="svg-bg svg-bg-lg !bg-[#fef3e4] !rounded-[0.8rem] mr-5"><img src="./assets/img/icons/solid/devices.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"></div>
              </div>
              <div>
                <h4 class="text-[1rem]">Sync Between Devices</h4>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna.</p>
              </div>
            </div>
            <div class="flex flex-row !mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-[#e0e9fa] !rounded-[0.8rem] mr-5"><img src="./assets/img/icons/solid/search.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"></div>
              </div>
              <div>
                <h4 class="text-[1rem]">Smart Search</h4>
                <p>Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum.</p>
              </div>
            </div>
            <div class="flex flex-row !mb-8">
              <div>
                <div class="svg-bg svg-bg-lg !bg-[#eaf3ef] !rounded-[0.8rem] mr-5"><img src="./assets/img/icons/solid/compare.svg" class="svg-inject icon-svg solid text-[#343f52] text-navy" alt="image"></div>
              </div>
              <div>
                <h4 class="text-[1rem]">Detailed Reports</h4>
                <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
              </div>
            </div>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="flex flex-wrap mx-[-15px]">
          <div class="md:w-11/12 lg:w-10/12 xl:w-9/12 xxl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !text-center !relative">
            <img src="./assets/img/svg/doodle1.svg" class="h-9 !absolute hidden xl:block lg:block" style="top: 2%; left: 9%" alt="image">
            <img src="./assets/img/svg/doodle10.svg" class="h-7 absolute hidden xl:block lg:block" style="top: -45%; left: -17%" alt="image">
            <img src="./assets/img/svg/doodle11.svg" class="!h-[4rem] absolute hidden xl:block lg:block" style="top: -40%; right: -15%" alt="image">
            <h2 class="text-[0.8rem] tracking-[0.02rem] uppercase text-[#aab0bc] !mb-3 !leading-[1.35]">Happy Customers</h2>
            <h3 class="text-[calc(1.325rem_+_0.9vw)] font-bold !leading-[1.2] xl:text-[2rem] mb-12 xl:!px-10 xxl:!px-16">Don't take our word for it. See what <span class="text-gradient gradient-7">customers</span> are saying about us.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="itemgrid mb-14">
          <div class="flex flex-wrap mx-[-15px] isotope mt-[-30px]">
            <div class="item md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
              <div class="card !shadow-none !rounded-[0.8rem] !bg-[#f0f0f8]">
                <div class="card-body flex-[1_1_auto] p-[40px]">
                  <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus facilisis sociis natoque penatibus.”</p>
                    <div class="flex items-center text-left">
                      <div class="info !pl-0">
                        <h5 class="!mb-1 text-[.9rem] !leading-[1.5]">Coriss Ambady</h5>
                        <p class="!mb-0 text-[.8rem]">Financial Analyst</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
              <div class="card !shadow-none !rounded-[0.8rem] !bg-[#edf9f6]">
                <div class="card-body flex-[1_1_auto] p-[40px]">
                  <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                    <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.”</p>
                    <div class="flex items-center text-left">
                      <div class="info !pl-0">
                        <h5 class="!mb-1 text-[.9rem] !leading-[1.5]">Cory Zamora</h5>
                        <p class="!mb-0 text-[.8rem]">Marketing Specialist</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
              <div class="card !shadow-none !rounded-[0.8rem] !bg-[#fef4f2]">
                <div class="card-body flex-[1_1_auto] p-[40px]">
                  <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                    <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum. Donec sed odio dui consectetur adipiscing elit.”</p>
                    <div class="flex items-center text-left">
                      <div class="info !pl-0">
                        <h5 class="!mb-1 text-[.9rem] !leading-[1.5]">Nikolas Brooten</h5>
                        <p class="!mb-0 text-[.8rem]">Sales Manager</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
              <div class="card !shadow-none !rounded-[0.8rem] !bg-[#fbf1f4]">
                <div class="card-body flex-[1_1_auto] p-[40px]">
                  <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                    <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor. Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at sapien. Aenean tortor libero condimentum ac laoreet vitae.”</p>
                    <div class="flex items-center text-left">
                      <div class="info !pl-0">
                        <h5 class="!mb-1 text-[.9rem] !leading-[1.5]">Coriss Ambady</h5>
                        <p class="!mb-0 text-[.8rem]">Financial Analyst</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
              <div class="card !shadow-none !rounded-[0.8rem] !bg-[#edf2fc]">
                <div class="card-body flex-[1_1_auto] p-[40px]">
                  <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                    <p>“Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus magnis dis montes, nascetur ridiculus mus. Donec sed odio dui. Nulla vitae elit libero a pharetra.”</p>
                    <div class="flex items-center text-left">
                      <div class="info !pl-0">
                        <h5 class="!mb-1 text-[.9rem] !leading-[1.5]">Jackie Sanders</h5>
                        <p class="!mb-0 text-[.8rem]">Investment Planner</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item md:w-6/12 lg:w-6/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
              <div class="card !shadow-none !rounded-[0.8rem] !bg-[#fff8ee]">
                <div class="card-body flex-[1_1_auto] p-[40px]">
                  <blockquote class="!text-[0.85rem] !leading-[1.7] !font-normal pl-4 icon !mb-0 relative p-0 border-0 before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                    <p>“Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.”</p>
                    <div class="flex items-center text-left">
                      <div class="info !pl-0">
                        <h5 class="!mb-1 text-[.9rem] !leading-[1.5]">Laura Widerski</h5>
                        <p class="!mb-0 text-[.8rem]">Sales Specialist</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid-view -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-full bg-image bg-overlay bg-overlay-light-600 [background-size:100%] bg-[center_center] bg-no-repeat bg-scroll relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(255,255,255,.6)]" data-image-src="./assets/img/photos/bg23.png">
      <div class="overflow-hidden" style="z-index:1;">
        <div class="divider divider-alt text-[#fefefe] mx-[-0.5rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
            <g fill="currentColor">
              <polygon points="1440 100 0 15 0 0 1440 0 1440 100" />
            </g>
          </svg>
        </div>
      </div>
      <!-- /.overflow-hidden -->
      <div class="container pt-10 xl:pt-10 lg:pt-10 md:pt-16 pb-8 xl:pb-10 lg:pb-10 md:pb-10 text-center xl:text-left lg:text-left">
        <div class="flex flex-wrap mx-0 mt-[-50px]">
          <div class="md:w-10/12 md:!ml-[8.33333333%] lg:!ml-0 lg:w-6/12 xl:!ml-0 xl:w-5/12 w-full flex-[0_0_auto] max-w-full !relative mt-[50px]">
            <img src="./assets/img/svg/doodle2.svg" class="!h-[5rem] !absolute hidden xl:block lg:block" style="bottom: 36%; right: -25%" alt="image">
            <img src="./assets/img/svg/doodle6.svg" class="!h-[4.5rem] !absolute hidden xl:block lg:block" style="top: -20%; left: -25%" alt="image">
            <h2 class="text-[calc(1.325rem_+_0.9vw)] font-semibold !leading-[1.2] xl:text-[2rem] mb-4">Manage all your bills, accounts & budgets in <span class="text-gradient gradient-7">one place.</span></h2>
            <p class="lead !text-[1.2rem] !leading-[1.5] font-normal mb-7">Sandbox is available to download from both App Store and Google Play Store.</p>
            <div class="flex justify-center xl:!justify-start lg:!justify-start">
              <span class="inline-flex"><a href="#" class="!mr-2 inline-block"><img src="./assets/img/photos/button-appstore.svg" class="!h-[3rem] !rounded-[0.8rem]" alt="image"></a></span>
              <span class="inline-flex"><a href="#" class="inline-block"><img src="./assets/img/photos/button-google-play.svg" class="!h-[3rem] !rounded-[0.8rem]" alt="image"></a></span>
            </div>
          </div>
          <!-- /column -->
          <div class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] max-w-full ml-auto mt-lg-n15 xl:!mt-[-10rem] lg:!mt-[-5rem] mt-[50px]">
            <figure class="m-0 p-0"><img class="w-full max-w-full !h-auto" src="./assets/img/photos/devices6.png" srcset="./assets/img/photos/devices6@2x.png 2x" alt="image"></figure>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="!bg-[#ffffff]">
    <div class="container py-16 xl:!py-20 lg:!py-20 md:!py-20">
      <div class="flex flex-wrap mx-[-15px] mt-[-30px] xl:mt-0 lg:mt-0">
        <div class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
          <div class="widget">
            <img class="!mb-4" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="image">
            <p class="!mb-4">© 2024 Sandbox. <br class="hidden xl:block lg:block">All rights reserved.</p>
            <nav class="nav social">
              <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-[#5daed5] text-[1rem]"></i></a>
              <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-[#4470cf] text-[1rem]"></i></a>
              <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-[#e94d88] text-[1rem]"></i></a>
              <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-[#d53581] text-[1rem]"></i></a>
              <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-[#c8312b] text-[1rem]"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
          <div class="widget">
            <h4 class="widget-title !mb-3">Get in Touch</h4>
            <address class="xl:pr-[4rem] xxl:!pr-[5rem] not-italic leading-[inherit] block mb-4">Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a class="text-[#60697b] hover:text-[#60697b]" href="mailto:first.last@email.com">info@email.com</a><br> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
          <div class="widget">
            <h4 class="widget-title !mb-3">Learn More</h4>
            <ul class="pl-0 list-none !mb-0">
              <li><a class="text-[#60697b] hover:text-[#605dba]" href="#">About Us</a></li>
              <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#605dba]" href="#">Our Story</a></li>
              <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#605dba]" href="#">Projects</a></li>
              <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#605dba]" href="#">Terms of Use</a></li>
              <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#605dba]" href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="md:w-full xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
          <div class="widget">
            <h4 class="widget-title !mb-3">Our Newsletter</h4>
            <p class="!mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="!text-left input-group form-floating !relative flex flex-wrap items-stretch w-full">
                      <input type="email" value="" name="EMAIL" class="required form-control  relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[#9fbcf0] focus-visible:!border-[#9fbcf0] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]" placeholder="Email Address" id="mce-EMAIL2">
                      <label class="!ml-[0.05rem] text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none origin-[0_0] px-4 py-[0.6rem] left-0 top-0" for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-grape text-white !bg-[#605dba] border-[#605dba] hover:text-white hover:bg-[#605dba] hover:border-[#605dba] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#605dba] active:border-[#605dba] disabled:text-white disabled:bg-[#605dba] disabled:border-[#605dba] !relative z-[2] focus:z-[5] hover:!transform-none border-0">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- progress wrapper -->
  <div class="progress-wrap fixed w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] z-[1010] opacity-0 invisible translate-y-3 transition-all duration-[0.2s] ease-[linear,margin-right] delay-[0s] rounded-[100%] right-6 bottom-6 motion-reduce:transition-none after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:text-[#605dba] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path class="fill-none stroke-[#605dba] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>