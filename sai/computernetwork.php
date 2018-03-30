
<?php
/* Template Name: computerinformationsystem
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
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/inne-banner.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Computer information system (CIS) </h1>
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Programs</li>
                    <li>Computer information system (CIS) </li>
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
                    <h1 class="m-b20">Computer information system (CIS) </h1>
            
                </div>
                         <?php
             
                $i = 0;
                $the_query = new WP_Query(array(
                    'post_type' => 'computerinformation',
                    'posts_per_page' => -1));
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                        ?>  
        

        <div class="col-md-12">
            <div class="icon-bx-wraper bx-style-1 p-a20 left m-b30">
                <div class="icon-content">
                    <h5 class="dez-tilte"><strong><?php the_title(); ?>   </strong></h5>
                    <p><?php  the_field('hours'); ?> </p>
                    <p> <?php  the_content(); ?> </p>
                    <?php if(!empty(the_field('prerequisite'))){?>
                    <p><strong>Prerequisite:</strong> <?php the_field('prerequisite'); ?> </p>
                    <?php } ?>
                </div>
            </div>
        </div>

 <?php endwhile; ?>
                        <?php endif; ?>


    </div>


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