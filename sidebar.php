<?php
/**
 * @package WordPress
 * @subpackage Graelabs Blank Boilerplate WP Theme
 * @since GL BBWPT v.1
 */
?>
 <aside id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>

    	<h2><?php echo'Archives'; ?></h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>

    	<h2><?php echo 'Meta'; ?></h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="<?php echo 'Powered by WordPress, state-of-the-art semantic personal publishing platform.'; ?>"><?php echo 'WordPress'; ?></a></li>
    		<?php wp_meta(); ?>
    	</ul>

    	<h2><?php echo 'Subscribe'; ?></h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>"><?php echo 'Entries (RSS)'; ?></a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php echo 'Comments (RSS)'; ?></a></li>
    	</ul>

	<?php endif; ?>

</aside>
