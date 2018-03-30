<!-- header END -->
<?php get_header(); ?>  
 <div class="container-fluid mt70">
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
               
                <div class="col-xs-12 col-md-3">
				<div class="gap"></div>
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
				
				
				<div class="col-xs-12 col-md-6">
              <div class="row">
               <div class="mCustomScrollbar _mCS_1 mCS-autoHide middlecontent" data-mcs-theme="dark">
                <div id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                               <?php
            $limit = get_option('posts_per_page');
            $i = 0;
            $the_query = new WP_Query(array(
                'post_type' => 'slide',
                'posts_per_page' => -1));
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    ?>	
                    <div class="item <?php if ($i == 0) echo 'active'; ?>" data-slide-number="<?php echo $i; ?>">
                       <a href="#"> <?php the_post_thumbnail('full'); ?></a>
                    </div>

                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div style="margin-top:10px;">
                            <div class="well text-center">
                                LIFE IS A SONG - SING IT. LIFE IS A GAME - PLAY IT. LIFE IS A CHALLENGE - MEET IT. LIFE IS A DREAM - REALIZE IT. LIFE IS A SACRIFICE - OFFER IT. LIFE IS LOVE - ENJOY IT.
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel2">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <?php
            $limit = get_option('posts_per_page');
            $i = 0;
            $the_query = new WP_Query(array(
                'post_type' => 'featureslide',
                'posts_per_page' => -1));
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    ?>	
                    <div class="item <?php if ($i == 0) echo 'active'; ?>" data-slide-number="<?php echo $i; ?>">
                       <a href="partners.html"> <?php the_post_thumbnail('full'); ?></a>
                    </div>

                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
                                  
                                    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
					</div>
					</div>
				</div>
				

                <div class="col-md-3 col-xs-12">
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
   
<!-- Content END-->
<?php get_footer(); ?>