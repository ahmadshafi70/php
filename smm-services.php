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
    	<h1>SMO/SMM – Social Media Marketing Services</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>
		<div class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 order-md-2"><img src="images/services/web-development/smm-smo-services-lahore.jpg" class="img-fluid" alt="smm-smo-services-lahore"/></div>
					<div class="col-md-6">
<h2>What is Social Media Marketing? SMM</h2>

<p>Social Media Marketing refers to market a company’s products and services through various social media platforms.</p>

<p>Have you heard of Instagram? Facebook? Or ever had a chance to visit Pinterest and LinkedIn? Little do people know that these sites aren’t just for communication or building portfolios rather if used to full potential, can help your business succeed.</p>

<p>Hence, this is where we, Real SE0 Lytixs a professional social media marketing company comes to your aid! We have the best SMM experts on the team, holding years of experience and vast knowledge that allows them to put multiple social media platforms to use for your company’s benefits.</p>

<p>If you still haven’t hired us, take our SMM consultants onboard to enjoy booming gains in a short time.</p>

<input name="" type="button" value="Get Started" class="dtail-btn" onClick="window.location.href='contact.html';"> 	 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					<div class="col-md-6"><img src="images/services/web-development/smm-smo-services-lahore2.jpg" class="img-fluid" alt="smm-smo-services-lahore"/></div>
					<div class="col-md-6">
<h2>The Best SMM Solutions Provider Lahore Pakistan</h2>

<p>Social media marketing is a field that not every company can master. Being able to increase your company’s visibility using various social media platforms requires the use of the right strategies and flawless execution.</p>

<p>Hence, when it comes to designing the best SMM solutions for you, our SMM firm doesn’t shy in bringing out the best talents to help your business make a lasting impact. Being a local SMM company in Lahore Pakistan, we understand the local market more clearly hence allowing our SMM consultants to come up with result-oriented strategies with quick execution.</p>

<p>Whether it is Facebook or Twitter, Instagram or any other popular social media site, we’ll help your business reach a larger pool of audience through strong content and the use of the right marketing tools!</p>

<input name="" type="button" value="Ask the Expert" class="dtail-btn" onClick="window.location.href='contact.html';"> 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					
                    <div class="col-md-6 order-md-2">
<h2>We Know SMM Inside Out</h2>

<p>Real SE0 Lytixs is an affordable SMM firm in Lahore Pakistan offering high-quality SMM services to its esteemed clients. We assure you, no other company in the country knows SMM better than us, and thus our dedication, knowledge and hard work is what has helped us satisfy clients over time.</p>

<p>Yes, we know social media marketing inside out. And if you’re thinking why should you hire us, hire us so that we can help:</p>

<ul>
<li>Your business gain recognition</li>
<li>Engage more followers</li>
<li>Create a brand that is remembered for long and,</li>
<li>Earn more profits</li>
</ul>

<p>With our SMM consultants holding vast knowledge and experience in the field, we promise to drive the best solutions and strategies that’ll take your business on a whole new level of success.</p>

<input name="" type="button" value="Sign a Contract" class="dtail-btn" onClick="window.location.href='contact.html';">                    
                    
                    </div>
                    
					<div class="col-md-6">
<h2>What Professional SMM Services DO We Offer?</h2>

<p>Are you looking for professional yet affordable social media marketing (SMM) services? If yes, you’ve come to the right place! To ensure your business is recognized by a larger audience, here is what we do:</p>

<ul>
<li>Manage social media campaigns for you</li>
<li>Bring organic traffic to your website</li>
<li>Provide targeted advertisement</li>
<li>Handle digital public relations effectively</li>
<li>Create attractive content</li>
<li>Use different SMM tools to design an effective marketing strategy</li>
<li>Understand your target market and engage followers</li>
<li>Help build a strong, online presence</li>
</ul>

<p>For businesses who’ve been struggling to engage the audience and retaining clients, hand over the responsibility to our SMM experts who promise to work dedicatedly and make a difference.</p>

<input name="" type="button" value="Start Selling Today" class="dtail-btn" onClick="window.location.href='contact.html';"> 

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
