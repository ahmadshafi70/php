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
    	<h1>SEM - Search Engine Marketing / PPC – Pay per Click Services</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>

		<div class="inner-content">
        
			<div class="container">
            
				<div class="row">
					<div class="col-md-6 order-md-2"><img src="images/services/web-development/ppc-sem--services-lahore.jpg" class="img-fluid" alt="ppc-sem--services-lahore.jpg"/></div>
					<div class="col-md-6">
<h2>What is PPC (Pay per Click)?</h2>

<p>PPC is a model that lets businesses earn more traffic. Rather than gaining organic traffic, businesses/marketers pay a fee to the PPC Company whenever their ad is clicked.</p>

<p>Why do companies opt for it? To improve their website’s ranking on Google and gain more “visibility”. But of course, it isn’t as easy as it sounds. You need a team of PPC experts to execute the idea smoothly.</p>

<p>Hence, this is where Real Web Ideas can help you! We provide affordable PPC services through a team of the best PPC experts that’ll work dedicatedly to help your business achieve its goals. If you still haven’t hired someone to get the word done, contact us right away!</p>

<input name="" type="button" value="Talk to PPC Expert" class="dtail-btn" onClick="window.location.href='contact.html';"> 

	 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					<div class="col-md-6"><img src="images/services/web-development/ppc-sem--services-lahore2.jpg" class="img-fluid" alt="ppc-sem--services-lahore.jpg"/></div>
					<div class="col-md-6">
<h2>Local PPC Firm with Bigger Achievements</h2>
<p>Real Web Idea is a PPC company in Lahore, Pakistan that has been established to help businesses set new benchmarks of success.</p> 

<p>Understanding what role Google plays in making a business successful, our PPC experts promise to design the best PPC Ads solutions, customized to your marketing enterprise’s requirement and helping it grow.</p>

<p>Our professional PPC experts use tools to ensure the right placement of your ads, enhance the visibility of your company and help you increase leads and traffic. We’ve been dedicatedly helping our clients generate more profit by bringing in traffic through targeted and extensive research that lets us create strategies with promising outcomes.
If your business is worried about its website’s ranking and visibility, contact us immediately!</p>

<input name="" type="button" value="Get Started" class="dtail-btn" onClick="window.location.href='contact.html';">

					</div>
                    
			  </div>
              	<hr>
                <div style="clear:both;">&nbsp;</div>
              	<div class="row">
					
                    <div class="col-md-6 order-md-2">
                    
<h2>PPC Services We Provide</h2>

<p>If you’re still not sure why you need to hire PPC experts for your business, then let us tell you what benefits we offer</p>

<ul>
    <li>Instant increase in your traffic volume</li>
    <li>Top ranking on Google to increase visibility</li>
    <li>Increase your brand's awareness amongst the targeted audience</li>
    <li>Tracking visitors and calculating the conversions</li>
    <li>Manage keywords to improve Google ranking</li>
</ul>


<p>For companies to rank above their competitors, you must hire our PPC services to win the game! We promise not to charge you high for our service yet we promise to deliver high quality and result-oriented work every time.</p>

<p>With us at your back, you won’t have to worry about anything at all</p>

<input name="" type="button" value="Get Started" class="dtail-btn" onClick="window.location.href='contact.html';">  
                  
                    </div>
                    
					<div class="col-md-6">
<h2>Instant PPC Solutions Provider</h2>

<p>With the competition so tough these days, Google’s search has become super crowded hence making it extremely difficult for a business to maintain its ranking and visibility.</p>

<p>So what can be done in such an instant? Get connect with one of the best PPC firms in Lahore, Pakistan, Real Web Idea. We have PPC experts that all set to help your business succeed. Pairing up the perfect tools with extensive knowledge and experience is what helps the PPC consultants drive the right strategy to help your visibility increases online.</p>

<p>Moreover, our PPC service is highly affordable too! No else will you find affordable PPC, high-quality service than us. Once you hire us, we will ensure to place your adverts at the right place to target the right set of the audience so you gain maximum benefit.</p>

<input name="" type="button" value="Consult your Project" class="dtail-btn" onClick="window.location.href='contact.html';">

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
