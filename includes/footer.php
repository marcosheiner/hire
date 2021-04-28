
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="../owlcarousel/owl.carousel.min.js"></script>

    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots: false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        },
        600:{
            items:3,
            nav:false,
            loop:true
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
        
    })
    </script>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </body>
</html>
</body>
</html>