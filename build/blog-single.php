<!DOCTYPE html>
<html lang="en">
<head>

  <?php include '_top.php';?>
  <link rel="stylesheet" href="css/blog-top.css">
  
  <title>BES | Blog Single </title>
</head>
<body>
   <!-- LOADER -->
  <div id="loader-wrapper"></div>

  <div id="content-block"> 
    
    <!-- HEADER -->
    <?php include '_header.php';?>

    <div class="content-wrap">
      <!-- BLOG SINGLE TITLE 1 -->
      <section class="blog-single__title1" data-section-name="BLOG">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <ul class="breadcrumbs blog-single__breadcrumbs">
                <li><a href="index.php">HOME</a></li>
                <li><a href="projects.php">BLOG</a></li>
                <li>DEBUNKING THE 5 MOST COMMON BIM MYTHS </li>
              </ul>
              <div class="blog-single__title-content">
                <div class="text text-s">
                  21.08.2021 
                </div>
                <h4>Debunking the 5 most common BIM myths </h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="blog-single__content" data-section-name="BLOG">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
              <div class="simple-page text text-s">
                <h5>Debunking the 5 most common BIM myths</h5>
                <p>
                  Over the years, there have been more and more myths related to Building Information Modeling. Today we will focus on breaking down the most common misconceptions. Oftentimes BIM misconceptions and false assumptions can cause many doubts that might lead to big mistakes when making strategic decisions. 
                </p>
                <p>
                  They may sound basic to some readers, but it is critical to clear up some of these misbeliefs in order to allow BIM technology to keep expanding and help more projects to be designed and built more efficiently. With proper knowledge and information, popular misinterpretations can be refuted, and the journey towards digitization of the AEC Industry can seamlessly move forward.  
                </p>
                <div class="swiper-entry">
                  <div class="swiper-container" data-options='{ 
                      "slidesPerView": 1, 
                      "spaceBetween": 50,
                      "autoHeight":"true",
                      "arrowsOut": true
                      }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <picture>
                          <source srcset="img/blog/blog-single-image1.webp" type="image/webp">
                          <img src="img/blog/blog-single-image1.jpg" alt="">
                        </picture>
                      </div>
                      <div class="swiper-slide">
                        <picture>
                          <source srcset="img/blog/blog-single-image1.webp" type="image/webp">
                          <img src="img/blog/blog-single-image1.jpg" alt="">
                        </picture>
                      </div>
                      <div class="swiper-slide">
                        <picture>
                          <source srcset="img/blog/blog-single-image1.webp" type="image/webp">
                          <img src="img/blog/blog-single-image1.jpg" alt="">
                        </picture>
                      </div>
                      
                    </div>
                  </div>
                  <div class="swiper-pagination swiper-pagination-relative"></div>
                </div>
                <h5>Misconception: BIM is just a Software</h5>
                <ul>
                  <li>BIM is more than “just software”</li>
                  <li>It is a collaborative process that increases a more cooperative way of working and makes information easily accessible to everyone working on a construction project.</li>
                  <li>Simply put, BIM cannot be installed because it is a process. </li>
                  <li>Various software can be used in BIM but, even though the software is important, the real secret relies in how it is implemented, which is what takes BIM to the next level. </li>
                </ul>
                <picture>
                  <source srcset="img/blog/blog-single-image2.webp" type="image/webp">
                  <img src="img/blog/blog-single-image2.jpg" alt="">
                </picture>
                <h5>
                  BIM is only applicable for big scale projects 
                </h5>
                <ol>
                  <li>
                    BIM should not be restricted just to large and complex projects.
                  </li>
                  <li>
                    When investing in BIM, it can seem like a big commitment for smaller jobs, which sometimes makes them hold back from taking advantage of this technology.
                  </li>
                  <li>
                    But even smaller projects must comply with government regulations. 
                  </li>
                  <li>
                    Maybe, you need to adjust the BIM uses to what brings real value to a simpler project
                  </li>
                </ol>
                <h5>BIM is only applicable for big scale projects </h5>
                <div class="table-wrapper">
                  <table>
                    <tr>
                      <th>Property Features</th>
                      <th>Models</th>
                      <th>Type</th>
                      <th>Features</th>
                    </tr>
                    <tr>
                      <td>Constructible Models:</td>
                      <td>Field labor</td>
                      <td>Storage</td>
                      <td>Job-site waste</td>
                    </tr>
                    <tr>
                      <td>Material:</td>
                      <td>Promote safety</td>
                      <td>Enhance quality control</td>
                      <td>Reduce costs</td>
                    </tr>
                    <tr>
                      <td>Software:</td>
                      <td>AutoCAD / AutoCAD MEP</td>
                      <td>Autodesk Fabrication CADmep</td>
                      <td>Autodesk Revit with Fabrication Parts</td>
                    </tr>
                    <tr>
                      <td>BIM software:</td>
                      <td>Navisworks</td>
                      <td>Bluebeam</td>
                      <td></td>
                    </tr>
                  </table>
                </div>
                <blockquote>
                  Although 3D geometry modeling is the most recognized component of BIM and one of the key parts of the concept, it is only a small aspect of a comprehensive process. 
                </blockquote>
                <iframe src="https://www.youtube.com/embed/wY5m5q1g4mo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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