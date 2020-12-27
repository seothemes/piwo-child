 <?php
/**
 *
 * Template Name: Networking
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
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
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top"/></button>
<!-- / back to top -->

<style>
.owl-theme .owl-nav [class*=owl-]{
  background-color:#187bcd !important;
}

	.img-cont img:hover {
    transform: scale(1.0);
    transition: .5s;
}

#bg_x {
  width: 100%;
  height: 100%;
  position: relative;
  background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/bggranx.jpg');
  background-position: right top;
  background-repeat: no-repeat;
  background-size: 900px;
}


.box_white_cita_advisory {
   border-radius: 4px;
  box-shadow: 0 0 4px 0 #c4c4c4;
  border: solid 1px var(--very-light-pink);
  display: block;
  background-color: #fff;
  padding-left: 60px;
  font-family: Lato;
  font-size: 14px;
  color: #6e6e68;
  background-image: url("https://www.anexinet.com/wp-content/uploads/2020/06/comillas.png");
  background-repeat: no-repeat;
  background-position: 11px 14px;
  background-size: 40px;
  min-height: 125px;
  padding-top: 16px;
  padding-right: 20px;

}

.box_white_cita_advisory strong{
  margin-top: 15px;
  margin-bottom: 0px;
  color: #187bcd;
  font-size: 12px;
  display: block;
}
.box_white_cita_advisory span {
    color: #6e6e68;
    font-family: Lato;
    font-size: 10px;
    padding-bottom: 16px;
    display: block;

}

/* CARRUSEL */

.tit-bg-cat-blue-img{
  position: absolute;
  top: 40px;
  left: 25px;
  font-family: Lato;
  font-size: 18px;
  font-weight: bold;
  color: #fff;
}
.tit-bg-blue-img{
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
.readmore-bg-blue-img{
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


#anexinet_advisory .container-connected-dos {
  padding-top: 40px !important;

}

.container-socialdata {
  padding-top: 40px !important;
}

.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
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
  /* padding: 0 24px; */

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
  /* margin: 31px auto 22px auto; */
  display: block;
  background-color: #187bcd;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  width: 120px;
  height: 36px;
  line-height: 36px;
}
.learmore-carru:hover {
  background-color:#135b96;
  color:#FFF;
}
/* .img-carru {
  padding: 24px;
} */
.img-carru img {
 max-width: 222px;
    height: auto;
    margin: 0 auto;
}


.owl-carousel-kick {
position: relative;
width: 100%;

 }

.owl-carousel-kick{
 margin-bottom: 70px;
}

.owl-carousel-kick .item {
   min-height: 350px;
   padding: 20px 8px;
   box-shadow: 0 0 20px 0 rgba(110, 110, 104, 0.3);
   background-color: #fff !important;
   display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
    height: 425px;
 }

 .owl-carousel-kick .owl-item{
   min-height: 385px;
   padding: 20px;


 }

.owl-carousel-kick .item p{
  text-align: center;
font-family: Lato;
  font-size: 12px !important;
  line-height: 14px !important;
  padding: 0 20px;
}

.owl-carousel-kick {
position: relative;
width: 100%;

 }

.owl-carousel-assessments{
 margin-bottom: 70px;
}

.owl-carousel-assessments .item {
   min-height: 350px;
   padding: 20px 8px;
   box-shadow: 0 0 20px 0 rgba(110, 110, 104, 0.3);
   background-color: #fff !important;
   max-height: 427px;
    height: 427px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
 }

 .owl-carousel-assessments .owl-item{
   min-height: 385px;
   padding: 20px;


 }

.owl-carousel-assessments .item p{
  text-align: center;
font-family: Lato;
  font-size: 12px !important;
  line-height: 14px !important;
  padding: 0 20px;
}


 .container-carrusel {
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

.fixgray22 .tit-cat-podcast-int-box{
  color: #fff !important;
  padding-left: 15px;
}


.fixgray22 .title-podcast-int-box{
  color: #fff !important;
  padding-left: 15px;
  margin-bottom: 0px;
}

.fixgray22 .readmore-podcast-int{
  color: #ffb852 !important;
  padding-left: 15px;
  margin-bottom: 16px !important;
  display: block;
}

.container-managed-dos .izqparrafo, .container-managed-dos .dereparrafo {
  margin-bottom: 40px !important;
}

.container-apprefresh {
  height: 700px;
    padding-top: 0px !important;
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#166fc5+0,0f4c83+100 */
background: #166fc5; /* Old browsers */
background: -moz-linear-gradient(left,  #166fc5 0%, #0f4c83 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #166fc5 0%,#0f4c83 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #166fc5 0%,#0f4c83 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#166fc5', endColorstr='#0f4c83',GradientType=1 ); /* IE6-9 */

}

.container-apprefresh h2{
  color: #fff;
}

.container-apprefresh p{
  color: #fff !important;
}


.container-apprefresh2 {
  height: 700px;
    padding-top: 0px !important;
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#166fc5+0,0f4c83+100 */
background: #166fc5; /* Old browsers */
background: -moz-linear-gradient(left,  #166fc5 0%, #0f4c83 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #166fc5 0%,#0f4c83 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #166fc5 0%,#0f4c83 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#166fc5', endColorstr='#0f4c83',GradientType=1 ); /* IE6-9 */

}

.container-apprefresh2 h2{
  color: #fff;
}

.container-apprefresh2 p{
  color: #fff !important;
}

.podcastp3  {
  display: inline-block !important;
}

.bg_white_box_parrap.fixgray {
display: inline-block !important;
margin-bottom: 30px;
background-color: #f7f8fa !important;
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
    background-image: url('');
    background-size: cover;
    min-height: 755px;
    margin-top: 0px !important;
    width: 42% !important;
    position: absolute !important;
    right: 0px;
}

.podcastp11 {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/blog-int.jpg');
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
  margin-top: 35px;
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

  padding-right:100px;
  font-family: Lato;
  font-size: 20px;
  line-height: 28px;
  color: #fff;
  margin-bottom: 20px;
  padding-top: 100px;
}

.txt-white-box-blue span {
  color: #a4ca53 !important;
}

.btn_yello-box-blue {
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;

    padding: 15px 25px;
    border-radius: 0px;
    transition: color .2s ease-in-out, background-color .4s ease-in-out, border-color .4s ease-in-out, box-shadow .4s ease-in-out;
    background: #ffb952;
    color: #fff!important;
    display: inline-block

}

.img_box_podcast-int {
  position: relative;float: left;
   margin: 16px 30px 16px 16px;
   width: 40%;
   height: auto;
}

.tit-cat-podcast-int-box {
  color: #3d3d3b;
  font-size: 11px;
  font-weight: bold;
  font-family: Lato;
  margin-bottom: 64px;
  margin-top: 16px;
}

.title-podcast-int-box {
  font-size: 14px;
  margin-bottom: 15px;
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


.dereparrafo{

}

.bg_white_box_parrap {
  width: 100%;
  background-color: #fff;
}

.container-connected-dos {
    background-color: #f7f8fa;
    min-height: 900px;
    top: 50px;
    margin-top: 40px !important;

    }

.imggirlblue:hover {
  transition-duration: 0s;
}

  .container-connected-tres {
    position: relative;
    background-color: #f7f8fa;
  min-height: 255px;
 /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#166fc5+0,0f4c83+100 */
background: #166fc5; /* Old browsers */
background: -moz-linear-gradient(left,  #0f4c83 0%, #187bcd 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #0f4c83 0%,#187bcd 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #0f4c83 0%,#187bcd 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0f4c83', endColorstr='#187bcd',GradientType=1 ); /* IE6-9 */
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

.post-intro-wrapper h1.post-title{
  font-size: 50px !important;
}


.circ_white{
  position: relative;
  background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/citas_barra_top_icon.png');
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
    font-size: 14px !important;
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



.piwo-nav .menu-item .sub-menu li{
 width: initial !important;
}

.single-post-content {
  margin-top: -50px;
}

.parrafofix {
    left: 8.5vw;
    position: absolute;
    margin-top: -145px;
    color: #fff;
    font-family: Montserrat;
    font-size: 26px;
    font-weight: normal;
    max-width: 470px;
    line-height: 28px;
    z-index: 99;
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
  color: white;
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
.videofix1 iframe, .videofix1 img {
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
  color: #1752e4;
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
/* #WS-ScroLi .item-2{
  position: initial;
} */
#WS-ScroLi [class^="item"] .line, #WS-ScroLi [class^="item"] .line-animation {
  position: absolute;
}
#WS-ScroLi [class^="item"] .line-animation {
  z-index: 999;
}
#WS-ScroLi [class^="item"].reading {
  color: red;
  border-color: red;
}
#WS-ScroLi [class^="item"].reading .line, #WS-ScroLi [class^="item"].reading .line-animation {
  background: red;
}
#WS-ScroLi [class^="item"].current {
  border-width: 3px;
  color: green;
  border-color: green;
}
#WS-ScroLi [class^="item"].current a {}
body {

}
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
.item-1, .item-2,  .item-3, .item-4, .item-5 {
  margin-top: -5px;
}
.item-4 .line, .item-4 .line-animation {
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

#WS-ScroLi .item-3 .line, #WS-ScroLi .item-3 .line-animation{
  display: none !important;


}




/* termina CSS vertical position */

.container-managed {
  clear: both;
  float: none;
  left: 130px;
  display: block;
  position: relative;
  padding-right: 130px;
  padding-left: 30px;
  padding-top: 100px;
}
.izqparrafo {
  position: relative;
  float: left;
  width: 64%;
  padding-right: 3%;
}
.dereparrafo {
   margin-top: 32px;
  position: relative;
    float: left;
    width: 35%;
    display: flex;
    padding: 0px;
}


.container-managed-uno {}

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

.container-managed-dos {
}


.container-connected-cuatro {
    background-color: #f7f8fa;
    min-height: 755px;
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
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0f4c83', endColorstr='#187bcd', GradientType=1);
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

#assessments_kickstarts .container-connected-dos {
  padding-top: 40px !important;
  min-height: 787px;

}


#assessments_kickstarts .container-managed-uno {
  padding-top: 85px !important;

}


/* ############# SECCIONES DE PAGINA #############*/

#anexinet_advisory {
  min-height: 800px;
}
#enterprise_architecture{

}
#assessments_kickstarts {
  min-height: 1160px;
}
#data_analytics {
  min-height: 2000px;
}

.full-width{
  width: 100% !important;
}


/********* NETWORKING *********/

.clear-both{
  clear: both;
}

.container-managed-blue{
  font-family: Lato;
  font-size: 16px;
  line-height: 26px;
  color: #fff;
}

.f-white{
  color: #fff !important;
}

.padding-tb-30px{
  padding-top: 30px !important;
  padding-bottom: 30px !important;
}

.padding-tb-60px{
  padding-top: 60px !important;
}

.bg-transparet{
  background: transparent !important;
}


.bg-blue{
  background: #187bcd !important;
  color: #fff !important;
}

.bg-blue h2{
  color: #fff !important;
}

.strong-grey{
  font-weight: bold;
  color: #6e6e68;
}

.container-connected-cuatro{
  overflow-y: auto;
}

.list-blue {
  list-style: none; /* Remove default bullets */
}

.list-blue li{
  list-style: none !important;
}

.list-blue li::before {
  content: "\2022";
  color: #187bcd !important;
  font-weight: bold;
  display: inline-block;
  width: 1em;
  margin-left: -1em;
}

.bg-gray{
  background: #f6f6fa;
}

.networking-tab{
  margin-top: 20px;
}

.tab-link{
  width: 100%;
  padding: 15px 12px;
  background:#187bcd;
  color: #fff;
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;
  display: block;
  position: relative;
}

.tab-link:hover, .tab-link:focus, .tab-link:active{
  color: #fff;
}

.opened::after{
  content: url('https://www.anexinet.com/wp-content/uploads/2020/07/up-arrow-white.png');
  position: absolute;
  top: 16px;
  right: 11px;
  width: 20px;
  height: auto;
  -webkit-transition-duration: 0.8s;
  -moz-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  transition-duration: 0.8s;
}

.closed::after{
  content: url('https://www.anexinet.com/wp-content/uploads/2020/07/up-arrow-white.png');
  font-family: "FontAwesome" !important;
  position: absolute;
  top: 16px;
  right: 11px;
  width: 20px;
  height: auto;
  transform: rotate(180deg);
  -webkit-transition-duration: 0.8s;
  -moz-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  transition-duration: 0.8s;
}



.networking-tab-info{
  margin-top: 20px;
}



@media only screen and (max-width: 1450px) {
#WS-ScroLi {
  left: 14% !important;
}

.parrafofix {


}

}


@media only screen and (max-width: 1390px) {
#WS-ScroLi {
  left: 14% !important;
}



}


@media only screen and (max-width: 1200px) {




   #anexinet_advisory {
    min-height: 900px;
  }

  #enterprise_architecture{
    min-height: 865px;
  }

  #assessments_kickstarts {
    min-height: 1201px;
  }


.img_box_podcast-int {
  margin: 15px;

}

.podcastp11 {
  min-height: 800px;
}

.container-apprefresh {
  height: 770px;
}

.container-apprefresh2 {
  height: 770px;
}

.podcastp1, .container-connected-cuatro {
height: 870px;
}


#assessments_kickstarts .container-connected-dos {
  min-height: 900px;
}


#assessments_kickstarts .container-connected-dos .tit-cat-podcast-int-box {
      margin-bottom: 7px;
}



.container-apprefresh {
height: 770px;
}

.container-apprefresh2 {
height: 700px;
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

.tit-cat-podcast-int-box {
  margin-bottom: 40px;
}


.parrafofix {
    left:9vw;
    margin-top: -135px;
  }

.box_bluex h2{
padding-top: 17px;
}

.btn_read_bottom {
    margin-left: 75%;
}



}



@media only screen and (max-width: 1024px) {
  .parrafofix {
    left:2vw;
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

  #assessments_kickstarts {
    min-height: 1300px;
  }

#anexinet_advisory {
    min-height: 1150px;
  }

#enterprise_architecture{
    min-height: 970px;
  }




#anexinet_advisory .container-connected-dos {
    min-height: 1240px;
}
.container-connected-tres {
  padding-right: 30px;
}

.imggirlblue {
  width: 50%
}

.container {

  }


.container-connected-cuatro .izqparrafo{
  padding-right: 0px;
}

.container-apprefresh p {

    line-height: 22px !important;
}
.container-apprefresh2 p {
  line-height: 22px !important;
}

.container-apprefresh2, .podcastp12 {
    height: 920px;
}


#assessments_kickstarts .container-connected-dos {
    min-height: 1145px;
}

.podcastp1, .container-connected-cuatro {
    height: auto;
}

.txt-white-box-blue {
    font-size: 16px;
    line-height: 24px
  }

  .imggirlblue {
    width: 34%;
    padding-bottom: 13%;
  }


.tit-cat-podcast-int-box{
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



@media screen and (max-width:900px){
  .dereparrafo{
    width: 100%;
    margin-top: 40px;
    align-items: center;

  }
}

@media only screen and (max-width: 850px) {

  .parrafofix {
    left:4vw;
  }

  .container-connected-cuatro{
    overflow: none !important;
  }

  .podcastp1{
    min-height: auto !important;
  }

}


@media only screen and (max-width: 769px) {


#data_analytics {
    min-height: 1400px;
}

#assessments_kickstarts {
    min-height: 1600px;
  }

#anexinet_advisory {
    min-height: 1150px;
  }

#enterprise_architecture{
    min-height: 1250px;
  }



.txt-white-box-blue {
  padding-right: 100px;
}

.box_white_cita_advisory {
  margin-bottom: 40px;
}

.btn-kick {
  padding-top: 30px;
  margin-top: 0px;
}

.container-apprefresh {

    left: 160px;
  }

  .container-apprefresh2 {

    left: 160px;
  }

.podcastp1, .podcastp11 {

    width: 100% !important;
    position: relative !important;
  }

  .podcastp11, .podcastp12 {
    left: -30px;
  }



.img_box_podcast-int {
  width: auto !important;
}

.podcastp12 {
   width: 100% !important;
    position: relative !important;
}

.container-apprefresh .izqparrafo{
  padding-right: 10% !important;

}

.container-apprefresh2 .izqparrafo{
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
    padding-right: 20px;
  }

#enterprise_architecture .container-managed-dos .izqparrafo {

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

@media only screen and (max-width: 600px) {




#data_analytics {
    min-height: 1450px;
  }

#anexinet_advisory {
    min-height: 1100px;
  }

#enterprise_architecture{
    min-height: 1300px;
    height: 850px;
  }




.txt-white-box-blue {
  padding-right: 50px;
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

.podcastp11, .podcastp12 {
    left: 0px;}



.txt-white-box-blue {

    line-height: 20px;
  }

.imggirlblue {
    position: relative;
    float: left;
    margin-right: 15px;
    margin-top: 62px;
    margin-bottom: 0%;
  }


  .container-managed {
left: 0px;
    padding-right: 0px;
    padding-top: 50px;
  }
  #WS-ScroLi {
    display: none;
  }



  .podcastp11, .podcastp12, .podcastp1 {
    left: -20px

  }

  .podcastp12, .podcastp11, .podcastp1 {
    width: 105% !important;
  }

  .btn_read_bottom {

    margin-left: 69%;
  }
  .img-1-box-blue {

  }
  .box_bluex h2 {
    padding-top: 15px;
  }
  .box_bluex h2, .social-txt-listening {
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



#anexinet_advisory {
    min-height: 1150px;
  }

#enterprise_architecture{
    min-height: 1450px;
  }

#data_analytics {
    min-height: 1550px;
  }

#assessments_kickstarts {
    min-height: 1600px;
  }

#anexinet_advisory .container-connected-dos {
  min-height: 1380px;
}

.frasep {
  padding-right: 0px
}

#data_analytics .container-managed-uno h2{
  padding-top: 35px;

}

#kickstarts .container-managed{
  padding-left: 0px !important;
}

#kickstarts h2 {
  padding-left: 20px;
}



#assessments .container-managed{
  padding-left: 0px !important;
}

#assessments h2 {
  padding-left: 20px;
}

.container-apprefresh2 .izqparrafo {
    padding-right: 5% !important;
}

.container-apprefresh2 .izqparrafo {

}

#assessments_kickstarts .container-connected-dos {
    min-height: 1300px;
}

.btn-kick {
  padding-top: 40px;
  margin-top:0px;
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

  .parrafofix {
    left:6vw;
  }


}

@media only screen and (max-width: 392px) {
#anexinet_advisory .container-connected-dos {
    min-height: 1430px;
}

.readmore-blue {

}
#assessments_kickstarts .container-connected-dos {
    min-height: 1317px;
}

.podcastp1, .container-connected-cuatro {
    height: auto;
    }


}

@media only screen and (max-width: 376px) {



#anexinet_advisory {
    min-height: 1360px;
  }
#enterprise_architecture{
    min-height: 1400px;
}
  #data_analytics {
    min-height: 1500px;
  }





#assessments_kickstarts .container-connected-dos {
    min-height: 1475px;
}



  .podcastp12, .podcastp11, .podcastp1 {
    width: 113% !important;
}

.txt-white-box-blue {

    font-size: 20px;
    line-height: 27px !important;
    padding-top: 68px;}

.txt-white-box-blue span {
  color: #a4ca53 !important;
}

#anexinet_advisory .container-connected-dos {
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
    left:6vw;
  }
}


@media only screen and (max-width: 320px) {
#anexinet_advisory {
    min-height: 1900px;
}

#data_analytics {
    min-height: 1650px;
  }

#anexinet_advisory .container-connected-dos {
    min-height: 1698px;
  }

.container-apprefresh2, .podcastp12 {
    height: 950px;
}
  .container-apprefresh {
    height: 890px;}

#assessments_kickstarts .container-connected-dos {
    min-height: 1694px;}

}

.f-white{
  color: #fff !important;
}
.item-2 .icon-text .line{
  height: 0;
    width: 0;
    left: 0;
    background: 0;
    top: 0;
}
.item-2 .icon-text .line-animation{
  height: 0;
    width: 0;
    left: 0;
     background: white;;
    top: 0;
}

</style>

<?php echo the_content(); ?>





<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/ws-scroli.js"></script>
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/readmore.js"></script>
<!--<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/owl.carousel.min.js"></script>-->

    <link rel="stylesheet" href="https://www.anexinet.com/wp-content/themes/piwo-child/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.anexinet.com/wp-content/themes/piwo-child/public/css/owl.theme.default.min.css">



<script>

$(window).scroll(function() {


if ($(window).width() < 600) {
      var hT = $('.anxnt-main-form').offset().top-1200;
}else {

    if ($(window).height() < 700) {
      var hT = $('.anxnt-main-form').offset().top-600;
    }else {
      var hT = $('.anxnt-main-form').offset().top-370;
    }
}



  var hH = $('.anxnt-main-form').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();

   if (wS > (hT+hH-wH)){
      $('#WS-ScroLi').css('opacity', '0');
   }else {
      $('#WS-ScroLi').css('opacity', '1');
   }



});


$( function() {
        $('#WS-SL--content').WS_ScroLi({
            validEnd : {
                status  : false
            },

            sections : [
                [ '#network_strategy_design', '<a href="#network_strategy_design">Network<br> Strategy &<br> Design</a>' ],
                [ '#network_modernization', '<a href="#network_modernization"><br>Networking </br> Assessments</a>' ],
                [ '#networking_solutions-box', '<a href="#networking_solutions-box">Networking Solutions</a>' ]

            ],
            position : {
                x : ['left','auto'],
                y : ['top', 110]
            },
            icon : {
                size        : 15,
                borderWidth : 2,
                borderRadius: 100,
                color       : '#187bcd',
                colorPast   : '#187bcd',
                colorOff    : 'grey'
            },
            line : {
                height      : 110,
                width       : 2,
                color       : '#187bcd',
                colorPast   : '#187bcd',
                colorOff    : 'grey',
            },
        });



  } );
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

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

<script type="text/javascript">
  $m = jQuery;
  $m(document).ready(function(){
    $m(".networking-tab-info").css({'display' : 'none'});
    $m(".tab-link").click(function(e){
      e.preventDefault();
      var tab    = $m(this);
      var abuelo = $m(this).parent().parent();
      if($m(tab).hasClass("opened")){
        $m(tab).removeClass('opened');
        $m(tab).addClass('closed');
        $m(abuelo).children('.networking-tab-info').css({'display' : 'none'});
      }
      else if($m(tab).hasClass("closed")){
        $m(tab).removeClass('closed');
        $m(tab).addClass('opened');
        $m(abuelo).children('.networking-tab-info').css({'display' : 'block'});
      }
    });

    $m('.bg-blue').find('p').addClass('f-white');
  });
</script>

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?>
<!-- Anexinet Main Form End -->

	<?php if(!$full_pages == true) {echo '</div>';}?>

</div>

<?php endwhile; ?>

<?php get_footer();
