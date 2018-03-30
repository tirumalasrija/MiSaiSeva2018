
<?php

/* Template Name: contact_us
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
?>

    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
		<div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/inne-banner.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
                    <ul class="list-inline">
                    	<li><a href="#">Home</a></li>
                    	<li>Contact Us</li>
                	</ul>
                </div>
            </div>
        </div>
		<!-- Slider END -->
		
        <!-- Content Area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                
                    <!-- right part start -->
                    <div class="col-md-4">
                        <h4>Main Office </h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Address</h6>
                                        <p>6050 Greenfield Rd, Suite 202, Dearborn, MI 48126</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                        <p>info@alphatechschool.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">PHONE</h6>
                                        <p>313 846 0070</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Testing Center</h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Address</h6>
                                        <p>--</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                        <p>testing@alphatechschool.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">PHONE</h6>
                                        <p>313 846 0070</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Training Center</h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Address</h6>
                                        <p>--</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                        <p>testing@alphatechschool.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">PHONE</h6>
                                        <p>313 846 0070</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- right part END -->
                    <div class="col-md-6">
                        <h4>Contact form</h4>
                        <div class="dzFormMsg"></div>
                        <div class="p-a30 bg-white clearfix m-b30">
							<form method="post" class="dzForm" action="script/contact.php">
							<input value="Contact" name="dzToDo" type="hidden">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input name="dzName" required="" class="form-control " type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input name="dzEmail" class="form-control" required="" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                <textarea name="dzMessage" rows="4" class="form-control" required></textarea><grammarly-btn><div data-reactroot="" class="_e725ae-textarea_btn _e725ae-not_focused" style="visibility: hidden; z-index: 3;"><div class="_e725ae-transform_wrap"><div title="Protected by Grammarly" class="_e725ae-status">&nbsp;</div></div></div></grammarly-btn>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                        <button name="Resat" type="reset" value="Reset" class="site-button  m-l30"> <span>Reset</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<h4>Map</h4>
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5899.340005046321!2d-83.1900150776117!3d42.328236785567604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b34eacfe965ed%3A0xe1de831dd072de76!2s5426+Orchard+Ave%2C+Dearborn%2C+MI+48126%2C+USA!5e0!3m2!1sen!2sin!4v1495645639123" width="100%" height="308" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
                </div>
            </div>
        </div>
        <!-- Content Area END -->
        
		
    </div>
    <!-- Content END-->
	
    

<?php get_footer(); ?>

