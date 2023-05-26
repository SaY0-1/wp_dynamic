<?php
function blog_assets() {
    
    wp_enqueue_style(' normalize ', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style(' style ', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style(' media ', get_template_directory_uri() . '/assets/css/media.css' );
    wp_enqueue_script(' main ', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'blog_assets');

show_admin_bar(false);

add_theme_support ( 'post-thumbnails' );

function custom_pagination() {
	ob_start();
	?>

			<?php
				global $wp_query;
				$current = max( 1, absint( get_query_var( 'paged' ) ) );
				$pagination = paginate_links( array(
					'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
					'format' => '?paged=%#%',
					'current' => $current,
					'total' => $wp_query->max_num_pages,
					'type' => 'array',
					'prev_text' => null,
					'next_text' => null,
				) ); ?>
			<?php if ( ! empty( $pagination ) ) : ?>
				<ul class="pagination list-reset">
					<?php foreach ( $pagination as $key => $page_link ) : ?>
						<li class="paginated__item<?php if ( strpos( $page_link, 'current' ) !== false ){ echo 'pagination__item--curent';} ?>"><?php echo $page_link ?></li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>

	<?php
	$links = ob_get_clean();
	return apply_filters( 'sa_bootstap_paginate_links', $links );
}


function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
	if ($count > 0) return $count - 1 ;
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

function posts_link_next_class($format){
	$format = str_replace('href=', 'class="post-links__link post-links__link--next" href=', $format);
	return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format) {
	$format = str_replace('href=', 'class="post-links__link post-links__link--next" href=', $format);
	return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');

add_theme_support ( 'menus' );

