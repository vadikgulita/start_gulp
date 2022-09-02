<script defer src="js/simple-lightbox.min.js"></script>
  <link rel="stylesheet" href="css/simplelightbox.css">
  <script>
    function sleep(ms) {
        return new Promise((resolve) => setTimeout(resolve, ms));
    }
    document.addEventListener("DOMContentLoaded",function(){
        var lightBoxOptions = {
            disableScroll: false,
            captionSelector: 'self',
            closeText: '<span class="btn btn-close"></span>',
            alertErrorMessage: 'Picture not found',
            history: false,
            widthRatio: 1,
            heightRatio: 1
        },
        lightboxSelector = $('.lightbox-wrapper'),
        lightboxLength = lightboxSelector.length,
        lightbox = [];
        for(var i = 0; i < lightboxLength; i++){
            lightbox[i] = $(lightboxSelector[i]).find('.lightbox').simpleLightbox(lightBoxOptions);
        }
    });
  </script>