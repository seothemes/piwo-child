<style>
/* .page-id-61370{
	margin-top: 0 !important;
} */
#menu-new_menu_centered .sub-menu{
  width:255px;
  background-color:#fff;margin:0;
  padding:40px 0 40px 40px;
  position:absolute;
  top:100px !important;
  margin-left:-40px;
  text-align:left
  }
  #box_menu_cetered{
  overflow: hidden;
}
#box_menu_cetered:hover{
  overflow: visible;
}

#menu-new_menu_centered .a-level-0{
	line-height: 104px;
}
#menu-new_menu_centered>li{
	margin: 0 -16px 0 0 !important;
	height:100px !important
}
#menu-new_menu_centered .sub-menu .sub-menu{
	top:0 !important;
}
</style>

<?php
 if (is_page(61370)){
	include('header-newmenu.php');
 }
else{
	get_header();

}
$class = $full_pages = $full_class = $col_class = '';
$post_id = get_the_ID();

$vc_enabled = get_post_meta($post_id, '_wpb_vc_js_status', true);
$col_class = 'small-12 columns small-centered';

if($vc_enabled != true) {
	$class = 'page-padding';
}
if(function_exists('get_field')) {
	$full_pages = get_field('piwo_full_pages');
	if($full_pages == true) {
		$full_class = 'piwo-full-pages';
		$col_class = 'full-column';
	}
}



while ( have_posts() ) : the_post(); ?>

<?php
	if(function_exists('get_field')) {
		$intro_bg = $intro_color = $breadcrumb_bg = $breadcrumb_color = '';
		if(get_field('piwo_intro_section') == 'default') {
			$intro_bg = get_field('piwo_page_intro_bg','option');
			$intro_color = get_field('piwo_page_intro_color', 'option');
		}
		if(get_field('piwo_show_breadcrumbs') == 'default') {
			$breadcrumb_bg = get_field('piwo_page_breadcrumbs_intro_bg','option');
			$breadcrumb_color = get_field('piwo_page_breadcrumbs_color', 'option');
		}
		if(get_field('piwo_intro_section') == 'enabled') {
			$intro_bg = get_field('piwo_intro_bg');
			$intro_color = get_field('piwo_intro_text_color');
		}
		if(get_field('piwo_show_breadcrumbs') == 'enabled') {
			$breadcrumb_bg = get_field('piwo_breadcrumbs_bg');
			$breadcrumb_color = get_field('piwo_breadcrumbs_color');
		}
		if((get_field('piwo_page_intro_section','option') && get_field('piwo_intro_section') == 'default') || get_field('piwo_intro_section') == 'enabled') {
			echo piwo_intro_section($intro_bg,$intro_color);
		}
		if((get_field('piwo_page_breadcrumbs','option') && get_field('piwo_show_breadcrumbs') == 'default') || get_field('piwo_show_breadcrumbs') == 'enabled') {
			piwo_breadcrumb($breadcrumb_bg,$breadcrumb_color);
		}
	} else {
		echo piwo_intro_section();
		piwo_breadcrumb();
	}
	?>

<div class="classic page-bg-color <?php echo esc_attr($class);?> <?php echo esc_attr($full_class); ?>">
	<?php if(!$full_pages == true) {
		echo '<div class="row">';
	}
	?>
		<div class="<?php echo esc_attr($col_class);?> blog-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'piwo' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div>
		<div class="small-12 columns small-centered blog-content test">
			
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>
<?php endwhile; ?>
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer();


