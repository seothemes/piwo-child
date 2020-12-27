<?php
get_header(); ?>
<?php
	while ( have_posts() ) : the_post();
?>

<div class="content single-post">
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
	<style>
	.content h3, h4, h5{
		margin-bottom:4px !important;
		font-weight:600;
}
.single-post .content h2 {
	margin-bottom:0px !important;
}

		.page-wrapper-inner .go-back button{
			border:none !important;
		}
		.single-post-content .content{
			font-size:16px;
		}
		</style>
	<div class="row">
  	<div class="col-md-12">
	        <div class="container go-back">
	          <button onclick="goBack()">&larr; Back</button>
		      </div>
		    </div>
		<div class="single-post-content small-12 columns container <?php $post_class = ''; echo esc_attr( $post_class ); ?>">
			<div class="post-content-wrapper">
			<div class="post-header hide">
				<?php 
					// POST FORMAT - IMAGE
					$postFormat = '';
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
					// POST FORMAT - AUDIO
					elseif ($postFormat == 'audio') : ?>
					<?php $audioUrl = get_field('piwo_post_url'); 
					?>
					<div class="piwo-post-audio">
					<?php echo wp_audio_shortcode( array('src' => esc_url($audioUrl), 'autoplay' => '', 'preload'  => 'none')); ?>
					</div>
				<?php endif; ?></div>
				<div class="related-content-cont ">
			<div class="content col-md-8">
       
				<?php 
				 the_content();
				 $post_category          = get_the_category ( get_the_ID () );
				 $post_category_id       = $post_category[ 0 ]->term_id;
				 $post_category_taxonomy = $post_category[ 0 ]->taxonomy;
				 $cat_ebook_sec          = get_field ( 'anexinet_post_cat_show_ebook_sec', $post_category_taxonomy . "_" . $post_category_id );
				 $cat_ebook_sec_img      = get_field ( 'anexinet_post_cat_show_ebook_img', $post_category_taxonomy . "_" . $post_category_id );
				 $cat_ebook_sec_title    = get_field ( 'anexinet_post_cat_show_ebook_title', $post_category_taxonomy . "_" . $post_category_id );
				 $cat_ebook_sec_cta_type = get_field ( 'anexinet_post_cat_show_ebook_cta_type', $post_category_taxonomy . "_" . $post_category_id );
				 $cat_ebook_sec_cta      = get_field ( 'anexinet_post_cat_show_ebook_cta', $post_category_taxonomy . "_" . $post_category_id );
				 $cat_ebook_sec_cta_html = get_field ( 'anexinet_post_cat_show_ebook_html_cta', $post_category_taxonomy . "_" . $post_category_id );
				 if ( $cat_ebook_sec ) { 
						 if ( $cat_ebook_sec_cta_type ) { ?>
								 <div class="offers-box">
										 <?php if ( !empty ( $cat_ebook_sec_img ) ) { ?>
														 <div class="offers-img"><img src="<?php echo $cat_ebook_sec_img['url']; ?>"></div>
										 <?php } ?>
										 <div class="offers-content">
												 <?php if ( !empty ( $cat_ebook_sec_title ) ) { ?>
																 <h2><?php echo $cat_ebook_sec_title; ?></h2>
												 <?php }
														 if ( !empty ( $cat_ebook_sec_cta ) ) { ?>
																 <div class="cont-btn offers-btn">
																		 <a href="<?php echo $cat_ebook_sec_cta['url']; ?>" target="<?php echo $cat_ebook_sec_cta['target']; ?>"><?php echo $cat_ebook_sec_cta['title']; ?></a>
																 </div>
												 <?php } ?>
										 </div>
								 </div>
						 <?php } else {
										 echo $cat_ebook_sec_cta_html;
						 } ?>
<?php }
					wp_link_pages( array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'piwo' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
				; ?>
				</div>
				<div class="col-md-4 col-lg-4 just-related-content">
    		<h4>Related Content</h4>

<!--code for show blog post Begin-->
<?php
//for use in the loop, list 5 post titles related to first tag on current post

$tags = wp_get_post_tags($post->ID);
if ($tags) {

$tag1 = isset($tags[0]->term_id) ? $tags[0]->term_id : null;
$tag2 = isset($tags[1]->term_id) ? $tags[1]->term_id : null;
$tag3 = isset($tags[2]->term_id) ? $tags[2]->term_id : null;
$tag4 = isset($tags[3]->term_id) ? $tags[3]->term_id : null;
$tag5 = isset($tags[4]->term_id) ? $tags[4]->term_id : null;
$tag6 = isset($tags[5]->term_id) ? $tags[5]->term_id : null;

$count = 1;

$args=array(
'tag__in' => array_merge(array($tag1),array($tag2),array($tag3),array($tag4),array($tag5),array($tag6)),
'post__not_in' => array($post->ID),
'posts_per_page'=>4,
'post_type' => array("anxt_white_papers", "anxt_tip_sheets", "anxt_infographics", "anxt_ebooks", "post", "anxt_webinars", "offers"),
// 'post_type' => 'any'
	// 'category__not_in' => blog;
'ignore_sticky_posts'=>1,
'orderby'=>'ASC'
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {

  while ($my_query->have_posts()) : $my_query->the_post(); 
?>
  <!-- looped content begin -->
  <div class="col-md-4 col-lg-4 mt-30 pl-0">
        <!-- <h5>Related Content</h5> -->
          <div class="content-cont">

            <div class="img-cont">
							<?php 
			
								if (get_post_type() == 'offers' ){ ?>
              		<a href="<?php the_field("landing_url");?>" target="_blank"><?php the_post_thumbnail('square-size');?></a>

									<?php } 

								else if (get_post_type() == "anxt_ebooks") { ?>
									<a href="<?php the_field('landing_url');?>" target="_blank"><?php the_post_thumbnail('square-size');?>  </a>
					
									<?php }
									else if (get_post_type() == "anxt_white_papers") { ?>
									<a href="<?php the_field('landing_url');?>" target="_blank"><?php the_post_thumbnail('square-size');?>  </a>

									<?php }
									else if (get_post_type() == "anxt_tip_sheets") { ?>
									<a href="<?php the_field('landing_url');?>" target="_blank"><?php the_post_thumbnail('square-size');?>  </a>

							<?php } else { ?>
								<a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
								<?php } ?>
             </div>

         	<div class="info-cont">
              <div class="title-cont">
							<?php if (get_post_type() == 'offers') { ?>
  							<a href="<?php the_field("landing_url");?>" target="_blank"><h4><?php the_title(); ?></h4></a>

								<?php } elseif (get_post_type() == 'anxt_ebooks'){ ?>
  							<a href="<?php the_field("landing_url");?>" target="_blank"><h4><?php the_title(); ?></h4></a>

							<?php } elseif (get_post_type() == 'anxt_white_papers'){ ?>
  							<a href="<?php the_field("landing_url");?>" target="_blank"><h4><?php the_title(); ?></h4></a>

							<?php } elseif (get_post_type() == 'anxt_tip_sheets'){ ?>
  							<a href="<?php the_field("landing_url");?>" target="_blank"><h4><?php the_title(); ?></h4></a>

  						<?php } else { ?>
								<a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
							<?php } ?>
              </div>
              <div class="btn-cont">
							<?php if (get_post_type() == 'offers'){ ?>
								<a href="<?php the_field("landing_url");?>" target="_blank">Learn More &rarr;</a>

								<?php } elseif (get_post_type() == "anxt_webinars") { ?>
									<a href="<?php the_permalink();?>">Watch Now &rarr;</a>

									<?php } elseif (get_post_type() == "anxt_ebooks") { ?>
									<a href="<?php the_field('landing_url');?>">Learn More &rarr;</a>

									<?php } elseif (get_post_type() == "anxt_white_papers") { ?>
									<a href="<?php the_field('landing_url');?>">Learn More &rarr;</a>

									<?php } elseif (get_post_type() == "anxt_tip_sheets") { ?>
									<a href="<?php the_field('landing_url');?>">Learn More &rarr;</a>

								<?php } else if (get_post_type() == "anxt_webinars") { ?>
									<a href="<?php the_permalink();?>">Watch Now &rarr;</a>
									
									<?php } else  { ?>
									<a href="<?php the_permalink();?>">Read More &rarr;</a>

							<?php } ?>
              </div>
             </div> <!-- end info container-->
             </div> <!-- end content container -->
      </div>  <!-- col 4 -->
  <!-- looped content end -->  
<?php
  $count++; 											
  endwhile; 				
 }  		
    wp_reset_query(); 											
  }	
?>
<!-- code for show blog posts end -->

			</div>
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
				<div class="header-shares"><?php echo esc_html__('Share on', 'piwo'); ?></br></br>

				 <a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
					<img src="https://www.anexinet.com/wp-content/uploads/facebook.png" alt="Facebook sharing" />
				</a>	 

				 <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" target="_new">
					<img src="https://www.anexinet.com/wp-content/uploads/Anexinet_style_guide_3.png" alt="Linkedin sharing button" title="linkedin sharing button" />
				</a> 

 				<a target="_blank" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Click to share this post on Twitter">
					<img src="https://www.anexinet.com/wp-content/uploads/Anexinet_style_guide_2.png" alt="Twitter sharing button" title="twitter sharing button" /> 
				</a>  
				
		 	  </div> 
				 <!-- <//?php echo piwo_get_share_links($shareData); ?>  -->
			</div> 
			<?php endif ; ?>
			<div class="single-post-separator"></div>
			<?php if(get_the_author_meta('description') !== '') : ?>

		<div class="single-post-author">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 );  ?>
		<div class="name-title">	
			<h5><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_the_author(); ?></a></h5>
			<p style="color:#4a4a4a;"><?php the_author_meta('title');  ?></p>
		</div>
			<div class="author-desc">
				<?php echo get_the_author_meta('description'); ?>
			</div>
			<div class="linkedin-cont">
			
			<p>Follow:</p>	<a href="<?php the_author_meta('linkedin');  ?>" target="_blank">	<img src="https://www.anexinet.com/wp-content/uploads/im-logo-linkeding.png" alt="Linkedin Logo"> </a>
			</div> 
		</div>
		<div class="social-url">
		<div class="single-post-separator"></div>
		<?php endif; ?>

		<div class="single-post-controls">
			<?php 
			$permalink = get_permalink();
			$prev = get_adjacent_post(true,'',false);
			$next = get_adjacent_post(true,'',true);
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
		</div> 
		</div>
		<?php if(is_active_sidebar('sidebar-1') && $sidebar == 'show') : ?>
		<div class="small-12 large-sidebar  columns">
			
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
<?php wpbeginner_numeric_posts_nav(); ?>
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer();