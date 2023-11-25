<!DOCTYPE html>
<html lang="en">
<?php include('layout/head.php'); ?>
<body>
    <!-- Preloader Starts -->
    <?php include('layout/loader.php'); ?>  

    <!-- Preloader End -->

   <!-- Header Area Starts -->
   <?php include('layout/header.php'); ?>
    <!-- Header Area End -->

<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact Us</h1>
                <a href="index.html">Home</a> <span>|</span> <a href="contact.html">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Our doors are always open, virtually or otherwise. Whether you're a healthcare professional seeking specific supplies or an individual looking for support, reach out to us. Our customer service team is not just knowledgeable; they're empathetic and ready to guide you. Connect with us through social media to stay updated on the latest offerings and industry insights.</p>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d758.5387901609495!2d55.33288476035634!3d25.262547594374094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cdccf33699d%3A0xc5f95631a018e2ea!2sAl%20Kalbani%20Business%20Center%20Building!5e0!3m2!1sen!2sae!4v1700847708668!5m2!1sen!2sae" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Al Kalbani Business - Al Khabaisi - Dubai</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@securecare.ac<br>sales@securecare.ae</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>(+966) – 04 450 8488</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 pb-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              
              <div class="text-center"><button type="submit" name="submit" class="template-btn">Contact Us</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


    <?php include('layout/footer.php'); ?>



</body>
</html>
