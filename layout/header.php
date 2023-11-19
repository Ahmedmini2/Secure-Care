<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
    var arrLang = {
        en : {
            'home' : 'Home',
            'about' : 'About Us',
            'services' : 'Services',
            'contact' : 'Contact Us',
            'blogs' : 'Blogs',
        },
        ar : {
            'home' : 'الرئيسية',
            'about' : 'من نحن',
            'services' : 'خدماتنا',
            'contact' : 'تواصل معنا',
            'blogs' : 'المدونة',
        }
    };

    // Process translation
    $(function() {
      $('.translate2').on('change',function() {
        var lang = $('.lang-sel').attr('id');

        $('.lang').each(function(index, item) {
          $(this).text(arrLang[lang][$(this).attr('key')]);
        });
      });
    });
  </script> 
 
 <!-- Header Area Starts -->
 <header class="header-area">
     <div class="header-top">
         <div class="container">
             <div class="row">
                 <div class="col-lg-9 d-md-flex">
                     <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                     <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> Secure Care@Secure Care.com</h6>
                     <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                 </div>
                 <div class="col-lg-3">
                     <div class="social-links">
                         <ul>
                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                             <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="header" id="home">
         <div class="container">
             <div class="row align-items-center justify-content-between d-flex">
                 <div id="logo">
                     <a href="index.html"><img src="assets/images/logo/logo3.png" alt="" title="" /></a>
                 </div>
                 <nav id="nav-menu-container">
                     <ul class="nav-menu">

                         <li class="menu-active"><a class="lang" key="home" href="index">Home</a></li>

                         <li class="menu-has-children"><a class="lang" key="services" href="">Services</a>

                             <ul>
                                 <li><a href="Determination">Trading Equipment for Individuals with Determination</a></li>
                                 <li><a href="Products">Trading Paper Products</a></li>
                                 <li><a href="Pharmaceutical">Trading Pharmaceutical Non-Drug Products</a></li>
                                 <li><a href="Cosmetics">Trading Cosmetics & Perfumes</a></li>
                                 <li><a href="Surgical">Trading Surgical and Medical Requisites</a></li>
                             </ul>
                         </li>

                         <li><a class="lang" href="about">About Us</a></li>


                         <li class="menu-has-children"><a class="lang" href="">Contact Us</a>

                             <ul>
                                
                             <li><a href="address">Address</a></li>
                             <li><a href="phone">Phone</a></li>
                             <li><a href="email">Email</a></li>
                             <li><a href="contact_form">Contact Form</a></li>
                             </ul>
                         </li>

                             <ul>
                                 <li><a href="blog-home">blog home</a></li>
                                 <li><a href="blog-details">blog details</a></li>
                             </ul>
                         </li>
                         <li>
                         <select class="translate2">
                            <option id="ar" class="lang-sel" value="عربي">عربي</option>
                            <option id="en" class="lang-sel" value="English">English</option>
                         </select>
                         </li>
                     </ul>
                 </nav><!-- #nav-menu-container -->
             </div>
         </div>
     </div>
 </header>
 <!-- Header Area End -->