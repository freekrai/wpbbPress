<?php get_header(); ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?> 
<div id="forumwrapper">
<h3 class="bbcrumb"><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php _e('Log in'); ?></h3>

<h2><?php _e('Password Reset'); ?></h2>

<?php if ( $reset ) : ?>
<p><?php _e('Your password has been reset and a new one has been mailed to you.'); ?></p>
<?php else : ?>
<p><?php _e('An email has been sent to the address we have on file for you. If you don&#8217;t get anything with a few minutes, or your email has changed, you may want to get in touch with the webmaster or forum administrator here.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>