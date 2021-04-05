<?php
/**
 * The template for displaying search forms
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="dropdown">
	<button class="btn btn-primary dropdown-toggle fa fa-search" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

	</button>
	<div class="dropdown-menu">
		<form class="width-300px" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
			<div class="input-group">
				<input class="field form-control" id="s" name="s" type="text"
					   placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
				<span class="input-group-append">
			<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
				   value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">
		</span>

		</form>
	</div>
