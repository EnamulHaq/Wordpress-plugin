<div class="wrap">
	<?php
if( is_wp_error( $return ) ) {
    echo $return->get_error_message();
}?>
	<h1 class="wp-heading-inline"><?php _e( 'Slider list', 'wedevs_slider' ); ?></h1>

	<a class="page-title-action" href="<?php echo admin_url( 'admin.php?page=slider&action=new' ); ?>">Add new</a>
</div>