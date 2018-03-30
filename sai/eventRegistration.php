
<?php
/* Template Name: evenregistartion
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
			<div class="gap"></div>
                <div class="col-xs-12 col-md-3">
                                 <?php
            $limit = get_option('posts_per_page');
            $i = 0;
            $the_query = new WP_Query(array(
                'post_type' => 'lquotes',
                'posts_per_page' => -1));
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    ?>	
                   
                 <div class="response_pro">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i><?php the_title(); ?></h4>
                            </div>
                            <div class="panel-body">
                                <p><?php  the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                          <?php
                    $i++;
                endwhile;
            endif;
            ?>
                </div>

   <div class="col-xs-12 col-md-6" id="slider" style="margin-top:50px;">
                   <div class="mCustomScrollbar _mCS_1 mCS-autoHide middlecontent" data-mcs-theme="dark">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="well well-sm">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Name *
                                                </label>
                                                <input type="text" class="form-control" id="name" placeholder="First and Last Name" required="required" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email">
                                                    Email Id *
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-envelope"></span>
                                                    </span>
                                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                                <span class="sr-only"></span>
                                                <label for="inputNumber">Phone Number *</label>
                                                <input type="Number" class="form-control" id="inputNumber" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Comments
                                                </label>
                                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required
                                                          placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
					</div>
                </div>

                <div class="col-xs-12 col-md-3">
                                 <?php
            $limit = get_option('posts_per_page');
            $i = 0;
            $the_query = new WP_Query(array(
                'post_type' => 'rquotes',
                'posts_per_page' => -1));
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    ?>	
                   
            
                    <div class="response_pro">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> <?php the_title(); ?></h4>
                            </div>
                            <div class="panel-body">
                                <p><?php the_content(); ?> </p>
                            </div>
                        </div>
                    </div>
                          <?php
                    $i++;
                endwhile;
            endif;
            ?>
           
                </div>
            </div><!--/Slider-->
        </div>
    </div>


<?php get_footer(); ?>