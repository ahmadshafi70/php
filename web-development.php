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
    	<h1>Web Development</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>
		<div class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 order-md-2"><img src="images/services/web-development/website-development-company-lahore2.jpg" class="img-fluid" alt="website-development-company-lahore.jpg"/></div>
					<div class="col-md-6">
						<h2>We Can Make A Difference</h2>
						<p>When it comes to the best web development service provider, no one can do it better than Real Web Idea. We are a professional <strong>web development company Lahore</strong> that was formed with an ideology to help clients make their virtual presence strong and felt.</p> 

<p>Hence, established with highly experienced and knowledgeable professionals on board, <strong>Real Web idea</strong>, a <strong>local web development firm</strong> has surely revolutionized the game!</p>

<p>We bet there are not many companies in Pakistan, especially in Lahore that can develop great websites for you. Being a <strong>local web development company</strong>, we pay more heed to our client’s demand and only based on your requirements do we <strong>create a website</strong> that you can proudly own.</p>

<p>The <strong>web development experts</strong> and consultants are available 24x7, guiding you through the entire process and making hiring and executing flawless and smooth!</p>

<input name="" type="button" value="Get Started" class="dtail-btn" onClick="window.location.href='contact.html';">
<input type="button" onClick="parent.location='contact.html'" value='click here'>


					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					<div class="col-md-6"><img src="images/services/web-development/website-development-company-lahore.jpg" class="img-fluid" alt="website-development-company-lahore.jpg"/></div>
					<div class="col-md-6">
						<h2>Lahore's Trustworthy Business Web Development Solutions</h2>
<p>Are you stuck at a point where you are unable to attract traffic to your website? If you’re unable to find the problem, hire Real Web idea for the work right away!</p>

<p>Our <strong>web development consultants</strong> will dig deep into the problem and fix it with the most reasonable solutions. But what exactly do we cover in our <strong>web development services</strong>? Here is what we do:</p>
<ol>
<li>Develop responsive websites with user-friendly interfaces</li>
<li>Also, develop websites on test serves so you can check for the progress and experience those in real-time</li>
<li>Create aesthetically appealing websites</li>
<li>Top notch website development at market competitive prices</li>
<li>Hand all the tedious work at the back-end and front-end</li>
<li>Scripting websites in languages including Java, PHP, SQL etc.</li>
</ol> 
<input name="" type="button" value="Contact Now" class="dtail-btn" onClick="window.location.href='contact.html';">

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					
                    <div class="col-md-6 order-md-2">
						<h2>Make the Right Choice</h2>

<p>Running a local business in a market with cut-throat competition isn’t easy and yet, here we stand to be recognized by our clients and loved by all. Our web development experts Lahore are best in their field of work and hence, it allows them to create magic that gives your company a whole new dimension “virtually”.</p>

<p>Real Web idea provides “real” <strong>solutions for your web problems</strong>. Whether your site isn’t ranking atop on Google or is aesthetically unpleasing, our web development experts will get to the root of the problem and fix it from the scratch.</p>

<p>With us having your back, you can be sure of enjoying the best and most <strong>professional web development</strong> services in Lahore, Pakistan at competitive rates. If you want a sit up and going, <strong>Real Web Idea</strong> is the place to contact!</p>
<input name="" type="button" value="Book Appointment" class="dtail-btn" onClick="window.location.href='contact.html';">                     
                    </div>
                    
					<div class="col-md-6">
						<h2>Affordable Web Development Service Like Nowhere Else</h2>
<p>We understand, finding an <strong>affordable web development service provider in Lahore</strong>, Pakistan isn’t easy. Those who claim to be the best charge you an arm and a leg, thus making it for most business impossible to hire!</p>

<p>But with <strong>Real Web Idea</strong>, you shouldn’t be worried about the deal! We have tried our best to offer <strong>high-quality web development</strong> service Lahore, Pakistan to our esteemed client in return for a price that is super affordable.</p>

<p>We assure you, our charges are less than the market but in terms of work and service, our quality is uncompromised and unmatched!</p>  

<p>With us hired by you, we know we can make a difference and take your business to new heights through a website that is unique and user-friendly!</p>
 
<input name="" type="button" value="Place your Order" class="dtail-btn" onClick="window.location.href='contact.html';">
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
