<?php
/**
 *
 * Template Name: Guides New Page
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

	?>
<?php get_header(); ?>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js" type="text/javascript"></script>
<script type="text/javascript">


</script>
<?php
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

		if(get_field('piwo_intro_section') == 'enabled') {
			$intro_bg = get_field('piwo_intro_bg');
			$intro_color = get_field('piwo_intro_text_color');
		}

		if((get_field('piwo_page_intro_section','option') && get_field('piwo_intro_section') == 'default') || get_field('piwo_intro_section') == 'enabled') {
			echo piwo_intro_section($intro_bg,$intro_color);
		}

	} else {
		echo piwo_intro_section();

	}
  ?>

  <style>
  .trying_solve-sec{
    display:none;
  }
.kickstart-section .second-cont .filter-button-group a{
  max-height: 104px !important;
}
.kickstart-section .second-cont .filter-button-group a button{
  border: inherit !important;
    height: inherit !important;
     margin-top: inherit !important;
    font-weight: inherit !important;
     text-transform: inherit !important;
}

  </style>

<div class="classic page-bg-color kickstart-section <?php echo esc_attr($class);?> <?php echo esc_attr($full_class); ?>">
	<?php if(!$full_pages == true) {
		echo '<div class="row">';
	}
	?>
		<div class="<?php echo esc_attr($col_class);?> blog-content">
			<?php
			the_content();

			?>
		</div>

<!-- Post Section Begin -->
<!-- Main  container -->
<div class="main-sect-cont container">
<!-- Filter Begin -->
  <section class="second-cont">
    <div class="container select-filter-box">
    <div class="filters filter-button-group">

      <a class="active" data-filter="*">
        <div>
         <button >View All</button>
        </div>
      </a>
        <?php
            $categories = get_terms( 'kickstarts_tax_type', array(
                    'hide_empty' => 0,
            ) );

            function comparacion($a, $b){
              if ($a == $b) {
                return 0;
              }
              $ordered = array('customer-engagement', 'enterprise-mobility', 'cloud-hybrid-it', 'analytics-insights', 'data-modernization');
              $position = array_search($a->slug,$ordered);
              $position2 = array_search($b->slug, $ordered);
              //if both are in the $order, then sort according to their order in $order...
              if ($position2!==false && $position!==false) {
                return ($position < $position2) ? -1 : 1;
              }
              //if only one is in $order, then sort to put the one in $order first...
              if($position!==false) {
                return -1;
              }
              if($position2!==false) {
                return 1;
              }
              //if neither in $order, then a simple alphabetic sort...
              return ($a < $b) ? -1 : 1;
            }

            usort($categories, 'comparacion');

            if( !empty( $categories  ) ){
                foreach( $categories as  $categorie  ){
                    $name = $categorie->name;
                    $slug = $categorie->slug;
                    $desc = $categorie->description;
                    ?>
                    <a class="" data-filter=".<?php echo $slug; ?>">
                      <div>
                        <button ><?php echo $name; ?></button>
                        <span><?php echo $desc; ?></span>
                      </div>
                    </a>
                    <?php
                }
            }
        ?>
        </div>
    </div>
  </section>
<!-- Filter End -->
<section class="fourth-cont container-fluid">
  <div class="container">
    <div class="row cont-post_all cont-query grid">
<!-- Loop Begin -->
      <?php
        global $post;
        $args = array(
        'posts_per_page' => '-1',
        'post_type' => array("anexinet_kickstarts"),
        'order' => 'DESC'
        );

        global $the_query_category;
        $the_query_category = new WP_Query( $args );
        $count = 1;
        if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();

          $term_slug      = array();
          $term_slug_str  = '';
          $term_list      = wp_get_post_terms( get_the_ID() , 'kickstarts_tax_type', array("fields" => "all"));
          foreach($term_list as $term_single) {
            array_push($term_slug, $term_single->slug );
          }
          if( !empty( $term_slug ) ){
              $term_slug_str = implode(' ', $term_slug );
          }
          $get_started_cta = get_field('anexinet_kickstart_xpost_get_started_cta');
          if ( empty( $get_started_cta['url'] ) ) {
              $get_started_cta['url'] = get_field("landing_page_url_ebook");
          }
          if ( empty( $get_started_cta['title'] ) ) {
              $get_started_cta['title'] = 'Get Started';
          }
      ?>
<!-- Loop End-->
<!-- Looped Content Begin -->
      <div class="col-md-4 col-lg-4 grid-item <?php echo $term_slug_str ?>">
        <div class="content-cont">
          <div class="img-cont">
          <a href="<?php echo $get_started_cta['url']; ?>" target="_blank"> <?php the_post_thumbnail('square-size');?></a>
          </div>
          <div class="info-cont">
            <!-- <div class="date-author-cont">

              <div class="date-cont">
                <p><?php the_date(); ?></p>
              </div>
              <div class="author-cont">
                <p><?php the_author(); ?></p>
              </div>
            </div> -->
            <div class="title-cont">
              <a href="<?php echo $get_started_cta['url']; ?>" target="_blank"> <h4><?php the_title(); ?></h4></a>
            </div>
            <div class="text-cont">
              <a href="<?php echo $get_started_cta['url']; ?>" target="_blank"> <p><?php the_excerpt(); ?></p></a>
            </div>
            <div class="btn-cont">
              <a href="<?php echo $get_started_cta['url']; ?>" target="<?php echo $get_started_cta['target']; ?>"><?php echo $get_started_cta['title']; ?></a>
            </div>
          </div> <!-- end info container-->
        </div> <!-- end content container -->
      </div>  <!-- end col -4 -->
<!-- Looped content end -->

        <?php $count++; ?>

        <?php endwhile; ?>

        <?php

        wp_reset_query(); ?>
<!-- post navigation -->
        <?php else: ?>

<!-- no posts found -->
        <?php endif; ?>

        </div> <!-- row end-->





  </div> <!-- Main container end -->
</section> <!--section container end -->
</div>    <!-- Main Section Cont end -->
<!-- Section 3 End -->

	<?php if(!$full_pages == true) {
		echo '</div>';
	}
	?>
</div>
<?php endwhile; ?>

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?>
<!-- Anexinet Main Form End -->

<?php
$kickstart_quiz_title          = get_field ( 'anexinet_kick_map_opt_sec_title', 'option' );
$kickstart_quiz_subtitle       = get_field ( 'anexinet_kick_map_opt_sec_subtitle', 'option' );
$kickstart_quiz_cta_label      = get_field ( 'anexinet_kick_map_opt_sec_cta_label', 'option' );
$kickstart_quiz_main_title     = get_field ( 'anexinet_kick_map_opt_main_que_title', 'option' );
$kickstart_quiz_main_options   = get_field ( 'anexinet_kick_map_opt_main_quq_options', 'option' );
$kickstart_quiz_result_cta     = get_field ( 'anexinet_kick_map_opt_sec_result_cta_label', 'option' );
$kickstart_quiz_result_tagline = get_field ( 'anexinet_kick_map_opt_sec_result_tagline', 'option' );
$child_options_array = array();
?>
<!-- What are you trying to solve? -->
<div class="trying_solve-sec">
  <div claass="trying_solve_box">
    <div class="trying_solve_icon"><img src="http://54.208.187.251/wp-content/uploads/2019/05/trying_solve-icon.png"></div>
    <div class="arrow_icon"><i></i></div>
    <div class="trying_solve_content step_1">
        <?php if ( !empty ( $kickstart_quiz_title ) ) { ?>
                <h4><?php echo $kickstart_quiz_title; ?></h4>
        <?php } ?>
        <?php if ( !empty ( $kickstart_quiz_subtitle ) ) { ?>
                <div class="trying_solve_text"><?php echo $kickstart_quiz_subtitle; ?></div>
        <?php } ?>
    </div>

    <div class="trying_solve_content step_2" style="display: none">
        <?php if ( !empty ( $kickstart_quiz_main_title ) ) { ?>
                <h4><?php echo $kickstart_quiz_main_title; ?></h4>
        <?php } ?>
        <?php if ( !empty ( $kickstart_quiz_main_options ) ) { ?>
                <div class="select-box dropdown_kickstart">
                    <div class="select">
                        <span>--Select--</span>
                    </div>
                    <ul class="dropdown-menu">
                        <?php foreach ( $kickstart_quiz_main_options as $main_opt_key => $main_opt_val ) {
                                $opt_title     = $main_opt_val[ 'option_title' ];
                                $opt_has_child = $main_opt_val[ 'option_has_children' ];
                                $result_type   = $main_opt_val[ 'url_type' ];
                                $internal_link = $main_opt_val[ 'result' ];
                                $external_link = $main_opt_val[ 'external_url' ];
                                if ( $result_type ) {
                                    $opt_result = $internal_link;
                                } else {
                                    $opt_result = $external_link;
                                }
                                $opt_child_main_title = $main_opt_val[ 'child_options_main_title' ];
                                $opt_chiild_options   = $main_opt_val[ 'child_options' ];
                                if ( $opt_has_child ) {
                                    $child_options_array[$main_opt_key]['child_title']   = $opt_child_main_title;
                                    $child_options_array[$main_opt_key]['child_options'] = $opt_chiild_options;
                                    ?>
                                    <li child_number="<?php echo $main_opt_key; ?>"><?php echo $opt_title; ?></li>
                                    <?php
                                } else {
                                    ?>
                                    <li url="<?php echo $opt_result; ?>"><?php echo $opt_title; ?></li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
        <?php } ?>
    </div>
    <?php if ( !empty ( $child_options_array ) ) {
            foreach ( $child_options_array as $child_opt_key => $child_opt_val ) {
                $child_main_title = $child_opt_val['child_title'];
                $child_options    = $child_opt_val['child_options'];
                if ( ! empty( $child_options ) ) { ?>
                    <div class="child_options_content" child_number="<?php echo $child_opt_key; ?>" style="display: none">
                        <h4><?php echo $child_main_title; ?></h4>
                        <div class="select-box dropdown_kickstart">
                            <div class="select">
                                <span>--Select--</span>
                            </div>
                            <ul  class="dropdown-menu">
                                <?php foreach ( $child_options as $child_options_val ) {
                                        $child_option_title = $child_options_val[ 'option_title' ];
                                        $result_type        = $child_options_val[ 'result_type' ];
                                        $internal_link      = $child_options_val[ 'option_result' ];
                                        $external_link      = $child_options_val[ 'option_result_link' ];
                                        if ( $result_type ) {
                                            $child_option_result = $internal_link;
                                        } else {
                                            $child_option_result = $external_link;
                                        }
                                        ?>
                                        <li url="<?php echo $child_option_result; ?>"><?php echo $child_option_title; ?></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    ?>
    <?php if ( !empty ( $kickstart_quiz_cta_label ) ) { ?>
            <div class="trying_btn cont-btn"><a href="JavaScript:void(0);"><?php echo $kickstart_quiz_cta_label; ?></a></div>
    <?php } ?>
    <div class="trying_btn cont-btn solution_result" style="display:none;">
        <?php if ( !empty ( $kickstart_quiz_result_tagline ) ) { ?>
                <div class="trying_solve_text" ><?php echo $kickstart_quiz_result_tagline; ?></div>
        <?php }
            if ( !empty ( $kickstart_quiz_result_cta ) ) { ?>
                <a href="JavaScript:void(0);" target="_blank"><?php echo $kickstart_quiz_result_cta; ?></a>
        <?php } ?>
    </div>
  </div>
</div>

<?php get_footer();


