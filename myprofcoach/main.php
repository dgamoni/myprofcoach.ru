<?php
/*
Template Name: Main myprofcoach
*/
?>

<?php get_header(); ?>

		<div id="slider">
    	<?php  echo do_shortcode('[layerslider id="15"]'); ?>
    	</div>
    
 		<div id="primary">
        
        		<div id="anons" class="d980"><!--get post anons for id=38 -->
                <?php
				$my_id = 38;
				$post_id_38 = get_post($my_id);
				$content = $post_id_38->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo '<div class="title_post"><h1>'.get_the_title(38).'</h1></div>';
				echo $content;
				?>
                </div><!--get post anons-->
                
                <div class="gradient_car fullwith">
                <div id="carusel_program" class="d980 d981"><!--program carusel-->
                	<div id="carusel_title">
                    	<div class="title_post left">Программы</div>
                    	<div class="button_main button_right"><a href="<?php bloginfo('url'); ?>/programs">ВСЕ ПРОГРАММЫ</a></div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="carusel_body">
                    <?php  echo do_shortcode("[touchcarousel id='1']"); ?>
                    </div>
                </div><!--end program carusel-->
                </div>
			
            
				<div class="wrap d980"> <!--main info-->
                	<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<article>
                        	<div id="main_content">
                            
                            
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
                
                <div class="sl_otzivy"><!--slider otvivy-->
                	<div class="sl_otzivy_title d980">
                    	<div class="title_post left">Отзывы<span class="posible">, карьера-коучинг</span></div>
                        <div class="button_main revers button_right"><a href="<?php bloginfo('url'); ?>/otzivy">ВСЕ ОТЗЫВЫ</a></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sl_otzivy_body d980">
                    <?php  echo do_shortcode('[layerslider id="12"]'); ?>
                    </div>
                </div><!-- end slider otvivy-->
                
                <div class="whooall d980"><!----whoo what why-------->
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
                
                <div class="space50 d980"><!----buuton video---->
                	<div class="bigbutton left bigshadow"><span>ВИДЕО ГАЛЕРЕЯ</span></div>
                    <div id="foto" class="bigbutton right bigshadow"><a href="<?php bloginfo('url'); ?>/about-me/foto">ФОТО ГАЛЕРЕЯ</a></div>
                    <div class="clearfix"></div>
                </div><!---------------->
                
			
            
		</div><!-- #primary -------------------->
        
		<div class="clearfix"></div>
        
<?php get_footer(); ?>