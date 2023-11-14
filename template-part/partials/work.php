<div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Works</h4>
                      </div>
                      <!-- title frame end -->
                      <!-- right frame -->
                      <div class="art-right-frame">
                        <!-- filter -->
                        <div class="art-filter">
                          <!-- filter link -->

                          <?php 
                          $post_type = 'sample';
                          $taxonomy_name = 'category';

                          $terms = get_terms(array(
                            'taxonomy' => $taxonomy_name,
                            'hide_empty' => true,

                          ));

                          if (!empty($terms) && !is_wp_error($terms)) {
                            
                            foreach ($terms as $term) {
                                echo '<a href="#" class="art-link art-current" data-filter=".'.$term->name.'">' . $term->name . '</a>';
                            }
                            
                        } else {
                            echo 'No categories found.';
                        }
                          
                          ?>


                          
                          
                        </div>
                        <!-- filter end -->
                      </div>
                      <!-- right frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <div class="art-grid art-grid-3-col art-gallery">

                  <?php $query = new WP_Query(array(
                    'post_type' => 'sample',
                    'posts_per_page' => -1,
                    'orderby' => 'id',
                    'order' => 'DES',
                  ));

                  while($query->have_posts()) : $query->the_post()?>



                    
                    <!-- grid item -->
                    <div class="art-grid-item <?php echo $term->name;?>">
                      <!-- grid item frame -->
                      <a data="gallery"  class="art-a art-portfolio-item-frame art-vertical">
                        <!-- img -->

                        <?php
                        $image = get_field('project_image'); if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15"><?php the_title(); ?></h5>
                        <div class="mb-15"><?php echo wp_kses_post ( get_field('description') );?></div>
                        <!-- button -->
                        <a href="<?php echo esc_attr( get_field('project_url') );?>" target="_blank" class="art-link art-color-link art-w-chevron">View Project</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->
                    
                    

                    <?php endwhile; ?>

                  </div>

                </div>
                <!-- row end -->

              </div>