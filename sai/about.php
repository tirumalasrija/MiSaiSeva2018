
<?php
/* Template Name: aboutus
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


                <div class="col-xs-12 col-md-6" id="slider">
                <div class="row">
               <div class="mCustomScrollbar _mCS_1 mCS-autoHide middlecontent" data-mcs-theme="dark">
                    <!-- Top part of the slider -->
                    
                        <!--<div class="col-sm-3 about_img">
                            <br /><br /><br /><img class="img-thumbnail" src="images/page-1_img04.jpg">
                        </div>-->
                        <div id="aboutuspara">
				<?php 	echo get_the_post_thumbnail( 18, 'thumbnail', array( 'class' => 'img-thumbnail pull-left' ) ); ?>
                            
                            <h3 class="text-justify">SAI VIDYAPEET</h3>

                            <p>
                               <?php           echo  get_the_content(18); ?>  </p>
                        </div>
                            <div class="">
                              <h2>Bordered Table</h2>
                              <p>The .table-bordered class adds borders to a table:</p>            
                              <table class="table table-bordered nemedtable">
                                <thead>
                                  <tr>
                                    <th colspan="2" class="text-center">Names</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>John <p>lorem ipsum</p></td>
                                 	<td>John <p>lorem ipsum</p></td>
                                  </tr>
                                  <tr>
                                    <td>Mary <p>lorem ipsum</p></td>
                                    <td>John <p>lorem ipsum</p></td>
                                  </tr>
                                  <tr>
                                    <td>July <p>lorem ipsum</p></td>
                                	<td>John <p>lorem ipsum</p></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        <!--<div class="col-sm-12" id="carousel-bounding-box">

                            <h3 class="text-left">Teachings and Practices</h3>

                            <p>Sai Baba of Shirdi, also known as Shirdi Sai Baba was an Indian spiritual leader who is regarded by his devotees as a saint, a fakir, a satguru and an incarnation (avatar) of God. He was revered by both his Hindu and Muslim devotees during, as well as after his life. According to accounts from his life, he preached the importance of realization of the self, and criticized love towards perishable things. His teachings concentrate on a moral code of love, forgiveness, helping others, charity, contentment, inner peace, and devotion to the God and guru. He stressed the importance of surrender to the true Satguru, who, having trod the path to divine consciousness, will lead the disciple through the jungle of spiritual training.</p>
                        </div>-->

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