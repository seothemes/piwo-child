<?php

// Define constants.
define( 'PIWO_SHOW_ACF', true );

// Load includes.
require_once __DIR__ . '/includes/class-gw-email-domain-validator.php';

// Add/remove theme supports.
remove_theme_support( 'widgets-block-editor' );

// Load custom scripts.
add_action( 'wp_enqueue_scripts', function () {
	$stylesheet_dir = get_stylesheet_directory_uri();

	wp_enqueue_style(
		'anexinet-modern',
		$stylesheet_dir . '/public/css/modern.css',
		[]
	);

	wp_enqueue_style(
		'anexinet-fancybox-style',
		$stylesheet_dir . '/public/css/jquery.fancybox.css',
		[]
	);

	wp_enqueue_style(
		'anexinet-fontawesome',
		$stylesheet_dir . '/public/css/font-awesome.min.css',
		[]
	);

	wp_enqueue_style(
		'bootstrap',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
	);

	wp_enqueue_style(
		'piwo-child-style',
		get_stylesheet_uri(),
		[ 'piwo-main-stylesheet' ],
		'1.1'
	);

	wp_enqueue_style(
		'media-queries',
		$stylesheet_dir . '/public/css/media-queries.css',
		[]
	);

	wp_enqueue_style(
		'animations',
		$stylesheet_dir . '/public/css/animations.css',
		[]
	);

	wp_enqueue_style(
		'google_fonts',
		'https://fonts.googleapis.com/css?family=Lora'
	);

	wp_enqueue_style(
		'anexinet-custom',
		$stylesheet_dir . '/public/css/custom.css'
	);

	wp_enqueue_script(
		'custom-app',
		$stylesheet_dir . '/public/js/app.js',
		[ 'jquery' ],
		'1.0',
		true
	);

	if ( is_page( 27 ) ) {
		wp_enqueue_script(
			'partners-modal',
			$stylesheet_dir . '/public/js/partners-modal.js',
			[ 'jquery' ],
			'1.0',
			true
		);
	}

	wp_enqueue_script(
		'anexinet-fancybox-script',
		$stylesheet_dir . '/public/js/jquery.fancybox.js',
		[ 'jquery' ]
	);

	wp_enqueue_script(
		'anexinet-public-script',
		$stylesheet_dir . '/public/js/public-script.js',
		[ 'anexinet-fancybox-script' ],
		time(),
		false
	);

	wp_localize_script(
		'anexinet-public-script',
		'ANEXINETPUBLIC',
		[
			'ajax_url' => admin_url( 'admin-ajax.php', ( is_ssl() ? 'https' : 'http' ) ),
		]
	);
}, 11 );


// Custom nav menu walker.
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"sub-menu level-" . $depth . "\">\n";
	}
}

// Add custom menu class.
add_filter( 'wp_nav_menu_objects', function ( $menu ) {
	$level = 0;
	$stack = [ '0' ];
	foreach ( $menu as $key => $item ) {
		while ( $item->menu_item_parent != array_pop( $stack ) ) {
			$level--;
		}
		$level++;
		$stack[]                 = $item->menu_item_parent;
		$stack[]                 = $item->ID;
		$menu[ $key ]->classes[] = 'level-' . ( $level - 1 );
	}

	return $menu;
} );

// Add level to menu item classes.
add_filter( 'walker_nav_menu_start_el', function ( $item_output, $item, $depth, $args ) {
	$item_output = preg_replace( '/<a /', '<a class="linkmenu a-level-' . $depth . '"', $item_output, 1 );

	return $item_output;
}, 10, 4 );

// Modify excerpt length.
add_filter( 'excerpt_length', function () {
	return 15;
}, 999 );

// Remove unused scripts.
add_action( 'wp_print_scripts', function () {
	wp_dequeue_script( 'piwo-global' );
	wp_deregister_script( 'piwo-global' );
} );

// WP_begginers Pagination begin (used in template files).
function wpbeginner_numeric_posts_nav() {
	if ( is_singular() ) {
		return;
	}

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/** Add current page to the array */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/** Previous Post Link */
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
	}

	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) ) {
			echo '<li>…</li>';
		}
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li>…</li>' . "\n";
		}

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/** Next Post Link */
	if ( get_next_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );
	}

	echo '</ul></div>' . "\n";

}

// Add search shortcode.
add_shortcode( 'wpbsearch', function () {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="' . esc_attr__( 'Search' ) . '" />
    </div>
    </form>';

	return $form;
} );

// Modify search filter.
add_filter( 'pre_get_posts', function ( $query ) {

	/**
	 * @var $query \WP_Query.
	 */
	if ( $query->is_search && ! is_admin() ) {
		$query->set(
			'cat',
			'-14, -17, -19', '-18', '-20', '-1828', '-327', '-15', '-493'
		);
	}

	return $query;
} );


add_filter( 'acf/settings/load_json', function () {
	$paths = [ get_template_directory() . '/acf-json' ];
	if ( is_child_theme() ) {
		$paths = [
			get_stylesheet_directory() . '/acf-json',
			get_template_directory() . '/acf-json',
		];
	}

	return $paths;
} );

// Register custom post type.
add_action( 'init', function () {
	$post_type = 'advertisement';

	$adv_post_labels = [
		'name'               => _x( 'Advertisements', $post_type, 'indola' ),
		'singular_name'      => _x( 'Advertisement', $post_type, 'indola' ),
		'menu_name'          => _x( 'Advertisements', $post_type, 'indola' ),
		'name_admin_bar'     => _x( 'Advertisements', $post_type, 'indola' ),
		'add_new'            => _x( 'Add New', $post_type, 'indola' ),
		'add_new_item'       => __( 'Add New Advertisement', 'indola' ),
		'new_item'           => __( 'New Advertisement', 'indola' ),
		'edit_item'          => __( 'Edit Advertisement', 'indola' ),
		'view_item'          => __( 'View Advertisement', 'indola' ),
		'all_items'          => __( 'All Advertisements', 'indola' ),
		'search_items'       => __( 'Search Advertisement', 'indola' ),
		'parent_item_colon'  => __( 'Parent Advertisement:', 'indola' ),
		'not_found'          => __( 'No Advertisements Found.', 'indola' ),
		'not_found_in_trash' => __( 'No Advertisements Found In Trash.', 'indola' ),
	];

	$adv_post_args = [
		'labels'             => $adv_post_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => [ 'slug' => 'advertisement', 'with_front' => false ],
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-cloud',
		'supports'           => [ 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ],
	];

	register_post_type( $post_type, $adv_post_args );

	flush_rewrite_rules();
} );

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_sub_page( [
		'page_title'  => __( 'Kickstart Mapping Settings', 'anexinet' ),
		'menu_title'  => __( 'Kickstart Mapping', 'anexinet' ),
		'parent_slug' => 'edit.php?post_type=anexinet_kickstarts',
	] );
}

add_filter( 'acf/load_field/key=field_5cf4e94c9f6f6', 'acf_menu_field_choices' );
add_filter( 'acf/load_field/key=field_5cf4e94c9f6f6', 'acf_menu_field_choices' );
/**
 * Modify field choices.
 *
 * @since 1.0.0
 *
 * @param $field
 *
 * @return mixed
 */
function acf_menu_field_choices( $field ) {
	$field['choices'] = [];
	$choices          = get_field( 'anexinet_adv_temp_route_outcomes', 52080 );
	$choices_title    = [];

	if ( ! empty( $choices ) ) {
		foreach ( $choices as $choices_val ) {
			$choice_main_title = $choices_val['outcome_main_title'];
			$choice_title      = $choices_val['outcome_title'];
			$choices_title[]   = $choice_main_title . " - " . $choice_title;
		}
	}

	if ( is_array( $choices_title ) ) {
		foreach ( $choices_title as $choice_key => $choice ) {
			$field['choices'][ $choice_key ] = $choice;
		}
	}

	return $field;
}

// Add Menu name in acf select.
add_filter( 'acf/load_field/name=anexinet_adv_post_cat', function ( $field ) {
	$field['choices'] = [];
	$choices          = get_categories( [ 'hide_empty' => true, 'exclude' => 1 ] );

	if ( is_array( $choices ) ) {
		foreach ( $choices as $choice ) {
			$field['choices'][ $choice->term_id ] = $choice->name;
		}
	}

	return $field;
} );

// Add ajax url.
add_action( 'wp_head', function () {
	echo '<script type="text/javascript">
         var ajaxurl = "' . admin_url( 'admin-ajax.php' ) . '";
       </script>';
} );

add_action( 'wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts' );
add_action( 'wp_ajax_load-filter', 'prefix_load_cat_posts' );
/**
 * Load posts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function prefix_load_cat_posts() {
	header( "Content-Type: text/html" );

	$cat_query = new WP_Query( [
		'cat'            => [ sanitize_text_field( $_POST['cat'] ) ],
		'posts_per_page' => 9,
		'order'          => 'DESC',
	] );

	if ( $cat_query->have_posts() ) : while ( $cat_query->have_posts() ) : $cat_query->the_post(); ?>
		<div class="blog-post col-md-4 col-lg-4">
			<div class="content-cont">
				<div class="img-cont">
					<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'square-size' ); ?></a>
				</div>
				<div class="info-cont">
					<div class="date-author-cont">
						<div class="date-cont">
							<p><?php the_date(); ?></p>
						</div>
						<div class="date-cont">
							<p><?php the_category(); ?></p>
						</div>
						<div class="author-cont">
							<p><?php the_author(); ?></p>
						</div>
					</div>
					<div class="title-cont">
						<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					</div>
					<div class="btn-cont">
						<a href="<?php the_permalink(); ?>">Read Now</a>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<div id="continue"></div>
	<?php

	wp_reset_postdata();

	die( 1 );
}

add_action( 'wp_ajax_nopriv_load-filter-all', 'prefix_load_cat_posts_all' );
add_action( 'wp_ajax_load-filter-all', 'prefix_load_cat_posts_all' );
/**
 * Load all posts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function prefix_load_cat_posts_all() {
	header( "Content-Type: text/html" );

	$cat_query = new WP_Query( [
		'cat'            => [ sanitize_text_field( $_POST['cat'] ) ],
		'posts_per_page' => 9,
		'offset'         => sanitize_text_field( $_POST["offset"] ),
		'order'          => 'DESC',
	] );

	if ( $cat_query->have_posts() ) : while ( $cat_query->have_posts() ) : $cat_query->the_post(); ?>
		<div class="blog-post col-md-4 col-lg-4">
			<div class="content-cont">
				<div class="img-cont">
					<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'square-size' ); ?></a>
				</div>
				<div class="info-cont">
					<div class="date-author-cont">
						<div class="date-cont">
							<p><?php the_date(); ?></p>
						</div>
						<div class="date-cont">
							<p><?php the_category(); ?></p>
						</div>
						<div class="author-cont">
							<p><?php the_author(); ?></p>
						</div>
					</div>
					<div class="title-cont">
						<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					</div>
					<div class="btn-cont">
						<a href="<?php the_permalink(); ?>">Read Now</a>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
		<div id="continue"></div>

	<?php endif;

	wp_reset_postdata();

	die( 1 );
}
