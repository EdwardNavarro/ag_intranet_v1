<?php get_header(); ?>
				
				<!-- Inicia Pagina -->
				<section class='span10 content borBox'>
					<div class='spdan10 contednt bordBox'>
						<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
					    <h1 class="titulos-contenidos-h1"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					    
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
				</section>
				<!-- Termina Pagina -->

<?php get_footer(); ?>