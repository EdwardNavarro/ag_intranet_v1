<?php get_header(); ?>
				
				<section class='span10 content borBox'>
					<div class='row-fluid'>
						<div class='page-header'>
							<h1>Inicio <small>AG Intranet</small></h1>
						</div>
					</div>
					<!-- <br/> -->
					<div class="row-fluid">
						<div class="span9">
							<?php putRevSlider( "slider-ag-home" ) ?>
							<hr/>
							<div id="home-posts" class="row-fluid">
								<?php $recent = new WP_Query("cat=1&showposts=3"); while($recent->have_posts()) : $recent->the_post(); ?>
								<div class="span4 post">
									<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
									<div class="post-data"><span class="post-date"><?php the_time('d-m-Y'); ?></span><!--  por <span class="post-author"><?php the_author(); ?></span> --></div>
									<p class="post-content">
										<?php homeBoxContentResume(120, '(más...)'); ?>
									</p>
								</div>
								<?php endwhile; ?>
							</div>
							<hr/>
						</div>
						<div class="span3">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-inicio-der') ) : ?> <?php endif; ?>
						</div>
					</div>
					
				</section>

<?php get_footer(); ?>