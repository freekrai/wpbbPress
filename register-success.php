<?php get_header(); ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?> 
<div id="forumwrapper">
<h3 class="bbcrumb"><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Register'); ?></h3>

<h2 id="register"><?php _e('Great!'); ?></h2>

<p><?php printf(__('Your registration as <strong>%s</strong> was successful. Within a few minutes you should receive an email with your password.'), $user_login) ?></p>
</div>
<?php get_footer(); ?>