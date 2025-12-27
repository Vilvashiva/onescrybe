<?php
header('X-Content-Type-Options: nosniff');
?>
<!DOCTYPE html>
<html>
<head>
  <!-- favicon -->
  <link rel="shortcut icon" href="/site/assets/img/favicon.png">

  <!-- theme meta -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

  <!-- title -->
  <title>Onescrybe</title>

  <!-- google font css -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" <link="">
 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Kalam:wght@300;400;700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&display=swap" rel="stylesheet" />
  
  <link rel="stylesheet" href="plugins/font-awesome/v6/brands.css" />
  <link rel="stylesheet" href="plugins/font-awesome/v6/solid.css" />
  <link rel="stylesheet" href="plugins/font-awesome/v6/fontawesome.css" />

  <link href="newstyles/main.css" rel="stylesheet" />
  <link href="newstyles/sportsan_style.css" rel="stylesheet" />
<style>
.title3 { font-family: "Encode Sans Condensed", sans-serif;  font-weight: 400; font-size: 1.65rem;  padding-bottom: 5px;}.faw { font-weight: 350; line-height: 1.2; font-size: 1.35rem;margin-right:20px;color: #E5F5EA;}
.footlogo {
    width: 220px;
    height: 38px;
}
@media screen and (max-width: 600px){
    .footlogo { 
      display:none;
    };
}
.header2 {
    background: #fedfed; 
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
    font-size: 2.45rem;
    margin-top:50px;
    color: #222;
}
.btn2-primary {
    color: white;
    background-color: #f857a6;
}
.high {
  color: #c64584; 
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
  fill: #d16b86 /* #3f78e0; */
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
  background: linear-gradient(135deg, #fdf3ff 0%, #fcf1ff 100%);
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
        <a href="#" class="nav-link active">Home</a>
      </li>
      <li class="nav-item">
        <a href="about.php" class="nav-link">About</a>
      </li>
      <li class="nav-item">
        <a href="analytics.php" class="nav-link">Analytics</a>
      </li>
      <li class="nav-item">
        <a href="pricing.php" class="nav-link">Pricing</a>
      </li>
      <li class="nav-item">
        <a href="/search/" class="nav-link">Help</a>
      </li>
    </ul>
    <div class="order-1 ml-auto hidden items-center md:order-2 md:ml-0 lg:flex">
      <!--a class="btn2 btn2-primary" href="/app/signup"><span class="faw"><i class="fa-regular fa-user"></i></span>Sign Up</a-->
    </div>
  </nav>
</header>


<section class="section banner relative">
  <div class="container ccard">
    <div class="row items-center">
      <div class="lg:col-6">
        <h1 class="banner-title2">
          <!--Scale design & dev operations with Avocode Enterprise -->
          Your <span class="high">Content</span> Subscriptions <br>Made Smarter with <span class="high">AI</span>
        </h1>
        <p class="mt-6i fancy">
          An exciting concept using AI to help YouTube subscribers <br>better engage with content.
        </p>
        <br>
        <a class="btn2 btn2-primary" href="/app/signup"><span class="faw"><i class="fa-regular fa-user"></i></span>Sign Up</a>
        <!--a class="btn2 btn2-primary" href="#"><span class="faw"><i class="fas fa-clipboard-list"></i></span>Analytics Dashboard Sample</a-->
 
      </div>
      <div class="lg:col-6" style="margin-top:100px">  <!--banner-img.png, 603x396   403x303-->
        <img
          class="w-full object-contain"
          src="images/3d6.png"      
          width="245"
          height="325"
          alt=""
        />
      </div>
    </div>
  </div>
  
</section>
<!-- ./end Banner -->

<!-- Key features -->
<section class="section key-feature relative">

  <div class="container">
    <div class="row justify-between text-center lg:text-start">
      <div style="width:100%;text-align:center;margin-top:5px">
          <span style="color:#f857a6">OUR FEATURES</span>
        <h2 class="subtitle">Built for creators. Designed for viewers.<br> Powered by choice</h2>
      </div>
    </div>
    
    <div class="key-feature-grid mt-10 grid grid-cols-2 gap-3 md:grid-cols-3 xl:grid-cols-3">
      <div class="flex flex-col bg-white p-7 ">
        <div>
          <h3 class="h4 text-xl lg:text-2xl">
              <div style="display:flex;flex-direction:row;gap:10px;">
                  <div style="width:2.45rem;height:2.45rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256.02 213.34" data-inject-url="https://sandbox-tailwind-template.netlify.app/site/assets/img/icons/solid/script.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-duo text-grape-fuchsia !mr-4">
							   <path class="fill-secondary" d="M162.66 106.34a8 8 0 01-6.06-13.2l11.54-13.47-11.54-13.45a8 8 0 1112.14-10.42l16 18.67a8 8 0 010 10.42l-16 18.67a8 8 0 01-6.08 2.78zm-69.31 0a8 8 0 01-6.08-2.78l-16-18.67a8 8 0 010-10.42l16-18.67a8 8 0 0112.15 10.42L87.88 79.67l11.54 13.46a8 8 0 01-6.07 13.21zm24.87 15.8a8 8 0 01-6-9.6l16-69.33a8 8 0 1115.6 3.6l-16 69.33a8 8 0 01-9.6 6z"></path>
							   <path class="fill-primary" d="M237.33 0H18.67A18.76 18.76 0 000 18.67v144a18.76 18.76 0 0018.67 18.67h81.68c-1.25 5.35-4.57 14-13.45 22.9a5.33 5.33 0 003.77 9.1h74.67a5.33 5.33 0 003.78-9.1c-8.86-8.86-12.27-17.54-13.6-22.9h81.82A18.77 18.77 0 00256 162.67v-144A18.79 18.79 0 00237.33 0zm-2.66 138.67H21.33V21.34h213.33v117.33z"></path>
							</svg>
				  </div>Creators Retention
			   </div>
              </h3>
          <p class="large">Creators retain their audience regardless of platform bans or changes, with direct redirection options.</p>
        </div>
      </div>
      <div class="flex flex-col justify-between bg-white p-7" >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">
              <div style="display:flex;flex-direction:row;gap:10px;">
                  <div style="width:2.45rem;height:2.45rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://sandbox-tailwind-template.netlify.app/site/assets/img/icons/solid/verify.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-duo text-grape-fuchsia !mr-4">
							   <path class="fill-secondary" d="M186.67 117.33A69.34 69.34 0 10256 186.68a69.43 69.43 0 00-69.33-69.35zm37.34 55L186.68 215a10.65 10.65 0 01-7.68 3.63h-.35a10.67 10.67 0 01-7.53-3.12l-21.33-21.33a10.67 10.67 0 0115.09-15.09l13.26 13.27L208 158.3a10.67 10.67 0 1116 14.07z"></path>
							   <path class="fill-primary" d="M177.92 32.32L92.58.32a5.88 5.88 0 00-3.84 0l-85.35 32a5.36 5.36 0 00-3.39 5v68.59c0 97.28 88.64 117.76 89.5 118a6.28 6.28 0 002.34 0 73.48 73.48 0 0010.77-3.41A89.34 89.34 0 0196 186.68a90.78 90.78 0 0185.34-90.56V37.35a5.38 5.38 0 00-3.42-5z"></path>
							</svg>
				  </div>
              Dual-Facing YouTube Platform</div></h3>
          <p class="large">Follow creators and receive updates across YouTube in one location.</p>
        </div>
      </div>
      <div class="flex flex-col justify-between bg-white p-7" >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">
              <div style="display:flex;flex-direction:row;gap:10px;">
                  <div style="width:2.45rem;height:2.45rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256.03 256.02" data-inject-url="https://sandbox-tailwind-template.netlify.app/site/assets/img/icons/solid/cloud-network.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-duo text-grape-fuchsia !mr-4">
							   <path class="fill-primary" d="M193.17 36.14C180.21 14.05 155.12 0 128 0 93.52 0 63.55 22.64 55.62 53.65c-25.27 2.75-44.95 23.09-44.95 47.68 0 26.46 22.79 48 50.79 48h123.6c33.24 0 60.28-25.52 60.28-56.9 0-28.67-22.57-52.62-52.17-56.29z"></path>
							   <path class="fill-secondary" d="M245.34 208h-74.67v-8A18.69 18.69 0 00152 181.33h-13.33V144a10.67 10.67 0 10-21.34 0v37.33H104A18.69 18.69 0 0085.33 200v8H10.66a10.67 10.67 0 000 21.34h74.68v8A18.7 18.7 0 00104 256h48a18.7 18.7 0 0018.67-18.68v-8h74.67a10.67 10.67 0 100-21.34z"></path>
							</svg>
				  </div>
              Creators Paradise</div></h3>
          <p class="large">Creators curate their own visibility: define themes, bundle playlists, highlight evergreen content.</p>
        </div>
      </div>
      
      <div class="flex flex-col bg-white p-7 ">
        <div>
          <h3 class="h4 text-xl lg:text-2xl">
              <div style="display:flex;flex-direction:row;gap:10px;">
                  <div style="width:2.45rem;height:2.45rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://sandbox-tailwind-template.netlify.app/site/assets/img/icons/solid/director.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-duo text-grape-fuchsia !mr-4">
							   <path class="fill-primary" d="M163.78 19.12A42.63 42.63 0 00128 0c-18.54 0-34.77 11.81-40.14 28.34C74.26 31 64 42.66 64 56.53c0 15.89 13.42 28.8 29.92 28.8h63.3c19.18 0 34.78-15 34.78-33.43 0-16.22-12.08-29.87-28.22-32.78z"></path>
							   <path class="fill-secondary" d="M224 168a8 8 0 01-8-8v-16H40v16a8 8 0 01-16 0v-24a8 8 0 018-8h192a8 8 0 018 8v24a8 8 0 01-8 8z"></path>
							   <path class="fill-secondary" d="M128 170.67a8 8 0 01-8-8v-48a8 8 0 0116 0v48a8 8 0 01-8 8z"></path>
							   <circle class="fill-primary" cx="32" cy="197.33" r="16"></circle>
							   <path class="fill-primary" d="M40 224H24a24 24 0 00-24 24 8 8 0 008 8h48a8 8 0 008-8 24 24 0 00-24-24z"></path>
							   <circle class="fill-primary" cx="128" cy="197.33" r="16"></circle>
							   <path class="fill-primary" d="M136 224h-16a24 24 0 00-24 24 8 8 0 008 8h48a8 8 0 008-8 24 24 0 00-24-24z"></path>
							   <circle class="fill-primary" cx="224" cy="197.33" r="16"></circle>
							   <path class="fill-primary" d="M232 224h-16a24 24 0 00-24 24 8 8 0 008 8h48a8 8 0 008-8 24 24 0 00-24-24z"></path>
							</svg>
				  </div>Connect Multiple Channels
			   </div>
              </h3>
          <p class="large">A convenient way to interchangeably view connect to multiple channels, depending on subscription type.</p>
        </div>
      </div>
      <div class="flex flex-col justify-between bg-white p-7" >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">
              <div style="display:flex;flex-direction:row;gap:10px;">
                  <div style="width:2.45rem;height:2.45rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 213.34" data-inject-url="https://sandbox-tailwind-template.netlify.app/site/assets/img/icons/solid/setting.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-duo text-grape-fuchsia !mr-4">
							   <path class="fill-secondary" d="M177.81 73.28c.11-1.28.21-2.56.21-4s-.12-2.67-.21-4l8.85-6.52a13.19 13.19 0 003.63-17.07l-7.89-13.98a12.76 12.76 0 00-16.64-5.44L156 26.86a51.33 51.33 0 00-6.08-3.63l-1.12-11.39A13 13 0 00135.89 0H120.1a13 13 0 00-12.92 11.84l-1.07 11.41a51.33 51.33 0 00-6.11 3.63l-9.81-4.59a12.86 12.86 0 00-16.64 5.44L65.7 41.81a13.12 13.12 0 003.63 17.07l8.85 6.51c-.12 1.28-.21 2.56-.21 4s.11 2.68.21 4l-8.85 6.51a13.12 13.12 0 00-3.62 17l7.89 14.08a12.84 12.84 0 0016.64 5.44l9.81-4.59a51.33 51.33 0 006.08 3.63l1.07 11.41a13 13 0 0012.91 11.84h15.79a13 13 0 0012.92-11.84l1.07-11.41a51.33 51.33 0 006.08-3.63l9.81 4.59a12.76 12.76 0 0016.64-5.44l7.88-14.08a13.12 13.12 0 00-3.63-17.07zm-23.14-3.94A26.67 26.67 0 11128 42.67a26.69 26.69 0 0126.67 26.67z"></path>
							   <path class="fill-primary" d="M224 149.34H32a32 32 0 000 64h192a32 32 0 000-64zM42.67 192a10.67 10.67 0 1110.67-10.66A10.67 10.67 0 0142.67 192zM96 192a10.67 10.67 0 1110.67-10.66A10.67 10.67 0 0196 192zm64 0a10.67 10.67 0 1110.67-10.66A10.67 10.67 0 01160 192zm53.33 0A10.67 10.67 0 11224 181.34 10.67 10.67 0 01213.33 192z"></path>
							</svg>
				  </div>
              Smart Preferences</div></h3>
          <p class="large">Viewer preferences + creator tagging = smart, transparent recommendations.</p>
        </div>
      </div>
      <div class="flex flex-col justify-between bg-white p-7" >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">
              <div style="display:flex;flex-direction:row;gap:10px;">
                  <div style="width:2.45rem;height:2.45rem;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://sandbox-tailwind-template.netlify.app/site/assets/img/icons/solid/server.svg" class="svg-inject icon-svg !w-[2.2rem] !h-[2.2rem]  solid-duo text-grape-fuchsia !mr-4">
							   <path class="fill-secondary" d="M250.58 126.14l-56-19a8 8 0 00-5.16 0l-56 19a8 8 0 00-5.42 7.57v42.87c0 52.32 58.38 77.72 60.88 78.8a8.19 8.19 0 003.12.62 7.85 7.85 0 003.12-.64c2.5-1.06 60.88-26.48 60.88-78.78v-42.87a8 8 0 00-5.42-7.57zm-23.52 40.45l-29.33 37.33a10.66 10.66 0 01-15.33 1.5l-18.67-16a10.66 10.66 0 0113.87-16.19l10.22 8.77 22.47-28.57a10.66 10.66 0 0116.77 13.18z"></path>
							   <path class="fill-primary" d="M202.67 0H32a32 32 0 000 64h170.67a32 32 0 000-64zM32 42.67A10.67 10.67 0 1142.67 32 10.67 10.67 0 0132 42.67zm42.67 0A10.67 10.67 0 1185.34 32a10.67 10.67 0 01-10.67 10.67zM32 85.33a32 32 0 000 64h74.67v-15.57a29.38 29.38 0 0120-27.84l55.89-19a29 29 0 019.49-1.6zM32 128a10.67 10.67 0 1110.67-10.67A10.7 10.7 0 0132 128zm42.67 0a10.67 10.67 0 1110.67-10.67A10.7 10.7 0 0174.67 128zm32 48.53v-5.87H32a32 32 0 000 64h95.68c-12.27-15.57-21.01-35.09-21.01-58.13zM32 213.33a10.67 10.67 0 1110.67-10.66A10.7 10.7 0 0132 213.33zm42.67 0a10.67 10.67 0 1110.67-10.66 10.7 10.7 0 01-10.67 10.66z"></path>
							</svg>
				  </div>
              Video Discovery Grid</div></h3>
          <p class="large">Organize videos by theme, areas of interest or emotions.</p>
        </div>
      </div>
     
    </div>
  </div>
</section>
<!-- ./end Key features -->


<!-- Services -->
<section class="section services">
  <div style="margin-left:10%;width:80%">

    <div class="row gx-5 mt-12 items-center lg:mt-0">
      <div class="lg:col-5 lg:order-2">
        <div class="video pb-5 pr-9">
          <div class="video-thumbnail overflow-hidden rounded-2xl">
            <img
              class="w-full object-contain"
              src="images/3d2.png"
              alt=""
            />
            
          </div>
        </div>
      </div>
      <div class="mt-6 lg:col-7 lg:order-1 lg:mt-0">
   
        <div class="container">
          <div class="row justify-between text-center lg:text-start">
          <div style="width:100%;text-align:center;margin-top:12px">
          <h2 class="subtitle">Music Content & Playlist Integration</h3>
          </div></div><br>
          <div>
             <p class="modern2">Onescrybe uses <span class="high2">AI-powered search algorithms</span> to reduce song discovery time significantly.  
              The platform includes professional-grade pitch and speed modification tools (0.5x-2x speed, ±12 semitones) and search for lyrics.        
            Spotify integration launches expected in 2026, followed by other platforms. 
             </p>
             <p class="modern">Onescrybe's YouTube playlist management system currently supports playlist creation across user accounts.
             </p><br>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./end Services -->


 <footer class="footer bg-theme-light/50">
  <div class="container">
    <div class="row gx-5 pb-10 pt-[52px]">
      <div class="col-12 mt-12 md:col-6 lg:col-3 footlogo">
        <a href="index.html">
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
                     <a class="!text-[#60697b] hover:!text-[#60697b]" href="#">info@onescrybe.ai</a>
        
      </div>
    </div>
  </div>
  
</footer>



</body>
</html>
