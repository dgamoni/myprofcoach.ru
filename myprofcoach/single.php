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
                        	<div id="mycontent" style="margin-bottom: 30px;">
                            <div class="title_post"><?php the_title(); ?></div>
							<?php the_content('<div id="moretext">Les hele saken --></div>'); ?>
                            </div>
                            
                            <div class="clearfix"></div>
                        </article>
					<?php endwhile; ?>
					<?php else: ?> <p>Ничего не найдено</p>
					<?php endif; ?>
				</div><!-- #wrap -->
                
                
			</div><!-- #anons -->
            
	 </div><!-- #primary -->

<?php get_footer(); ?>