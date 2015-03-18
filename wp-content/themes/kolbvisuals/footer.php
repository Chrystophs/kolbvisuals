<!--Testimonials -->

<!--<?php if (of_get_option('disable_footer_callouts') != 1) : ?> 
<div class="testimonial-bar visible-lg">
    <div class="container">
      <div class="row">
          <?php 
              $args = array( 'post_type' => 'callouts', 'posts_per_page' => 4, 'order' => 'ASC', 'orderby' => 'menu_order' );
              $loop = new WP_Query( $args ); 
              $i = 1;
              $numPerRow = 3;
          ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <?php echo '<div class="col-lg-'.(12/$numPerRow).'">'; ?>
              	<?php $callout_link = get_field('callout_link_url'); ?>
                <?php if ( has_post_thumbnail() ) { ?>
                		<?php if(!empty($callout_link)) { echo '<a href="'.$callout_link.'">'; } ?>
						<?php echo get_the_post_thumbnail($post->ID,'full', array('class'=>'img-responsive img-thumbnail')); ?>
                        <?php if(!empty($callout_link)) { echo '</a>'; } ?>
                <?php } else { ?>
                	<div class="callout-title">
                    	<?php if(!empty($callout_link)) : ?>
                        	<a href="<?php echo $callout_link; ?>">
                       	<?php endif; ?>
							<?php the_title(); ?>
                        <?php if(!empty($callout_link)) : ?>
                        	</a>
                       	<?php endif; ?>
                    </div>
                	<div class="callout-body"><?php the_content(); ?></div>
                    	<?php
							if(!empty($callout_link)) {
								  echo '<a class="btn-square btn-callout btn-default btn-block" href="'.$callout_link.'">';
								  	$callout_text = get_field('callout_link_text');
								  	if(!empty($callout_text)) { echo $callout_text; } else { echo 'Learn More'; }
								  echo '</a>';
							}
						?>
                <?php } ?>
                
              <?php echo '</div>'; ?> 
              <?php if($i % $numPerRow == 0) {echo '</div><div class="row testimonial-row">';} ?>
                <?php $i++; ?> 
           <?php endwhile; wp_reset_query();?>
      </div>
    </div>
</div>
<?php endif; ?>-->
<footer>

<div class="containernav">
    <div class="footer-copyright">
        <div class="footer-bg"> 
            <div class="row">
                <div class="col-xs-12">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Designed &amp; Developed by Chris Schultz</a> - <?php wp_loginout(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<?php wp_footer(); ?>

</body>

<!-- <script type="text/javascript">try{Typekit.load();}catch(e){}</script> -->

</html>
