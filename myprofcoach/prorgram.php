<?php
/*
Template Name: Program myprofcoach
*/
?>

<?php get_header(); ?>

		<div id="slider">
    	<?php  echo do_shortcode('[layerslider id="15"]'); ?>
    	</div>
        
        
        
        <div id="primary">
        
        		<div id="anons" class="d980"><!--get post anons for id=38 -->
                <?php  the_breadcrumb(); ?>
                <?php
				$my_id = 199;
				$post_id_199 = get_post($my_id);
				$content = $post_id_199->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo '<div class="title_post"><h1>'.get_the_title(199).'</h1></div>';
				echo $content;
				?>
                </div><!--get post anons-->
                
               <!-- program------------------------------------------------>
                <?php
               $args = array(
    			'numberposts'     => -1,
    			'offset'          => 0,
    			'category'        => '7',
   				'orderby'         => 'meta_value_num',
   				'order'           => 'ASC',
  				'include'         => '',
    			'exclude'         => '',
    			'meta_key'        => 'post_sorter_order',
    			'meta_value'      => '',
    			'post_type'       => 'post',
   				'post_mime_type'  => '',
    			'post_parent'     => '',
    			'post_status'     => 'published'
				);
				?>
				<div id="forprogram" class="d980">
                   
				<?php  // get post for cat=7
				global $post;
				$count=0;
				$program = get_posts( $args );  
				foreach( $program as $post ) :  setup_postdata($post); 
				$count++;
				?>
                
                <?php // get url post-thumbnail
                $post_image_id = get_post_thumbnail_id($program->ID);
					if ($post_image_id) {
						$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
						if ($thumbnail) (string)$thumbnail = $thumbnail[0];
					} // end get url post-thumbnail
                 ?>   
                 
                 		<?php  if ($count == 4) { echo '<div id="plus1">';}?> 
                        <?php  if ($count == 7) { echo '<div id="plus2">';}?> 
                        <?php  if ($count == 10) { echo '<div id="plus3">';}?>
                     
   					 <div class="prog left van<?php echo $count;?>" style="background-image: url(<?php echo $thumbnail;?>);">
                     	<?php //the_content();?>
                     	<?php the_excerpt(); ?>  
                     </div>
                     
                    
                     	<div id="content_prog<?php echo $count;?>" class="display_none prog_baner">
                        <div class="progfull">
                     	<?php the_content();?>
                        </div>
                     	</div>
                     
                     	<?php  if ($count == 6) { echo '</div>';}?>  
                        <?php  if ($count == 9) { echo '</div>';}?>
                        <?php  if ($count == 12) { echo '</div>';}?>
				<?php endforeach; ?>  
				 
                </div>
                <div class="clearfix"></div>
                
                <div id="butcollaps" class="d980">
                	<div id="callapse_run" class="button_main button_right run1 run2 run3">БОЛЬШЕ ПРОГРАММ</div>
                </div>
                <div class="clearfix"></div>
				<!-- program------------------------------------------------------------------------------>
        
        
        	<div class="wrap d980"> <!--main info---------->
                	<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<article>
                        	<div class="main_text">
                            
                            
							<!--<h2 id="content_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>-->
							<?php the_content('<div id="moretext">Les hele saken --></div>'); ?>
                            <?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                       
					<?php endwhile; ?>
					<?php else: ?> <p>Ничего не найдено</p>
					<?php endif; ?>
			</div><!-- #wrap -------------------------->
        
        
        
        
        
		</div><!-- #primary -------------------->
        
		<div class="clearfix"></div>
        
        
        
<?php get_footer(); ?>