<?php
/**
 * The template for displaying all single anxt_webinars pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */



$shareData = array();
$shareData = array('title'=>get_the_title(), 'url'=>get_the_permalink());
$shareImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
if(isset($shareImage[0])) {
	$shareImage = $shareImage[0];
	$shareData['image'] = $shareImage;
}
$class = $postClass = $gallery = '';

$postFormat = get_post_format();
if(has_post_format('gallery')) {
	$postClass .= ' post-gallery';
} elseif(has_post_format('video')) {
	$postClass .= ' post-video';
} elseif(has_post_format('quote')) {
	$postClass .= ' post-quote';
} elseif(has_post_format('link')) {
	$postClass .= ' post-link';
} elseif(has_post_format('audio')) {
	$postClass .= ' post-audio';
} else {
	$postFormat = 'image';
}
$sidebar = 'show';
$post_class = '';
if(function_exists('get_field')) {
	$gallery = get_field('piwo_post_gallery');
	$videoUrl = get_field('piwo_post_url'); 
	$link = get_field('piwo_post_link'); 
	$quote = get_field('piwo_post_quote'); 
	if(get_field('piwo_single_post_sidebar', 'option') == true) {
		$sidebar = 'show';
		$post_class .= 'post-with-sidebar large-with-sidebar sidebar-on';
	} else { 
		$sidebar = 'hide';
		$post_class .= 'post-without-sidebar';
	}
} else {
	if(is_active_sidebar('sidebar-1')) {
		$sidebar = 'show';
		$post_class .= 'post-with-sidebar large-with-sidebar sidebar-on';
	} else {
		$sidebar = 'hide';
		$post_class .= 'post-without-sidebar';		
	}
}

get_header(); ?>
<?php
	while ( have_posts() ) : the_post();
?>
<div class="content single-postluis">
	<?php 
	if(function_exists('get_field')) {
		$intro_bg = $intro_color = $breadcrumb_bg = $breadcrumb_color = '';
		$intro = get_field('piwo_post_intro_section','option');
		$breadcrumb = get_field('piwo_post_breadcrumbs','option');
		$intro_bg = get_field('piwo_post_intro_bg','option');
		$intro_color = get_field('piwo_post_intro_color', 'option');
		$breadcrumb_bg = get_field('piwo_post_breadcrumbs_intro_bg','option');
		$breadcrumb_color = get_field('piwo_post_breadcrumbs_color', 'option');
		if($intro == true ) {
			echo piwo_intro_section($intro_bg,$intro_color);	
		}
		if($breadcrumb == 'true') {
			piwo_breadcrumb($breadcrumb_bg,$breadcrumb_color);	
		} 
	} else {
		echo piwo_intro_section();	
		piwo_breadcrumb();	
	}
	?>
	

	<div class="row">
		<div class="single-post-content small-12 columns <?php echo esc_attr( $post_class ); ?>">
			<div class="post-content-wrapper">
			<div class="post-header hide">
				<?php 
					// POST FORMAT - IMAGE
					if($postFormat == 'image' || !function_exists('get_field')) : ?>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="post-images">
							<?php
							$image = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image, 'blog-single');
							echo '<img class="b-lazy" height="'.esc_attr($image_url[2]).'" width="'.esc_attr($image_url[1]).'" src="'.piwo_image_preloader($image_url[1],$image_url[2]).'" data-src="'.esc_url($image_url[0]).'"/>';
							?>
						</div>
					<?php endif; ?>
				<?php 
					// POST FORMAT - GALLERY
					elseif ($postFormat == 'gallery' && isset($gallery) && $gallery != '') : ?>
					<div class="piwo-post-gallery swiper-container"><div class="swiper-wrapper">
					<?php 
						foreach($gallery as $g) {
							$image = $g['url'];
							$image = 'background-image: url('.esc_url($image).')';
					?>
					<div class="swiper-slide">
						<div style="<?php echo esc_attr($image); ?>;">
						</div>
					</div>
					<?php } ;?>
					
					</div><div class="piwo-carousel-arrows show-for-large swiper-arrows">
				<div class="arrow-prev arrow">
					<div class="arrow-icon"><div class="text-color"></div></div>
				</div>
				<div class="arrow-next arrow">
					<div class="arrow-icon"><div class="text-color"></div></div>
				</div>
			</div></div>

				<?php 
					// POST FORMAT - VIDEO
					elseif ($postFormat == 'video' && isset($videoUrl) && $videoUrl != '') : ?>
					<?php
					?>
					<div class="piwo-post-video">
					<div class="responsive-embed widescreen"><?php echo wp_oembed_get($videoUrl); ?></div>
					</div>
				<?php 
					// POST FORMAT - QUOTE
					elseif ($postFormat == 'quote' && isset($quote) && $quote != '') : ?>
					<div class="piwo-post-quote">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-images">
								<?php
								$image = get_post_thumbnail_id();
								$image_url = wp_get_attachment_image_src($image, 'blog-single');
								echo '<img class="b-lazy" height="'.esc_attr($image_url[2]).'" width="'.esc_attr($image_url[1]).'" src="'.esc_attr(piwo_image_preloader($image_url[1],$image_url[2])).'" data-src="'.esc_url($image_url[0]).'"></a>';
								?>
							</div>
						<?php endif; ?>
						<div class="quote"><div class="quotation-marks">
						<svg version="1.1" class="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 75.999 75.999"  xml:space="preserve">
							<path d="M14.579,5C6.527,5,0,11.716,0,20c0,8.285,6.527,15,14.579,15C29.157,35,19.438,64,0,64v7
									C34.69,71,48.286,5,14.579,5z M56.579,5C48.527,5,42,11.716,42,20c0,8.285,6.527,15,14.579,15C71.157,35,61.438,64,42,64v7
									C76.69,71,90.286,5,56.579,5z"/>
						</svg>
					</div><?php echo apply_filters('the_content', $quote); ?></div>
					</div>
				<?php 
					// POST FORMAT - LINK
					elseif ($postFormat == 'link' && isset($link) && $link != '') : ?>
					<?php 
		$textLink = get_field('piwo_post_link_text'); 
		?>
		<div class="piwo-post-link">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-images">
					<?php
					$image = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image, 'blog-single');
					echo '<img class="b-lazy" height="'.esc_attr($image_url[2]).'" width="'.esc_attr($image_url[1]).'" src="'.esc_attr(piwo_image_preloader($image_url[1],$image_url[2])).'" data-src="'.esc_url($image_url[0]).'"></a>';
					?>
				</div>
			<?php endif; ?>
			<div class="post-custom-link"><a href="<?php echo esc_url($link); ?>"><div class="post-link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 75.999 75.999"  xml:space="preserve">
	<path d="M51.173,3.801c-5.068-5.068-13.315-5.066-18.384,0l-9.192,9.192c-0.781,0.781-0.781,2.047,0,2.828   c0.781,0.781,2.047,0.781,2.828,0l9.192-9.192c1.691-1.69,3.951-2.622,6.363-2.622c2.413,0,4.673,0.932,6.364,2.623   s2.623,3.951,2.623,6.364c0,2.412-0.932,4.672-2.623,6.363L36.325,31.379c-3.51,3.508-9.219,3.508-12.729,0   c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.048,0,2.828c2.534,2.534,5.863,3.801,9.192,3.801s6.658-1.267,9.192-3.801   l12.021-12.021c2.447-2.446,3.795-5.711,3.795-9.192C54.968,9.512,53.62,6.248,51.173,3.801z" fill="#FFFFFF"/>
	<path d="M27.132,40.57l-7.778,7.778c-1.691,1.691-3.951,2.623-6.364,2.623c-2.412,0-4.673-0.932-6.364-2.623   c-3.509-3.509-3.509-9.219,0-12.728L17.94,24.306c1.691-1.69,3.951-2.622,6.364-2.622c2.412,0,4.672,0.932,6.363,2.622   c0.781,0.781,2.047,0.781,2.828,0s0.781-2.047,0-2.828c-5.067-5.067-13.314-5.068-18.384,0L3.797,32.793   c-2.446,2.446-3.794,5.711-3.794,9.192c0,3.48,1.348,6.745,3.795,9.191c2.446,2.447,5.711,3.795,9.191,3.795   c3.481,0,6.746-1.348,9.192-3.795l7.778-7.778c0.781-0.781,0.781-2.047,0-2.828S27.913,39.789,27.132,40.57z" fill="#FFFFFF"/>
</svg></div><span class="post-link-text"><span><?php echo esc_html($textLink); ?></span></span></a></div>
		</div><?php 
					// POST FORMAT - AUDIO
					elseif ($postFormat == 'audio') : ?>
					<?php $audioUrl = get_field('piwo_post_url'); 
					?>
					<div class="piwo-post-audio">
					<?php echo wp_audio_shortcode( array('src' => esc_url($audioUrl), 'autoplay' => '', 'preload'  => 'none')); ?>
					</div>
				<?php endif; ?></div>
			<div class="content">
				<?php 
					the_content();
					wp_link_pages( array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'piwo' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
				; ?>

			</div>
			<div class="post-footer">
				<?php 
				$tags_list = get_the_tag_list('<li>', '<span class="el-icon-spacing"></span></li><li>', '<span class="el-icon-spacing"></span></li>'); ?>
				<div class="post-cat-tags"><div class="cat-tags-links">
				<?php if ( $tags_list ) : ?>
				<ul class="post-tags"><li><?php echo esc_html__('Tags:', 'piwo'); ?></li><?php echo  $tags_list; ?></ul>
				<?php endif; ?>
				</div></div>
				<div class="post-author"><span><?php echo esc_html__('by', 'piwo'); ?> </span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ));  ?>"><?php echo get_the_author(); ?></a></div>
			</div>

			<?php if(function_exists('piwo_get_share_links')) : ?>
			<div class="post-shares text-center">
				<div class="header-shares"><?php echo esc_html__('Share on', 'piwo'); ?></div>
				<?php echo piwo_get_share_links($shareData); ?>
			</div>
			<?php endif ; ?>
			<div class="single-post-separator"></div>
		<?php if(get_the_author_meta('description') !== '') : ?>
		<div class="single-post-author">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>

			<h5><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author(); ?></a></h5>
			<div class="author-desc"><?php echo get_the_author_meta('description'); ?></div>

		</div>
		<div class="single-post-separator"></div>
		<?php endif; ?>

		<div class="single-post-controls">
			<?php 
			$permalink = get_permalink();
			$prev = get_adjacent_post(false,'',false);
			$next = get_adjacent_post(false,'',true);
			$prevUrl = get_permalink($prev);
			$nextUrl = get_permalink($next);
			$backLink = home_url( '/' );
			
			$prevImageId = get_post_thumbnail_id($prev);
			$prevImageUrl = wp_get_attachment_image_src($prevImageId, 'blog-single');
			
			$nextImageId = get_post_thumbnail_id($next);
			$nextImageUrl = wp_get_attachment_image_src($nextImageId, 'blog-single');
			
			?>
			
			<?php if($prevUrl != $permalink) : ?>
				<a href="<?php echo esc_url($prevUrl);?>" class="link-hover link-prev">
					<?php if($prevImageUrl) : ?>
						<div class="adjacent-post-image" style="background-image: url(<?php echo esc_url($prevImageUrl[0]); ?>);"></div>
					<?php endif; ?>
					<div class="adjacent-post-title <?php echo ($prevImageUrl) ? '' : 'no-image-left'; ?>">
						<div><?php echo esc_html__('next post', 'piwo'); ?></div>
						<h6><?php echo esc_html($prev->post_title); ?></h6>
					</div>
				</a>
			<?php else : ?>
				<span class="disabled-link"><?php echo esc_html__('next post', 'piwo'); ?></span>
			<?php endif; ?>


			<?php if($nextUrl != $permalink) : ?>
				<a href="<?php echo esc_url($nextUrl); ?>" class="link-hover link-next">
					<?php if($nextImageUrl) : ?>
						<div class="adjacent-post-image" style="background-image: url(<?php echo esc_url($nextImageUrl[0]); ?>);"></div>
					<?php endif; ?>
					<div class="adjacent-post-title <?php echo ($nextImageUrl) ? '' : 'no-image-right'; ?>">
						<div><?php echo esc_html__('previous post', 'piwo'); ?></div>
						<h6><?php echo esc_html($next->post_title); ?></h6>
					</div>
				</a>
			<?php else : ?>
				<span class="disabled-link"><?php echo esc_html__('previous post', 'piwo'); ?></span>
			<?php endif; ?>

		</div>
			<?php if($prevUrl != $permalink || $nextUrl != $permalink) : ?>
				<div class="single-post-separator"></div>
			<?php endif; ?>
			<div class="single-post-comments">
				<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
		</div>
		</div>
		<?php if(is_active_sidebar('sidebar-1') && $sidebar == 'show') : ?>
		<div class="small-12 large-sidebar  columns">
			<p>prueba de news</p>
			<div class="single-post-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php
	endwhile;
?>
<?php get_footer();