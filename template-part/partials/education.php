<div class="container-fluid">

  <!-- row -->
  <div class="row">

    <!-- col -->
    <div class="col-lg-6">

      <!-- section title -->
      <div class="art-section-title">
        <!-- title frame -->
        <div class="art-title-frame">
          <!-- title -->
          <h4>Education</h4>
        </div>
        <!-- title frame end -->
      </div>
      <!-- section title end -->

      <!-- timeline -->
      <div class="art-timeline art-gallery" id="history">
        <div class="art-timeline-item">
          <div class="art-timeline-mark-light"></div>
          <div class="art-timeline-mark"></div>

          <div class="art-a art-timeline-content">
            <div class="art-card-header">
              <div class="art-left-side">
                <h5>B.Sc. Engg in CSE</h5>
                <div class="art-el-suptitle mb-15">BUBT</div>
              </div>
              <div class="art-right-side">
                <span class="art-date">Feb 2017 - Dec 2021</span>
              </div>
            </div>

            <p>I completed study of Computer Science and Engineering at the Bangladesh University of Business and Technology.</p>
           
          </div>
        </div>

        <div class="art-timeline-item">
          <div class="art-timeline-mark-light"></div>
          <div class="art-timeline-mark"></div>

          <div class="art-a art-timeline-content">
            <div class="art-card-header">
              <div class="art-left-side">
                <h5>Diploma in Engineering</h5>
                <div class="art-el-suptitle mb-15">SPI</div>
              </div>
              <div class="art-right-side">
                <span class="art-date">Dec 2010 - Nov 2015</span>
              </div>
            </div>
            <p>I completed a Diploma in Engineering of Computer Technology at the Satkhira Polytechnic Institute.</p>
          </div>
        </div>

        <div class="art-timeline-item">
          <div class="art-timeline-mark-light"></div>
          <div class="art-timeline-mark"></div>

          <div class="art-a art-timeline-content">
            <div class="art-card-header">
              <div class="art-left-side">
                <h5>Full Stack Developer</h5>
                <div class="art-el-suptitle mb-15">MamurJor IT</div>
              </div>
              <div class="art-right-side">
                <span class="art-date">Aug 2021 - Jul 2022</span>
              </div>
            </div>
            <p>I completed from MamurJor It Ltd duration 1 year Full Stack Developer (Laravel) Course.</p>
            
          </div>

        </div>        

      </div>
      <!-- timeline end -->

    </div>
    <div class="col-lg-6">

      <!-- section title -->
      <div class="art-section-title">
        <!-- title frame -->
        <div class="art-title-frame">
          <!-- title -->
          <h4>Work History</h4>
        </div>
        <!-- title frame end -->
      </div>
      <!-- section title end -->

      <!-- timeline -->
      <div class="art-timeline">

      <?php 
      
      $query = new WP_Query(array(
        'post_type' => 'exprience',
        'posts_per_page' => -1,
        'orderby' => 'id',
        'order' => 'des'

      ));

      while($query->have_posts()) : $query->the_post();
      
      ?>

      

        <div class="art-timeline-item">
          <div class="art-timeline-mark-light"></div>
          <div class="art-timeline-mark"></div>


          <div class="art-a art-timeline-content">
            <div class="art-card-header">
              <div class="art-left-side">
                <h5><?php echo esc_html(get_field('designation'));?></h5>
                <div class="art-el-suptitle mb-15"><?php echo get_field('company_name');?></div>
              </div>
              <div class="art-right-side">
                <?php 
                  $joining_date = get_field('joining_date'); 
                  $date_formating = date('M y', strtotime($joining_date));

                  $resign_date = get_field('resign_date');
                  $re_date_form = date('M y', strtotime($resign_date));
                
                
                ?>
                <span class="art-date"><?php echo $date_formating; ?> - <?php echo $re_date_form;?></span>
              </div>
            </div>
            <p></p>
          </div>
        </div>

        <?php endwhile; ?> 

              

      </div>
      <!-- timeline end -->

    </div>
    <!-- col end -->

  </div>
  <!-- row end -->

</div>