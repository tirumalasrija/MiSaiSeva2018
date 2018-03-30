<?php
/* Template Name: saividyapeet
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header(); 
?>
  <div class="container-fluid mt70">
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
				<div class="mCustomScrollbar _mCS_1 mCS-autoHide middlecontent" data-mcs-theme="dark">
                <div class="col-xs-11 col-md-4 sai_vidyapeet_box">
                    <?php 	echo get_the_post_thumbnail( 22, 'thumbnail', array( 'class' => 'img-responsive img-bm' ) ); ?>
                            

      				<div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i>Sai Vidyapeet</h4>
                            </div>
                            <div class="panel-body">
                                <p>  <?php         $my_postid = 22;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content; ?>  </p></div>
                        </div>
     			</div>


                <div class="col-xs-11 col-md-8" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="text-center"></h3>
                        </div>
                        <div class="col-xs-12" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="col-xs-6">
                                    <form>
                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputName">Student's Name*</label>
                                            <input type="Name" class="form-control" id="inputNAME" placeholder="FirstName LastName">
                                        </div>
                                        <div class="form-group ">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputName">Parent / Guardian Name*</label>
                                            <input type="Name" class="form-control" id="inputName" placeholder="FirstName LastName">
                                        </div>
                                        <div class="form-group ">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputName">Kids Grade*</label>
                                            <input type="Name" class="form-control" id="inputName" placeholder="Current Kids Grade*">
                                        </div>
                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputAddress">Address</label>
                                            <input type="Address" class="form-control" id="inputAddress" placeholder="">
                                        </div>
                                        <!--<div class="form-group">
                                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputAddress">Address 2</label>
                                            <input type="Address" class="form-control" id="inputAddress" placeholder="">
                                        </div>-->

                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputAddress">City*</label>
                                            <input type="Address" class="form-control" id="inputAddress" placeholder="">
                                        </div>


                                    </form>

                                </div>
                                <div class="col-xs-6" id="carousel-bounding-box">
                                    <form>
                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputNumber">Zip</label>
                                            <input type="Number" class="form-control" id="inputNumber" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputNumber">Cell Number *</label>
                                            <input type="Number" class="form-control" id="inputNumber" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputNumber">Home Number</label>
                                            <input type="Number" class="form-control" id="inputNumber" placeholder="">
                                        </div>
                                        <!--<div class="form-group ">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputName">Emergency Contact Name*</label>
                                            <input type="Name" class="form-control" id="inputName" placeholder="Current Kids Grade*">
                                        </div>

                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                            <label for="inputNumber">Emergency Contact's Phone Number*</label>
                                            <input type="Number" class="form-control" id="Number" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Signature</label>
                                            <input type="Address" class="form-control" id="inputAddress" placeholder="Enter your name,that is considered as your Signature">
                                        </div>-->


                                    </form>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-danger">Send Message</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

				</div>
            </div><!--/Slider-->
        </div>
    </div>

<?php get_footer(); ?>