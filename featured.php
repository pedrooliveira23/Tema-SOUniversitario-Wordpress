<?php 
/*
 * Template for the Featured Posts Area
 */
 
global $option_setting;
$count = 1;
if (isset($option_setting['featured-enable-on-home'])) :
	if( $option_setting['featured-enable-on-home'] && (is_front_page() || is_home() )) : 	?>
	    <div id="featured-wrapper">
	    	<?php
	    		$args = array( 'posts_per_page' => 3, 'category' => implode(",",$option_setting['featured-cats']) );
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
				  setup_postdata( $post ); ?>
				  <?php if ($count == 1) : ?>
				  	<div class="featured-post col-md-6 col-sm-12 featured-post-1"><a title="<?php the_title(); ?>" href='<?php the_permalink(); ?>'>
					  	<div class="featured-title col-md-12"><?php the_title(); ?></div>
						  	<div class="col-md-12 col-sm-12 thumb">
							  	<?php if (has_post_thumbnail()) : 
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'featured', true);
										echo "<img class='featured-image' src='".$thumb_url[0]."' title='".get_the_title()."'>";	
									else :
										echo "<img class='featured-image' src='".get_template_directory_uri()."/assets/images/placeholder2.jpg' title='".get_the_title()."'>";	
									endif; ?>
						  	</div><!--.thumb-->
					  		<div class="col-md-12 col-sm-12 featured-excerpt"><?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "" ); ?></div>
					  	</a>
					  	
					</div><!--.featured-post-1-->
					
					<div class="col-md-6 col-sm-6 right-featured-container hide-on-med-and-down">
					
					<?php else : ?>
						<div class="featured-post col-md-12 featured-post-right" style="margin-top: 25px;"><a title="<?php the_title(); ?>" href='<?php the_permalink(); ?>'>
					
						  	<div class="col-md-7 col-sm-7 thumb">	
						  	<?php if (has_post_thumbnail()) : 
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'featured', true);
									echo "<img class='featured-image' src='".$thumb_url[0]."' title='".get_the_title()."'>";	
								else :
									echo "<img class='featured-image' src='".get_template_directory_uri()."/assets/images/placeholder2.jpg' title='".get_the_title()."'>";	
								endif; ?>
							</div><!--.thumb-->
							<div class="featured-right-title col-md-5"><?php the_title() ?></div>
								<div class="col-md-5 featured-excerpt"><?php echo substr(get_the_excerpt(),0,80).(get_the_excerpt() ? "..." : "" ); ?></div>
							</a>
							
						</div><!--.featured-post-right-->
						
						<?php endif; $count++;?>	
					<?php endforeach; 
					wp_reset_postdata(); 
				?>	           
					</div><!--.right-featured-container-->			
		</div><!--#featured-wrapper-->
	    
	<?php endif;
endif;?>