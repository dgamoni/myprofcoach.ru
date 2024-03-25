<?php
/*
Template Name: Coaching
*/
?>

<?php get_header(); ?>

		<div id="slider">
    	<?php  echo do_shortcode('[layerslider id="19"]'); ?>
    	</div>
        
        
        
        <div id="primary">
        
        <div id="anons" class="d980"><!--get post anons for id=38 -->
                <?php  the_breadcrumb(); ?>
			
            
				<div class="wrap">
                	<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<article>
                        	<div id="mycontent">
                            
                            <div class="title_post"><h1><?php the_title(); ?></h1></div>
							
							<?php the_content('<div id="moretext">Les hele saken --></div>'); ?>
                            <?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                       
					<?php endwhile; ?>
					<?php else: ?> <p>Ничего не найдено</p>
					<?php endif; ?>
				</div><!-- #wrap -->
                
			
        </div><!--get post anons-->   
        
        <div class="whooall d980"><!--   whoo what why   -->
                	<div class="whoo left">
                    	
                        <?php
						$my_id = 103;
						echo '<a href="/coaching/dlya-kogo-polezen">'.get_the_post_thumbnail($my_id).'</a>';
						echo '<a href="/coaching/dlya-kogo-polezen"><div class="title_post">'.get_the_title($my_id).'</div></a>';
						$post_id_103 = get_post($my_id);
						$content = $post_id_103->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
						?>
                    
                    </div>
                    <div class="whoo left correct1">
                    	<?php
						$my_id = 105;
						echo '<a href="/coaching/chto-daet-rezultaty">'.get_the_post_thumbnail($my_id).'</a>';
						echo '<a href="/coaching/chto-daet-rezultaty"><div class="title_post">'.get_the_title($my_id).'</div></a>';
						$post_id_105 = get_post($my_id);
						$content = $post_id_105->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
						?>
                    </div>
                    <div class="whoo left">
                    	<?php
						$my_id = 107;
						echo '<a href="/coaching/zachem-nuzhen">'.get_the_post_thumbnail($my_id).'</a>';
						echo '<a href="/coaching/zachem-nuzhen"><div class="title_post">'.get_the_title($my_id).'</div></a>';
						$post_id_107 = get_post($my_id);
						$content = $post_id_107->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						echo $content;
						?>
                    </div>
                    <div class="clearfix"></div>
                </div><!---------------->
         
		</div><!-- #primary -->
        
		<div class="clearfix"></div>
<?php get_footer(); ?>