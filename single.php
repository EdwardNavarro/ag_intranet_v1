<?php get_header(); ?>
				
				<!-- Inicia Post/single -->
				<section class='span10 content borBox'>
					<div class='row-fluid'>
						<div class='page-header'>
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<!-- <br/> -->
					<div class="row-fluid">
						<div class="span9">
							<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
							<div class="post" id="post-<?php the_ID(); ?>">
						    <!-- <h1 class="titulos-contenidos-h1"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1> -->
						    
						    <div class="entry">
						    <?php the_content(); ?>
						    </div>
						    
						    </div>
						    <div style="height:40px;"></div>
							<?php endwhile; ?>
							<?php else : ?>
							<div class="post">
							<h2><?php _e('No Encontrado'); ?></h2>
							</div>
							<?php endif; ?>
						</div>
						<div class="span3">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-inicio-der') ) : ?> <?php endif; ?>
						</div>
					</div>
				</section>
				<!-- Termina Post/single -->

<?php get_footer(); ?>