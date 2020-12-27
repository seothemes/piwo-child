<?php
/**
 *
 * Template Name: Adventure Page Template
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */
?>
<?php get_header();

if ( class_exists ( 'acf' ) ) {
    $anexient_logo  = get_field ( 'anexient_adv_temp_anexient_logo' );
    $main_title     = get_field ( 'anexient_adv_temp_main_title' );
    $main_desc      = get_field ( 'anexient_adv_temp_desc' );
    $main_cta_label = get_field ( 'anexient_adv_temp_cta_label' );
    $main_image     = get_field ( 'anexient_adv_temp_main_img' );

    $route_outcomes_form_sc = get_field ( 'anexient_adv_temp_route_outcomes_main_form' );
    $route_outcomes_forms   = get_field ( 'anexient_adv_temp_route_outcomes' );
    $questions_sec_img      = get_field ( 'anexient_adv_temp_path_questions_sec_img' );
    $questions              = get_field ( 'anexient_adv_temp_path_questions' );
}
?>
<style>
@media (max-height: 700px) and (min-height: 400px){
.cloud-migration-form-wrap .qusn-ans-wrap .ans-btn-wrap {
    max-width: 100% !important;
}
}
</style>

<div class="cloud-migration-form-wrap" style="background-image: url(https://www.anexinet.com/wp-content/uploads/2019/07/main-bg-img.jpg);">
    <div class="section1">
        <?php if ( !empty ( $anexient_logo ) ) { ?>
                <div class="logo-wrap">
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo $anexient_logo['url']; ?>"></a>
                </div>
        <?php } ?>
        <div class="content-wrap">
            <?php if ( !empty ( $main_title ) ) { ?>
                    <h2><?php echo $main_title; ?></h2>
            <?php }
                echo $main_desc;
                if ( !empty ( $main_cta_label ) ) { ?>
                    <a class="btn white-btn adventure_first_cta" href="javascript:void(0);"><?php echo $main_cta_label; ?></a>
            <?php } ?>
        </div>
        <?php if ( !empty ( $main_image ) ) { ?>
                <div class="splash-img-wrap">
                    <img src="<?php echo $main_image['url']; ?>">
                </div>
        <?php } ?>
    </div>
    <?php if ( !empty ( $questions ) ) {  ?>
            <ul class="progress_bar" style="display : none;">
                <li class="progress_bar" style="width : 0%;"></li>
            </ul>
    <?php } ?>
    <div class="section2" style="display : none; background-image: url(http://54.208.187.251/wp-content/uploads/2019/06/msgr-bg.svg);">
        <div class="qusn-ans-palette">
            <div class='go_back_link'>
                <a class='btn white-btn' href="javascript:void(0);">Go Back</a>
            </div>
            <?php if ( !empty ( $questions_sec_img ) ) { ?>
                    <div class="soldier-img">
                        <img src="<?php echo $questions_sec_img['url']; ?>">
                    </div>
            <?php } ?>
            <?php if ( !empty ( $questions ) ) {
                    foreach ( $questions as $que_key => $que_val ) {
                        $que_title  = $que_val['question_title'];
                        $que_opts   = $que_val['options']; ?>
                        <div class="qusn-ans-wrap question_number_<?php echo $que_key+1; ?>" question_number="<?php echo $que_key+1; ?>" style="display : none;">
                            <?php if ( !empty ( $que_title ) ) { ?>
                                    <h4><?php echo $que_title; ?></h4>
                            <?php }
                                if ( !empty ( $que_opts ) ) { ?>
                                    <div class="ans-btn-wrap">
                                        <?php
                                            foreach ( $que_opts as $opt_val ) {
                                                $styled_button         = $opt_val[ 'styled_button' ];
                                                $opt_title             = $opt_val[ 'option_title' ];
                                                $opt_result_type       = $opt_val[ 'route_type' ];
                                                $opt_result_que_number = $opt_val[ 'route_to_question_number' ];
                                                $opt_result_outcome    = $opt_val[ 'route_to_outcome' ];
                                                if ( $opt_result_type && ! empty( $opt_result_que_number ) ) { ?>
                                                    <a class="btn option_result route_to_que white-btn" outcome="<?php echo $opt_result_que_number; ?>" href="javascript:void(0);"><?php echo $opt_title; ?></a>
                                                <?php } else { ?>
                                                    <a class="btn option_result route_to_outcome white-btn" outcome="<?php echo $opt_result_outcome; ?>" href="#outcome_number_<?php echo $opt_result_outcome; ?>"><?php echo $opt_title; ?></a>
                                                <?php
                                                }
                                            } 
                                        ?>
                                    </div>
                            <?php } ?>
                        </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php if ( !empty ( $route_outcomes_forms ) ) {
        foreach ( $route_outcomes_forms as $route_outcome_key => $route_outcome_val ) {
            $outcome_main_title  = $route_outcome_val[ 'outcome_main_title' ];
            $outcome_title       = $route_outcome_val[ 'outcome_title' ];
            $outcome_desc        = $route_outcome_val[ 'outcome_description' ];
            $outcome_img         = $route_outcome_val[ 'outcome_image' ];
            $outcome_confirm_msg = $route_outcome_val[ 'outcome_confirmation_message' ];
            ?>
            <div class="outcome_wrapper" id="outcome_number_<?php echo $route_outcome_key; ?>" style=" display: none;">
                <div class="outcome_text">
                    <?php if ( !empty ( $outcome_main_title ) ) { ?>
                            <span style="display: none;"><?php echo $outcome_main_title; ?></span>
                    <?php }
                        if ( !empty ( $outcome_title ) ) { ?>
                            <h3><?php echo $outcome_title; ?></h3>
                    <?php }
                        echo $outcome_desc;
                        if ( !empty ( $outcome_img ) ) { ?>
                            <div class="outcome_img_wrap">
                                <img src="<?php echo $outcome_img['url']; ?>" />
                            </div>
                    <?php } ?>
                </div>
                <?php if ( !empty ( $route_outcomes_form_sc ) ) { ?>
                        <div class="outcome_form"></div>
                <?php }
                    if ( !empty ( $outcome_confirm_msg ) ) { ?>
                        <div class="outcome_confirmation" style="display : none;"><?php echo $outcome_confirm_msg; ?></div>
                <?php } ?>
            </div>
            <?php
        }
    } 
    
    if ( !empty ( $route_outcomes_form_sc ) ) { ?>
        <div class="outcome_form_display" style="display: none;">
            <?php echo do_shortcode($route_outcomes_form_sc); ?>
        </div>
<?php }

wp_footer(); ?>