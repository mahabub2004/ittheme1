<?php get_header();?>

<?php get_template_part('notice');?>

		<div class="content_wrapper">
			<div class="left_content">
				<h1>this is our cororan virus page</h1>
				<?php


					if(have_posts()) : 
						while(have_posts()) : the_post(); ?> 

							<article class="home-ar-wrap">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

									<div class="featured-image">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									</div>

								
								<p><?php the_content(); ?></p>
							</article>

					<?php  endwhile;
					else:
					echo 'No Posts Found';
					endif;


				 ?>
				
			</div>
			
			<br class="clear" />
		</div>
<?php get_footer(); ?>




<!--    <?php ?>    -->