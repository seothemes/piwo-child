<?php 
    if(function_exists('get_field')) {
        $body_color = get_field('piwo_text_color', 'option');
    } else {
        $body_color = '';
    }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0">
<meta http-equiv='X-UA-Compatible' content='IE=11'>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"> 
<!-- Start of HubSpot Embed Code -->
<!-- <script defer type="text/javascript" id="hs-script-loader" src="//js.hs-scripts.com/3474660.js"></script> -->
<!-- End of HubSpot Embed Code -->
<!-- Leadfeeder tracker code -->
<script>
  (function(){
    window.ldfdr = window.ldfdr || {};
    (function(d, s, ss, fs){
      fs = d.getElementsByTagName(s)[0];
      function ce(src){
        var cs  = d.createElement(s);
        cs.src = src;
        setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1);
      }
      ce(ss);
    })(document, 'script', 'https://lftracker.leadfeeder.com/lftracker_v1_bElvO73jPRE8ZMqj.js');
  })();
</script>
<!-- /Leadefeeder tracking code -->
<!--Lucky Orange Tracking-->
<script defer type='text/javascript'>
window.__lo_site_id = 124222;
(function() {
var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
})();
</script>
<!--End Lucky Orange Tracking-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-9689350-2"></script>
<script defer>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-9689350-2');
</script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" >
  jQuery(window).resize(function() {
    if (jQuery(window).width() > 1200) {
      jQuery("#box_menu_cetered").css("display", "block");
    }
    else {    
    }
  });
jQuery(document).ready(function ($) {    
  if (jQuery(window).width() > 1200) { 
  }
 else {

    jQuery('.btn-expertise-menu .sub-menu.level-0 .a-level-1').click(function(e) {
    if (e.clientX > jQuery(this).offset().left + 80 &&
        e.clientY < jQuery(this).offset().top + 20) {
               if( jQuery(this).hasClass("active")){
                    jQuery(this).next(".sub-menu.level-1").hide(0);
                    jQuery(this).removeClass("active");
             }else {
                    jQuery(this).addClass("active");
                    jQuery(this).next(".sub-menu.level-1").fadeIn(0);
                    // alert("hi");
              }
    return false;
    }else {
      return true;

    }
});

jQuery('.btn-expertise-menu .a-level-0').click(function(e) {
    if (e.clientX > jQuery(this).offset().left + 80 &&
        e.clientY < jQuery(this).offset().top + 20) {
               if( jQuery(this).hasClass("active")){

                    jQuery(this).next(".sub-menu.level-0").hide(0);
                    jQuery(this).removeClass("active");

             }else {

                    jQuery(this).addClass("active");
                    jQuery(this).next(".sub-menu.level-0").fadeIn(0);
                    // alert("hi");
              }
    return false;

    }else {
     
      return true;
    }
});

jQuery( "#box_menu_cetered .level-0:not(.btn-expertise-menu) .a-level-0" ).click( function(e){
// jQuery( "#box_menu_cetered .level-0" ).click( function(){

    if (e.clientX > jQuery(this).offset().left + 80 &&
        e.clientY < jQuery(this).offset().top + 20) {


                  if( jQuery(this).hasClass("active")){

                  jQuery(this).next(".sub-menu").hide(0);
                    jQuery(this).removeClass("active");

                  }else {

                  jQuery(this).addClass("active");
                  jQuery(this).next(".sub-menu").fadeIn(0);

                  }

     return false;


    }else {
     
      return true;
      
    }           
      });
 }

});

jQuery(document).ready(function ($) {

$('.btn-ham').click(function(e){
    $('#box_menu_cetered').slideDown(0);
    $(this).fadeOut(0);
    $('.btn-cerrar').fadeIn(0);
});

$('.btn-cerrar').click(function(e){
    $('#box_menu_cetered').fadeOut(0);
    $(this).fadeOut(0);
    $('.btn-ham').fadeIn(0);
});
    
    $( ".box-menu-post-managedservices" ).clone().insertAfter( ".menupostcat_managedservices" );
    $( ".contendor_posts_menu .box-menu-post-managedservices" ).remove();

    $( ".box-menu-webinar-managedservices" ).clone().insertAfter( ".menu-webinar-post-managedservices" );
    $( ".contendor_posts_menu .box-menu-webinar-managedservices" ).remove();

    $( ".box-menu-post-advisory-services" ).clone().insertAfter( ".menupostcat_advisoryservices" );
    $( ".contendor_posts_menu .box-menu-post-advisory-services" ).remove();

    $( ".box-menu-post-cloud-hybrid" ).clone().insertAfter( ".menupostcat_hybrid" );
    $( ".contendor_posts_menu .box-menu-post-cloud-hybrid" ).remove();

    $( ".box-menu-post-connectedexperiences" ).clone().insertAfter( ".menupostcat_connectedexperiences" );
    $( ".contendor_posts_menu .box-menu-post-connectedexperiences" ).remove();

    $( ".box-menu-post-networking" ).clone().insertAfter( ".menupostcat_networking" );
    $( ".contendor_posts_menu .box-menu-post-networking" ).remove();

    $( ".box-menu-post-dataanalytics" ).clone().insertAfter( ".menupostcat_dataanalytics" );
    $( ".contendor_posts_menu .box-menu-post-dataanalytics" ).remove();

    $( ".box-menu-post-datacenter" ).clone().insertAfter( ".menupostcat_datacenter" );
    $( ".contendor_posts_menu .box-menu-post-datacenter" ).remove();

    $( ".box-menu-webinar-advisoryservices" ).clone().insertAfter( ".menu-webinar-post-advisoryservices" );
    $( ".contendor_posts_menu .box-menu-webinar-advisoryservices" ).remove();

    $( ".box-menu-webinar-cibersecurity" ).clone().insertAfter( ".menu-webinar-post-cibersecurity" );
    $( ".contendor_posts_menu .box-menu-webinar-cibersecurity" ).remove();

    $( ".box-menu-post-productinnovation" ).clone().insertAfter( ".menupostcat_productinnovation" );
    $( ".contendor_posts_menu .box-menu-post-productinnovation" ).remove();

// Webinars
    $( ".box-menu-webinar-productinnovation" ).clone().insertAfter( ".menu-webinar-post-productinnovation" );
    $( ".contendor_posts_menu .box-menu-webinar-productinnovation" ).remove();

    $( ".box-menu-webinar-connectedexperiences" ).clone().insertAfter( ".menu-webinar-post-connectedexperiences" );
    $( ".contendor_posts_menu .box-menu-webinar-connectedexperiences" ).remove();

    $( ".box-menu-webinar-cloudhybridit" ).clone().insertAfter( ".menu-webinar-post-cloudhybridit" );
    $( ".contendor_posts_menu .box-menu-webinar-cloudhybridit" ).remove();

    $( ".box-menu-webinar-dataanalytics" ).clone().insertAfter( ".menu-webinar-post-dataanalytics" );
    $( ".contendor_posts_menu .box-menu-webinar-dataanalytics" ).remove();

    $( ".box-menu-webinar-networking" ).clone().insertAfter( ".menu-webinar-post-networking" );
    $( ".contendor_posts_menu .box-menu-webinar-networking" ).remove();

    $( ".box-menu-webinar-datacenter" ).clone().insertAfter( ".menu-webinar-post-datacenter" );
    $( ".contendor_posts_menu .box-menu-webinar-datacenter" ).remove();

    $( ".box-menu-webinar-designservices" ).clone().insertAfter( ".menu-webinar-post-designservices" );
    $( ".contendor_posts_menu .box-menu-webinar-designservices" ).remove();



    $( ".box-menu-webinar-futureofwork" ).clone().insertAfter( ".menu-webinar-post-futureofwork" );
    $( ".contendor_posts_menu .box-menu-webinar-futureofwork" ).remove();

});

</script>
    <script>
    (function() {
    window._zi = {formId: 'xqvyr72n8PwRy7HQ4QDn'};
    var zi = document.createElement('script');
    zi.type = 'text/javascript';
    zi.async = true;
    zi.src = 'https://ws-assets.zoominfo.com/formcomplete.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(zi, s);
    })();
    </script>
</head>

<body <?php body_class(); ?> data-color="<?php echo esc_attr($body_color); ?>">
<div class="transition-overlay">

<div class="loader">
    <div class="loader__figure"></div>
    <p class="loader__label"><?php echo get_bloginfo('name'); ?></p>
</div>

</div>

<style type="text/css">
@media screen and (min-width:1201px){
  #menu-new_menu_centered li:hover>a{
    color: #187bcd !important;
  }
  #menu-new_menu_centered #menu-item-61142>a:not(:only-child):after{
  background-image: url('/wp-content/uploads/2020/09/Path_gray.png'); 
    background-size: contain;
    display: inline-block;
    width: 13px;
    height: 7px; 
    margin-left: 7px;
    content: "";
}
#menu-new_menu_centered #menu-item-57907>a:not(:only-child):after{
  background-image: url('/wp-content/uploads/2020/09/Path_gray.png'); 
    background-size: contain;
    display: inline-block;
    width: 13px;
    height: 7px; 
    margin-left: 7px;
    content: "";
}
#menu-new_menu_centered #menu-item-61100>a:not(:only-child):after{
  background-image: url('/wp-content/uploads/2020/09/Path_gray.png'); 
    background-size: contain;
    display: inline-block;
    width: 13px;
    height: 7px; 
    margin-left: 7px;
    content: "";
}
#menu-new_menu_centered #menu-item-57908>a:not(:only-child):after{
  background-image: url('/wp-content/uploads/2020/09/Path_gray.png'); 
  background-size: contain;
  display: inline-block;
  width: 13px;
  height: 7px; 
  margin-left: 7px;
  content: "";
}
#menu-new_menu_centered #menu-item-61142:hover>a:not(:only-child):after{
    background-image:url('/wp-content/uploads/2020/09/Path.png')!important
    }
#menu-new_menu_centered #menu-item-61100:hover>a:not(:only-child):after{
    background-image:url('/wp-content/uploads/2020/09/Path.png')!important
    }
#menu-new_menu_centered #menu-item-57907:hover>a:not(:only-child):after{
    background-image:url('/wp-content/uploads/2020/09/Path.png')!important
    }
    #menu-new_menu_centered #menu-item-57908:hover>a:not(:only-child):after{
    background-image:url('/wp-content/uploads/2020/09/Path.png')!important
    }
}






 /* #menu-item-57907 .a-level-0 span::after{
    background-image: url('/wp-content/uploads/2020/09/Path_gray.png'); 
    background-size: contain;
    display: inline-block;
    width: 13px;
    height: 7px; 
    margin-left: 7px;
    content: "";
}  */
/* #menu-item-57907 .a-level-0 span:hover(:only-child):after{
  background-image: url('/wp-content/uploads/2020/09/Path.png'); 
    background-size: contain;
    background-size: 8px;
    display: inline-block;
    width: 8px;
    height: 12px;
    margin-left: 4px;
    content: "";
} */
#menu-item-57983, #menu-item-58182, #menu-item-58006, #menu-item-57984{line-height:20px !important;}.is-search-submit{border:none !important;}.search-close{top: 6px !important;}.is-search-form{top: 57.5px !important; right: 7px !important;; }.logo-span{height:27px;width:200px;position:absolute;top:41%;left:4%;cursor:pointer}#header-mobil{display:none}#box_menu_cetered{background-color:#f7f8fa;height:100px;position:relative;z-index:999;border-bottom:2px solid #e6e6e7;width:100%}#menu-new_menu_centered{display:flex;justify-content:center; margin:0 auto;text-align:center}#menu-new_menu_centered li{list-style:none}#menu-new_menu_centered>li{position:relative;float:left;margin:42px -16 0 0;padding:0;list-style:none;height:59px;border-right:33px solid transparent;border-left:33px solid transparent;min-width:115px}#menu-new_menu_centered>li>a{color:#3d3d3b;font-family:Montserrat;font-size:14px;font-weight:600;font-stretch:normal;font-style:normal;letter-spacing:normal}.1a-level-0{display:block;width:100%;height:59px;line-height:59px!important}.1a-level-1{display:block;width:100%;height:40px;line-height:40px!important}#menu-new_menu_centered .sub-menu li{margin-left:0!important;line-height:40px;font-size:14px}#menu-new_menu_centered .sub-menu{width:255px;background-color:#fff;margin:0;padding:40px 0 40px 40px;position:absolute;top:58px;left:-40px;text-align:left}.btn-expertise-menu .sub-menu{min-height:560px}#menu-new_menu_centered .sub-menu .sub-menu{width:255px;background-color:#fff;margin:0;padding:40px 0 40px 40px;position:absolute;top:0;left:255px;text-align:left}#menu-new_menu_centered .sub-menu .sub-menu .sub-menu{width:255px;background-color:#0f4c83!important}#menu-new_menu_centered .sub-menu .sub-menu .sub-menu a{color:#fff}#menu-new_menu_centered li:hover>a{color:#187bcd}#menu-new_menu_centered .sub-menu{opacity:0;-webkit-transition:.6s ease;-moz-transition:.6s ease;-ms-transition:.6s ease;-o-transition:.6s ease;z-index:0;visibility:hidden}#menu-new_menu_centered li.level-0:hover .sub-menu.level-0{opacity:1;z-index:1;visibility:visible}#menu-new_menu_centered li.level-1:hover .sub-menu.level-1{opacity:1;z-index:1;visibility:visible}.menu-item.level-0{overflow:hidden}.menu-item.level-0:hover{overflow:visible}.sub-menu.level-1{background-color:#f7f8fa!important;padding:40px!important; padding-bottom:20px !important;}#menu-new_menu_centered .sub-menu.level-2{padding:40px;opacity:1;z-index:1;visibility:visible}.sub-menu li a{width:100%}


  .level-0 li>a:not(:only-child):after{
  background-image:url('/wp-content/uploads/2020/06/arrow-gray-right.png');
  background-size:8px;
  display:inline-block;
  width:10px;
  height:30px;
  content:"";
  position:absolute;
  right:35px;
  background-repeat:no-repeat;
  background-position:0 14px
  }

  .level-0 li:hover>a:not(:only-child):after{
    background-image:url('https://www.anexinet.com/wp-content/uploads/2020/06/arrow-blue-right-ok.png')!important
    }

.level-1 li>a:not(:only-child):after{background-image:none!important}.level-1 li:hover>a:not(:only-child):after{background-image:none!important}.level-2 li>a:not(:only-child):after{background-image:none!important}.box-menu-webinar h2{text-align:center;width:100%;color:#fff;font-family:Montserrat;font-size:16px;text-transform:uppercase;font-weight:600;margin-bottom:25px}.box-menu-webinar h3{color:#fff;font-family:Montserrat;font-size:14px;text-transform:uppercase;font-weight:600;margin-bottom:20px;margin-top:30px}.title-post-menu-webinar a{font-size:14px;line-height:20px!important;margin-bottom:15px;font-weight:700;display:block}.desc-post-menu-webinar,.desc-post-menu-webinar p{color:#fff;font-size:14px;line-height:18px!important;margin-bottom:20px}.btn_viewmore_webinar a{color:#ffb852!important;margin-bottom:50px;font-weight:700}.logo-anexinet-centered{height:100px!important;text-indent:-9999999px;width:240px;background-image:url(/wp-content/uploads/2020/03/logo-anexinet-2020-1.png);background-size:160px;background-position:center 39px;background-repeat:no-repeat;margin:0!important}.container-menu-centered{max-width:1200px;position:relative;margin:0 auto;display:block}.img-cont-box-menu{display:table;margin:0 auto;text-align:center}.title-post-menu{text-align:center;font-size:14px;line-height:18px;padding-top:10px}.title-post-menu a{color:#6e6e68!important}.img-cont-box-menu img{max-width:100%;height:auto;max-height:130px}.box-menu-post{width:auto;padding:6%;background-color:#e4e2e2}.menu-webinar-post{text-indent:-999999!important}.menupostcat_advisoryservices,.menupostcat_cibersecurity,.menupostcat_connectedexperiences,.menupostcat_dataanalytics,.menupostcat_datacenter,.menupostcat_futureofwork,.menupostcat_hybrid,.menupostcat_managedservices,.menupostcat_networking,.menupostcat_productinnovation{text-indent:-999999px!important;height:20px}.menu-webinar-post-advisoryservices,.menu-webinar-post-cibersecurity,.menu-webinar-post-cloudhybridit,.menu-webinar-post-connectedexperiences,.menu-webinar-post-dataanalytics,.menu-webinar-post-datacenter,.menu-webinar-post-designservices,.menu-webinar-post-futureofwork,.menu-webinar-post-managedservices,.menu-webinar-post-networking,.menu-webinar-post-productinnovation{display:none}@media only screen and (max-width:1200px){#header-mobil{display:block;background-color:#f7f8fa;height:100px;width:100%;position:relative}#header-mobil .logo-mobil{position:absolute;left:30px;top:34px;width:160px;display:block;height:100%}#header-mobil .logo-mobil img{max-width:100%;height:auto}#header-mobil .btn-cerrar{position:absolute;right:30px;top:34px}#header-mobil .btn-ham{position:absolute;right:30px;top:35px}#header-mobil .btn-cerrar{display:none}#box_menu_cetered{display:none;height:100%}#menu-new_menu_centered li>a:not(:only-child):after{background-image:url('/wp-content/uploads/2020/06/arrow-gray-right.png');display:inline-block;content:"";position:absolute;background-repeat:no-repeat;right:25px;background-size:7px;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);-o-transform:rotate(90deg);transform:rotate(90deg);background-position:13px 12px;width:33px;height:35px;margin-top:7px}#menu-new_menu_centered li:hover>a:not(:only-child):after{background-image:url('https://www.anexinet.com/wp-content/uploads/2020/06/arrow-white-right.png')}.level-0 li>a:not(:only-child):after{background-image:url('/wp-content/uploads/2020/06/arrow-gray-right.png');display:inline-block;content:"";position:absolute;background-repeat:no-repeat;right:25px;background-size:7px;-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);-o-transform:rotate(90deg);transform:rotate(90deg);background-position:9px 12px!important;width:20px}.menupostcat_advisoryservices,.menupostcat_cibersecurity,.menupostcat_connectedexperiences,.menupostcat_dataanalytics,.menupostcat_datacenter,.menupostcat_futureofwork,.menupostcat_hybrid,.menupostcat_managedservices,.menupostcat_networking,.menupostcat_productinnovation{height:5px}#menu-new_menu_centered .sub-menu{opacity:0;-webkit-transition:0s ease;-moz-transition:0s ease;-ms-transition:0s ease;-o-transition:0s ease;z-index:0;visibility:hidden}#menu-new_menu_centered>li{border-right:0!important;border-left:0!important;text-indent:35px}#menu-new_menu_centered .sub-menu li{text-indent:45px}#menu-new_menu_centered .sub-menu .sub-menu li{text-indent:30px!important}.sub-menu.level-1 li a:after{background-image:none!important}#menu-new_menu_centered li:hover{height:100%}#menu-new_menu_centered{text-align:left;width:100%}#menu-new_menu_centered>li{float:none;background-color:#fff;margin:0;line-height:59px;height:59px}#menu-new_menu_centered .sub-menu{position:relative;width:100%;padding:0;top:0;display:block}.logo-anexinet-centered{display:none}#menu-new_menu_centered .sub-menu{left:0}.sub-menu.level-1{left:0!important}.sub-menu.level-2{display:none!important}.box-menu-post{display:none!important}#menu-new_menu_centered li.level-1:hover .sub-menu.level-1{opacity:1;z-index:1;visibility:visible;position:relative;width:100%;background-color:#fff!important;padding-top:0!important;padding-bottom:0!important}.menu-item.level-0:hover{background-color:#187bcd!important}.menu-item.level-0:hover a{color:#fff!important}.menu-item.level-0 a:hover{color:#fff}.menu-item.level-0:hover .sub-menu a{color:#6e6e68!important}.sub-menu.level-0 .menu-item.level-1:hover a{color:#187bcd!important}.sub-menu.level-0 .menu-item.level-1:hover{background-color:#eef0f6!important}.sub-menu.level-0 .menu-item.level-1:hover .sub-menu a{color:#6e6e68!important}#menu-new_menu_centered .sub-menu{background-color:#f6f7f9!important}.menu-webinar-post{text-indent:-999999!important}.menupostcat_advisoryservices,.menupostcat_cibersecurity,.menupostcat_connectedexperiences,.menupostcat_dataanalytics,.menupostcat_datacenter,.menupostcat_futureofwork,.menupostcat_hybrid,.menupostcat_managedservices,.menupostcat_networking,.menupostcat_productinnovation{display:none}.btn-expertise-menu .sub-menu{min-height:auto}.linkmenu.a-level-0:not(:only-child):after{margin-top:12px!important}}

@media screen and (max-width:1200px){
  .astm-search-menu{
    display:none;
  }
  #menu-new_menu_centered{
    display:table;
  }
}
</style>

<div id="header-mobil">
  <a class="logo-mobil" title="Anexinet" href="https://www.anexinet.com/"><img alt="Anexinet" src="/wp-content/uploads/2020/03/logo-anexinet-2020-1.png"></a>
  <a class="btn-ham" title="MENU"><img width="26" height="auto" alt="MENU" src="https://www.anexinet.com/wp-content/uploads/2020/06/btn-hamb.png"></a>
  <a class="btn-cerrar" title="CLOSE"><img width="20" height="auto" alt="CLOSE" src="https://www.anexinet.com/wp-content/uploads/2020/06/btn-cerrar.png"></a>
</div>

<nav id="box_menu_cetered">
  <div class="container-menu-centered">
    <?php 
    wp_nav_menu( array(
        'menu' => 'new_menu_centered',
        'link_before' => '<span>',
        'link_after'=>'</span>',
        //'walker' => 'new_menu_centered',
        'walker' => new My_Walker_Nav_Menu()
    ) );
    ?> 
    
     
     </div> 
  </div>
  <div class="contendor_posts_menu">
    <?php   
      global $post;
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => '1',
        'order' => 'DESC', 
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug', //can be set to ID
                'terms' => 'managed-services' //if field is ID you can reference by cat/term number
            )
        )
    );


    global $the_query_category;
    $the_query_category = new WP_Query( $args );
    if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
    
          ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-managedservices box-menu-post">
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>

           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Read more about:<br/><?php the_title(); ?></a>         
           </div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>

    <?php
      global $post;
        $args = array(
        'post_type' => 'post',
        'post__in' => array("57233"), /* The Future of Managed Services */
        'posts_per_page' => '1',
        'order' => 'DESC'
    );

        global $the_query_category;
        $the_query_category = new WP_Query( $args );
        if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
        
              ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-managedservices box-menu-webinar">
        <h2>DIVE DEEPER</h2>
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>
            <h3>VIEWPOINT</h3>

           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>

            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>

           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>

    <?php   
      global $post;
        $args = array(
        'post_type' => 'post',
        'post__in' => array("57858"), /* Trends in Modern Enterprise Architecture */
        'posts_per_page' => '1',
        'order' => 'DESC'
    );

    global $the_query_category;
    $the_query_category = new WP_Query( $args );
    if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-advisory-services box-menu-post">
               
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>

           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Learn more about:<br/><?php the_title(); ?></a>         
           </div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>

<!-- Cloud -->
<?php   
  global $post;
    $args = array(
    'post_type' => 'anxt_ebooks',
    'post__in' => array("55927"), /* How to modernize your infrastructure */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-cloud-hybrid box-menu-post">
               
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>

           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Read more about:<br/><?php the_title(); ?></a>         
           </div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>
<!-- /Cloud -->
<!-- Connected Experiences -->
<?php   
  global $post;
    $args = array(
    'post_type' => 'page',
    'post__in' => array("58749"), /* Connected Experiences Kickstart */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-connectedexperiences box-menu-post">
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>
           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Learn more about:<br/><?php the_title(); ?></a>         
           </div>
      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>
<!-- /Connected Experiences -->
<!-- Related Conetnt Post Networking -->
<?php   
  global $post;
    $args = array(
    'post_type' => 'page',
    'post__in' => array("58581"), /* Connected Experiences Kickstart */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-networking box-menu-post">
               
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>

           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Read more about:<br/><?php the_title(); ?></a>         
           </div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>
<!-- /Related Content Post Networking -->
<!-- Data Analytics -->
<?php   
  global $post;
    $args = array(
    'post_type' => 'anxt_ebooks',
    'post__in' => array("54018"), /* Connected Experiences Kickstart */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-dataanalytics box-menu-post">
               
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>

           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Read more about:<br/><?php the_title(); ?></a>         
           </div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>
<!-- /Data Analytics -->
<!-- Data Center -->
<?php   
  global $post;
    $args = array(
    'post_type' => 'anxt_ebooks',
    'post__in' => array("57641"), /* Connected Experiences Kickstart */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-datacenter box-menu-post">
               
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>

           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Read more about:<br/><?php the_title(); ?></a>         
           </div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>
<!-- /Data Center -->

<?php   
  global $post;
    $args = array(
    'post_type' => 'page',
    'post__in' => array("54933"), /* About Canopy Health */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-post-productinnovation box-menu-post">
               
           <div class="img-cont-box-menu">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-menu-size');?></a>
           </div>

           <div class="title-post-menu">
              <a href="<?php the_permalink();?>">Canopy Health Case Study </a>         
           </div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>


<?php

  global $post;
    $args = array(
    'post_type' => 'anxt_webinars',
    'post__in' => array("55200"), /* [Webinar] Transform Your Business with Event-Driven Architecture */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-advisoryservices box-menu-webinar">

        <h2>DIVE DEEPER</h2>
               
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>

            <h3>WEBINAR</h3>

           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>

            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>

           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>


     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-cloudhybridit box-menu-webinar">

        <h2>PLEASE ENJOY</h2>
               
           <div class="img-cont-box-menu-webinar">
            <a href="https://anexinet.com/infographics/hpe-greenlake/"> <img src="https://www.anexinet.com/wp-content/uploads/2020/06/consutption_2.jpg"></a>
           </div>

            <h3>INFOGRAPHIC</h3>

           <div class="title-post-menu-webinar">
              <a href="https://anexinet.com/infographics/hpe-greenlake/
">HPE GreenLake: Flexible, consumption-based Infrastructure for your top workloads</a>         
           </div>

            <div class="desc-post-menu-webinar">
            Combine the best of Cloud and On-Premises IT to deliver a flexible, as-a-service experience that lets you pay just for what you use     
           </div>

           <div class="btn_viewmore_webinar"><a target="_blank" href="https://anexinet.com/infographics/hpe-greenlake/
">Read more »</a></div>

      </div> 
      <!-- box-menu-blog-post -->

    <?php

  global $post;
    $args = array(
    'post_type' => 'post',
    'post__in' => array("57760"), /* Achieving Great Connected Customer Experiences */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-connectedexperiences box-menu-webinar">

        <h2>DIVE DEEPER</h2>
               
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>

            <h3>WEBINAR</h3>

           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>

            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>

           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>


    <?php

  global $post;

    $args = array(
    'post_type' => 'anxt_webinars',
    'post__in' => array("57594"), /* Modernize Your Video Surveillance Architecture */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-cibersecurity box-menu-webinar">

        <h2>DIVE DEEPER</h2>
               
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>

            <h3>WEBINAR</h3>

           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>

            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>

           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>

    <?php

  global $post;
    $args = array(
    'post_type' => 'anxt_webinars',
    'post__in' => array("52198"), /* Elevate Your Analytics to the Cloud */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-dataanalytics box-menu-webinar">

        <h2>DIVE DEEPER</h2>
               
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>

            <h3>WEBINAR</h3>

           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>

            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>

           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>

      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>


<!-- Networking Webinar -->
    <?php

global $post;
  $args = array(
  'post_type' => 'post',
  'post__in' => array("50153"), /* Elevate Your Analytics to the Cloud */
  'posts_per_page' => '1',
  'order' => 'DESC'
);

global $the_query_category;
$the_query_category = new WP_Query( $args );
if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();

    ?>
   <!-- box-menu-blog-post -->
    <div class="box-menu-webinar-networking box-menu-webinar">

      <h2>PLEASE ENJOY</h2>
             
         <div class="img-cont-box-menu-webinar">
          <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
         </div>

          <h3>PODCAST</h3>

         <div class="title-post-menu-webinar">
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
         </div>

          <div class="desc-post-menu-webinar">
            <?php the_excerpt(); ?>     
         </div>

         <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Listen Now »</a></div>

    </div> 
    <!-- box-menu-blog-post -->
    <?php endwhile;
    wp_reset_query(); ?>
<!-- termina post navigation -->
  <?php else: ?>
<!-- no posts found -->
  <?php endif; ?>
  <!-- Networking WEbinar -->

     <!-- box-datacenter-post -->
      <div class="box-menu-webinar-datacenter box-menu-webinar">
        <h2>DIVE DEEPER</h2>
           <div class="img-cont-box-menu-webinar">
            <a href="https://insights.anexinet.com/top-reasons-why-your-disaster-recovery-is-destined-to-fail"> <img src="https://www.anexinet.com/wp-content/uploads/2020/06/disaster.jpg"></a>
           </div>
            <h3>EBOOK</h3>
           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>">Top Reasons Why Your Disaster Recovery is Destined to Fail</a>         
           </div>
            <div class="desc-post-menu-webinar">
         Downtime and data loss are company-killers. Without a pragmatic Recovery Plan in place, your business may never recover.    
           </div>
           <div class="btn_viewmore_webinar"><a target="_blank" href="https://insights.anexinet.com/top-reasons-why-your-disaster-recovery-is-destined-to-fail
">Read more »</a></div>
      </div> 
      <!-- box-menu-blog-post datacenter -->

    <?php
        global $post;
        $args = array(
    'post_type' => 'anxt_white_papers',
    'post__in' => array("53221"), /* Why Your UX/UI Design Strategy Should be Based on Business Context */
    'posts_per_page' => '1',
    'order' => 'DESC'
);

 global $the_query_category;
 $the_query_category = new WP_Query( $args );
 if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
 
      ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-designservices box-menu-webinar">
        <h2>PLEASE ENJOY</h2>  
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>
            <h3>WHITE PAPER</h3>
           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>
            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>
           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>
      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>

    <?php

      global $post;
            $args = array(
        'post_type' => 'anxt_white_papers',
        'post__in' => array("53223"), /* Why Your UX/UI Design Strategy Should be Based on Business Context */
        'posts_per_page' => '1',
        'order' => 'DESC'
    );

      global $the_query_category;
      $the_query_category = new WP_Query( $args );
      if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      
            ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-futureofwork box-menu-webinar">
        <h2>PLEASE ENJOY</h2>
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>
            <h3>WHITE PAPER</h3>
           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>
            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>
           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>
      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>

    <?php

      global $post;
        $args = array(
      'post_type' => 'anxt_white_papers',
      'post__in' => array("57599"), /* IDC Technology Spotlight Unleashing the Power of AI Initiatives with the Right Infrastructure */
      'posts_per_page' => '1',
      'order' => 'DESC'
);


      global $the_query_category;
      $the_query_category = new WP_Query( $args );
      if ( $the_query_category->have_posts() ) : while (    $the_query_category->have_posts() ) : $the_query_category->the_post();
      
            ?>
     <!-- box-menu-blog-post -->
      <div class="box-menu-webinar-productinnovation box-menu-webinar">
        <h2>PLEASE ENJOY</h2>
           <div class="img-cont-box-menu-webinar">
            <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('square-size');?></a>
           </div>
            <h3>WHITE PAPER</h3>
           <div class="title-post-menu-webinar">
              <a href="<?php the_permalink();?>"><?php the_title(); ?></a>         
           </div>
            <div class="desc-post-menu-webinar">
              <?php the_excerpt(); ?>     
           </div>
           <div class="btn_viewmore_webinar"><a href="<?php the_permalink();?>">Read more »</a></div>
      </div> 
      <!-- box-menu-blog-post -->
      <?php endwhile;
      wp_reset_query(); ?>
<!-- termina post navigation -->
    <?php else: ?>
<!-- no posts found -->
    <?php endif; ?>

</div>
</nav>