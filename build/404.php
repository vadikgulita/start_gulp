<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '_top.php';?>
  
  <title>BES | 404</title>
</head>
<body>
   <!-- LOADER -->
  <div id="loader-wrapper"></div>

  <div id="content-block"> 
    
    <!-- HEADER -->
    <?php include '_header.php';?>

    <div class="content-wrap">
      <!-- 404 -->
      <section class="not-found__section" data-section-name="OOPS! PAGE NOT FOUND">
        <div class="not-found__code">404</div>
        <div class="not-found__images">
            <div class="not-found-image-left">
              <img src="img/404-1.svg" alt="">
            </div>
            <div class="not-found-image-right">
              <img src="img/404-2.svg" alt="">
            </div>
        </div>
        <h4>Page not found</h4>
          <div class="text text-s">
            We’re sorry, the page you requested could not be found. <br> Please go back to the home page
          </div>
          <div>
            <a href="index.php" class="button">Go to home page</a>
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