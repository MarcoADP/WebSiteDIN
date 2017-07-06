<?php
/**
 * Template for displaying search forms in University
 *
 * @package WordPress
 * @subpackage University
 * @since 2.0
 */
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label'); ?></span>
        <input type="text" placeholder="<?php echo esc_attr_x( 'Pesquisar&hellip;', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" id="s" >
		<span id="searchicon" class="genericon genericon-search"/>
    </div>
	<input type="submit" id="searchsubmit" value="<?php echo _x( 'Search', 'submit button'); ?>" />
</form>
