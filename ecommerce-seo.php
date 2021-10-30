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
    	<h1>Shopping Website's eCommerce SEO Services</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>
		<div class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 order-md-2"><img src="images/services/web-development/ecommerce-seo-services.jpg" class="img-fluid" alt="ecommerce-seo-services2.jpg"/></div>
					<div class="col-md-6">
<h2>E-commerce SEO Company That Delivers Results</h2>

<p>Do you own an e-commerce business? With this trend taking over the world with storm, fighting your way through the extreme competition to attract a larger audience and excel is what every e-commerce store wishes to achieve.</p>

<p>Thus, for astounding results through the use of the right tools and implementation of strategies, the e-commerce SEO experts on-board Real Web Ideas make it possible!</p>

<p>We are a local e-commerce SEO firm that has helped hundreds of e-commerce stores rank amongst the top online stores on Google. If your marketing strategies aren’t gaining you 
genuine traffic, call our e-commerce SEO experts in!</p>

<p>We’ll make sure you achieve your target, which otherwise seemed impossible!</p>


<input name="" type="button" value="Drive Organic Sales" class="dtail-btn" onClick="window.location.href='contact.html';"> 
	 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					<div class="col-md-6"><img src="images/services/web-development/ecommerce-seo-services2.jpg" class="img-fluid" alt="ecommerce-seo-services2.jpg"/></div>
					<div class="col-md-6">
<h2>Why Do You Need To Hire a Professional E-commerce SEO Company?</h2>

<p>Do you think you’re doing well in terms of online business? Are you able to achieve your monthly/yearly target till now? How much are you making in profit?</p>

<p>Even if you’re e-commerce store is doing great at the moment, you can still do better with the help of our e-commerce SEO consultants. Why do you need to hire us? this is because:</p>

<ul>
<li>Your products and services need to rank atop of your competitor’s products/services</li>
<li>We’ll analyze the current ranking of your e-commerce store and driver strategies to improve performance</li>
<li>Our e-commerce consultants will help engage a larger pool of audience through the right advertisement</li>
</ul>

<p>Real Web Ideas is a local e-commerce SEO business in Lahore Pakistan who has helped numerous online stores in flourishing their business by creating a stronger online presence.</p>

<input name="" type="button" value="Get Started" class="dtail-btn" onClick="window.location.href='contact.html';"> 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					
                    <div class="col-md-6 order-md-2">
<h2>What E-commerce SEO Services Do We Offer?</h2>

<p>Our e-commerce SEO services aren’t limited to only the placement of keywords but are a lot more than the basics. Here is what we offer:</p>
<ul>
<li>Attractive product descriptions that give the customers insight about the product/service itself</li>
<li>Right placement of keywords that go well with the products and help them rank above your competitor’s product/service</li>
<li>Complete competitor analysis to help develop better strategies</li>
<li>Have marketers working to market your product/service</li>
<li>Target potential clients and engage the audience</li>
</ul>

<p>Thus, we are an e-commerce SEO company run by experts who hold vast knowledge and experience in the field which makes it possible to deliver the best results each time!</p>
                    


<input name="" type="button" value="Get an Appointment" class="dtail-btn" onClick="window.location.href='contact.html';">                    
                    </div>
                    
					<div class="col-md-6">
<h2>Find The Best E-commerce SEO Solutions Right Here</h2>

<p>Do you want to be counted amongst the top runners too? Own an online store that is recognized by the majority? If yes, you need our e-commerce consultants to take over!</p>

<p>We foster the best e-commerce SEO solutions that align with your business idea to produce maximum outcomes. The important things to remember here is that competition amongst e-commerce stores is extremely tough and hence, to stand and to be recognized, your business needs to play cleverly.</p>

<p>Hence, here at Real Web Idea, a local e-commerce SEO firm in Lahore Pakistan, we have e-commerce SEO experts and consultants who know their work well. And most importantly, we offer affordable e-commerce SEO services so those who have just started can benefit from our expertise as well!</p>


<input name="" type="button" value="Contact Us" class="dtail-btn" onClick="window.location.href='contact.html';">
					</div>
                    
			  </div>
              	<hr>
              	
			</div>
		</div>
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
