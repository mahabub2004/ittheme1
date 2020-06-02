<?php get_header();?>

<?php get_template_part('notice');?>

		<div class="content_wrapper">
			<div class="left_content">
				
				<?php


					if(have_posts()) : ?>

						<h2>Search Result for: "<?php the_search_query(); ?>"</h2>


					<?php	while(have_posts()) : the_post(); ?> 

							<article class="home-ar-wrap">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

									<div class="featured-image">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									</div>

								<div class="post_meta">
									Posted by: <?php the_author_posts_link();?>
									| Posted On: <?php the_time('M d,Y'); ?> | Posted In: <?php the_category(','); ?> | <?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'my_comment_class', 'Comment off'); ?> 
								</div>
								<p><?php the_excerpt(); ?></p>
							</article>

					<?php  endwhile;
					else:
					echo 'No Posts Found';
					endif;


				 ?>
					<div class="main_pagination">
						<div class="older_post"> <?php next_posts_link('Older Posts &raquo;'); ?> </div>
						<div class="newer_post"><?php previous_posts_link('&laquo; Newer Posts'); ?> </div>
					</div>
				
				  
				
			</div>
			<?php get_sidebar(); ?>
			<br class="clear" />
		</div>
		<?php get_template_part('befor_footer_widget'); ?> 
<?php get_footer(); ?>




<!--    <?php ?>    -->