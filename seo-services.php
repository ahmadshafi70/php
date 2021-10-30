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
    	<h1>SEO – Search Engine Optimization Compamy</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>
		<div class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 order-md-2"><img src="images/services/web-development/seo-services-lahore.jpg" class="img-fluid" alt="seo-services-lahore.jpg"/></div>
					<div class="col-md-6">

<h2>SEO Success Is What We Promise</h2>

<p>Are you looking forward to succeeding in your industry? In a time when everything is digitized and competition is tough, you need to make sure you excel in every way of your business.</p>
<p>This goes especially well for people running an online business and which to enhance their online presence. How can you reach more audience? How can you become more “prominent”?</p>

<p>Well, Real Web Ideas has the answer! We are a local search engine optimizing company based in Lahore, Pakistan. We have the best SEO experts on board that make sure Google never misses out on you! Using the right tools and strategies, our SEO consultants execute plan customized to your company’s need, and hence, help your website ranking top on Google.</p>

<p>At Real Web Idea, your success is what we promise to celebrate together!</p>

<input name="" type="button" value="Engage with an Expert" class="dtail-btn" onClick="window.location.href='contact.html';">	 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					<div class="col-md-6"><img src="images/services/web-development/seo-services-lahore2.jpg" class="img-fluid" alt="seo-services-lahore.jpg"/></div>
					<div class="col-md-6">
<h2>Professional SEO Services</h2>

<p>Finding one company that puts use to all SEO tools to deliver brilliant outcomes is not easy. But when it comes to the most affordable and goal-oriented SEO Company, Real Web Ideas makes it all possible.</p>
<p>Under our search engine optimization category, we offer a variety of SEO services where each one is carefully targeted towards helping your business achieve its goals. Here are the general services that you can pick from:</p>
<ul>
<li>SEO audit</li>
<li>On-page SEO</li>
<li>Off-page SEO</li>
<li>Technical SEO</li>
<li>Competitor Analysis
<li>Progressive Optimization</li>
<li>To the Point Reporting</li>
</ul>

<p>We are proud to say that we have the best SEO experts on our team that hold years of experience and extensive knowledge that lets them design the best strategies for your business, following SEO of course!</p>

<input name="" type="button" value="Let's Start" class="dtail-btn" onClick="window.location.href='contact.html';">

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					
                    <div class="col-md-6 order-md-2">
<h2>We Have All the Answers</h2>
<p>We understand, not many expect a lot from a local SEO company in Lahore, Pakistan to do much for them when it comes to improving their ranking on Google.</p>

<p>But when it comes to Real Web Ideas, we have proved the “general assumptions” to be wrong every time. there is a high chance that you are facing some problem with your website’s ranking or lost traffic for which you looking for an expert’s opinion and help.</p>

<p>If this is so, let us tell you, you are in the right place! We have been helping clients and businesses to improve their Google ranking and gain more traffic by the implementation of the newest tools and unique strategies. For all your unanswered queries and problems, we have consultants with the ideal SEO solutions all ready to be hired!</p>
<input name="" type="button" value="Contact Us" class="dtail-btn" onClick="window.location.href='contact.html';">                    
                    </div>
                    
					<div class="col-md-6">
<h2>An SEO Company That is Affordable</h2>
<p>The changing algorithms of Google have certainly put business and their experts to test. It isn’t easy to keep up with the change unless you have SEO experts and the right tools to handle the work at the back.</p>

<p>Understanding that professional SEO firms are expensive, Real Web Ideas now offers SEO services at market competitive rates! Yes, we offer high quality yet affordable SEO services to our clients who which to take on board the best consultants to keep their website ranked atop on the world’s largest search engine.</p>

<p>We are not one of the kind search engine optimization service provider companies in Lahore, Pakistan, but we are certainly the best in the industry. So, if your website has suddenly lost its traffic, this is the right place to seek expert help!</p>

<input name="" type="button" value="Sign yearly Contract" class="dtail-btn" onClick="window.location.href='contact.html';"> 


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
