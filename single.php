<?php get_header(); ?>

<div class="single blog">
	<div class="container-fluid">
		<div class="row">
			<div class="feat_img home">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}?>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="inner">
			<div class="row">
				<section class="col-12">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'igoecreative' ); ?> <?php the_author_posts_link(); ?></span>

						<?php the_content();?>

						<p><?php the_tags( __('Tags: ', 'igoecreative' ), ', ', '<br>');?></p>
						<p><?php _e( 'Categorised in: ', 'igoecreative' ); the_category(', '); ?></p>

						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'igoecreative' ), __( '1 Comment', 'igoecreative' ), __( '% Comments', 'igoecreative'  )); ?></span>
						<?php comments_template(); ?>

					</article>
				<?php endwhile; ?>
				<?php else: ?>
					<article>
						<h1><?php _e( 'Sorry, nothing to display.', 'igoecreative' ); ?></h1>
					</article>
				<?php endif; ?>
				</section>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
