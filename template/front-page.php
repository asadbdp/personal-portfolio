<?php

/**
 * Template Name: Home
 */

 get_header(); ?>


 <?php get_template_part('template-part/partials/left-sidebar');?>

<!-- content -->
<div class="art-content">

  <!-- curtain -->
  <div class="art-curtain"></div>

  <!-- top background -->
  <div class="art-top-bg" style="background-image: url(assets/img/bg.jpg)">
    <!-- overlay -->
    <div class="art-top-bg-overlay"></div>
    <!-- overlay end -->
  </div>
  <!-- top background end -->

  <!-- swup container -->
  <div class="transition-fade" id="swup">

    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">

      <!-- container -->
      <?php get_template_part('template-part/partials/banner');?>

      <!-- container end -->

      <!-- container -->
      <?php get_template_part('template-part/partials/counter');?>
      <!-- container end -->

      <!-- container -->
      <?php get_template_part('template-part/partials/services');?>
      <!-- container end -->     

      <!-- container -->
      <?php get_template_part('template-part/partials/testimonial');?>
      <!-- container end -->

      <!-- container -->
      <?php get_template_part('template-part/partials/work');?>
      <!-- container end -->

      <!-- container -->
      <?php get_template_part('template-part/partials/education');?>
      <!-- container end -->

      <!-- container -->
      <?php get_template_part('template-part/partials/contact'); ?>
      <!-- container end -->

      <!-- container -->
      <div class="container-fluid">

        <!-- row -->
        <div class="row">

          <!-- col -->
          <div class="col-6 col-lg-3">
            <!-- brand -->
            <img class="art-brand" src="<?php get_template_directory_uri(  )?>/assets/img/brands/1.png" alt="brand">
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-6 col-lg-3">
            <!-- brand -->
            <img class="art-brand" src="<?php get_template_directory_uri(  )?>/assets/img/brands/2.png" alt="brand">
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-6 col-lg-3">
            <!-- brand -->
            <img class="art-brand" src="<?php get_template_directory_uri(  )?>/assets/img/brands/3.png" alt="brand">
          </div>
          <!-- col end -->

          <!-- col -->
          <div class="col-6 col-lg-3">
            <!-- brand -->
            <img class="art-brand" src="<?php get_template_directory_uri(  )?>/assets/img/brands/1.png" alt="brand">
          </div>
          <!-- col end -->

        </div>
        <!-- row end -->

      </div>
      <!-- container end -->

      <!-- container -->
      <?php get_footer(); ?>
      <!-- container end -->

    </div>
    <!-- scroll frame end -->

  </div>
  <!-- swup container end -->

</div>
<!-- content end -->

</div>
<!-- app container end -->

</div>
<!-- app wrapper end -->

<!-- preloader -->
<div class="art-preloader">
  <!-- preloader content -->
  <div class="art-preloader-content">
    <!-- title -->
    <h4>Asaduzzaman</h4>
    <!-- progressbar -->
    <div id="preloader" class="art-preloader-load"></div>
  </div>
  <!-- preloader content end -->
</div>
<!-- preloader end -->

</div>
<!-- app end -->
<div id="swupMenu"></div>
