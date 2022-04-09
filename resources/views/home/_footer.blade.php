 <!--Footer -->
 <section class="buttom-footer py-lg-5 py-md-4 py-sm-3 py-3">
         <div class="headder-logo-icon text-center">
            <span class="fab fa-accusoft"></span> 
            <h2><a href="index.html">Inside-Art</a></h2>
         </div>
         <div class="buttom-nav py-3">
            <nav class="border-line">
               <ul class="nav justify-content-center">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a href="about.html" class="nav-link ">About</a>
                  </li>
                  <li class="nav-item">
                     <a href="service.html" class="nav-link">Services</a>
                  </li>
                  <li class="nav-item">
                     <a href="contact.html" class="nav-link">Contact</a>
                  </li>
               </ul>
            </nav>
         </div>
      </section>
      <footer>
         <div class="footer-bottom py-lg-4 py-3 text-center">
            <p>©2018 Inside-Art. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
         </div>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--  light box js -->
      <script src="{{asset('assets')}}/js/lightbox-plus-jquery.min.js"> </script> 
      <!-- //light box js-->   
      <!--responsiveslides banner-->
      <script src="{{asset('assets')}}/js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:true ,
         		nav:false,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--Slider flexiselDemo3-->	
      <script src="{{asset('assets')}}/js/jquery.flexisel.js"></script>  
      <script>
         $("#flexiselDemo3").flexisel({
          visibleItems: 4,
          itemsToScroll: 1,         
          autoPlay: {
              enable: true,
              interval:2000,
              pauseOnHover: true
          }        
         });
      </script>
      <!--Slider flexiselDemo3-->	  
      <!-- start-smoth-scrolling -->
      <script src="{{asset('assets')}}/js/move-top.js"></script>
      <script src="{{asset('assets')}}/js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1100,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->