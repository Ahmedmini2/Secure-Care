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
      $('.translate2').on('select',function() {
        var lang = $(this).attr('id');

        $('.lang').each(function(index, item) {
          $(this).text(arrLang[lang][$(this).attr('key')]);
        });
      });
    });
  </script>