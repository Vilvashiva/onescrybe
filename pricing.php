<?php
header('X-Content-Type-Options: nosniff');
?>

<!DOCTYPE html>
<html>
<head>
  <!-- favicon -->
  <link rel="shortcut icon" href="/site/assets/img/favicon.png">
  <!-- theme meta -->
  <meta name="theme-name" content="Onescrybe" />
  <meta name="msapplication-TileColor" content="#000000" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

  <!-- title -->
  <title>Pricing - Onescrybe</title>

  <!-- noindex robots -->
  <meta name="robots" content="" />

  <!-- meta-description -->
  <meta name="description" content="meta description" />

  <meta name="author" content="Onescrybe" />

  <!-- og-title -->
  <meta property="og:title" content="Onescrybe" />

  <!-- og-description -->
  <meta property="og:description" content="Onescrybe" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="/" />

  <!-- og-image -->
  <meta property="og:image" content="" />

  <!-- google font css -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" <link="">
 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Kalam:wght@300;400;700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&display=swap" rel="stylesheet" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="plugins/font-awesome/v6/brands.css" />
  <link rel="stylesheet" href="plugins/font-awesome/v6/solid.css" />
  <link rel="stylesheet" href="plugins/font-awesome/v6/fontawesome.css" />

  <!-- Main Stylesheet -->
  
  <link href="newstyles/main.css" rel="stylesheet" />
  <link href="newstyles/sportsan_style.css" rel="stylesheet" />
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!--link rel="preload" href="/site/assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
  <link href="/css/uistyle.css" rel="stylesheet"-->
 
<style>
body {
  background: #fff;
}
.fnt {
  font-family: "Encode Sans Condensed", sans-serif;  
}
.fnth {
  font-family: "Encode Sans Condensed", sans-serif;  
  font-weight: 420;
  margin-bottom: 12px;
  color: #7d0000;
}
.h3f {
  font-size: 1.95rem;
  font-family: "Encode Sans Condensed", sans-serif;  
}
.shadow-plain {
    box-shadow: 0px 15px 34px rgba(0, 0, 0, 0.1);
}
.text-pk {
   color: #f857a6;
}
.shadow-pk {
    box-shadow: 0px 15px 34px rgba(0, 0, 0, 0.1);
    background-color: #fef7ff;
}
.title3 { font-family: "Encode Sans Condensed", sans-serif;  font-weight: 400; font-size: 1.65rem;  padding-bottom: 5px;}.faw { font-weight: 350; line-height: 1.2; font-size: 1.35rem;margin-right:20px;color: #E5F5EA;}
.header2 {
    background: #fedfed;
}
.subtitle {
font-size: 2.45rem;
}
.footlogo {
    width: 220px;
    height: 38px;
}
@media screen and (max-width: 600px){
    .footlogo { 
      display:none;
    };
}
.nav-link {
  font-size: 16px;
}
.bg-theme-light\/50 {
    background-color: #fedfed;
}
.banner-title2 {
    font-family: "Encode Sans Condensed", sans-serif;
    font-weight: 500;
    font-style: normal;
    font-size: 2.75rem;
    margin-top:50px;
    color: #222;
}
img.ceo {
    height: 457px;
}
.btn2-primary {
    color: white;
    background-color: #f857a6;
}
.high {
  color: #c64584; /* #f857a6; */
}
.high2 {
  color: #ad3c74;
}
img.svg-inject {
  visibility: hidden;
}
.icon-svg {
  height: calc(var(--spacing) * 12);
  width: calc(var(--spacing) * 12);
}
.svg-bg {
  display: inline-flex;
  height: calc(var(--spacing) * 12);
  width: calc(var(--spacing) * 12);
  align-items: center;
  justify-content: center;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.svg-bg .icon-svg {
  height: 1.3rem;
  width: 1.3rem;
}
.svg-bg.svg-bg-lg {
  height: calc(var(--spacing) * 16);
  width: calc(var(--spacing) * 16);
}
.svg-bg.svg-bg-lg .icon-svg {
  height: calc(var(--spacing) * 6);
  width: calc(var(--spacing) * 6);
}
 .fill-primary,.fill-secondary {
  fill: #d16b86; /* #3f78e0; */
}
.lineal-fill, .lineal-stroke {
fill: #d16b86;
}
.text-blue .fill-primary,.text-blue .fill-secondary {
  fill: #3f78e0;
}
.solid.text-sky .fill-primary,.solid.text-sky .fill-secondary {
  fill: #5eb9f0;
}
.solid.text-purple .fill-primary,.solid.text-purple .fill-secondary {
  fill: #747ed1;
}
.solid.text-grape .fill-primary,.solid.text-grape .fill-secondary {
  fill: #605dba;
}
.solid.text-violet .fill-primary,.solid.text-violet .fill-secondary {
  fill: #a07cc5;
}
.solid.text-pink .fill-primary,.solid.text-pink .fill-secondary {
  fill: #d16b86;
}
.solid.text-fuchsia .fill-primary,.solid.text-fuchsia .fill-secondary {
  fill: #e668b3;
}
.solid-duo.text-grape-fuchsia .fill-primary {
  fill: #605dba;
}
p.large {
  font-size: 1.085rem;
  line-height: 1.65rem;
  font-family: "Encode Sans Condensed", sans-serif;
  color: #555;
}
.ccard {
  background: linear-gradient(105deg, #fff8f8 0%, #fff8f8 100%);
}
.abt {
    width: 820px;
    height:655px;
}
.high2 {
  color: #ad3c74;
}
.scrimg{
  height:650px;  
}
.faqtxt {
    font-family: "Encode Sans Condensed", sans-serif;
    font-size: 18px;
    color: #555;
}
.gap {
 margin-top:45px;
 margin-botom: 40px;
}
</style>
</head>

<body>
<header class="header header2">
  <nav class="navbar container transparent">
    <!-- logo -->  
    <div class="order-0">
      <a href="index.html">
        <img src="images/1scribe_logo_new3a.png" height="96" width="270" alt="logo" />
      </a>
    </div>
    <!-- navbar toggler -->
    <input id="nav-toggle" type="checkbox" class="hidden" />
    <label
      id="show-button"
      for="nav-toggle"
      class="order-1 flex cursor-pointer items-center lg:order-1 lg:hidden"
    >
      <svg class="h-6 fill-current" viewBox="0 0 20 20">
        <title>Menu Open</title>
        <path d="M0 3h20v2H0V3z m0 6h20v2H0V9z m0 6h20v2H0V0z"></path>
      </svg>
    </label>
    <label
      id="hide-button"
      for="nav-toggle"
      class="order-2 hidden cursor-pointer items-center lg:order-1"
    >
      <svg class="h-6 fill-current" viewBox="0 0 20 20">
        <title>Menu Close</title>
        <polygon
          points="11 9 22 9 22 11 11 11 11 22 9 22 9 11 -2 11 -2 9 9 9 9 -2 11 -2"
          transform="rotate(45 10 10)"
        ></polygon>
      </svg>
    </label>
    <!-- /navbar toggler -->
    <ul
      id="nav-menu"
      class="navbar-nav order-2 hidden w-full flex-[0_0_100%] lg:order-1 lg:flex lg:w-auto lg:flex-auto lg:justify-center lg:space-x-5"
    >
      <li class="nav-item">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="about.php" class="nav-link">About</a>
      </li>
      <li class="nav-item">
        <a href="analytics.php" class="nav-link">Analytics</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link active">Pricing</a>
      </li>
      <li class="nav-item">
        <a href="/search/" class="nav-link">Help</a>
      </li>
    </ul>
    <div class="order-1 ml-auto hidden items-center md:order-2 md:ml-0 lg:flex">
      <a class="btn2 btn2-primary" href="/app/signup"><span class="faw"><i class="fa-regular fa-user"></i></span>Sign Up</a>

    </div>
  </nav>
</header>


<section class="section banner relative">
  <div class="container ccard">
    <div class="row items-center">
      <div class="lg:col-12 text-center gap">
        <h1 class="banner-title2">
          Choose Pricing That <br><span class="high">Makes Sense for You</span>
        </h1>
        <p class="mt-6 fancy">
          Discover our variety of features.
        </p>
        <br>
    </div>
  </div>
  
</section>
<!-- ./end Banner -->
<section class="section key-feature relative">

  <div class="container">
    <div class="row justify-between text-center lg:text-start">
      <div style="width:100%;text-align:center;">
    </div>
</section>
<!-- ./end Key features -->



<!-- pricing -->
<section class="section mt-12 pt-0">
  <div class="container" style="margin-left:10%;margin-bottom:40px">
    <div class="row lg:px-8">
      <div class="mt-8 md:col-4 lg:col-4 lg:mt-0">
        <div class="rounded-xl bg-white px-8 py-10 shadow-plain">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="banner-title2">Free</h2>
            </div>
              <img src="images/icons/price-card-icon-1.svg" alt="" />
            </span>
          </div>
              <!--p class="mt-3 text-2xl text-dark">$ 20.00 USD</p><p class="mt-3 text-xl text-pk"> $13.00 USD if annual</p-->
          <div class="my-6 border-y border-border py-6">
            <h4 class="h6">What's included?</h4>
            <ul class="mt-6">
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg" >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                 One YouTube Channel for Content Providers.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Upto 15 recent videos on search.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Not exceeding 30-50 videos extraction in a day.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                 1 Playlist per user login.
              </li>
              <li class="flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                 Limited Analytics
              </li>
            </ul>
          </div>
          <div class="text-center">
            <a class="btn2 btn2-primary" href="#" >Buy now</a><br>
            <a class="mt-6 inline-flex items-center text-dark" href="#">
              Start Free trial
              <svg
                class="ml-1.5"
                width="13"
                height="16"
                viewBox="0 0 13 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289L6.34315 0.928932C5.95262 0.538408 5.31946 0.538408 4.92893 0.928932C4.53841 1.31946 4.53841 1.95262 4.92893 2.34315L10.5858 8L4.92893 13.6569C4.53841 14.0474 4.53841 14.6805 4.92893 15.0711C5.31946 15.4616 5.95262 15.4616 6.34315 15.0711L12.7071 8.70711ZM0 9H12V7H0V9Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 md:col-4 lg:col-4 lg:mt-0">
        <div class="rounded-xl border bg-white px-8 py-10 shadow-plain lg:-mt-16">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="banner-title2">Basic</h2>
              <p class="mt-3 text-2xl text-dark">$ 29.99 USD</p><p class="mt-3 text-xl text-pk"> $24.99 USD if annual</p>
            </div>
              <img src="images/icons/price-card-icon-2.svg" alt="" />
            </span>
          </div>
          <div class="my-6 border-y border-border py-6">
            <h4 class="h6">What's included?</h4>
            <ul class="mt-6">
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg" >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                 Upto 2 YouTube Channels for Content Providers.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Upto 25 recent videos on search.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Not exceeding 60-150 videos extraction in a day.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Upto 3 Playlist per user login.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Limited Analytics
              </li>
            </ul>
          </div>
          <div class="text-center">
            <a class="btn2 btn2-primary" href="#" >Buy now</a><br>
            <a class="mt-6 inline-flex items-center text-dark" href="#">
              Start Free trial
              <svg
                class="ml-1.5"
                width="13"
                height="16"
                viewBox="0 0 13 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289L6.34315 0.928932C5.95262 0.538408 5.31946 0.538408 4.92893 0.928932C4.53841 1.31946 4.53841 1.95262 4.92893 2.34315L10.5858 8L4.92893 13.6569C4.53841 14.0474 4.53841 14.6805 4.92893 15.0711C5.31946 15.4616 5.95262 15.4616 6.34315 15.0711L12.7071 8.70711ZM0 9H12V7H0V9Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 md:col-4 lg:col-4 lg:mt-0">
        <div class="rounded-xl bg-white px-8 py-10 shadow-plain">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="banner-title2">Advanced</h2>
              <p class="mt-3 text-2xl text-dark">$ 49.99 USD</p><p class="mt-3 text-xl text-pk"> $44.99 USD if annual</p>
            </div>
              <img src="images/icons/price-card-icon-1.svg" alt="" />
            </span>
          </div>
          <div class="my-6 border-y border-border py-6">
            <h4 class="h6">What's included?</h4>
            <ul class="mt-6">
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg" >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                 Upto 5 YouTube Channels for Content Providers.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Upto 50 recent videos on search.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                Not exceeding 500 videos extraction in a day.
              </li>
              <li class="mb-3 flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                 Unlimited Playlist per user login.
              </li>
              <li class="flex items-center text-sm">
                <svg
                  class="mr-2.5 text-primary"
                  width="16"
                  height="13"
                  viewBox="0 0 16 13"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2 5.42857L6.36364 10L14 2"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
                 Unlimited Analytics
              </li>
            </ul>
          </div>
          <div class="text-center">
            <a class="btn2 btn2-primary" href="#" >Buy now</a><br>
            <a class="mt-6 inline-flex items-center text-dark" href="#">
              Start Free trial
              <svg
                class="ml-1.5"
                width="13"
                height="16"
                viewBox="0 0 13 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.7071 8.70711C13.0976 8.31658 13.0976 7.68342 12.7071 7.29289L6.34315 0.928932C5.95262 0.538408 5.31946 0.538408 4.92893 0.928932C4.53841 1.31946 4.53841 1.95262 4.92893 2.34315L10.5858 8L4.92893 13.6569C4.53841 14.0474 4.53841 14.6805 4.92893 15.0711C5.31946 15.4616 5.95262 15.4616 6.34315 15.0711L12.7071 8.70711ZM0 9H12V7H0V9Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./end pricing -->

<!-- Faq -->
<section class="faqs section">
  <div class="container max-w-[1230px]">
    <div class="row fnt">
      <div class="text-center lg:col-4 lg:text-start">
        <h2 class="subtitle">Frequently Asked Questions</h2>
        <p class="modern">
           Here are a few questions. <br>For more, please visit our Help page.
        </p>
      </div>
      <div class="mt-8 lg:col-8 lg:mt-0">
        <div class="rounded-xl bg-white px-5 py-5 shadow-plain lg:px-10 lg:py-8">
          <h4 class="fnth">Channel Integration</h4>
          <div class="accordion active border-b border-border">
            <div class="accordion-header relative pl-6 text-lg font-semibold faqtxt" data-accordion >
              How do I add my YouTube channel to Onescrybe?
              <svg
                class="accordion-icon absolute left-0 top-[22px]"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                xmlspace="preserve"
              >
                <path
                  fill="currentColor"
                  d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0 s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667 C514.096,145.416,514.096,131.933,505.755,123.592z"
                ></path>
              </svg>
            </div>
            <div class="accordion-content pl-6">
              <p class="faqtxt">
                 Until we get permissions from Google to access their channel details, we need content provider's channel URL, full name, and channel ID to confirm.
              </p>
            </div>
          </div>
          <div class="accordion border-b border-border">
            <div
              class="accordion-header relative pl-6 text-lg font-semibold faqtxt"
              data-accordion
            >
              Do I need to provide my channel ID or just the channel name?
              <svg
                class="accordion-icon absolute left-0 top-[22px]"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                xmlspace="preserve"
              >
                <path
                  fill="currentColor"
                  d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0 s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667 C514.096,145.416,514.096,131.933,505.755,123.592z"
                ></path>
              </svg>
            </div>
            <div class="accordion-content pl-6">
              <p class="faqtxt">
               You need to provide channel URL, for example https://www.youtube.com/@davidmcewenemt, David McEwen and @davidmcewenemt.
              </p>
            </div>
          </div>
          <div class="accordion border-b border-border">
            <div
              class="accordion-header relative pl-6 text-lg font-semibold faqtxt"
              data-accordion
            >
              How long does it take for my YouTube content to appear on your platform?
              <svg
                class="accordion-icon absolute left-0 top-[22px]"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                xmlspace="preserve"
              >
                <path
                  fill="currentColor"
                  d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0 s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667 C514.096,145.416,514.096,131.933,505.755,123.592z"
                ></path>
              </svg>
            </div>
            <div class="accordion-content pl-6">
              <p class="faqtxt">
               We don’t provide video content, we only provide thumbnails and save metadata, stats and provide rest of the analytical tools.
              </p>
            </div>
          </div>
          <div class="accordion">
            <div
              class="accordion-header relative pl-6 text-lg font-semibold faqtxt"
              data-accordion
            >
              What happens if I change my YouTube channel name?
              <svg
                class="accordion-icon absolute left-0 top-[22px]"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                xmlspace="preserve"
              >
                <path
                  fill="currentColor"
                  d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0 s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667 C514.096,145.416,514.096,131.933,505.755,123.592z"
                ></path>
              </svg>
            </div>
            <div class="accordion-content pl-6">
              <p class="faqtxt">
                Provide us the channel URL for example https://www.youtube.com/@davidmcewenemt and we can send instructions to authenticate with your name and channel name.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



 <footer class="footer bg-theme-light/50">
  <div class="container">
    <div class="row gx-5 pb-10 pt-[52px]">
      <div class="col-12 mt-12 md:col-6 lg:col-3 footlogo">
        <a href="/">
         <img src="images/1scribe_logo_new3a.png" height="38" alt="" />
        </a>
        <p class="!mb-4">© 2025 OneScrybe.ai. <br class="hidden xl:block lg:block">All rights reserved.</p>
      </div>
      <div class="col-12 mt-12 md:col-6 lg:col-3">
        <h6>Socials</h6>
      
        <ul class="social-icons mt-4 lg:mt-6">
          <li>
            <a href="#">
              <svg
                width="19"
                height="21"
                viewBox="0 0 20 21"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M19.1056 10.4495C19.1056 5.09642 15 0.759277 9.9327 0.759277C4.86539 0.759277 0.759766 5.09642 0.759766 10.4495C0.759766 15.2946 4.08865 19.3191 8.49018 20.0224V13.2627H6.15996V10.4495H8.49018V8.33951C8.49018 5.91696 9.85872 4.54939 11.93 4.54939C12.9657 4.54939 14.0013 4.74476 14.0013 4.74476V7.12823H12.8547C11.7081 7.12823 11.3382 7.87063 11.3382 8.65209V10.4495H13.8904L13.4835 13.2627H11.3382V20.0224C15.7398 19.3191 19.1056 15.2946 19.1056 10.4495Z"
                  fill="#222222"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="#222222"/>
            </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                width="19"
                height="16"
                viewBox="0 0 19 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.56609 15.2704V5.45315H0.948103V15.2704H4.56609ZM2.73764 4.1398C3.90474 4.1398 4.83841 3.31895 4.83841 2.33394C4.83841 1.38176 3.90474 0.59375 2.73764 0.59375C1.60945 0.59375 0.675781 1.38176 0.675781 2.33394C0.675781 3.31895 1.60945 4.1398 2.73764 4.1398ZM18.0654 15.2704H18.1044V9.8857C18.1044 7.259 17.4041 5.22331 13.7472 5.22331C11.9966 5.22331 10.8295 6.04415 10.3237 6.79933H10.2848V5.45315H6.82246V15.2704H10.4404V10.411C10.4404 9.13053 10.7128 7.91568 12.5801 7.91568C14.4475 7.91568 14.4864 9.36036 14.4864 10.5095V15.2704H18.0654Z"
                  fill="#222222"
                />
              </svg>
            </a>
          </li>
          <li>
            <a href="#">
              <svg
                width="19"
                height="18"
                viewBox="0 0 17 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.3829 10.554C15.4875 10.0381 15.5573 9.48523 15.5573 8.9324C15.5573 4.76772 12.3483 1.37701 8.40687 1.37701C7.88367 1.37701 7.36047 1.45072 6.87215 1.56129C6.20943 1.00846 5.37231 0.676758 4.50031 0.676758C2.33775 0.676758 0.59375 2.55639 0.59375 4.80458C0.59375 5.76282 0.87279 6.64735 1.39599 7.34761C1.29135 7.86359 1.22159 8.41642 1.22159 8.9324C1.22159 13.1339 4.43055 16.5246 8.37199 16.5246C8.89518 16.5246 9.41838 16.4509 9.9067 16.3404C10.5694 16.8932 11.4065 17.188 12.2785 17.188C14.4411 17.188 16.1851 15.3453 16.1851 13.0602C16.22 12.1388 15.9061 11.2543 15.3829 10.554ZM8.61615 13.9447C6.31407 13.9447 4.39567 12.8759 4.39567 11.5491C4.39567 10.9595 4.70959 10.4066 5.44207 10.4066C6.52335 10.4066 6.62799 12.0651 8.51151 12.0651C9.3835 12.0651 9.97646 11.6597 9.97646 11.1069C9.97646 10.4066 9.41838 10.2961 8.51151 10.0749C6.34895 9.48523 4.39567 9.2641 4.39567 6.86849C4.39567 4.65716 6.45359 3.84633 8.19759 3.84633C10.116 3.84633 12.0693 4.65716 12.0693 5.91024C12.0693 6.53679 11.6856 7.08962 11.0229 7.08962C10.0462 7.08962 10.0113 5.83653 8.40687 5.83653C7.49999 5.83653 6.94191 6.09452 6.94191 6.68421C6.94191 7.38446 7.67439 7.45818 9.34862 7.90044C10.7787 8.23214 12.5227 8.85869 12.5227 10.7383C12.5227 12.9128 10.5345 13.9447 8.61615 13.9447Z"
                  fill="#222222"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-12 mt-12 md:col-6 lg:col-3">
        <h6>Quick Links</h6>
        <ul>
          <li>
            <a href="terms.php">Terms of Service</a>
          </li>
          <li>
            <a href="privacy.php">Privacy</a>
          </li>
        </ul>
      </div>
      
      <div class="col-12 mt-12 md:col-6 lg:col-3">
        <h4 class="widget-title !mb-3 !text-[1rem] !leading-[1.45]">Locations</h4>
                     Northern VA, <span style="color:#ed275c">USA</span><br>Malaga, <span style="color:#ed275c">Spain</span><br>Gurgaon, <span style="color:#ed275c">India</span>
                     <a class="!text-[#60697b] hover:!text-[#60697b]" href="mailto:first.last@email.com">info@onescrybe.ai</a>
        
      </div>
    </div>
  </div>
  
</footer>

<script src="plugins/swiper/swiper-bundle.js"></script>
<script src="plugins/shufflejs/shuffle.js"></script>

<!-- Main Script -->
<script src="scripts/main.js"></script>
</body>
</html>


