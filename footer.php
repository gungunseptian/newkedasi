
        <footer id="footer">
            <div class="container">
             
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-btm">
                            <span>&copy; Copyright 2017. Kedasi.co.id</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--footer end-->
        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--easing plugin for nice scroll scroll-->

        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--very easy to use portfolio filter plugin -->
        <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!--customizable plugin edit according to your needs-->
        <script src="js/custom.js" type="text/javascript"></script>
        
                 <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js"></script>
   
     <script>
    $(function() {
        $('.lazy').Lazy();
        
        $('#myModal').modal('show')

        $( ".tomang" ).hide()
        $( ".thamrin" ).hide()
        $( ".tanjung" ).hide()
        
    });
    
    var clicks = 0;
    $( ".tomang_button" ).click(function() {
        
      $( ".tomang" ).slideDown( "slow", function() {
        
        $( ".tanjung" ).hide()
        $( ".thamrin" ).hide()

      });
    });
    
    var clicks = 0;
    $( ".tanjung_button" ).click(function() {
      $( ".tanjung" ).slideDown( "slow", function() {
        
        $( ".tomang" ).hide()
        $( ".thamrin" ).hide()

      });
    });

    var clicks = 0;
    $( ".thamrin_button" ).click(function() {
      $( ".thamrin" ).slideDown( "slow", function() {
        
        $( ".tanjung" ).hide()
        $( ".tomang" ).hide()

      });
    });

    
     </script>

    </body>
</html>
