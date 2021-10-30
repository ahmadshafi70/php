<?php
// Start the session
session_start();
?>
<!doctype html>
<html>
<?php include('layouts/head.php') ?>
<?php 
$_SESSION["title"] = "From About Us";
$_SESSION["content"] = "My First Content";
$_SESSION["robots"] = "";
$_SESSION["code"] = "";
?>	
<body>
	
    <div id="top_arrow"></div>
   	<button onClick="topFunction()" id="gototop" title="Go to top">
    	<i class="fa fa-angle-up"></i>
    </button>
    
<div class="page-wrapper">
	<?php include('layouts/header.php') ?>


<section>
	<div class="inner-banner">
    	<h1>Our Team</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>
				<div class="content">
				<div class="container">
				
       				<div class="rwi-management">
					<div class="container">
						
						<div class="row">
						<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            					<div class="team">
           						<img src="images/management/arzoo-akhtar.jpg" class="circle"  alt=""/> 
           						<h2>Arzoo Akhtar</h2>
           						<p>Director</p>
           						</div>
           				  </div>
            			  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0">
            					<div class="team">
           						<img src="images/management/muhammad-afzal.jpg" class="circle"  alt=""/> 
           						<h2>Muhammad Afzal</h2>
           						<p>CEO - SEO PPC SMM YT Consultant</p>
           						</div>
           				  </div>
                          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            					<div class="team">
           						<img src="images/management/yasir-irfan-qazi.jpg" class="circle"  alt=""/> 
           						<h2>Yasir Irfan Qazi</h2>
           						<p>SEO PPC SMM Expert</p>
           						</div>
           				  </div>
           				  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0">
            					<div class="team">
           						<img src="images/management/saqib-aftab.jpg" class="circle"  alt=""/> 
           						<h2>Saqib Aftab</h2>
           						<p>SEO Manager</p>
           						</div>
           				  </div>
                          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            					<div class="team">
           						<img src="images/management/abdul-rehman.jpg" class="circle"  alt=""/>
           						<h2>Abdul Rehman</h2>
           						<p>SEO Expert</p>
           						</div>
           				  </div> 
           				  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0">
            					<div class="team">
           						<img src="images/management/atiqa-murtaza.jpg" class="circle"  alt=""/> 
           						<h2>Atiqa Murtaza</h2>
           						<p>SEO PPC Expert</p>
           						</div>
           				  </div>
                          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0">
            					<div class="team">
           						<img src="images/management/tahreem-khanum.jpg" class="circle"  alt=""/>
           						<h2>Tahreem Khan</h2>
           						<p>SEO &amp; PPC Expert</p>
           						</div>
           				  </div>
           				  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            					<div class="team">
           						<img src="images/management/arfa-faizan.jpg" class="circle"  alt=""/> 
           						<h2>Arfa Faizan</h2>
           						<p>Content Writing Expert</p>
           						</div>
           				  </div>
                          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            					<div class="team">
           						<img src="images/management/mehwish-arslan.jpg" class="circle"  alt=""/> 
           						<h2>Mehwish Mushtaq</h2>
           						<p>Content Writing Expert</p>
           						</div>
           				  </div>
                          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            					<div class="team">
           						<img src="images/management/anam-chaudhary.jpg" class="circle"  alt=""/> 
           						<h2>Anam Chaudhary</h2>
           						<p>SEO Expert</p>
           						</div>
           				  </div>
           				  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            					<div class="team">
           						<img src="images/management/rashid-iqbal.jpg" class="circle"  alt=""/> 
           						<h2>Rashid Iqbal</h2>
           						<p>WordPress Expert</p>
           						</div>
           				  </div>
                          
           				  
           				  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
            					<div class="team">
           						<img src="images/management/muhammad-amjad-awan.jpg" class="circle"  alt=""/> 
           						<h2>Muhammad Amjad</h2>
           						<p>PHP &amp; Laravel Guru</p>
           						</div>
           				  </div>
           				  <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            					<div class="team">
           						<img src="images/management/anees-bashir.jpg" class="circle"  alt=""/> 
           						<h2>Anees Bashir</h2>
           						<p>WordPress &amp; DM Expert</p>
           						</div>
           				  </div>
                          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
            					<div class="team">
           						<img src="images/management/zeeshan-saleem.jpg" class="circle"  alt=""/> 
           						<h2>Zeeshan Saleem</h2>
           						<p>SEO &amp; eBay Expert</p>
           						</div>
           				  </div>
        				      				  	
           				  
            			</div>
						
					</div>
				</div>
       			
				</div>
				</div> <!--rwi-intro ends-->
			</section>
    
<?php include('layouts/footer.php') ?>

</div> <!--page-wrapper ends-->


	 <script src="js/jquery.min.js"></script>
     <script src="js/jquery.browser.js"></script>
     <script src="popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     
     <script type="text/javascript" src="js/owl.carousel.js"></script>
	 <script>
		$(document).ready(function() {
			
		  $(".owl-demo").owlCarousel({

			  autoPlay: 3000, //Set AutoPlay to 3 seconds

			  items :7,
			  itemsDesktop : [1199,3],
			  itemsDesktopSmall : [979,3],
			  navigation : true,
			  pagination : false

		  });
			
		  $(".owl-demo2").owlCarousel({

			  autoPlay: 3000, //Set AutoPlay to 3 seconds

			  items :4,
			  itemsDesktop : [1199,3],
			  itemsDesktopSmall : [979,3],
			  navigation : true,
			  pagination : false

		  });

		});
			
	 	</script>
	 
     	<script src="js/wow.min.js"></script>
		<script>
               // Sets interval...what is transition slide speed?
            $('#mainCarousel').carousel({
            interval: 1500
            });
        </script>
        <script>
              new WOW().init();
        </script>
    
     
     
     
     <script>
     	(function ($) {
		$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
								}
							}
							
							function render(value) {
								var formattedValue = settings.formatter.call(self, value, settings);
								$self.html(formattedValue);
							}
						});
					};
					
					$.fn.countTo.defaults = {
						from: 0,               // the number the element should start at
						to: 0,                 // the number the element should end at
						speed: 1000,           // how long it should take to count between the target numbers
						refreshInterval: 100,  // how often the element should be updated
						decimals: 0,           // the number of decimal places to show
						formatter: formatter,  // handler for formatting the value before rendering
						onUpdate: null,        // callback method for every time the element is updated
						onComplete: null       // callback method for when the element finishes updating
					};
					
					function formatter(value, settings) {
						return value.toFixed(settings.decimals);
					}
				}(jQuery));
				
				jQuery(function ($) {
				  // custom formatting example
				  $('.count-number').data('countToOptions', {
					formatter: function (value, options) {
					  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
					}
				  });
				  
				  // start all the timers
				  $('.timer').each(count);  
				  
				  function count(options) {
					var $this = $(this);
					options = $.extend({}, options || {}, $this.data('countToOptions') || {});
					$this.countTo(options);
				  }
				});
     </script>
	
    <script>
	$(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});

	</script>
    	
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("gototop").style.display = "block";
		  } else {
			document.getElementById("gototop").style.display = "none";
		  }
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			$('html, body').animate({
				scrollTop: $("#top_arrow").offset().top
			}, 1000);
			// document.body.scrollTop = 0;
			// document.documentElement.scrollTop = 0;
		}
	</script>
	
     
</body>

</html>
