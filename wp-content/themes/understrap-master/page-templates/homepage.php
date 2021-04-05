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

	<div class="jumbotron-fluid margin-1em">
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
		<div class="row margin-1em">
			<?php

			$taxonomy     = 'product_cat';
			$orderby      = 'term_id';
			$show_count   = 0;      // 1 for yes, 0 for no
			$pad_counts   = 0;      // 1 for yes, 0 for no
			$hierarchical = 0;     // 1 for yes, 0 for no
			$empty        = 0;

			$args = array(
					'taxonomy'     => $taxonomy,
					'orderby'      => $orderby,
					'number'	   => '5',
					'order'			=> 'asc',
					'show_count'   => $show_count,
					'pad_counts'   => $pad_counts,
					'hierarchical' => $hierarchical,
					'hide_empty'   => $empty
			);
			?>
			<?php

			$all_categories = get_categories( $args );
			foreach ($all_categories as $cat) {
				$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
				$image = wp_get_attachment_url( $thumbnail_id );
				if($cat->category_parent == 0 ) {
					$category_id = $cat->term_id;
					echo '<div class="col-md-4">
							<div class=" hover-effect">
							<img src="'. wp_get_attachment_url($thumbnail_id).'" class="thumbnail" alt="'.$cat->name.'">
							<div class="overlay-1">
 							<a class="info-1 thumbnail" href="'. get_term_link($cat->slug, 'product_cat') .'"></a>
 							<a class="center-center" href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>
 							</div>
 							</div>
 							</div>';
				}
			}
			?>
		</div>
		<div class="row">
			<?php
			$args = array(
					'post_type'      => 'product',
					'posts_per_page' => 8,
					'order'		 => 'desc'
//					'product_cat'    => 'hoodies'
			);

			$loop = new WP_Query( $args );
			global $product;
			while ( $loop->have_posts() ) : $loop->the_post();

				echo '<div class="col-md-3 text-center">
							<a class="text-center" href="'.get_permalink().'"> ' . woocommerce_get_product_thumbnail().'</a>
							<a class="text-center" href="'.get_permalink().'"> '.get_the_title().'</a> <br />
							<a class="text-center" href="'.get_permalink().'"> '.$product->get_price_html().'</a>
					  ';
				echo '</div>';
			endwhile;

			wp_reset_query();
			?>
		</div>
		<h2 id="selection">
			<a href="#">Sản phẩm mới nhất</a>
		</h2>
		<div class="row">
			<?php
			$args = array(
					'post_type'      => 'product',
					'posts_per_page' => 4,
					'order'		 => 'asc'
//					'product_cat'    => 'hoodies'
			);

			$loop = new WP_Query( $args );
			global $product;
			while ( $loop->have_posts() ) : $loop->the_post();

				echo '<div class="col-md-3 text-center">
							<a class="text-center" href="'.get_permalink().'"> ' . woocommerce_get_product_thumbnail().'</a>
							<a class="text-center" href="'.get_permalink().'"> '.get_the_title().'</a> <br />
							<a class="text-center" href="'.get_permalink().'"> '.$product->get_price_html().'</a>
					  ';
				echo '</div>';
			endwhile;

			wp_reset_query();
			?>
		</div>

		<div class="row">
			<h2 id="selection">
			<a href="#">Khuyến mãi</a>
			</h2>
			<div class="row">
				<?php
				$args = array(
						'post_type'      => 'product',
						'posts_per_page' => 4,
						'order'		 => 'asc',
					'product_cat'    => 'Khuyến Mại'
				);

				$loop = new WP_Query( $args );
				global $product;
				while ( $loop->have_posts() ) : $loop->the_post();

					echo '<div class="col-md-3 text-center">
							<a class="text-center" href="'.get_permalink().'"> ' . woocommerce_get_product_thumbnail().'</a>
							<a class="text-center" href="'.get_permalink().'"> '.get_the_title().'</a> <br />
							<a class="text-center text-white" href="'.get_permalink().'"> '.$product->get_price_html().'</a>
					  ';
					echo '</div>';
				endwhile;

				wp_reset_query();
				?>
			</div>
		</div>
		<div class="row">
			<h2 id="selection">
				<a href="#">Tin tức</a>
			</h2>
			<div class="row">
			<?php
			$args = array(
					'posts_per_page' => 4, /* how many post you need to display */
					'offset' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post', /* your post type name */
					'post_status' => 'publish'
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
			?>
			<div class="col-md-3">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
			<?php echo get_the_post_thumbnail('thumbnail'); ?>
				<?php the_excerpt(); ?>
			</a>

			</div>
			<?php
			endwhile;
			endif;?>
			</div>

		</div>
	</div>
<div class="jumbotron-fluid">
	<video autoplay muted loop id="myVideo">
		<source src="http://localhost/testWordPress/wp-content/uploads/2021/04/yt1s.com-Dung-cu-lam-do-da-May-dap-khuon-be-Do-da-handmade-Do-da-thu-cong-I-May-san-xuat-do-da-Hoang-Nguyen_v240P.mp4" type="video/mp4">
		Your browser does not support HTML5 video.
	</video>
</div>

<?php get_footer();
