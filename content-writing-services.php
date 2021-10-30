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
	
    <div id="top_arrow"></div>
   	<button onClick="topFunction()" id="gototop" title="Go to top">
    	<i class="fa fa-angle-up"></i>
    </button>
    
<div class="page-wrapper">
	<?php include('layouts/header.php') ?>


<section>
	<div class="inner-banner">
    	<h1>Content Writing Services</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>
		<div class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 order-md-2"><img src="images/services/web-development/content-writing-services2.jpg" class="img-fluid" alt="content-writing-services"/></div>
					<div class="col-md-6">
<h2>Content Creation Made Fun</h2>

<p>Are you looking for an exceptional writer to create content for your website? Or need amazing write-ups for your blog?</p>

<p>From articles to academic pieces, Real Web Ideas has the best content writing experts on the team. We are a content writing company offering highly affordable and professional content writing services, catering to a variety of niches so most businesses can benefit from our expertise.</p>

<p>Our content writing consultants are available 24x7, offering a helping hand to share your burden. Whether you have academic assignments piled up or a new website to design, our content creators will handle the work professionally.</p>

<p>The content writing experts on our team hold years of experience with a bright mind that lets them play around with words, hence coming up with pieces that are beyond brilliant!</p>

<input name="" type="button" value="Hire our Writers" class="dtail-btn" onClick="window.location.href='contact.html';"> 
	 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					<div class="col-md-6"><img src="images/services/web-development/content-writing-services.jpg" class="img-fluid" alt="content-writing-services"/></div>
					<div class="col-md-6">

<h2>We Offer Nothing Below Par</h2>

<p>Finding content writing consultants who are experts in the true sense isn’t easy. If you’ve tried multiple content writing firms promising to deliver original work and waste your money, it is time you hire Real Web Ideas for the work!</p>

<p>Our content writing experts are extremely dedicated who work seamlessly hard to deliver original write-ups every time. As a local content wiring company in Lahore Pakistan, here what we offer:</p>
<ul>
<li>Blogs and Articles</li>
<li>Web Content</li>
<li>Amazon Affiliate Product Descriptions</li>
<li>Social Media Copies</li>
<li>Academic Writing</li>
<li>Ad and Sales Copy (copy writing)</li>
</ul>
<p>Knowledge and expertise are what lets our writers create content that is genuine, fun and engaging. And because our content creators are great at researching, never will we deliver a piece of writing that is vague, boring or plagiarized.</p>

<input name="" type="button" value="Let's write for You" class="dtail-btn" onClick="window.location.href='contact.html';"> 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					
                    <div class="col-md-6 order-md-2">
<h2>We Never Miss Deadlines</h2>

<p>Is the submission date of the assignment nearing? Do you have piles of work to manage? Are you unable to comprehend your next topic for the blog?</p>

<p>Well, no problem because with Real Web Ideas at your back, we assure you to share your burden! We offer affordable content writing services in Lahore Pakistan and have100% satisfied clients.</p>

<p>But what makes us stand out from the crowd? It is the dedication of our content writing experts that make us the best today! Our content creators put their knowledge and expertise to the right use that allows them to pen down some amazing pieces of literature without missing the deadlines.</p>

<p>Moreover, we never shy away from designing customized content writing solutions for our clients and stand by them throughout the process. If perfection in content is what you are looking for, Real Web Ideas, a content writing business in Lahore Pakistan is who you should be contacted right away!</p>

                    


<input name="" type="button" value="Get an Appointment" class="dtail-btn" onClick="window.location.href='contact.html';">                    
                    </div>
                    
					<div class="col-md-6">

<h2>High Quality and Comprehendible Content</h2>

<p>The content writing experts at Real Web Ideas understand the complexities of writing good content and hence, this is what allows them to come up with wordy creations that connect with the audience.</p>

<p>Our content writing experts have impeccable grammar to impress Google and use simple words that can easily be understood by the readers. Know that it takes immense hard work to find words and put them into a sentence to create meaningful verses, which can easily be done by our professionals.</p>

<p>If you’re in search of a content writing firm that offers affordable content writing services yet delivers high-quality content that is original and delivered on time, Real Web Ideas is the right place to be! Let us help give words to your thoughts and be presented to the world!</p>


<input name="" type="button" value="Send your Work" class="dtail-btn" onClick="window.location.href='contact.html';">
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
