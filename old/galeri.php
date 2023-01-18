
<head>
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="js/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.0"></script>
    <script type="text/javascript">$(document).ready(function() {
        /*
         *  Simple image gallery. Uses default settings
         */

        $('.fancybox').fancybox();
      });
    </script>
</head>

<body>
      <!-- Slideshow container -->
      <section id="advanced-features">
  <!-- Sesi untuk Procedures -->
    <div class="features-row" id="galeri">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- <img class="advanced-feature-img-left" src="img/advanced-feature-2.jpg" alt=""> -->
            <div class="wow fadeInRight">
              <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
              <br>
              <h2 style="text-align:left;">Testimonials </h2>
              <h3> </h3>
              <center>
              <div>
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides "> 
            <img src="img/TESTI2.jpg" style="width:80%">
            <div class="text"></div>
          </div>

          <div class="mySlides">
            <img src="img/TESTI3.jpg" style="width:80%">
            <div class="text"></div>
          </div>

          <div class="mySlides">
            <img src="img/TESTI.jpg" style="width:80%">
            <div class="text"></div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" style="margin-right: 800px;" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>

          <!-- The dots/circles -->
          <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
      </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</section>
<section id="advanced-features">
  <!-- Sesi untuk Procedures -->
    <div class="features-row" id="galeri">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- <img class="advanced-feature-img-left" src="img/advanced-feature-2.jpg" alt=""> -->
            <div class="wow fadeInRight">
              <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
              <br>
              <h2>Gallery </h2>
              <h3> </h3>
              <center><iframe style="width: 50%; height: 320px;" src="https://www.youtube.com/embed/M8ayvZfhp2s" frameborder="0" allowfullscreen></iframe></center>
              <center>
              <p class="wow fadeInRight" data-wow-duration="0.5s">
                <div class="row">
                  
                <a class="fancybox col-lg-4 col-sm-12" href='img/gallery/42.JPG'
                  data-fancybox-group="gallery" > <img class="img-polaroid"
                  src='img/gallery/42.JPG'
                  width='100%'  alt="" /> &nbsp;</a>

                  <a class="fancybox col-lg-4 col-sm-12" href='img/gallery/51.JPG'
                  data-fancybox-group="gallery" > <img class="img-polaroid"
                  src='img/gallery/51.JPG'
                  width='100%'  alt="" /> &nbsp;</a>

                  <a class="fancybox col-lg-4 col-sm-12" href='img/gallery/50.JPG'
                  data-fancybox-group="gallery" > <img class="img-polaroid"
                  src='img/gallery/50.JPG'
                  width='100%'  alt="" /> &nbsp;</a>

                  <a class="fancybox col-lg-4 col-sm-12" href='img/gallery/21.JPG'
                  data-fancybox-group="gallery" > <img class="img-polaroid"
                  src='img/gallery/21.JPG'
                  width='100%'  alt="" /> &nbsp;</a>
                  
                  <a class="fancybox col-lg-4 col-sm-12" href='img/gallery/31.JPG'
                  data-fancybox-group="gallery" > <img class="img-polaroid"
                  src='img/gallery/31.JPG'
                  width='100%'  alt="" /> &nbsp;</a>

                  <a class="fancybox col-lg-4 col-sm-12" href='img/gallery/14.JPG'
                  data-fancybox-group="gallery" > <img class="img-polaroid"
                  src='img/gallery/14.JPG'
                  width='100%'  alt="" /> &nbsp;</a>
                  </div>


                  <a href="gallery.php" target="_blank" class='tombol'>View More</a>  

              </p>
              </center>
                <div class="col-md-6 text-center">

            <!-- <video width="100%" controls autoplay>
              <source src="assets/video/teaser.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video> -->
            
               </div>

          <div>
          
          </div>

          <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
          </script>

  </body>
              <p>
                <br>
                <br>
              </p>
              <!--
              <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
              <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4" data-wow-duration="0.5s"></i>
              <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            -->
            </div>
          </div>
        </div>
      </div>
    </div>

</section>
