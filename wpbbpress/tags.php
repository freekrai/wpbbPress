<?php get_header(); ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?> 
<div id="forumwrapper">
<h3 class="bbcrumb"><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Tags'); ?></h3>

<p><?php _e('This is a collection of tags that are currently popular on the forums.'); ?></p>

<div id="hottags">
<?php tag_heat_map( 9, 38, 'pt', 80 ); ?>
</div>
</div>
<?php get_footer(); ?>