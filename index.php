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
	<div class="banner">
    	<!-- <img src="images/main-banner.jpg" width="100%" class="img-fluid" alt="SEO Lytix">  -->
    </div> 
	<!--banner ends-->
</section>

<section>
	<div class="services-area">
    	<div class="container">
        	<div class="generic-heading">
            	<h1><span>Services</span> We Offer</h1>
                <p>With the help of 25+ digital expert in their fields, we offer the following services.</p>
            </div>
            
            <div class="services-main">
            	<div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="0.1s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/adwords.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>Google Ads</h2>
                        <p>Google is a place where people come to find answers for their queries, buy products and avail services that they require. Thus, let us help your business’s ad pop up on their screen at the right moment just in case they want something.</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button" value="Detail" class="dtail-btn" onClick="window.location.href='ppc-services.html';">
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="0.2s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/seo.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>SEO</h2>
                        <p>With our SEO services handled by experts, we promise to increase your business’s visibility on Google so it is easier for more people to reach out to you. Who doesn’t love booming profits and increased client pool, right?</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button" value="Detail" class="dtail-btn" onClick="window.location.href='seo-services.html';">
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="0.3s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/social-media.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>Social Media</h2>
                        <p>Don’t have the resources and time to run a successful social media campaign for your business? Avail our services right away and enjoy professionally crafted marketing plans that enhance your presence on social media.</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button" value="Detail" class="dtail-btn" onClick="window.location.href='smm-services.html';">
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="0.4s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/launch.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>Landing Page</h2>
                        <p>Understanding the crucial role played by landing pages in increasing your business’s virtual presence, we offer highly professional services that ensure to boost leads and increase profits in a minimum time.</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button" value="Detail" class="dtail-btn" onClick="window.location.href='web-development.html';">
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="0.5s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/web-designing.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>Web Designing</h2>
                        <p>A cleverly designed website that is easy to use and highly attractive is what promises to bring in customers and boost sales. Thus, it is time you either revamp your old, boring website or build a new one to achieve higher success.</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button" value="Detail" class="dtail-btn" onClick="window.location.href='web-development.html';">
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 wow slideInUp"  data-wow-delay="0.6s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/web-development.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>Web Development</h2>
                        <p>Not sure how a website works? If your team lacks the technical know-how of developing the best website for your business, let us come to your rescue. We offer complete mobile friendly web designing &amp; development services.</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button"value="Detail" class="dtail-btn" onClick="window.location.href='web-development.html';">
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="0.7s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/e-commerce.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>E-Commerce Design</h2>
                        <p>Our tangible e-commerce business solutions ensure your online stores are the best out there, boosting sales and growing together as a team of PHP &amp; Woo-Commerce professionals experts can assit you better for your website.</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button" value="Detail" class="dtail-btn" onClick="window.location.href='web-development.html';">
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 wow slideInUp" data-wow-delay="0.8s">
                	<div class="service" onClick="window.location.href='#';">
                    	<div class="service-icon"><img src="images/services-icons/responsive.svg" width="60" height="60" alt="SE0Lytix Lahore"></div>
                        <h2>Responsive Design</h2>
                        <p>With our responsive design services, you do not have to spend resources on developing different codes for your website so it can run on smartphones, tablets and webpages. Let our team take over and develop your website.</p>
                   	</div>
                    <div class="service-btn">
                    	<input name="" type="button" value="Detail" class="dtail-btn" onClick="window.location.href='web-development.html';">
                    </div>
                </div>
            </div> <!--services main ends-->
            
        </div>
    </div> <!--services-area ends-->
</section>



<section>
	<div class="howwework">
    	<div class="container">
        	<div class="col-md-8 offset-md-2">
                <div class="generic-heading text-white">
                    <h1><span>Why</span> SEO Lytix</h1>
                    <p>Searching for a single platform that provides solutions for all your business problems is hard to find. But with SEO Lytix taking your back, you do not have to worry about services that are otherwise expensive and hard to reach.
We have experts on our team that hold years of experience so that the work we deliver is 100% result-oriented and satisfactory. If you wish to increase your virtual presence and boost sales by generating more traffic, we are the ones you can trust blindly.
</p>
                </div>
        	</div>
        	
            <div class="clearfix"></div>
        	
            <div class="col-md-3">
              <div class="we-work wow slideInUp" data-wow-delay="0.1s">
                <h2>Skillfull Seo Managers</h2>
                <img src="images/work-icons/seo.png" width="81" height="81" alt="SE0Lytix Lahore"> 
                <p>Our approach is outlined to provide a patterned operation that is uncomplicated and supply good results swiftly. </p>
              </div> <!--we work ends-->
              <div class="we-work wow slideInUp" data-wow-delay="0.2s">
                <h2>Creative Designers</h2>
                <img src="images/work-icons/designers.png" width="81" height="81" alt="SE0Lytix Lahore"> 
                <p>Our highly skilled and adept maestros are here to assist you with their creative minds and impeccable experties.</p>
              </div> <!--we work ends-->
            </div>
            <div class="col-md-6 text-center">
                <img src="images/mob-bg.png" width="517" height="466" class="img-fluid" alt="SE0Lytix Lahore"> 
            </div>
            <div class="col-md-3">
              <div class="we-work wow slideInUp" data-wow-delay="0.3s">
                <h2>Professional Developers</h2>
                <img src="images/work-icons/developers.png" width="81" height="81" alt="SE0Lytix Lahore"> 
                <p>Our professionals developers are here to assist you with their technical approach and impeccable experties.</p>
              </div> <!--we work ends-->
              <div class="we-work wow slideInUp" data-wow-delay="0.4s">
                <h2>Handle With Care</h2>
                <img src="images/work-icons/clients-satisfaction.png" width="81" height="81" alt="SE0Lytix Lahore"> 
                <p>We acknowledge the contract signed with you. Consequently, we uphold your necessities above ours.</p>
              </div> <!--we work ends-->
            </div>
          
        </div> <!--container ends-->
    </div> <!--how-we-work ends-->
</section>

<section>
	<div class="why-rwi-main">
    	<div class="container">
        	<div class="col-md-8 offset-md-2">
                <div class="generic-heading">
                    <h1>Why SEO LYTIX As Seo Consulting Company in Lahore</h1>
                    <p>we craft beautiful and mindblowing website and mobile app to promote your business.</p>
                </div>
            </div>
            <div class="whyrwi">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					
						<ul>
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/experienced.png"/></div>
                                </span>
                                <strong>Experienced Team</strong>
                            </li>
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/price.png"></div>
                                </span>
                                <strong>Reasonable Price</strong>
                            </li>
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/ontime-delivery.png"/>
                                    
</div>                                </span>
                                <strong>On Time Delivery</strong>
                            </li>
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/24_7.png"/></div>
                                </span>
                                <strong>24*7 Support</strong>
                            </li>
                            
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/quality-work.png"/>
                                    </div>
                                </span>
                                <strong>Quality Work</strong>
                            </li>
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/latest-tech.png"/></div>
                                </span>
                                <strong>Latest Tech</strong>
                            </li>
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/mobile-responsive.png"/>
                               			</div>
                                 </span>
                                <strong>100% Responsive</strong>
                            </li>
                            <li>
                                <span>
                                	<div class="morph"><img src="images/why-rwi/customer-satisfaction.png" alt="SE0Lytix Lahore"/>
                                </div>
                                </span>
                                <strong>Satisfied Clients</strong>
                            </li>
                        </ul>
    					
    				</div>
    			</div>
    		</div> <!--container ends-->
    	</div>
            
        </div>
    </div> <!--why SEO Lytix ends-->
</section>

<section>
	<div class="facts-rwi">
    	<div class="container">
        	<div class="col-md-8 offset-md-2">
                <div class="generic-heading">
                    <h1><span>Worthy Facts About SEO Lytix </span> Best SEO Consultancy Firm in Lahore</h1>
                    <p>Be a part of our winning team &amp; Grow your Business.</p>
                </div>
            </div>
            
            <div class="clearfix"></div>
            
            	
		<div class="counters-area">
	        <div class="col-md-3 wow slideInUp" data-wow-delay="0.1s">
                <div class="counter">
                   <i class="fa fa-code fa-2x"></i>
                   <h2 class="timer count-title count-number" data-to="980" data-speed="7000"></h2>
                   <p class="count-text">Completed Projects</p>
                </div>
	        </div>
            
              <div class="col-md-3 wow slideInUp" data-wow-delay="0.2s">
               <div class="counter">
                   <i class="fa fa-globe fa-2x"></i>
                   <h2 class="timer count-title count-number" data-to="300" data-speed="7000"></h2>
                   <p class="count-text">Worldwide Clients</p>
                </div>
              </div>
              
              <div class="col-md-3 wow slideInUp" data-wow-delay="0.3s">
                  <div class="counter">
                     <i class="fa fa-lightbulb-o fa-2x"></i>
                     <h2 class="timer count-title count-number" data-to="24" data-speed="7000"></h2>
                     <p class="count-text">Creative &amp; Skilled Team</p>
                   </div>
              </div>
              
              <div class="col-md-3 wow slideInUp" data-wow-delay="0.4s">
                  <div class="counter">
                     <i class="fa fa-calendar fa-2x"></i>
                     <h2 class="timer count-title count-number" data-to="14" data-speed="7000"></h2>
                     <p class="count-text">Successful Years</p>
                  </div>
                  </div>
         	  </div>
            
        </div>
    </div> <!--facts-rwi ends-->
</section>

<section>
	<div class="clients-area">
    	<div class="container">
        	<div class="generic-heading">
            	<h1><span>Some of Our</span> Esteemed Clients</h1>
            </div>
            
            <div class="clients-carousal">
    		  	<div class="owl-demo">

						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/1.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
						
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/2.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/3.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/4.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/5.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/6.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/7.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/8.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/9.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/10.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
					    <div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/11.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/12.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/13.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						<div class="item">
							<div class="col-md-12">
								<img src="images/clients-logos/14.jpg" class="img-rounded img-responsive" width="100%" alt="SE0Lytix Lahore"/>
							</div>
						</div>
							
						
                        
        </div>
    </div> <!--clients-area ends-->
</section>

<?php include('layouts/footer.php') ?>
	
     
</body>

</html>
