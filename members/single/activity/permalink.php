<?php get_header( 'buddypress' ); ?>

	<section class='span10 content borBox'>
		<div class='row-fluid'>
			<div class='page-header'>
				<h1><?php //the_title(); ?>Actividad<!--  <small>for the important stuff</small> --></h1>
			</div>
		</div>
		<!-- <br/> -->
		<div class="row-fluid">
			<div class="span9">

<?php do_action( 'template_notices' ); ?>

<div class="activity no-ajax" role="main">
	<?php if ( bp_has_activities( 'display_comments=threaded&show_hidden=true&include=' . bp_current_action() ) ) : ?>

		<ul id="activity-stream" class="activity-list item-list">
		<?php while ( bp_activities() ) : bp_the_activity(); ?>

			<?php locate_template( array( 'activity/entry.php' ), true ); ?>

		<?php endwhile; ?>
		</ul>

	<?php endif; ?>
</div>


			</div>
			<div class="span3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-inicio-der') ) : ?> <?php endif; ?>
			</div>
		</div>

</section>


<?php get_footer( 'buddypress' ); ?>