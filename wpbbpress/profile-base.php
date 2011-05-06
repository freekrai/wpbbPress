<?php get_header(); ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<?php if ( 'rtl' == bb_get_option( 'text_direction' ) ) : ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri( 'rtl' ); ?>" type="text/css" />
<?php endif; ?> 
<div id="forumwrapper">
<h3 class="bbcrumb"><a href="<?php bb_option('uri'); ?>"><?php bb_option('name'); ?></a> &raquo; <?php echo $profile_page_title; ?></h3>
<h2><?php echo get_user_name( $user->ID ); ?></h2>

<?php bb_profile_base_content(); ?>
</div>
<?php get_footer(); ?>