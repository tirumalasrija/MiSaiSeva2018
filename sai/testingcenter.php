
<?php
/* Template Name: testingcenterpage
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
    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/inne-banner.jpg);">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Test Center</h1>
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Test Center</li>
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
                    <h1 class="m-b20">Test Center</h1>
                    <div class="dez-separator bg-primary"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="icon-bx-wrape bx-style-1 m-b30">
                                <div class="icon-content">
                                    <h5 class="dez-tilte"><strong>Alpha Technical Institute is proud to be a testing center for the following test types:</strong></h5>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="section-content text-center ">
                        <div class="row">
                            <?php
                            $i = 0;
                            $the_query = new WP_Query(array(
                                'post_type' => 'testcenter',
                                'posts_per_page' => -1));
                            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                    ?>  

                                    <div class="col-md-3">
                                        <a href="<?php the_field('link'); ?>" target="_blank">
                                            <div class="certificatediv">
                                               <?php    the_post_thumbnail('full'); ?>
                                            </div>
                                        </a>
                                    </div>


                                <?php endwhile; ?>
                            <?php endif; ?>


                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="icon-bx-wraper bx-style-2 m-t40 m-b30 p-a30 center">
                                <div class="icon-bx-sm radius bg-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-star-o"></i></a> </div>
                                <div class="icon-content p-t40">
                                    <h3 class="dez-tilte">Also, at ATI, we do IT certifications and some medical and professional certifications.</h3>
                                </div>
                            </div>
                        </div>

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