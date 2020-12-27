 <?php
/**
 *
 * Template Name: Healthcare Industry
 *
 * @package      Page Template
 * @author       Britt McCormick 
 * @copyright    Copyright (c) 2020, Anexinet
 * @license      https://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */
?>
<?php get_header(); 

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


 <!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

 <!-- back to top -->
 <button onclick="topFunction()" id="myBtn" title="Go to top"><img
         src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top"/></button>
 <!-- / back to top -->

 <style>
	 
	 #engage1 {
	background-color: #f7f8fa; 
	height: 1200px; 
	margin-top: 100px; 
	max-width: 1240px !important; 
	margin-left:8%; 
	padding-top: 50px;
	}
/* CARRUSEL */

ul li::before {
		 color: #3887d7 !important;
	 }
ul {
    margin-left: 1.25rem;
    list-style-type: none !important;
}
#healthcare {
    background-color: #ffffff;
}
.container-connected-dos {
    background-color: #ffffff;
 }
#WS-ScroLi {
    top: 665px !important;
 }
.title-podcast-int-box1 {
    font-size: 12px;
    font-family: Lato;
    color: #6e6e68;
    font-weight: bold;
    width: 65%;
    margin: 0 auto;
    padding-top: 25px;
}
.img_box_podcast-int1 {
    position: relative;
    float: left;
    width: 100%;
    height: auto;
}



#design_development .container-managed-dos .izqparrafo  p span,
#empower .container-managed-uno .izqparrafo  p span{
    color: #0f88d6;

}




.tit-bg-cat-blue-img {
    position: absolute;
    top: 40px;
    left: 25px;
    font-family: Lato;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
}

.container-socialdataok {
        background-color: #f7f8fa;
    height: 740px;
    padding-top: 0px !important;
}

.tit-bg-blue-img {
    position: absolute;
    bottom: 100px;
    left: 25px;
    font-family: Lato;
    font-size: 18px;
    line-height: 28px;
    font-weight: bold;
    color: #fff;
    width: 230px;
}

.readmore-bg-blue-img {
    position: absolute;
    bottom: 40px;
    left: 25px;
    font-family: Lato;
    font-size: 16px;
    font-weight: bold;
    color: #ffb852 !important;
}


.fontsmall {
    font-size: 12px !important;
}


#engage .container-connected-dos {
    padding-top: 40px !important;

}

.container-socialdata {
    padding-top: 40px !important;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    background: #187bcd !important;
}

.tit-carru {
    font-family: Lato;
    font-size: 15px;
    font-weight: bold;
    display: block;
    margin-bottom: 24px;
    color: #3d3d3b;
    text-align: center;
    padding: 0 24px;

}

.desc-carru {
    font-family: Lato;
    font-size: 12px;
    color: #3d3d3b;
}

.learmore-carru {
    font-family: Lato;
    font-size: 12px;
    position: relative;
    margin: 31px auto 22px auto;
    display: block;
    background-color: #187bcd;
    text-transform: uppercase;
    text-align: center;
    color: #fff;
    width: 120px;
    height: 36px;
    line-height: 36px;

}


.img-carru {
    padding: 24px;
}

.img-carru img {
    max-width: 200px;
    height: auto;
    margin: 0 auto;
}


.owl-carousel-kick {
    position: relative;
    width: 100%;

}

.owl-carousel-kick {

    margin-bottom: 70px;
}

.owl-carousel-kick .item {
    min-height: 350px;
    padding: 20px 8px;

    box-shadow: 0 0 20px 0 rgba(110, 110, 104, 0.3);
}


.owl-carousel-kick .owl-item {
    min-height: 385px;
    padding: 20px;


}

.owl-carousel-kick .item p {
    text-align: center;
    font-family: Lato;
    font-size: 12px !important;
    line-height: 14px !important;
    padding: 0 20px;
}





.container-carrusel {
    background-color: #f7f8fa;
    min-height: 100%;

    padding-top: 40px !important;
    padding-bottom: 1px;

}

/* CARRUSEL */

.fixgray22 {
    background-image: url("https://www.anexinet.com/wp-content/uploads/2020/06/huella_blog.jpg ");
    background-size: cover;
    background-repeat: no-repeat;
}

.fixgray22 .tit-cat-podcast-int-box {
    color: #fff !important;
    padding-left: 15px;
}


.fixgray22 .title-podcast-int-box {
    color: #fff !important;
    padding-left: 15px;
    margin-bottom: 0px;
}

.fixgray22 .readmore-podcast-int {
    color: #ffb852 !important;
    padding-left: 15px;
    margin-bottom: 16px !important;
    display: block;
}



.container-managed-dos .izqparrafo,
.container-managed-dos .dereparrafo {
    margin-bottom: 40px !important;
}

.container-apprefresh {
    height: 700px;
    padding-top: 0px !important;
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#166fc5+0,0f4c83+100 */
    background: #166fc5;
    /* Old browsers */
    background: -moz-linear-gradient(left, #166fc5 0%, #0f4c83 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #166fc5 0%, #0f4c83 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #166fc5 0%, #0f4c83 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#166fc5', endColorstr='#0f4c83', GradientType=1);
    /* IE6-9 */

}

.container-apprefresh h2 {
    color: #fff;
}

.container-apprefresh p {
    color: #fff !important;
}


.container-apprefresh2 {
    height: 1091px;
    padding-top: 0px !important;
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#166fc5+0,0f4c83+100 */
    background: #166fc5;
    /* Old browsers */
    background: -moz-linear-gradient(left, #166fc5 0%, #0f4c83 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #166fc5 0%, #0f4c83 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #166fc5 0%, #0f4c83 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#166fc5', endColorstr='#0f4c83', GradientType=1);
    /* IE6-9 */

}

.container-apprefresh2 h2 {
    color: #fff;
}

.container-apprefresh2 p {
    color: #fff !important;
}



.podcastp3 {
    display: inline-block !important;
    

}

#data_analytics .container-managed-uno .podcastp3 {
    top: 30px;
}

.bg_white_box_parrap.fixgray {
    display: inline-block !important;
    margin-bottom: 30px;
    background-color: #f7f8fa !important;
}


.fixgray .tit-cat-podcast-int-box {
    margin-bottom: 23px !important;
}

.clear {
    position: relative;
    width: 100%;
    height: 1px;
    display: block;
    float: none;
    clear: both;
}

.container-connected-cuatro .izqparrafo {
    padding-right: 60px;
}

.podcastp1 {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/connectec_customer_img.jpg');
    background-size: cover;
    min-height: 810px;
    margin-top: 0px !important;
    width: 42% !important;
    position: absolute !important;
    right: 0px;
}

.podcastp11 {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/blg-duveap.jpg');
    background-size: cover;
    min-height: 700px;
    margin-top: 0px !important;
    width: 42% !important;
    position: absolute !important;
    right: 0px;
}

.podcastp12 {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/happyface-1.jpg');
    background-size: cover;
    min-height: 1094px;
    margin-top: 0px !important;
    width: 42% !important;
    position: absolute !important;
    right: 0px;
}


.podcastp33 {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/wbr-iyceta-copy.jpg');
    background-size: cover;
    min-height: 700px;
    margin-top: 0px !important;
    width: 42% !important;
    position: absolute !important;
    right: 0px;
}



.readmore-blue {
    color: #187bcd;
    font-family: Lato;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 40px;
    display: block;
}

.readmore-white {
    color: #fff;
    font-family: Lato;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 40px;
    margin-top: 30px;
    display: block;
}


.btn-kick {
    margin-top: 40px;
    margin-bottom: 30px;
    display: block;
    position: relative;
    float: none;
}

.container-connected-cuatro {
    padding-top: 0px !important;

}

.imggirlblue {
    position: relative;
    float: left;
    margin-right: 40px;
    margin-top: 17px;
}

.titblue-gde {
    font-family: Montserrat;
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 30px;
    padding-top: 35px;
}

.txt-white-box-blue {

    padding-right: 100px;
    font-family: Lato;
    font-size: 20px;
    line-height: 28px;
    color: #fff;
    margin-bottom: 20px;
}

.txt-white-box-blue span {
    color: #ffb852;
}

.btn_yello-box-blue {
    font-family: Montserrat;
    font-size: 16px;
    font-weight: bold;

    padding: 15px 25px;
    border-radius: 0px;
    transition: color .2s ease-in-out, background-color .4s ease-in-out, border-color .4s ease-in-out, box-shadow .4s ease-in-out;
    background: #ffb952;
    color: #fff !important;
    display: inline-block
}

.img_box_podcast-int {
    position: relative;
    float: left;
    margin: 16px 30px 16px 16px;
    width: 40%;
    height: auto;
}

.tit-cat-podcast-int-box {
    color: #3d3d3b;
    font-size: 11px;
    font-weight: bold;
    font-family: Lato;
    padding-bottom: 10px;
    margin-top: 16px;
}

.title-podcast-int-box {
    font-size: 14px;
    font-family: Lato;
    color: #6e6e68;
    font-weight: bold;

}

.readmore-podcast-int {
    font-family: Lato;
    color: #187bcd !important;
    font-size: 14px;
    font-style: italic;
    font-weight: bold;
}


.dereparrafo {}

.bg_white_box_parrap {
    width: 100%;
    background-color: #fff;
}

.container-connected-dos {
    background-color: #f7f8fa;
    min-height: 800px;
    /* top: 50px; */
    margin-top: 40px !important;

}

.imggirlblue:hover {
    transition-duration: 0s;
}

.container-connected-tres {
    position: relative;
    background-color: #f7f8fa;
    height: 378px;
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#166fc5+0,0f4c83+100 */
    background: #166fc5;
    /* Old browsers */
    background: -moz-linear-gradient(left, #166fc5 0%, #0f4c83 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #166fc5 0%, #0f4c83 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #166fc5 0%, #0f4c83 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#166fc5', endColorstr='#0f4c83', GradientType=1);
    /* IE6-9 */

    padding-top: 0px !important;

}



.fix-findo-gris {
    position: absolute;
    left: 0px;
    top: 0px;
    display: block;
    background-color: #f7f8fa;
    height: 100%;
    width: 100%;
    z-index: 1;


}

/* INICIA CSS LIFE SCIENCE */


.post-intro-wrapper {

    padding-top: 220px !important;
}

.post-intro-wrapper h1.post-title {
    font-size: 50px !important;
}


.circ_white {
    position: relative;
    background-image: url(https://www.anexinet.com/wp-content/uploads/2020/06/citas_barra_top_icon.png);
    background-repeat: no-repeat;
    background-position: center top;
    background-size: initial;
    height: 58px;
    width: 100%;
    margin-top: -32px;
}

.bg_white_box_shadow {
    margin: 0 auto;
    width: 230px;
    background-color: #fff;
    box-shadow: 0 0 6px 0 #c4c4c4;
    padding: 0px 30px 30px 30px;
    border-radius: 5px;
}

.bg_white_box_shadow p {
    padding: 20px 0px;

}

.bg_white_box_shadow p {
    
    line-height: 24px !important;
    text-align: center;
}

.img_box_forshadow {
    max-width: 100%;
    height: auto;
    margin: 0 auto 30px auto;
    text-align: center;
    display: block;
}


/* TERMINAN CSS LIFE SCIENCE */



.piwo-nav .menu-item .sub-menu li {
    width: initial !important;
}

.single-post-content {
    margin-top: -50px;
}

.parrafofix {
    left: 9.5vw;
    position: absolute;
    top: -215px;
    color: #fff;
    font-family: Montserrat;
    font-size: 22px;
    font-weight: normal;
    max-width: 470px;
    line-height: 28px;
}

html {
    scroll-behavior: smooth
}

#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    max-width: 100px;
}

ul {
    margin: 20px;
}

ul li {

    margin-bottom: 0px;
    margin-left: 20px;
    color: #6e6e68;
}

h3 {
    font-weight: 700;
}

.grndt-sec-nav .container .cont-1 {
    margin-right: 0px;
}

#accordion-resizer {
    padding: 10px;
    width: 350px;
    height: 220px;
}

.border-box {
    border: 2px solid #a4ca53;
    max-width: 250px;
    padding: 20px;
    display: flex;
    align-items: center;
    min-width: 225px;
    min-height: 106px;
}

.border-box img {
    margin-right: 18px;
}

.border-box a {
    margin-left: 12px;
    color: #187bcd;
    font-weight: 700;
}

.healthcare-first a {
    font-size: 13px;
    line-height: 16px;
    margin-left: 12px;
    color: #3c3d47;
    font-weight: 500;
}

.videofix1 iframe,
.videofix1 img {
    height: auto !important;
}

.vidyard-player-container {
    height: auto !important;
}

.up-pill {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
}

.down-pill {
    align-items: center;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.vidyard-player-container {
    max-width: 800px;
    /* padding-top:60px; */
}

.fa, .fas {
    font-size: 12px;
    font-weight: 900;
    margin-left: 5px;
}

.paddi {
    padding: 0px 150px 0px 40px;
}

.green-nav {
    background: #a4ca53;
}

.yellow-btn-2020 {
    padding: 3vh 4vw;
    background-color: #FFB852;
    font-weight: 700;
}

.max-1100-mr-40 {
    max-width: 1100px;
    margin-right: 40px;
}

.link-blue {
    color: #187bcd;
}

.link-blue:hover {
    color: #0F4C83;
}

.link-yellow {
    color: #ffb852;
}

.link-yellow:hover {
    color: #f9a62e;
}

.fw-700 {
    font-weight: 700;
}

.lista-finan {
    margin: 20px 0;
}

.lista-finan li span {
    font-weight: bold;
    color: #000;
}

.sticky {
    position: fixed;
    top: 86px;
    width: 100%;
    z-index: 10;
}

.mh-1200 {
    /* max-height: 100% !important;
    height:100% !important; */
}

.mh-256 {
    max-height: 100% !important;
    height: 100% !important;

}

.grdnt-divider {
    margin-left: 1%;
    margin-right: 1%;
    color: white;
}

.page-id-56600 .grndt-sec-nav .container .cont-1 {
    margin-right: 0;
}

/* CSS vertical position */

@import url("https://fonts.googleapis.com/css?family=Muli:400,700");

#WS-ScroLi a {
    font-family: Montserrat;
}

#WS-ScroLi {
    position: absolute;
    z-index: 9;
    left: 17% !important;
}

#WS-ScroLi.fixed {
    z-index: 9;
    position: fixed;
    top: 110px !important;
}

#WS-ScroLi.asbolute {
    position: absolute;
}

#WS-ScroLi [class^="item"] {
    display: inline-block;
    display: inline-grid;
    justify-content: center;
    align-content: center;
    position: relative;
}

#WS-ScroLi [class^="item"] .line,
#WS-ScroLi [class^="item"] .line-animation {
    position: absolute;
}

#WS-ScroLi [class^="item"] .line-animation {
    z-index: 999;
}

#WS-ScroLi [class^="item"].reading {
    color: red;
    border-color: red;
}

#WS-ScroLi [class^="item"].reading .line,
#WS-ScroLi [class^="item"].reading .line-animation {
    background: red;
}

#WS-ScroLi [class^="item"].current {
    border-width: 3px;
    color: green;
    border-color: green;
}

#WS-ScroLi [class^="item"].current a {}

body {}

body #header {
    height: 1000px;
    width: 100%;
    background-color: orange;
    overflow: auto;
    display: grid;
    justify-content: center;
    align-content: center;
}

body #header h1 {
    text-align: center;
    color: white;
    font-size: 60px;
}

body #description p {
    text-align: center;
    font-size: 18px;
    margin: 50px 0;
}

#WS-ScroLi a {}

#WS-ScroLi .past a {
    color: #187bcd;
}

#WS-ScroLi .current a {
    color: #187bcd;
    background-color: #187bcd;
}

#WS-ScroLi .past {
    background-color: #187bcd;
}

#WS-ScroLi .current {
    background-color: #187bcd;
}

#WS-ScroLi .icon {}

.item-1,
.item-2,
.item-3,
.item-4,
.item-5 {
    margin-top: -5px;
}

.item-4 .line,
.item-4 .line-animation {
    display: none !important;
}

.icon-text {
    margin-top: -19px;
    position: absolute;
    text-align: right;
    right: 22px;
    width: 120px
}

.icon-text a {
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    line-height: 14px;
}

#WS-ScroLi .item-4 .line {
    display: none !important;


}


/* termina CSS vertical position */

.container-managed {
    clear: both;
    float: none;
    left: 130px;
    display: block;
    position: relative;
    padding-left: 30px;
    padding-top: 100px;
}

.izqparrafo {
    position: relative;
    float: left;
    width: 65%;
    padding-right: 10%;
}

.dereparrafo {
    margin-top: 32px;
    position: relative;
    float: left;
    width: 30%;
    display: flex;
    padding: 0px;
}


.container-managed-uno {}
.ul-style-one {
    list-style: none;
    font-family: Lato;
    font-size: 16px;
    line-height: 26px;
    color: white;
}
.ul-style {
  margin-left: 0px;
    list-style: none;
    font-family: Lato;
    font-size: 16px;
    line-height: 26px;
    color: #6e6e68;
}

.ul-style-one ::before {
    content: "\2022";
    color: white;
    display: inline-block;
    width: 15px;
    margin-left: 20px;
}

.ul-style-be::before {
    content: "\2022";
    color: #1752e4;
    display: inline-block;
    width: 15px;
    margin-left: 20px;
}

h2 {
    font-size: 30px;
}

.container-managed p {
    font-family: Lato;
    font-size: 16px;
    line-height: 26px;
    color: #6e6e68;
}

.tit-maged-art {
    font-style: italic;
    color: #fff;
    position: relative;
    display: flex;
    flex-direction: column;
    font-size: 14px;
    width: 80%;
    float: right;
    margin-left: 20px;
}

.tit-maged-art p {
    font-weight: 600;
    color: #6e6e68;
    font-style: italic;
    font-size: 14px;
}

.tit-maged-art a {
    font-weight: 600;
    font-style: normal;
    color: #187bcd;
    text-decoration: none;
}

.tit-maged-art a:hover {
    color: #1261a2;
}

.container-managed-dos {}


.container-connected-cuatro {

    background-color: #f7f8fa;
    height: 810px;
}





.img-1-box-blue {
    position: relative;
    float: left;
    padding-right: 0px;
    padding-bottom: 50px;
}

.box_bluex {
    width: 100%;
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#0f4c83+0,187bcd+100 */
    background: #0f4c83;
    /* Old browsers */
    background: -moz-linear-gradient(left, #0f4c83 0%, #187bcd 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #0f4c83 0%, #187bcd 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #0f4c83 0%, #187bcd 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0f4c83', endColorstr='#187bcd', GradientType=1);
    /* IE6-9 */
    display: block;
    float: none;
    clear: both;
}

.box-text-blue {
    position: relative;
    float: left;
    display: block;
}

.box_bluex h2 {
    color: #fff !important;
    padding-top: 50px;
    padding-bottom: 0px;
}

.box_bluex p {
    color: #fff;
    line-height: 20px;
    padding-right: 20px;
}

.box_bluex img:hover {
    transform: none;
}

.social-txt-listening {
    margin-bottom: 20px;
}

.clearsocial {
    height: 90px;
    display: block;
}


.btn_read_bottom {
    margin-left: 83%;
    margin-top: -40px;
    color: #fff;
    font-family: Montserrat;
    font-size: 16px;
    font-weight: bold;

}

.knowmore {
    background-image: url("https://www.anexinet.com/wp-content/uploads/2020/05/arrow-down.png");
    background-repeat: no-repeat;
    background-position: 112px -4px;

}

.btn_cerrarz {
    background-image: url("https://www.anexinet.com/wp-content/uploads/2020/05/arrow-up.png");
    background-repeat: no-repeat;
    background-position: 112px -4px;

}

.btn_read_bottom:hover {
    color: #FFF;
}

.txt-blue-citas {
    text-align: center;
    font-weight: bold;
    font-size: 16px !important;
    color: #0f88d6;
}

#empower .container-connected-dos {
    padding-top: 40px !important;
    min-height: 787px;

}


#empower .container-managed-uno {
    padding-top: 85px !important;


}

/* ############# SECCIONES DE PAGINA #############*/

#engage {
    /* min-height: 3000px; */
}

#design_development {}

#empower {
    min-height: 1000px;
}

#data_analytics {
    min-height: 2000px;
}
	 
@media only screen and (min-width: 1450px) {
	 #engage1 {
	background-color: #f7f8fa; 
	height: 1200px; 
	margin-top: 100px; 
	max-width: 1240px !important; 
	margin-left:12%; 
	padding-top: 50px;
	}
 }

@media only screen and (max-width: 1450px) {
    #WS-ScroLi {
        left: 14% !important;
    }

    .parrafofix {
        left: 10.5vw;

    }

}

@media only screen and (max-width: 1390px) {
    #WS-ScroLi {
        left: 12% !important;
    }



}

@media only screen and (max-width: 1200px) {
#engage {
 min-height: 1070px;
}
#design_development {
  min-height: 865px;
 }
#empower {
 min-height: 1110px;
}
.img_box_podcast-int {
 margin: 15px;
}
.podcastp11 {
 min-height: 770px;
}
.container-apprefresh {
 height: 1096px;
}
.podcastp1, .container-connected-cuatro {
 height: 870px;
}
#empower .container-connected-dos {
 min-height: 900px;
}
#empower .container-connected-dos .tit-cat-podcast-int-box {
 margin-bottom: 7px;
}
.container-apprefresh {
 height: 770px;
}
.container-apprefresh2 {
 height: 1095px;;
}
.txt-white-box-blue {
 font-size: 18px;
}
.titblue-gde {
 line-height: 30px;
 font-size: 24px;
}
.txt-white-box-blue {
 padding-right: 0px;
}

.parrafofix {
 left: 11vw;
}
.box_bluex h2 {
 padding-top: 17px;
}
.btn_read_bottom {
 margin-left: 75%;
}
}

@media only screen and (max-width: 1024px) {
    .parrafofix {
        left: 4vw;
    }

    .box_bluex h2 {
        padding-top: 26px;
    }

    .btn_read_bottom {

        margin-left: 73%;
        margin-top: -35px;
    }
}

@media only screen and (max-width: 991px) {

    #data_analytics {
        min-height: 1100px;
    }

    #empower {
        min-height: 1300px;
    }

    #engage {
        min-height: 1150px;
    }

    #design_development {
        min-height: 970px;
    }




    #engage .container-connected-dos {
        min-height: 1240px;
    }

    .container-connected-tres {
        padding-right: 30px;
    }

    .imggirlblue {
        width: 50%
    }

    .container {}


    .container-connected-cuatro .izqparrafo {
        padding-right: 0px;
    }

    .container-apprefresh p {

        line-height: 22px !important;
    }

    .container-apprefresh2 p {
        line-height: 22px !important;
    }

    .container-apprefresh2,
    .podcastp12 {
        height: 1095px;
    }


    #empower .container-connected-dos {
        min-height: 1145px;
    }

    .podcastp1,
    .container-connected-cuatro {
        height: 967px;
    }

    .txt-white-box-blue {
        font-size: 16px;
        line-height: 24px
    }

    .imggirlblue {
        width: 34%;
        padding-bottom: 13%;
    }


    .tit-cat-podcast-int-box {
        margin-bottom: 5px;

    }

    .box_bluex h2 {
        padding-left: 30px;
    }

    .social-txt-listening {
        padding-left: 30px;
    }

    .img-1-box-blue {
        display: none;

    }

}

@media only screen and (max-width: 960px) {
    .nav {
        margin-left: 3%;
        margin-right: 5%;
    }


}

@media screen and (max-width:900px) {
    .dereparrafo {
     
        margin-top: 40px;
        align-items: center;

    }
}

@media only screen and (max-width: 850px) {

    .parrafofix {
        left: 5vw;
    }

}

@media only screen and (max-width: 769px) {

    .dereparrafo {
        width: 100%;
     
    }

    #data_analytics .container-managed-uno .podcastp3 {
        top: 0px;

    }

    #data_analytics {
        min-height: 1400px;
    }

    #empower {
        min-height: 1600px;
    }

    #engage {
        min-height: 1350px;
    }

    #design_development {
        min-height: 1250px;
    }




    .container-apprefresh {

        left: 160px;
    }

    .container-apprefresh2 {

        left: 160px;
    }

    .podcastp1,
    .podcastp11,
    .podcastp33 {

        width: 110% !important;
        position: relative !important;
    }

    .podcastp11,
    .podcastp12,
    .podcastp33 {
        left: -30px;
    }

  

    .parrafofix {
        left: 8vw;
    }


    .img_box_podcast-int {
        width: auto !important;
    }

    .podcastp12 {
        width: 110% !important;
        position: relative !important;
    }

    .container-apprefresh .izqparrafo {
        padding-right: 10% !important;

    }

    .container-apprefresh2 .izqparrafo {
        padding-right: 10% !important;

    }




    .fontsmall {
        font-size: 14px !important;
    }


    .tit-cat-podcast-int-box {
        margin-bottom: 25px !important;
    }

    .btn_read_bottom {
        margin-left: 66%;
    }

    #WS-ScroLi {
        left: 18% !important;
    }

    .container {
        max-width: 700px;
    }

    .container-connected-cuatro .izqparrafo {
        padding-right: 30px;
    }

    #design_development .container-managed-dos .izqparrafo {

        padding-right: 30px;
    }

    .bg_white_box_parrap {
        width: 95%;
    }
    .title-podcast-int-box {
        padding-right: 20px !important;
    }
    .izqparrafo {
        position: relative;
        float: none;
        width: 100%;
        padding-right: 3%;
    }
}
@media only screen and (max-width: 768px) {
    #data_analytics {
        min-height: 1450px;
    }
    #engage {
        min-height: 1450px;
    }
    #design_development {
        min-height: 1300px;
        height: 850px;
    }
    .container-apprefresh {
        left: 0px;
    }
    .container-apprefresh .izqparrafo {
        padding-right: 5% !important;
    }
    .container-apprefresh2 {
        left: 0px;
    }
    .podcastp11,
    .podcastp12 {
        left: 0px;
    }
    .txt-white-box-blue {

        line-height: 20px;
    }
    .imggirlblue {
        position: relative;
        float: left;
        margin-right: 15px;
        margin-top: 46px;
        margin-bottom: 10%;
    }

    .container-managed {
        left: 0px;
        padding-right: 0px;
        padding-top: 50px;
    }

    #WS-ScroLi {
        display: none;
    }
    .podcastp11,
    .podcastp12,
    .podcastp1 {
        left: -20px
    }

    .podcastp12,
    .podcastp11,
    .podcastp1 {
        width: 105% !important;
    }

    .btn_read_bottom {

        margin-left: 69%;
    }

    .img-1-box-blue {}

    .box_bluex h2 {
        padding-top: 15px;
    }

    .box_bluex h2,
    .social-txt-listening {
        float: none;
        padding-left: 20px;
        padding-right: 35px;
    }

    .social-txt-listening {
        font-size: 14px;
        line-height: 18px;
    }

    .container-managed {
        padding-left: 20px;
        padding-top: 10px !important;
    }

    .icon-text a {
        font-size: 12px;
        padding-left: 21px;
    }

    #WS-ScroLi {
        top: 676px !important;
        left: 100px !important;
    }

    #WS-ScroLi.fixed {
        left: 100px !important;
    }

    .paddi {
        padding: 20px;
    }

    .healthcare-eleven {
        padding: 40px;
    }
}

@media only screen and (max-width: 450px) {

    #engage {
        min-height: 1650px;
    }

    #design_development {
        min-height: 1450px;
    }

    #data_analytics {
        min-height: 1550px;
    }

    #empower {
        min-height: 1600px;
    }

    #engage .container-connected-dos {
        min-height: 1380px;
    }

    .frasep {
        padding-right: 25px;
        display:flex;
        justify-content:center;
    }

    #data_analytics .container-managed-uno h2 {
        padding-top: 35px;

    }

    #kickstarts .container-managed {
        padding-left: 0px !important;
    }

    #kickstarts h2 {
        padding-left: 20px;
    }

    .container-apprefresh2 .izqparrafo {
        padding-right: 5% !important;
    }

    .container-apprefresh2 .izqparrafo {}

    #empower .container-connected-dos {
        min-height: 1300px;
    }

    .btn-kick {
        padding-top: 40px;
        margin-top: 0px;
    }

    .txt-white-box-blue {
        font-size: 18px;
        line-height: 24px !important;
    }

    .imggirlblue {
        display: none;
    }

    .box_bluex p {
        font-size: 14px !important;
        line-height: 18px !important;
        padding-right: 36px !important;
    }

    .btn_read_bottom {
        margin-left: 55%;
    }

    .post-intro-wrapper h1.post-title {

        width: 320px;
    }
}

@media only screen and (max-width: 392px) {

    .container-apprefresh {
    height: 870px;
}
    #engage .container-connected-dos {
        min-height: 1430px;
    }

    .readmore-blue {}

    #empower .container-connected-dos {
        min-height: 1317px;
    }

    .podcastp1,
    .container-connected-cuatro {
        height: 1050px;
    }


}

@media only screen and (max-width: 376px) {



    #engage {
        min-height: 1600px;
    }

    #design_development {
        min-height: 1400px;
    }

    #data_analytics {
        min-height: 1500px;
    }





    #empower .container-connected-dos {
        min-height: 1475px;
    }



    .podcastp12,
    .podcastp11,
    .podcastp1 {
        width: 113% !important;
    }

    .txt-white-box-blue {
        font-size: 16px;
        line-height: 21px !important;
    }

    #engage .container-connected-dos {
        min-height: 1500px;
    }

    .container-managed {
        padding-right: 20px;
    }

    .btn_read_bottom {
        margin-left: 50%;
    }

    .box_bluex h2 {
        font-size: 18px !important;
    }

    .box_bluex p {
        line-height: 17px !important;
    }

    .parrafofix {
        left: 2vw;
    }
}

@media only screen and (max-width: 320px) {
    #engage {
        min-height: 1900px;
    }

    #data_analytics {
        min-height: 1650px;
    }

    #engage .container-connected-dos {
        min-height: 1698px;
    }

    .container-apprefresh2,
    .podcastp12 {
        height: 950px;
    }

    .container-apprefresh {
        height: 890px;
    }

    #empower .container-connected-dos {
        min-height: 1694px;
    }

}

 </style>

 <?php echo the_content(); ?> 

<!-- <div class="container container-managed container-socialdataok">
  <div class="izqparrafo">
    <img style="margin-bottom:30px; margin-top:30px;" src="https://www.anexinet.com/wp-content/uploads/2020/06/btn-kickstarter.png"/>
    <h2>Social Data Analysis</h2>
    <p><strong>Your customers are talking.</br>Are you listening?</strong></p></br>
    <p>Leverage Social Media data to inform your corporate strategy and gain insights not available through any other channel.</br></br>Social Data Analysis is one of the most effective ways to gain a deeper understanding of customers so you can deliver a truly great customer experience. Anexinet helps global brands uncover insights from Social Media data to drive their strategy. Our Social Listening Managed Service tracks the nuances of emotion and sentiment to provide true insight into how consumers feel about your brand, products, services and competitors.</br></br>We provide managed dashboards, insight analysis and ongoing brand-tracking across all vertical markets to help you understand your audience, identify growth opportunities, and improve campaigntargeting in ways never before possible. Further, our omni-channel analytics integrate social media with contact center voice calls, chat, text and email to provide a 360-degree view of the customer.</br></br><a class="readmore-blue" href="https://www.anexinet.com/resources/white-papers/white-paper-your-customers-are-talking-are-you-listening/">Learn More <img src="https://www.anexinet.com/wp-content/uploads/2020/06/readmore-blue-1.png" alt=""/></a>
  </div>
<div class="dereparrafo podcastp33">
  <div class="tit-bg-cat-blue-img">WHITE PAPER</div>
    <div class="tit-bg-blue-img">Your Customers Are Talking. Are You Listening?</div>
        <a href="https://www.anexinet.com/resources/white-papers/white-paper-your-customers-are-talking-are-you-listening/" class="readmore-bg-blue-img">Read More <img src="https://www.anexinet.com/wp-content/uploads/2020/06/readmore-yellow.png" alt=""/></a>
    </div>
  </div>
</section>

</div>  -->


 
 <!-- <section id="kickstarts">
     <div class="container container-managed container-carrusel">
         <h2>Kickstarts</h2> -->

         <?php 
            // $args = array(
            // 'post_type' => 'kickstart_lp', 
            // 'posts_per_page' => 6,
            // 'orderby' => 'DESC'
            // );
            // global $the_query_category;
            //    $the_query_category = new WP_Query( $args );
            //    if ( $the_query_category->have_posts() ) :
        ?>

         <!-- <div class="owl-carousel owl-carousel-kick owl-theme"> -->
             <?php // while ( $the_query_category->have_posts() ) : $the_query_category->the_post();  ?>

             <!-- <div class="item">
                 <div class="img-carru">
                     <?php the_post_thumbnail('square-size'); ?>
                 </div>

                 <h3 class="tit-carru"><?php the_title(); ?></h3>
                 <p class="desc-carru"><?php the_excerpt(); ?></p>
                 <a class="learmore-carru" href="<?php the_permalink(); ?>" target="_blank">LEARN MORE</a>
             </div> -->

             <?php // endwhile; wp_reset_query(); ?>

         <!-- </div>     owl carrusel -->
         <?php // else : ?>
         <!-- <p>  <?php // esc_html_e( 'Sorry, no posts matched your criteria.' ); ?> </p> -->
         <?php //endif; ?>

     <!-- </div>
 </section> -->



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/ws-scroli.js"></script>
 <script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/readmore.js"></script>
 <script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/owl.carousel.min.js"></script>

 <link rel="stylesheet" href="https://www.anexinet.com/wp-content/themes/piwo-child/public/css/owl.carousel.min.css">
 <link rel="stylesheet"
     href="https://www.anexinet.com/wp-content/themes/piwo-child/public/css/owl.theme.default.min.css">



 <script>
$(window).scroll(function() {


    if ($(window).width() < 600) {
        var hT = $('.anxnt-main-form').offset().top - 1200;
    } else {

        if ($(window).height() < 700) {
            var hT = $('.anxnt-main-form').offset().top - 600;
        } else {
            var hT = $('.anxnt-main-form').offset().top - 370;
        }
    }



    var hH = $('.anxnt-main-form').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();

    if (wS > (hT + hH - wH)) {
        $('#WS-ScroLi').css('opacity', '0');
    } else {
        $('#WS-ScroLi').css('opacity', '1');
    }



});







$(function() {




    $(".owl-carousel-kick").owlCarousel({
        loop: true,
        rewind: true,
        margin: 30,
        slideBy: 1,
        center: false,
        smartSpeed: 600,
        dots: true,
        // dotsEach:3,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        responsiveClass: true,
        responsive: {
            200: {
                items: 1
            },
            340: {
                items: 1
            },
            769: {
                items: 1
            },
            900: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });







    $('#WS-SL--content').WS_ScroLi({
        validEnd: {
            status: false
        },

        sections: [
            ['#healthcare', '<a href="#healthcare">Healthcare</a>'],
            ['#engage', '<a href="#engage">Engage</a>'],
            ['#empower',
                '<a href="#empower">Empower</a>'
            ],
            ['#enable', '<a href="#enable">Enable</a>']
        ],
        position: {
            x: ['left', 'auto'],
            y: ['top', 110]
        },
        icon: {
            size: 15,
            borderWidth: 2,
            borderRadius: 100,
            color: '#187bcd',
            colorPast: '#187bcd',
            colorOff: 'grey'
        },
        line: {
            height: 110,
            width: 2,
            color: '#187bcd',
            colorPast: '#187bcd',
            colorOff: 'grey',
        },
    });



});
</script>

 <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

 <?php include('form.php'); ?>

 <?php if(!$full_pages == true) {echo '</div>';}?>

 </div>

 <?php endwhile; ?>

 <?php get_footer(); ?>


