<?php
/**
 * @package Fruit Shake
 */
?>
	<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<input type="text" class="field" name="s" id="s"  placeholder="<?php esc_attr_e( 'Search', 'fruit-shake' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'fruit-shake' ); ?>" />
	</form>