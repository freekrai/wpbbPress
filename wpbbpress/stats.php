<?php get_header(); ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?> 
<div id="forumwrapper">
<h3 class="bbcrumb"><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Statistics'); ?></h3>

<dl>
	<dt><?php _e('Registered Users'); ?></dt>
	<dd><strong><?php total_users(); ?></strong></dd>
	<dt><?php _e('Posts'); ?></dt>
	<dd><strong><?php total_posts(); ?></strong></dd>
</dl>

<?php if ($popular) : ?>
<h3><?php _e('Most Popular Topics'); ?></h3>
<ol>
<?php foreach ($popular as $topic) : ?>
<li><a href="<?php topic_link(); ?>"><?php topic_title(); ?></a> &#8212; <?php topic_posts(); ?> posts</li>
<?php endforeach; ?>

<?php endif; ?>
</ol>
</div>
<?php get_footer(); ?>