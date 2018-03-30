
<?php
/* Template Name: partner page
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
		<div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri(); ?>/ssimages/inne-banner.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Partners</h1>
                    <ul class="list-inline">
                    	<li><a href="#">Home</a></li>
                    	<li>Partners</li>
                	</ul>
                </div>
            </div>
        </div>
		<!-- Slider END -->
		
        <!-- Content Area -->
        <div class="content-area">
            <!-- Career -->
            <div class="container">
                <div class="row">



                    <!-- Left part start -->
                    <div class="col-md-12 m-b30">
                        <h1 class="m-b20">Partners</h1>
                        <div class="dez-separator bg-primary"></div>
                        <div class="col-md-12 col-sm-12">
                                <div class="icon-bx-wraper bx-style-2 m-t40 m-b30 p-a30 center">
                                    <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-star-o"></i></a> </div>
                                    <div class="icon-content p-t40">
                                        <h3 class="dez-tilte">If you are referred by "Michigan Works" or "Michigan Rehabilitation Services" goto this website &amp; search for our training classes </h3>
                                    </div>
                                </div>
                            </div>
                        
                        
                        <div class="row">
					         <?php
             
                $i = 0;
                $the_query = new WP_Query(array(
                    'post_type' => 'partner',
                    'posts_per_page' => -1));
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                        ?>  
						<div class="col-md-3 col-sm-4 m-b30">
							<div class="ow-carousel-entry">
                                                            <div class="ow-entry-media dez-img-effect zoom-slow" data-toggle="modal" data-target="#ged"> <a href="http://www.michigan.gov/" target="_blank"><?php   
                                                            the_post_thumbnail('full'); ?></a> </div>
								<div class="ow-entry-content p-a15">
									<div class="ow-entry-title"><h4 class="m-tb0"><a href="#"><?php the_title(); ?></a></h4></div>
									<div class="ow-entry-text">
										<p> <?php the_content(); ?> </p>
									</div>
									
								</div>
							</div>
						</div>
				<?php                        endwhile; ?>
                            <?php                        endif; ?>
						
                     </div>
                     
                     <div class="">
                     	<table class="table table-bordered table-responsive table-striped">
                     		<thead>
                     			<th>Title</th>
                     			<th>Author</th>
                     			<th>Hits</th>
                     		</thead>
                     		<tr>
                     			<td>Michigan Works</td>
                     			<td>Written by Super User </td>
                     			<td>2671</td>
                     		</tr>
                     		<tr>
                     			<td>Michigan Rehab Services</td>
                     			<td>Written by Super User </td>
                     			<td>3029</td>
                     		</tr>
                     		<tr>
                     			<td>GED Testing & Learning</td>
                     			<td>Written by Super User </td>
                     			<td>4718</td>
                     		</tr>
                     		<tr>
                     			<td>Accredit Ford Motor</td>
                     			<td>Written by Super User </td>
                     			<td>2870</td>
                     		</tr>
                            <tr>
                                <td>Detroit Employment Solutions Corporation.</td>
                                <td>Written by Super User </td>
                                <td>2870</td>
                            </tr>
                     	</table> 
					 </div>
                        

                        <a href="images/alpha.pdf" target="_blank"><button type="button" class="btn btn-danger center-block">
                        Download Course Catalog</button></a>
						</div>
                    <!-- Left part start END -->
                </div>
            </div>
            <!-- Career END -->
        </div>
        <!-- Content Area END -->
        
		
    </div>
    <!-- Content END-->
	
  <?php get_footer(); ?>