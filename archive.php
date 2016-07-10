<?php
/**
 * @package WordPress
 * @subpackage Graelabs Blank Boilerplate WP Theme
 * @since GL BBWPT v.1
 */
 get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php echo 'Archive for the'; ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php echo 'Category'; ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><?php echo 'Posts Tagged'; ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><?php echo 'Archive for'; ?> <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2><?php echo 'Archive for'; ?> <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle"><?php echo 'Archive for'; ?> <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle"><?php echo 'Author Archive'; ?></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle"><?php echo 'Blog Archives'; ?></h2>

			<?php } ?>

			<?php post_navigation(); ?>

			<?php while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?>>

						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<?php posted_on(); ?>

						<div class="entry">
							<?php the_content(); ?>
						</div>

				</article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php echo 'Nothing Found'; ?></h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>