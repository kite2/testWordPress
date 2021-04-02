<?php
/**
 * Template Name: Homepage Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

	<div class="jumbotron-fluid">
		<?php if ( is_front_page() ) {
			get_template_part( 'global-templates/hero' );
		} ?>
	</div>
	<div class="row">
		<div class="container text-center">
			<h3>Hoàng Nguyễn - Thương hiệu máy làm đồ da sản xuất tại Việt Nam</h3>
			<p class="text-description">Từ việc lựa chọn kĩ càng các sản phẩm phù hợp nhu cầu anh chị em, đến sự trung thực
				cầu tiến để nâng cao chất lượng sản phẩm, dịch vụ... Tất cả đều xuất phát từ trái tim của người thợ
				ở Hoàng Nguyễn, chúng tôi tin rằng điều gì xuất phát từ trái tim sẽ đến trái tim</p>
		</div>
	</div>

	<div class="container">
		<h2 id="selection">
			<a href="#">Tất cả sản phẩm</a>
		</h2>
		<div class="row">
			<?php

			$taxonomy     = 'product_cat';
			$orderby      = 'name';
			$show_count   = 0;      // 1 for yes, 0 for no
			$pad_counts   = 0;      // 1 for yes, 0 for no
			$hierarchical = 1;      // 1 for yes, 0 for no
			$title        = '';
			$empty        = 0;

			$args = array(
				'taxonomy'     => $taxonomy,
				'orderby'      => $orderby,
				'show_count'   => $show_count,
				'pad_counts'   => $pad_counts,
				'hierarchical' => $hierarchical,
				'title_li'     => $title,
				'hide_empty'   => $empty
			);
			?>
			<?php
			$all_categories = get_categories( $args );
			foreach ($all_categories as $cat) {
				$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
				$image = wp_get_attachment_url( $thumbnail_id );
				if($cat->category_parent == 0) {
					$category_id = $cat->term_id;
					echo '<div class="col-md-4 text-center">
							<div class="image-product hover-effect">
							<img src="'. wp_get_attachment_url($thumbnail_id).'" class="thumbnail">
							</div>
							<div class="overlay">
 							<h2>Product 1</h2>
 							<a class="center-center infomation" href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>
 							</div>
 							</div>';

//					$args2 = array(
//						'taxonomy'     => $taxonomy,
//						'child_of'     => 0,
//						'parent'       => $category_id,
//						'orderby'      => $orderby,
//						'show_count'   => $show_count,
//						'pad_counts'   => $pad_counts,
//						'hierarchical' => $hierarchical,
//						'title_li'     => $title,
//						'hide_empty'   => $empty
//					);
//					$sub_cats = get_categories( $args2 );
//					if($sub_cats) {
//						foreach($sub_cats as $sub_category) {
//							echo  $sub_category->name ;
//						}
//					}
				}
			}
			?>

		</div>
	</div>

	</div>
	<!--while ( have_posts() ) :-->
	<!--	the_post();-->
	<!--	get_template_part( 'loop-templates/content', 'empty' );-->
	<!--endwhile;-->

<?php get_footer();
