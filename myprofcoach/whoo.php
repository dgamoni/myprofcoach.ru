<?php
/*
Template Name: Whoo
*/
?>

<?php get_header(); ?>

		<div id="slider">
    	<?php  echo do_shortcode('[layerslider id="15"]'); ?>
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
							<!--<h2 id="content_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>-->
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
        
       
         
		</div><!-- #primary -->
        
		<div class="clearfix"></div>
<?php get_footer(); ?>