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
    	<h1>Digital Marketing</h1> 
    </div> 
	<!--banner ends-->
</section>

<section>
		<div class="inner-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 order-md-2"><img src="images/services/web-development/digital-marketing-services-lahore2.jpg" class="img-fluid" alt="digital-marketing-services-lahore2.jpg"/></div>
					<div class="col-md-6">
<h2>Business Pressence &amp; Digital Marketing</h2>
<p>With the market trend slowly shifting over the internet, it is time you join in too! Do you feel that you are lagging? Are you unable to outnumber your competitor? Why hasn’t your company be able to achieve its target sales this year?</p>

<p>Well, the biggest reason your sales is going done is lack of “good” advertisement and hence, this is where Real Web Ideas can help you! We are a <strong>local digital marketing company</strong> in 
Lahore, Pakistan that helps enterprises like you to improve their virtual presence.</p>

<p>With a strong team of digital marketing experts on board, we ensure your company is seen and interpreted rightly. Let nothing stop you from reaching the audience, being seen and remembered!</p>
<input name="" type="button" value="Get Started" class="dtail-btn" onClick="window.location.href='contact.html';"> 
					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					<div class="col-md-6"><img src="images/services/web-development/digital-marketing-services-lahore.jpg" class="img-fluid" alt="digital-marketing-services-lahore2.jpg"/></div>
					<div class="col-md-6">
<h2>Why Hire Us?</h2>
<p><strong>Digital Marketing</strong> is crucial and expensive too! There are quite a few <strong>digital marketing firms</strong> that charge you greatly in a promise to bring in more clients in return. But when it comes to guaranteed results, trust no one other than <a href="https://www.realwebidea.com/" title="RWI Pakistan">Real Web Idea</a>.</p>

<p>Hence, here is why you should hire us for the work</p>
<ul>
    <li>We provide cost-effective digital marketing solutions</li>
    <li>Our <strong>digital marketing experts</strong> design solutions around your requirements, hence letting you enjoy great outcomes in a short period</li>
    <li>We use various marketing tools to ensure customers are attracted and retained</li>
    <li>Identifying your target audience is our priority</li>
</ul>

<p>Our <strong>professional digital marketing service</strong> provider promises to create engaging content that is optimized with the search engine to enhance your business’s visibility</p>

<p>If you’re in for enhancing your game, hire us today!</p>

<input name="" type="button" value="Talk to an Expert" class="dtail-btn" onClick="window.location.href='contact.html';"> 

					</div>
                    
			  </div>
              	<hr>
              	<div class="row">
					
                    <div class="col-md-6 order-md-2">
                    <h2>Best Digital Marketers for Your Business in Lahore Pakistan</h2>

<p>Digital marketing does not come easy! Even if you hire an in-house team for the work, you need to make sure they are great at what they do. No matter how good they are, these teams are always expensive!</p>

<p>This is why at <a href="https://www.realwebidea.com/" title="RWI Pakistan">Real Web Idea</a> we suggest you hire our digital <strong>marketing experts</strong> to handle the work. Even though we are a local digital marketing firm that started its operation in Lahore, we are nowhere less than the experts who charge millions for their services.</p>

<p>Our marketers hold ample knowledge of the <strong>latest digital marketing tools</strong>, putting them to the right use so you can gain maximum benefit. Moreover, we offer <strong>affordable digital marketing</strong> services so you can enjoy quality services without having to go overboard with your budget.</p>
<input name="" type="button" value="Consult Now" class="dtail-btn" onClick="window.location.href='contact.html';">
 
<p>&nbsp;</p>
                    </div>
                    
					<div class="col-md-6">
<h2>Professional Digital Marketing Consultants</h2>

<p>Using the internet to your advantage is something that not many understand. If you’ve been wondering why your competitor has left you behind in the race, know that they have advertised better.</p>

<p>Hence, we at Real Web Ideas encourage you to hire our <u>digital marketing consultants</u> who’ll give you the best advice. With our digital marketing experts being the best in the city of Lahore, Pakistan, you’ll be enjoying hefty profits in minimum time with the finest marketing strategies designed by our very own professionals. </p>

<p>Our <em>digital marketing firm</em> is like no other! We take your requirements into considerations and design strategies around them. This is so your business can excel without you having to worry about spending millions on marketing every year.</p>
<p>Nonetheless, our digital marketing company offers affordable digital marketing packages so that you can choose at your convenience.</p> 

<input name="" type="button" value="Contact Now" class="dtail-btn" onClick="window.location.href='contact.html';">

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
