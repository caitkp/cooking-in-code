<?php
/**
 * @package Fruit Shake
 */

get_header(); ?>

		<section id="primary">
			<div id="content" class="site-content" role="main">

				<header class="page-header vcard">
					<h1 class="page-title author"><?php printf( __( 'Author Archives: <span>%s</span>', 'fruit-shake' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>

					<?php
					// If a user has filled out their description, show a bio on their entries.
					if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), '77' ); ?>
						</div><!-- #author-avatar -->

						<div id="author-description">
							<h2><?php printf( __( 'About %s', 'fruit-shake' ), get_the_author() ); ?></h2>
							<p class="note"><?php the_author_meta( 'description' ); ?></p>
						</div><!-- #author-description	-->
					</div><!-- #entry-author-info -->
					<?php endif; ?>
				</header>

				<?php rewind_posts(); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>