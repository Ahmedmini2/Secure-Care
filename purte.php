<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
        body {
            background-color: #000;
        }
  
  .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to bottom, rgba(14, 29, 51, 0.8), rgba(14, 29, 51, 0.2));
  }
  
  .hero-slider {
    width: 100%;
    height: 100vh;
    overflow: hidden;
  }
  .hero-slider .carousel-cell {
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
  .hero-slider .carousel-cell .inner {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    text-align: center;
  }
  .hero-slider .carousel-cell .inner .subtitle {
    font-family: "Roboto Slab", serif;
    font-size: 2.2rem;
    line-height: 1.2em;
    font-weight: 200;
    font-style: italic;
    letter-spacing: 3px;
    color: rgba(255, 255, 255, 0.5);
    margin-bottom: 5px;
  }
  .hero-slider .carousel-cell .inner .title {
    font-family: "Montserrat", sans-serif;
    font-size: 3rem;
    line-height: 1.2em;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 40px;
  }
  .hero-slider .carousel-cell .inner .btn {
    border: 1px solid #fff;
    padding: 14px 18px;
    text-transform: uppercase;
    font-family: "Montserrat", sans-serif;
    font-size: 0.8rem;
    letter-spacing: 3px;
    color: #fff;
    text-decoration: none;
    transition: all 0.2s ease;
  }
  .hero-slider .carousel-cell .inner .btn:hover {
    background: #fff;
    color: #000;
  }
  .hero-slider .flickity-prev-next-button {
    width: 80px;
    height: 80px;
    background: transparent;
  }
  .hero-slider .flickity-prev-next-button:hover {
    background: transparent;
  }
  .hero-slider .flickity-prev-next-button .arrow {
    fill: white;
  }
  .hero-slider .flickity-page-dots {
    bottom: 30px;
  }
  .hero-slider .flickity-page-dots .dot {
    width: 30px;
    height: 4px;
    opacity: 1;
    background: rgba(255, 255, 255, 0.5);
    border: 0 solid white;
    border-radius: 0;
  }
  .hero-slider .flickity-page-dots .dot.is-selected {
    background: #ff0000;
    border: 0 solid #ff0000;
  }
        </style>

        <script type="text/javascript">
            var options = {
    accessibility: true,
    prevNextButtons: true,
    pageDots: true,
    setGallerySize: false,
    arrowShape: {
      x0: 10,
      x1: 60,
      y1: 50,
      x2: 60,
      y2: 45,
      x3: 15
    }
  };
  
  var carousel = document.querySelector('[data-carousel]');
  var slides = document.getElementsByClassName('carousel-cell');
  var flkty = new Flickity(carousel, options);
  
  flkty.on('scroll', function () {
    flkty.slides.forEach(function (slide, i) {
      var image = slides[i];
      var x = (slide.target + flkty.x) * -1/3;
      image.style.backgroundPosition = x + 'px';
    });
  });
            </script>
</head>
<body>


<div class="hero-slider" data-carousel>
  <div class="carousel-cell" style="background-image:url(https://68.media.tumblr.com/57836ee52bc9355ad7c5fed5abf91ccc/tumblr_oiboo6MaRS1slhhf0o1_1280.jpg);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">Slide 1</h3>
      <h2 class="title">Flickity Parallax</h2>
      <a href="https://flickity.metafizzy.co/" target="_blank" class="btn">Tell me more</a>
    </div>
  </div>
<div class="carousel-cell" style="background-image:url(https://68.media.tumblr.com/c40636a5a0d4aa39c335c8db40d2144f/tumblr_omc7z7Xv8N1slhhf0o1_1280.jpg);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">Slide 2</h3>
      <h2 class="title">Flickity Parallax</h2>
      <a href="https://flickity.metafizzy.co/" target="_blank" class="btn">Tell me more</a>
    </div>
  </div>
<div class="carousel-cell" style="background-image:url(https://68.media.tumblr.com/3beb13a4167aa8b5c4743eac17bf351c/tumblr_o8nyvtiHfC1slhhf0o1_1280.jpg);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">Slide 3</h3>
      <h2 class="title">Flickity Parallax</h2>
      <a href="https://flickity.metafizzy.co/" target="_blank" class="btn">Tell me more</a>
    </div>
  </div>
</div>


</body>
</html>
