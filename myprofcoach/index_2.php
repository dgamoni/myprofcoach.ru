<?php get_header(); ?>

	 	<div id="slider">
    	<?php  echo do_shortcode('[layerslider id="16"]'); ?>
    	</div>
    
    
        <!--news--------------------- -->
        
		<div id="primary">
        
        
        	 <div id="anons" class="d980"><!--------->
                <?php  the_breadcrumb(); ?>
                
				<div class="title_post"><h1>Отзывы о работе с карьерным кочем</h1></div>
        
            
				<div class="wrap">
                	<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<article>
                        	<div class="otziv_title"><?php the_title(); ?></div>
                            <div class="otziv_text coach_title about"><?php the_excerpt(); ?></div>                     
                            <div class="clearfix"></div>
                        </article>
					<?php endwhile; ?>
					<?php else: ?> <p>Ничего не найдено</p>
					<?php endif; ?>
                    
                 <div class="pag"> 
 				<!----pagination ------------------>
				<?php
				global $wp_query;
				$total_pages = $wp_query->max_num_pages;
				if ($total_pages > 1){
 					 $current_page = max(1, get_query_var('paged'));
 					 echo paginate_links(array(
    				 'base' => get_pagenum_link(1) . '%_%',
     				 'format' => '/page/%#%',
     				 'current' => $current_page,
      				 'total' => $total_pages,
					 'prev_text'    => __('«'),
					 'next_text'    => __('»')
    				));
				}
				?> <!----end pagination --->
                </div><!-- #pag -->
                
                <!-- button ---->
                <span class="button_main revers inline" style="margin-left: 0px;"><a href="<?php bloginfo('url'); ?>/programs">ПРОГРАММЫ</a></span>
                <span class="button_main revers inline"><a href="<?php bloginfo('url'); ?>/coaching">КОУЧИНГ</a></span>
                <span class="button_main inline"><a href="#" data-reveal-id="text-3">ОТПРАВИТЬ ЗАПРОС</a></span>
                
                <div class="carusel_title" style="margin-top: 30px;">Фотогалерея</div>
                <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'gallery' ); ?>

				</div><!-- #wrap -->
                
                
			</div><!-- #anons -->
		</div><!-- #primary -->
        <!--end news----------------- -->
         

<?php get_footer(); ?>