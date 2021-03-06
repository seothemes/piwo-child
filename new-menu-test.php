 <?php
/**
 *
 * Template Name: New menu test
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      https://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */
?>
<?php get_header("newmenu");

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

.piwo-nav .menu-item .sub-menu li{
 width: initial !important;
}

.single-post-content {
  margin-top: -50px;
}
.parrafofix {
  padding-left: 5.4%;
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
  top: 125px !important;
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
.item-1, .item-2, .item-3, .item-4, .item-5 {
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



#WS-ScroLi .item-4 .line{
  display: none !important;


}



/* termina CSS vertical position */

.container-managed {
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
  width: 67%;
  padding-right: 3%;
}
.dereparrafo {
  position: relative;
    float: left;
    width: 30%;
    background-color: #f3f3f3;
    display: flex;
    padding: 12px;
}

@media screen and (max-width:900px){
  .dereparrafo{
    width: 100%;
    margin-top: 40px;
    align-items: center;
    display-flex;
  }
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
#managed_services {
  min-height: 826px;
}
#managed_applications {
  min-height: 860px;
  height: 860px;
}
#managed_data_analytics {
  min-height: 1160px;
}
#managed_infraestructure {
  min-height: 1060px;
}
.container-managed-dos {
  background-color: #f7f8fa;
  height: 100%;
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



@media only screen and (max-width: 1450px) {
#WS-ScroLi {
  left: 14% !important;
}

.parrafofix {
  padding-left: 5.9%;

}

}


@media only screen and (max-width: 1390px) {
#WS-ScroLi {
  left: 14% !important;
}



}


@media only screen and (max-width: 1200px) {

  .parrafofix {
    padding-left: 6.4%
  }

.box_bluex h2{
padding-top: 17px;
}

.btn_read_bottom {
    margin-left: 75%;
    }

    #managed_services {
    min-height: 1070px;
  }

  #managed_applications {
    min-height: 865px;
  }

  #managed_data_analytics {
    min-height: 1201px;
  }

}



@media only screen and (max-width: 1024px) {
  .parrafofix {
    padding-left: 4.2%;
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

  #managed_infraestructure {
    min-height: 1100px;
}

  #managed_data_analytics {
    min-height: 1300px;
  }

#managed_services {
    min-height: 1150px;
  }

#managed_applications {
    min-height: 970px;
  }

.container {
    max-width: 823px;
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

@media only screen and (max-width: 850px) { 

  .parrafofix {
    padding-left: 4.9%;
  }

}


@media only screen and (max-width: 769px) { 

.parrafofix {
    padding-left: 47px;
  }

    #managed_infraestructure {
    min-height: 1400px;
}

  #managed_data_analytics {
    min-height: 1600px;
  }

#managed_services {
    min-height: 1350px;
  }

#managed_applications {
    min-height: 1250px;
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


  .izqparrafo {
    position: relative;
    float: none;
    width: 100%;
    padding-right: 3%;
  }


}

@media only screen and (max-width: 600px) {
  .container-managed {
left: 20px;
    padding-right: 50px;
    padding-top: 50px;
  }


  #WS-ScroLi {
    display: none;
  }


  #managed_infraestructure {
    min-height: 1450px;
  }

    #managed_services {
    min-height: 1450px;
  }
  #managed_applications {
    min-height: 1300px;
    height: 850px;
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
  .parrafofix {
   
  }
  .paddi {
    padding: 20px;
  }
  .healthcare-eleven {
    padding: 40px;
  }
}
@media only screen and (max-width: 450px) {

      .box_bluex p {
    font-size: 14px !important;
    line-height: 18px !important;
    padding-right: 36px !important;
  }

  #managed_services {
    min-height: 1650px;
  }
  #managed_applications {
    min-height: 1450px;
  }
  #managed_infraestructure {
    min-height: 1550px;
  }
  .btn_read_bottom {
    margin-left: 55%;
  }
  #managed_data_analytics {
    min-height: 1600px;
  }

  .post-intro-wrapper h1.post-title {
    
    width: 320px;
  }
}
@media only screen and (max-width: 376px) {


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
  #managed_services {
    min-height: 1600px;
  }
  #managed_applications {
    min-height: 1400px;
  }
  #managed_infraestructure {
    min-height: 1500px;
  }
  .parrafofix {
    padding-left: 48px;
  }
}


@media only screen and (max-width: 320px) {
    #managed_services {
    min-height: 1800px;
  }

  #managed_infraestructure {
    min-height: 1550px;
  }
}

</style>

<?php echo the_content(); ?>



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

<!-- Anexinet Main Form Begin -->
<?php  include('form.php'); ?> 
<!-- Anexinet Main Form End -->
    
	<?php if(!$full_pages == true) {echo '</div>';}?>

</div>

<?php endwhile; ?>

<?php get_footer();
