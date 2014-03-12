<?php get_header(); ?>
				
				<!-- Inicia Pagina -->
				<section class='span10 content borBox'>
					<div class='row-fluid'>
						<div class='page-header'>
							<h1>Error 404</h1>
						</div>
					</div>
					<!-- <br/> -->
					<div class="row-fluid">
						<div class="span9">
							<div class="entry">
								<p>Lo sentimos, página o recurso no encontrado.</p>
							</div>
						</div>
						<div class="span3">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-inicio-der') ) : ?> <?php endif; ?>
						</div>
					</div>
				</section>
				<!-- Termina Pagina -->

<?php get_footer(); ?>