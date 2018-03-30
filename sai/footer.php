  <footer class="fixed-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div>
                        <a style="color:#fff" href="#">&copy; Copyright MISAISEVA | Designed by <a href="http://webmobilez.com/" target="_blank">WebMobileZ</a></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div>
                        <a style="color:#fff" href="#">Address: 3830 CROOKS RD, TROY MI</a>
                    </div>
                </div>
               
            </div>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!-- Custom Sctoll -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll/jquery.mCustomScrollbar.js"></script>
    <!-- Script to Activate the Carousel -->
    <script type="text/javascript">
//        $('.carousel').carousel({
//            interval: 5000 //changes the speed
//        })
    </script>
    <script type="text/javascript">
        $('.carousel1').carousel({
            interval: 5000 //changes the speed
        })
        $('.carousel2').carousel({
            interval: 5000 //changes the speed
        })
    </script>
    
    <script>
    (function($){
			$(window).on("load",function(){
				
				$("body").mCustomScrollbar({
					theme:"minimal"
				});
				
			});
		})(jQuery);
</script>
</body>
</html>
