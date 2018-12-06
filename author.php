<?php get_header(); ?>

<div class="container">
	<div class="inner default">
		<div class="row">
			<div class="col-12">

				<?php if (have_posts()): the_post(); ?>
					<h1><?php _e( 'Author Archives for ', 'igoecreative' ); echo get_the_author(); ?></h1>
				<?php if ( get_the_author_meta('description')) : ?>
				<?php echo get_avatar(get_the_author_meta('user_email')); ?>
					<h2><?php _e( 'About ', 'igoecreative' ); echo get_the_author() ; ?></h2>
					<?php echo wpautop( get_the_author_meta('description') ); ?>
				<?php endif; ?>
				<?php rewind_posts(); while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>

						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'igoecreative' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'igoecreative' ), __( '1 Comment', 'igoecreative' ), __( '% Comments', 'igoecreative' )); ?></span>

						<br class="clear">
					</article>
				<?php endwhile; ?>
				<?php else: ?>

					<article>
						<h2><?php _e( 'Sorry, nothing to display.' , 'igoecreative' ); ?></h2>
					</article>
				<?php endif; ?>
					<?php get_template_part('pagination'); ?>

				</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
