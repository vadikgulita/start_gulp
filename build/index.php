<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '_top.php';?>
  <title>BES | Main page</title>
</head>
<body>
   <!-- LOADER -->
  <div id="loader-wrapper"></div>

  <div id="content-block"> 
    
    <!-- HEADER -->
    <?php include '_header.php';?>

    <div class="content-wrap">
      <!-- MAIN BANNER -->
      <section data-section-name="HELLO! NICE TO MEET YOU" >
        <div class="main-banner__section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="main-banner__content">
                  <div class="h1">LET US 
                    <div class="main-banner__image video-on-hover">
                      <picture>
                        <source srcset="img/main_baner_image1.webp" type="image/webp">
                        <img src="img/main_baner_image1.jpg" alt="">
                      </picture>
                      <div class="overlay">
                          <video src="video/animation.mp4" muted autoplay loop></video>
                      </div>
                    </div><br>
                    COVER THAT 
                    <div class="main-banner__image">
                      <picture>
                        <source srcset="img/main_baner_image2.webp" type="image/webp">
                        <img src="img/main_baner_image2.jpg" alt="">
                      </picture> 
                    </div><br>
                    FOR YOU
                    <div class="main-banner__image last">
                      <picture>
                        <source srcset="img/main_baner_image3.webp" type="image/webp">
                        <img src="img/main_baner_image3.jpg" alt="">
                      </picture> 
                    </div>
                    <div class="main-banner__svg-wrap">
                      <svg class="animate" width="426" height="189" viewBox="0 0 426 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="arrow-center" d="M1 4.00004C104.5 3.1667 249 3.00003 285.5 3C322 2.99997 351.5 34 351.5 68C351.5 102 351.5 185.5 351.5 185.5" stroke="#0AC5A8"/>
                        <path class="arrow-side" d="M423.5 112.5L350 187" stroke="#0AC5A8" />
                        <path class="arrow-side" d="M279.5 112.5L353.5 187" stroke="#0AC5A8" />
                      </svg>
                    </div>
                    
                  </div>
                  <div class="h1 main-banner__text"><div class="text">
                    We help Electrical contractors reduce installation costs through wise VDC approaches
                  </div></div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- VIDEO BANNER -->
        <div class="video-banner">
          <video src="video/video-banner.mp4" preload="none" autoplay  muted loop poster="img/banner-video-poster.jpg"></video>
        </div>
      </section>
      <!-- MAIN ABOUT -->
      <section class="section-fade animate" data-section-name="ABOUT US">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="mb-m section-title">
                <h2>A MODERN AND PRODUCTIVE TEAM, PROVIDING <span class="circled type-2 animate">THE BEST QUALITY</span> OF SERVICE TO OUR CLIENTS</h2>
              </div>
            </div>
            <div class="col-12 col-xl-11 offset-xl-1">
              <div class="main-about__grid">
                <div class="main-about__content">
                  <div class="text mb-s">BES was founded by passionate specialists, bringing together the strength of BIM engineering construction experience. Constantly improving our technical skills, we remain flexible and customer-focused, tailoring our engagement with clients to meet their needs.</div>
                  <a href="about.php" class="button">About us</a>
                </div>
                <div class="main-about__right model-container">
                  <div class="scene" data-src="models/model1/scene.gltf"></div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </section>
      <!-- SERVICES -->
      <section data-section-name="SERVICES" class="section-padding bg-light-grey section-fade animate">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title mb-l">
                <h2><span class="underline animate">SERVICES</span></h2>
              </div>
              <div class="services__grid">
                <a href="service-single.php">
                  <div class="services__cell">
                    <div class="services__image-holder video-on-hover">
                      <picture>
                          <source srcset="img/services/service_image1_L.webp" type="image/webp">
                          <img src="img/services/service_image1_L.png" loading="lazy" alt="">
                      </picture>
                      <div class="overlay">
                          <video preload="none" src="video/animation.mp4" muted autoplay loop></video>
                      </div>
                    </div>
                    <h5>Pre-construction redlines</h5>
                    <div class="servises__btn text text-s">
                      View service <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.332031 8.5L24.5016 8.5M24.5016 8.5L15.1518 1M24.5016 8.5L15.1518 16" stroke="#071832" stroke-width="2"/></svg>
                    </div>
                  </div>
                </a>
                <a href="service-single.php">
                  <div class="services__cell">
                    <div class="services__image-holder video-on-hover">
                      <picture>
                          <source srcset="img/services/service_image2_L.webp" type="image/webp">
                          <img src="img/services/service_image2_L.png" loading="lazy" alt="">
                      </picture>
                      <div class="overlay">
                          <video preload="none" src="video/animation.mp4" muted autoplay loop ></video>
                      </div>
                    </div>
                    <h5>BIM</h5>
                    <div class="servises__btn text text-s">
                      View service <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.332031 8.5L24.5016 8.5M24.5016 8.5L15.1518 1M24.5016 8.5L15.1518 16" stroke="#071832" stroke-width="2"/></svg>
                    </div>
                  </div>
                </a>
                <a href="service-single.php">
                  <div class="services__cell">
                    <div class="services__image-holder video-on-hover">
                      <picture>
                          <source srcset="img/services/service_image3_L.webp" type="image/webp">
                          <img src="img/services/service_image3_L.png" loading="lazy" alt="">
                      </picture>
                      <div class="overlay">
                          <video preload="none" src="video/animation.mp4" muted autoplay loop></video>
                      </div>
                    </div>
                    <h5>VDC Coordination</h5>
                    <div class="servises__btn text text-s">
                      View service <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.332031 8.5L24.5016 8.5M24.5016 8.5L15.1518 1M24.5016 8.5L15.1518 16" stroke="#071832" stroke-width="2"/></svg>
                    </div>
                  </div>
                </a>
                <a href="service-single.php">
                  <div class="services__cell">
                    <div class="services__image-holder video-on-hover">
                      <picture>
                          <source srcset="img/services/service_image4_L.webp" type="image/webp">
                          <img src="img/services/service_image4_L.png" loading="lazy" alt="">
                      </picture>
                      <div class="overlay">
                          <video preload="none" src="video/animation.mp4" muted autoplay loop></video>
                      </div>
                    </div>
                    <h5>Prefab and shop drawings</h5>
                    <div class="servises__btn text text-s">
                      View service <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.332031 8.5L24.5016 8.5M24.5016 8.5L15.1518 1M24.5016 8.5L15.1518 16" stroke="#071832" stroke-width="2"/></svg>
                    </div>
                  </div>
                </a>
                <a href="service-single.php">
                  <div class="services__cell">
                    <div class="services__image-holder video-on-hover">
                      <picture>
                          <source srcset="img/services/service_image5_L.webp" type="image/webp">
                          <img src="img/services/service_image5_L.png" loading="lazy" alt="">
                      </picture>
                      <div class="overlay">
                          <video preload="none" src="video/animation.mp4" muted autoplay loop></video>
                      </div>
                    </div>
                    <h5>Electrical design - assistance</h5>
                    <div class="servises__btn text text-s">
                      View service <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.332031 8.5L24.5016 8.5M24.5016 8.5L15.1518 1M24.5016 8.5L15.1518 16" stroke="#071832" stroke-width="2"/></svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- AREAS -->
      <section class="section-fade animate" data-section-name="AREAS">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title mb-l">
                <h2><span class="circled animate">TYPES</span> OF PROJECT</h2>
              </div>
              <div class="areas__grid">
                <a href="industries.php"><div class="areas__cell video-on-hover">
                  <div class="areas__image-holder video-on-hover">
                    <picture>
                        <source srcset="img/areas/area_image1.webp" type="image/webp">
                        <img src="img/areas/area_image1.jpg" loading="lazy" alt="">
                    </picture>
                    <div class="overlay">
                          <video preload="none" src="video/animation.mp4" muted autoplay loop></video>
                      </div>
                  </div>
                  <div class="areas__cell-content">
                    <h4>Education</h4>
                    <svg width="48" height="17" viewBox="0 0 48 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.875 8.49995L21.7054 8.5L45.875 8.5M45.875 8.5L36.5252 1M45.875 8.5L36.5252 16" stroke="#071832" stroke-width="2"/></svg>
                  </div>
                </div></a>
                <a href="industries.php"><div class="areas__cell">
                  <div class="areas__image-holder">
                    <picture>
                        <source srcset="img/areas/area_image2.webp" type="image/webp">
                        <img src="img/areas/area_image2.jpg" loading="lazy" alt="">
                    </picture>
                  </div>
                  <div class="areas__cell-content">
                    <h4>Commercial</h4>
                    <svg width="48" height="17" viewBox="0 0 48 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.875 8.49995L21.7054 8.5L45.875 8.5M45.875 8.5L36.5252 1M45.875 8.5L36.5252 16" stroke="#071832" stroke-width="2"/></svg>
                  </div>
                </div></a>
                <a href="industries.php"><div class="areas__cell">
                  <div class="areas__image-holder">
                    <picture>
                        <source srcset="img/areas/area_image3.webp" type="image/webp">
                        <img src="img/areas/area_image3.jpg" loading="lazy" alt="">
                    </picture>
                  </div>
                  <div class="areas__cell-content">
                    <h4>Mission Critical</h4>
                    <svg width="48" height="17" viewBox="0 0 48 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.875 8.49995L21.7054 8.5L45.875 8.5M45.875 8.5L36.5252 1M45.875 8.5L36.5252 16" stroke="#071832" stroke-width="2"/></svg>
                  </div>
                </div></a>
                <a href="industries.php"><div class="areas__cell">
                  <div class="areas__image-holder">
                    <picture>
                        <source srcset="img/areas/area_image4.webp" type="image/webp">
                        <img src="img/areas/area_image4.jpg" loading="lazy" alt="">
                    </picture>
                  </div>
                  <div class="areas__cell-content">
                    <h4>Healthcare</h4>
                    <svg width="48" height="17" viewBox="0 0 48 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.875 8.49995L21.7054 8.5L45.875 8.5M45.875 8.5L36.5252 1M45.875 8.5L36.5252 16" stroke="#071832" stroke-width="2"/></svg>
                  </div>
                </div></a>
                <a href="industries.php"><div class="areas__cell">
                  <div class="areas__image-holder">
                    <picture>
                        <source srcset="img/areas/area_image5.webp" type="image/webp">
                        <img src="img/areas/area_image5.jpg" loading="lazy" alt="">
                    </picture>
                  </div>
                  <div class="areas__cell-content">
                    <h4>Industrial</h4>
                    <svg width="48" height="17" viewBox="0 0 48 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.875 8.49995L21.7054 8.5L45.875 8.5M45.875 8.5L36.5252 1M45.875 8.5L36.5252 16" stroke="#071832" stroke-width="2"/></svg>
                  </div>
                </div></a>
                <a href="industries.php"><div class="areas__cell">
                  <div class="areas__image-holder">
                    <picture>
                      <source srcset="img/areas/area_image6.webp" type="image/webp">
                      <img src="img/areas/area_image6.jpg" loading="lazy" alt="">
                    </picture>
                  </div>
                  <div class="areas__cell-content">
                    <h4>Transportation</h4>
                    <svg width="48" height="17" viewBox="0 0 48 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.875 8.49995L21.7054 8.5L45.875 8.5M45.875 8.5L36.5252 1M45.875 8.5L36.5252 16" stroke="#071832" stroke-width="2"/></svg>
                  </div>
                </div></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- MAIN PROJECTS -->
      <section class="section-fade animate" data-section-name="PROJECTS">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title main-projects__title h2 mb-l">
                <h2>LET US SHOW YOU SOME <span class="underline type-2 animate">PROJECTS</span> WE WORKED ON</h2>
                <a href="projects.php" class="button">
                      View all projects
                    </a>
              </div>
              <div class="main-projects__grid">
                <a href="project-single.php">
                  <div class="project-bar">
                    <h5>LAX International Airport</h5>
                    <div class="text text-s mb-s">
                      Area: 20,000 Sq.M.  |  Year: 2020-21
                    </div>
                    <div class="project-bar__image">
                      <picture>
                        <source srcset="img/projects/project1.webp" type="image/webp">
                        <img src="img/projects/project1.jpg" loading="lazy" alt="">
                      </picture>
                    </div>
                  </div>
                </a>
                 <a href="project-single.php">
                  <div class="project-bar on-hover-green">
                    <h5>Gigafactory</h5>
                    <div class="text text-s mb-s">
                      Area: 20,000 Sq.M.  |  Year: 2020-21
                    </div>
                    <div class="project-bar__image">
                      <picture>
                        <source srcset="img/projects/project2.webp" type="image/webp">
                        <img src="img/projects/project2.jpg" loading="lazy" alt="">
                      </picture>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CTA -->
      <section class="section-fade animate" data-section-name="CONTACT US">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="cta__content">
                <img src="img/cta_decor.svg" loading="lazy" alt="">
                <div class="section-title mb-m2">
                  <h2>Let’s talk about your future project</h2>
                </div>
                <div class="cta__buttons">
                  <div>
                    <a href="services.php" class="button type-2 w100">
                      See our services
                    </a>
                  </div>
                  <div>
                    <button class="open-popup w100" data-rel="send-request">Send a request</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SOLUTION -->
      <section class="section-fade animate" data-section-name="SOLUTION FOR">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="solution__grid">
                <div class="solution__image-holder">
                  <picture>
                    <source srcset="img/solution_image1.webp" type="image/webp">
                    <img src="img/solution_image1.png" loading="lazy" alt="">
                  </picture>
                </div>
                <h2>BES TEAM HAS A LOT OF KEEN <span class="underline animate type-3">SOLUTIONS</span> FOR YOUR PROJECT</h2>
                <div class="solution__describtion">
                  <div class="text text-s">
                    Our company provides eectrical contractors with the best pre-constructio services for the following systems
                  </div>
                </div>
                <div class="solution__bottom">
                  <div class="text">
                    <ul>
                      <li><h5><a href="solutions.php">Electrical</a></h5></li>
                      <li><h5><a href="solutions.php">Instrumentation</a></h5></li>
                      <li><h5><a href="solutions.php">Telecom / Security / AV</a></h5></li>
                      <li><h5><a href="solutions.php">BMS</a></h5></li>
                      <li><h5><a href="solutions.php">Controls</a></h5></li>
                      <li><h5><a href="solutions.php">Fire Alarm</a></h5></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- NEWS -->
      <section data-section-name="NEWS">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-m2">
              <h2>OUR LATEST <span class="circled animate">NEWS</span></h2>
            </div>
            <div class="col-12">
              <div class="swiper-entry news__swiper mb-m2">
                <div class="swiper-container" data-options='{ 
                    "slidesPerView": 2, 
                    "spaceBetween": 30,
                    "destroy":"(min-width:992px)",
                    "autoHeight":"true",
                    "arrowsOut": true,
                    "breakpoints": {
                      "767": {"slidesPerView": 1}
                    }}'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                       <a href="blog-single.php">
                      <div class="news__item">
                        <div class="text text-s">
                          21 Jun 2022
                        </div>
                        <h5>CAD vs BIM: What’s the Difference?</h5>
                      </div></a>
                    </div>
                    <div class="swiper-slide">
                      <a href="blog-single.php">
                      <div class="news__item">
                        <div class="text text-s">
                          21 Jul 2022
                        </div>
                        <h5>Building Smart Revit Families: Reducing The Size Of Nested Families With Interchangeable Components</h5>
                      </div></a>
                    </div>
                    <div class="swiper-slide">
                      <a href="blog-single2.php">
                      <div class="news__item">
                        <div class="text text-s">
                          21 Jan 2022
                        </div>
                        <h5>How Can Construction Technology Be Used Efficiently To Help Support Compressed Project Schedules?</h5>
                      </div></a>
                    </div>
                    <div class="swiper-slide">
                       <a href="blog-single2.php">
                      <div class="news__item">
                        <div class="text text-s">
                          21 Jun 2022
                        </div>
                        <h5>How Smart Use Of Dynamo Saved Us $50,000!</h5>
                      </div></a>
                    </div>
                  </div>
                  
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <div class="news__btn-holder">
                <a href="blog.php" class="button">Read all news</a>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- FOOTER -->
      <?php include '_footer.php';?>
    
    </div>
    

    <!-- POPUP -->
    <div class="popup-wrapper">
    </div>

  </div>

  <?php include '_bottom.php';?>

</body>
</html>