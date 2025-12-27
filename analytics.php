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
  <title>Onescrybe</title>

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
.white {
  background: #f9f9f9;
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
  background: linear-gradient(105deg, #fdf0ff 200%, #fef7ff 350%);
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
.fancy {
    font-family: "Encode Sans Condensed", sans-serif;
    color: #555;
    font-size: 20px;
    padding-top: 10px;
    line-height: 34px;
    margin-left: 6%;
    margin-right:6%;
}
  .count {
    /*font-family: "Cairo Play", sans-serif; 
    font-family: "DM Serif Display"; */
    font-family: "Gelasio", serif;
    color: #026467;
  }
  .cool {
   font-family: "Encode Sans Condensed", sans-serif;
  }
  .bordered {
   border:1px solid #888;
   border-radius:8px;
  }
  ol {
    list-style-type: disc;
    margin-left:40px;
  }
.tinycaption{
    font-size: 14px;
    color: #b0232f;
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
        <a href="#" class="nav-link active">Analytics</a>
      </li>
      <li class="nav-item">
        <a href="pricing.php" class="nav-link">Pricing</a>
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
      <div class="lg:col-6">
        <br><br><br>
        <h1 class="banner-title2">
          <!--Scale design & dev operations with Avocode Enterprise -->
          Democratizing Insights<br><span class="high">Data Should Speak</span><br> to Everyone Clearly
        </h1>
        <p class="mt-6i fancy">
          Accelerate decision-making with analytics <br>built for humans, not just data scientists
        </p>
        <br> <br> <br>
        
 
      </div>
      <div class="lg:col-6" style="margin-top:140px;margin-bottom:40px">  <!--banner-img.png, 603x396   403x303-->
        <img src="images/analytics.png" alt="">
      </div>
    </div>
  </div>
  
</section>
<!-- ./end Banner -->

<!-- end Common hero -->
<!-- Key features -->
<section class="section key-feature relative">

  <div class="container">
    <div class="row justify-between text-center lg:text-start">
      <div style="width:100%;text-align:center;margin-top:15px;">
           <div style="width:2.85rem;height:2.85rem;margin-left:50%;margin-bottom:15px;">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
<rect x="10.199" y="115.475" style="fill:#FFE6B8;" width="491.602" height="345.508"/>
<rect x="334.218" y="171.744" style="fill:#BCC987;" width="70.915" height="237.896"/>
<rect x="220.548" y="231.185" style="fill:#FFAD61;" width="70.915" height="178.455"/>
<rect x="106.877" y="292.717" style="fill:#D35B38;" width="70.915" height="116.924"/>
<g>
	<path style="fill:#4D3D36;" d="M501.801,105.277H345.384v-22.62c0-23.074-18.772-41.845-41.845-41.845h-95.076
		c-23.074,0-41.845,18.772-41.845,41.845v22.62H10.199C4.566,105.277,0,109.843,0,115.476v345.512
		c0,5.633,4.566,10.199,10.199,10.199h491.602c5.633,0,10.199-4.566,10.199-10.199V115.476
		C512,109.843,507.434,105.277,501.801,105.277z M187.015,82.657c0-11.826,9.621-21.447,21.447-21.447h95.076
		c11.826,0,21.447,9.621,21.447,21.447v22.62h-137.97V82.657z M491.602,125.676v325.114H20.398V125.676H491.602z"/>
	<path style="fill:#4D3D36;" d="M431.197,419.838c5.633,0,10.199-4.566,10.199-10.199s-4.566-10.199-10.199-10.199h-15.872V171.743
		c0-5.633-4.566-10.199-10.199-10.199h-70.913c-5.633,0-10.199,4.566-10.199,10.199V399.44h-22.358V231.184
		c0-5.633-4.566-10.199-10.199-10.199h-70.913c-5.633,0-10.199,4.566-10.199,10.199v168.254h-22.358V292.712
		c0-5.633-4.566-10.199-10.199-10.199h-70.913c-5.633,0-10.199,4.566-10.199,10.199V399.44H80.803
		c-5.633,0-10.199,4.566-10.199,10.199s4.566,10.199,10.199,10.199H431.197z M117.074,399.44v-96.528h50.515v96.528H117.074z
		 M230.743,399.44V241.384h50.515v158.055L230.743,399.44L230.743,399.44z M344.412,181.943h50.515V399.44h-50.515V181.943z"/>
	<path style="fill:#4D3D36;" d="M168.634,150.833c0-5.633-4.566-10.199-10.199-10.199H48.544c-5.633,0-10.199,4.566-10.199,10.199
		s4.566,10.199,10.199,10.199h109.89C164.067,161.032,168.634,156.466,168.634,150.833z"/>
	<path style="fill:#4D3D36;" d="M192.325,161.032h6.162c5.633,0,10.199-4.566,10.199-10.199s-4.566-10.199-10.199-10.199h-6.162
		c-5.633,0-10.199,4.566-10.199,10.199S186.692,161.032,192.325,161.032z"/>
</g>
</svg>
         </div>
          <span style="color:#222222;margin-left:22px">OUR APPROACH</span><br>
         
        <h2 class="subtitle">Simplifying Content Consumption</h2><br>
        <p class="modern">A brief demonstration of our AI algorithm’s enhancement of a channel’s content.</p>
      </div>
    </div>
    
 
    </div>
</section>
<!-- ./end Key features -->



<!-- Services -->
<section class="section services">
  <div style="margin-left:10%;width:80%">
    <div class="row gx-5 mt-12 items-center lg:mt-0">
      <div class="lg:col-6 lg:order-2">
        <div class="video pb-5 pr-9">
             <div class="shape !bg-[#edf2fc] !rounded-[50%] rellax !w-[10rem] !h-[10rem] absolute z-[1]" data-rellax-speed="1" style="top: -2rem; right: -1.9rem; transform: translate3d(0px, 13px, 0px);"></div>
                     <figure class="!rounded-[.4rem] z-[2] relative">
                        <a href="https://www.youtube.com/watch?v=WgTpVNUsl5M" target="_blank" class="thumbnail-container">
                        <img src="https://i.ytimg.com/vi/WgTpVNUsl5M/mqdefault.jpg" alt="Thumbnail" class="thumbnail">
                        2 students did the impossible. Then Charles Barkley donated $1 million
                        </a>
                     </figure>
                  </div>
        
      </div>
      <div class="mt-6 lg:col-6 lg:order-1 lg:mt-0">
          <p class="modern2">For this demonstration, we selected a popular YouTube Channel <span class="high2">MindYourDecisions</span> which has <span class="high2">3.2M subscribers</span>, 
          having known for their wide range of topics in Mathematics. <br><br>We applied clustering and time series analysis to titles and descriptions 
          using <span class="high2">Sentence Transformers</span> and <span class="high2">KMeans Clustering</span>. Below are some sample plots showcasing OneScrybe's thinking.
    
      </div>     
    </div>
  </div>

  <div class="counter mt-16 fancy">
      <div class="row mx-0 rounded-[20px] bg-white px-10 shadow-lg lg:py-10 white">
        <div class="border-border px-10 py-10 text-center sm:col-6 lg:col-3 lg:border-r lg:py-0" >
          <h2>
            <span class="count">27M+</span> <span class="text-[#A3A1FB]">+</span>
          </h2>
	  <p>Videos Indexed <br><span class="tinycaption">(Updated from active channels)</span></p>
        </div>
        <div class="border-border px-10 py-10 text-center sm:col-6 lg:col-3 lg:border-r lg:py-0" >
          <h2>
            <span class="count">980K</span>
            <span class="text-[#5EE2A0]">+</span>
          </h2>
	  <p>Creators Tracked <br><span class="tinycaption">(Diverse niches and geographies)</span></p>
        </div>
        <div
          class="border-border px-10 py-10 text-center sm:col-6 lg:col-3 lg:border-r lg:py-0"
        >
          <h2>
            <span class="count">4.1M</span> <span class="text-primary">+</span>
          </h2>
	  <p>Playlists Analyzed <br><span class="tinycaption">(Detect content patterns and gaps)</span></p>
        </div>
        <div class="px-10 py-10 text-center sm:col-6 lg:col-3 lg:py-0">
          <h2>
            <span class="count">250K</span> <span class="text-[#FEC163]">+</span>
          </h2>
	  <p>Smart Insights Delivered <br><span class="tinycaption">(Trends, and curation analytics)</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section services">
  <div style="margin-left:10%;width:80%">
    <div class="row gx-5 mt-12 items-center lg:mt-0">
      <div class="lg:col-6 lg:order-2">
        <div class="video pb-5 pr-9">
          <div class="video-thumbnail overflow-hidden rounded-2xl">
            <img
              class="w-full object-contain scrimg"
              src="images/screens.png"
              alt=""
            />
            
          </div>
        </div>
        
      </div>
      <div class="mt-6 lg:col-6 lg:order-1 lg:mt-0">
          <h2 class="subtitle">The Scale Challenge Creators Face</h2><br>
          <p class="modern2">
           From the <span class="high2">NBA's 21+ million subscribers</span> and <span class="high2">12+ billion views</span> to highlight channels like FreeDawkins and Ximo Pierto managing massive daily uploads, successful creators face an organizational nightmare. NBA Daily Recap pushes out 10–15 videos daily, while the top 100 basketball YouTubers juggle audiences from hundreds of thousands to millions.<br><br>


Even giants like T-Series, with <span class="high2">265M+ subscribers, 22,000+ videos, and 260B+ views</span> alongside global icons like Blackpink, BTS, Justin Bieber, Eminem, and Ed Sheeran, need sophisticated systems to maintain audience engagement across their vast content libraries.
           </p><br>
    
      </div>     
    </div>
  </div>
</section>
<section class="section services">
  <div style="margin-left:10%;width:80%;margin-top:-100px">
    <div class="row gx-5 mt-12 items-center lg:mt-0">
      <div class="lg:col-6 lg:order-2">
        <div class="video pb-5 pr-9">
          <div class="video-thumbnail overflow-hidden rounded-2xl">
            <img
              class="w-full object-contain scrimg"
              src="images/app2.png"
              alt=""
            />
            
          </div>
        </div>
        
      </div>
      <div class="mt-6 lg:col-6 lg:order-1 lg:mt-0">
          <h2 class="subtitle">Core Benefits That Drive Results</h2><br>
<p class="modern2">Our intelligent AI systems automatically organize your content into meaningful categories, helping
your audience find exactly what they're looking for while discovering new favorites along the way.
You control your creator design personalized themes that reflect your brand, craft
strategic playlists that guide your audience journey, and ensure your best content never gets buried.
  <br><br>
  Most critically, you own your audience relationship, with built-in safeguards against platform
 volatility through direct audience redirection.
This is just a glimpse of Onescrybe's creator-focused ecosystem. Dive deeper to uncover
  all the ways we're designed to amplify your success.</p>
    
      </div>     
    </div>
  </div>
</section>
<!-- ./end Services -->

<!-- Members -->


 <footer class="footer bg-theme-light/50">
  <div class="container">
    <div class="row gx-5 pb-10 pt-[52px]">
      <div class="col-12 mt-12 md:col-6 lg:col-3 footlogo">
        <a href="/">
         <img src="images/1scribe_logo_new3a.png" height="38" alt="" /></a>
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
<script src="/san/plugins/swiper/swiper-bundle.js"></script>
<script src="/san/plugins/shufflejs/shuffle.js"></script>

<!-- Main Script -->
<script src="/san/scripts/main.js"></script>

</body>
</html>


