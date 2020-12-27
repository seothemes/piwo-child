<?php
/**
 *
 * Template Name: Data Platform & Analytics Services
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
<button onclick="topFunction()" id="myBtn" title="Go to top"><img
        src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top" /></button>
<!-- / back to top -->

<style>
/* INICIA CSS Data Platform & Analytics Services */


.post-intro-wrapper {

    padding-top: 220px !important;
}

.circ_white {
    position: relative;
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/icon_top_centered.png');
    background-repeat: no-repeat;
    background-position: center top;
    background-size: initial;
    height: 58px;
    width: 100%;
    margin-top: -32px;
}

.bg_white_box_shadow {
    background-color: #fff;
    box-shadow: 0 0 6px 0 #c4c4c4;
    padding: 0px 30px 30px 30px;
    border-radius: 5px;
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


/* TERMINAN CSS Data Platform & Analytics Services */



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

.ul-style-one {
    list-style: none;
    font-family: Lato;
    font-size: 16px;
    line-height: 26px;
    color: white;
}

.ul-style {
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
    color: #187BCD;
    display: inline-block;
    width: 15px;
    margin-left: 20px;
    margin-right:8px;
}
.ul-style-be {
    display:flex;
}
.blue-number::before {
    content: "\2022";
    color: #187BCD;
    display: inline-block;
    width: 15px;
    margin-left: 20px;
    margin-right:8px;
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

.link-blue-style {
    color: #187bcd;
    font-style: italic;
    font-family: Lato;
    font-size: 14px;
    /* line-height: 12px; */
}

.link-blue {
    color: #187bcd;
}

.link-white {
    color: white;
}
.izqparrafo p{
   color: #6e6e68;
}
.link-white:hover {
    color: #e0dfdf;
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
.item-5,
.item-6 {
    margin-top: -5px;
}

.item-6 .line,
.item-6 .line-animation {
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

#WS-ScroLi .item-5 .line {
    display: none !important;


}


/* termina CSS vertical position */

.container-managed {
    left: 130px;
    display: block;
    position: relative;
    padding-right: 130px;
    padding-left: 30px;
    padding-top: 90px;
    float: none;
    clear: both;
}

.container-managed-image {
    left: 130px;
    display: flex;
    position: relative;
    padding-right: 130px;
    padding-left: 30px;
    /* padding-top: 90px; */
    float: none;
    clear: both;
}

.container-managed-image-two {
    left: 0px;
    /* display: flex; */
    padding-right: 0px;
    padding-left: 0px;
    float: none;
    clear: both;
}

.container-managed-image-three {
    right: 30px;
    width:350px;
    /* display: flex; */
    padding-right: 148px;
    padding-left: 0px;
    float: none;
    clear: both;
}

.izqparrafo {
    position: relative;
    float: left;
    width: 64%;
    padding-right: 3%;
}

.izqparrafo-special {
    position: relative;
    float: left;
    width: 64%;
    padding-right: 3%;
    padding-top: 60px;
}

.dereparrafo {
    margin-top: 32px;
    position: relative;
    float: left;
    width: 35%;
    display: flex;
    padding: 0px;
}

.dereparrafo-special {
    margin-top: 32px;
    position: relative;
    float: left;
    width: 35%;
    display: flex;
    padding: 0px;
}

.container-color {
    background-color: white;
}

.container-color-two {
    background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
    height: 800px;
}

.izqparrafo-box {
    float: left;
    padding-right: 0%;
    margin-top: 15px;
    margin-bottom: 15px;
}

.dereparrafo-box {
    margin-top: 15px;
    margin-bottom: 15px;
    float: left;
    width: 52%;
    display: block;
    padding-left: 26px;
}

.dereparrafo-image {
    margin-bottom: 15px;
    float: left;
    width: 52%;
    display: block;
    padding-left: 95px;
}

.container-managed-uno-caja1 {
    height: 800px;
}

.container-managed-uno-caja#cloud_adoption {
        padding-right: 0px !important
}



.container-managed-uno-caja2 {
    height: 610px;
    background-color: white;
    padding-top: 50px;
}

.container-managed-uno-caja {
    height: 740px;
    background-color: #f7f8fa;
}

.container-managed-dos-caja {
    background-color: #f7f8fa;
}

.container-managed-dos-caja-color {
    background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
}
.style-h2 {
    font-size: 30px;
    color: white;
}

.h2-font {
    font-size: 30px;
}

.container-managed-parrafo {
    font-family: Lato;
    font-size: 16px;
    line-height: 26px;
    color: #6e6e68;
}

.container-managed-parrafo-qry {
    font-family: Lato;
    font-size: 16px;
    line-height: 26px;
    color: #6e6e68;
    margin-bottom: 20px;
    display: block;
}

.container-parrafo-tam {
    width: 260px;
    padding-left: 40px;
}

.container-managed-parrafo-color {
    font-family: Lato;
    font-size: 16px;
    line-height: 26px;
    color: white !important;
}


.container-managed-parrafo-color-tam {
    padding-top: 50px;
}

.container-managed-parrafo-color-tam-1 {
    padding-top: 440px;
}

.container-managed-parrafo-color-tam-2 {
    padding-bottom: 4px;
}

.container-managed-box-p {
    font-family: Lato;
    font-size: 11px;
    line-height: 17px;
    color: #3d3d3b;
    margin-bottom: 27px;

}

.container-managed-box-p2 {
    font-family: Lato;
    font-size: 13px;
    line-height: 17px;
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

.container-managed-dos-caja1 {
    background-color: #f7f8fa;
    height: 620px;
}
.experience-analytics {
    background-color: #f7f8fa;
    height: 1000px;
}
.experience-analytics .link-blue {
    margin-left:48px;
}
 .link-blue img {
    max-width:20px !important;
}


.container-managed-dos-caja3 {
    background-color: white;
    height: 1000px;
    padding-top: 90px;
}

.container-managed-dos-caja4 {
    background-color: white;
    height: 600px;
    padding-top: 50px;
}

.container-managed-dos-caja2 {
    background-color: #f7f8fa;
    height: 990px;
}

.imagen-parrafo {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/group-2.jpg');
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.imagen-parrafo-dos {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/untitled.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    width: 49%; 
    height: 740px;
}

.imagen-parrafo-three {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/group-copy.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}



.imagen-parrafo p {
    color: white;
    font-family: Lato;
    font-size: 18px;
    font-weight: bold;
    text-align: inherit;
    padding-left: 20px;
    padding-top: 400px;
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



/* ############# SECCIONES DE PAGINA #############*/

#data_platform_and_analytics_services {
    min-height: 726px;
}

#data_management {
    min-height: 600px;
}

#cloud_adoption {
    min-height: 450px;
}

#data_discovery {
    min-height: 800px;
}

#advanced_AnalyticsAI {
    min-height: 990px;
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

    .container-managed-dos-caja1 {
        height: 680px;
    }
    .experience-analytics {
      height: 1224px;
    }


    #data_platform_and_analytics_services {
        min-height: 970px;
    }

    #data_management {
        min-height: 665px;
    }

    #cloud_adoption {
        min-height: 640px;
    }


    #data_discovery {
        min-height: 750px;
    }





.dereparrafo-box {
padding-left: 16px; }


    .container-managed-dos-caja2 {
        height: 889px;
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

.izqparrafo-box {
    width: 47%;
}

.dereparrafo-box {
        padding-left: 5%;
}

.container-managed-dos-caja4 {
    height: 650px;
}


.container-managed-box-p {

    margin-bottom: 13px;

}

.container-managed-box-p2 {

    margin-bottom: 10px;

}




}


@media only screen and (max-width: 1024px) {
   
    #data_platform_and_analytics_services{
        min-height:900px;
    }
    #data_management {
        min-height: 600px;
    }
    #cloud_adoption {
        min-height: 670px;
    }
    #data_discovery {
        min-height: 650px;
    }
    .container-managed-dos-caja1 {
        height: 650px;
    }
    .experience-analytics {
        height: 1234px;
    }

    .container-managed-dos-caja4{
        height:610px;
    }
   
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
.experience-analytics {
        height: 1360px;
    }
}

@media only screen and (max-width: 991px) {
    #data_platform_and_analytics_services {
        min-height: 950px;
    }

    #data_management {
        min-height: 400px;
        height: 500px;
    }

    #cloud_adoption {
        min-height: 720px;
    }

    #data_discovery {
        min-height: 600px;
    }

    .container-managed-dos-caja2 {
        height: 1030px;
    }

    .container-managed-dos-caja3{
        padding-top: 60px;
    }

    .container-managed-dos-caja4{
        height:680px;
    }

    .font-14{
        font-size:14px !important;
    }
   

    .container-cards-one {
        max-width: 823px;
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

    .imagen-parrafo-dos {

    width: 56%;
}
    .nav {
        margin-left: 3%;
        margin-right: 5%;
    }
    
    .dereparrafo-image {
        margin-bottom: 15px;
        float: left;
        width: 52%;
        display: block;
        padding-left: 65px;
    }
    .imagen-parrafo {
        background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/group-2.jpg');
        height: 640px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    .imagen-parrafo p {
        color: white;
        font-family: Lato;
        font-size: 18px;
        font-weight: bold;
        text-align: inherit;
        padding-left: 20px;
        padding-top: 490px;
    }
}

@media screen and (max-width:900px) {
    .dereparrafo {
        width: 100%;
        margin-top: 40px;
        align-items: center;
        padding-right: 30px;
        margin-bottom: 40px;

    }


    .container-managed-dos-caja2 {
        height: 1430px;
    }


}

@media only screen and (max-width: 850px) {

    .parrafofix {
        left: 5vw;
    }

}

@media only screen and (max-width: 769px) {

        .imagen-parrafo-dos {

    width: 88%;
}

.container-managed-parrafo-qry {

    font-size: 14px;
    line-height: 21px;
}

    #data_discovery {
        min-height: 950px;
    }

    #cloud_adoption {
        min-height: 739px;
    }

    #data_platform_and_analytics_services {
        min-height: 1000px;
    }

    #data_management {
        min-height: 850px;
    }

    .container-managed-uno-caja {
        height: 900px;
        background-color: #f7f8fa;
    }

    .container-managed-parrafo-color-tam-1 {
        padding-top: 640px;
    }

    .container-managed-dos-caja1 {
        height: 1900px;
        margin-top:40px;
    }

    .dereparrafo-special {
        margin-top: 45px;
        position: relative;
        /* float: left; */
        width: 85%;
        display: flex;
        padding: 0px;
        padding-left: 80px;
    }

    .dereparrafo-image {
        margin-bottom: 15px;
        float: left;
        width: 82%;
        display: block;
        padding-left: 5px;
    }

    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 700px;
    }

    .parrafofix {
        left: 8vw;
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

    .container-managed-dos-caja3 {
        background-color: white;
        height: 1250px;
        padding-top: 90px;
    }

    .container-managed-dos-caja4 {
        height: 830px;
    }

    .izqparrafo {
        position: relative;
        float: none;
        width: 100%;
        padding-right: 3%;
    }


}

@media only screen and (max-width: 600px) {
    .container-managed-image {
        left: 0px !important;
        display: block;
        position: relative;
        padding-right: 0px;
        padding-left: 30px;
        /* padding-top: 90px; */
        float: none;
        clear: both;
    }

    .izqparrafo-box {
        width: auto;
    }

    #data_platform_and_analytics_services {
        min-height: 970px;
    }

    #data_management {
        min-height: 700px;
        height: 800px;
    }

    #data_discovery {
        min-height: 900px;
    }

   .container-managed-uno-caja2 {
        height: 1000px;
        background-color: white;
        padding-top: 50px;
    }

    .container-managed-parrafo-color-tam-1 {
        padding-top: 225px;
    }

    .izqparrafo-special {
        position: relative;
        float: left;
        width: 100%;
        padding-right: 3%;
        padding-top: 60px;
        padding-bottom: 20px;
    }

    .container-managed-parrafo-qry {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 500px;
    }

    .container-managed-dos-caja-color {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 890px;
    }

    .container-managed-parrafo-qry-c {
            font-family: Lato;
            font-size: 16px;
            line-height: 26px;
            color: white;
            width: 500px;
    }

    .imagen-parrafo-three {
        background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/group-copy.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        visibility: hidden;
        position: relative;
    }

    .container-managed-dos-caja3 {
        background-color: white;
        height: 930px;
        padding-top: 90px;
    }
    .izqparrafo {
        position: relative;
        float: none;
        width: 100%;
        padding-right: 3%;
    }
    .container-managed-dos-caja1 {

        height: 1985px;
    }

    .dereparrafo-image {
        /* margin-bottom: 15px;
        float: left; */
        /* width: 102%; */
        display: block;
        /* padding-left: 100px; */
    }

    .imagen-parrafo p {
        color: white;
        font-family: Lato;
        font-size: 18px;
        font-weight: bold;
        text-align: inherit;
        padding-left: 40px;
        padding-top: 290px;
        width: 360px;
    }

    .container-managed-uno-caja {
        height: 1200px;
        background-color: #f7f8fa;
    }

    .imagen-parrafo {
        background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/group-2.jpg');
        height: 420px;
        width: 650px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        left: -50px;
        margin-top:10px;
    }

    .container-managed-dos-caja4 {
        background-color: white;
        height: 350px;
    }

    .imagen-parrafo-dos {
        background-image: url('https://www.anexinet.com/wp-content/uploads/2020/06/untitled.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        left: -50px;
        height: 530px !important;
        width: 115%;
    }
    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 930px;
    }

    .container-managed {
        left: 0px;
        padding-right: 50px;
        padding-top: 50px;

    }

    .dereparrafo-special {
        margin-top: 45px;
        position: relative;
        /* float: left; */
        width: 105%;
        display: flex;
        padding: 0px;
        padding-left: 0px;
        padding-bottom: 30px;
    }

    #WS-ScroLi {
        display: none;
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

@media only screen and (max-width: 520px) {
    #data_management {
        min-height: 490px;
    }

    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1010px;
    }
    .container-managed-parrafo-qry {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 475px;
    }

    .container-managed-parrafo-qry-c {
            font-family: Lato;
            font-size: 16px;
            line-height: 26px;
            color: white;
            width: 475px;
    }

    .container-managed-parrafo {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 475px;
    }

    .container-managed-uno-caja {
        height: 1310px;
        background-color: #f7f8fa;
    }

    .container-managed-dos-caja4 {
        background-color: white;
        height: 805px;
    }

}

@media only screen and (max-width: 470px) {

    .container-managed-dos-caja1 {
        height: 2156px;
    }

    .container-managed-dos-caja2 {
        height: 1546px;
    }

    #data_platform_and_analytics_services {
        min-height: 450px;
    }


    #data_management {
        min-height: 450px;
    }


    #data_discovery {
        min-height: 1005px;
    }

    #cloud_adoption {
        min-height: 1070px;
    }

    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1050px;
    }

    .container-managed-parrafo-color {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 420px;
    }
    .container-managed-parrafo {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 420px;
    }
    .container-managed-parrafo-qry {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 420px;
    }

    .container-managed-parrafo-qry-c {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 420px;
    }

    .container-managed-dos-caja4 {
        height: 865px;
    }

    .container-managed-uno-caja2 {
        height: 670px;
        background-color: white;
    }

    .container-managed-dos-caja-color {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 955px;
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

@media only screen and (max-width: 420px) {
    .container-managed-parrafo-color {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 370px;
    }
    .container-managed-parrafo {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 370px;
    }
    .container-managed-parrafo-qry {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 370px;
    }

    .container-managed-parrafo-qry-c {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 370px;
    }
    .container-managed-uno-caja {
        height: 1410px;
        background-color: #f7f8fa;
    }
    .container-managed-dos-caja1 {
        height: 880px;
    }

    .container-managed-dos-caja2 {
        height: 1700px;
    }

    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1100px;
    }

    .container-managed-dos-caja4 {
        background-color: white;
        height: 910px;
    }

    .container-managed-dos-caja-color {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1005px;
    }

    #data_management {
        min-height: 815px;
    }


    #data_discovery {
        min-height: 1000px;
    }

    #cloud_adoption {
        min-height: 1110px;
    }
}

@media only screen and (max-width: 391px) {
    .container-managed-parrafo-color {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 345px;
    }
    .container-managed-parrafo {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 345px;
    }
    .container-managed-parrafo-qry {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 345px;
    }

    .container-managed-parrafo-qry-c {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 345px;
    }
    .container-managed-dos-caja2 {
        height: 1840px;
    }

    .container-managed-dos-caja1 {
        height: 2622px;
    }
    .container-managed-dos-caja4 {
        background-color: white;
        height: 960px;
    }
    .container-managed-dos-caja-color {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1025px;
    }

    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1150px;
    }

    #data_management {
        min-height: 830px;
    }


}

@media only screen and (max-width: 376px) {
    .container-managed-parrafo-color {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 330px;
    }
    .container-managed-parrafo {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 330px;
    }
    .container-managed-parrafo-qry {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 330px;
    }

    .container-managed-parrafo-qry-c {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 330px;
    }

    .container-managed-dos-caja1 {
        height: 2655px;
    }

    .dereparrafo-special {
        margin-top: 45px;
        position: relative;
        /* float: left; */
        width: 100%;
        display: flex;
        padding: 0px;
        padding-left: 0px;
        padding-bottom: 30px;
    }

    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1175px;
    }

    .container-managed-uno-caja {
        height: 1490px;
        background-color: #f7f8fa;
    }

    .container-managed-dos-caja-color {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1090px;
    }

    #data_platform_and_analytics_services {
        min-height: 1000px;
    }

    #data_management {
        min-height: 980px;
    }

    #data_discovery {
        min-height: 1000px;
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
    .container-managed-parrafo-color {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 275px;
    }
    .container-managed-parrafo {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 275px;
    }
    .container-managed-parrafo-qry {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: #6e6e68;
        width: 275px;
    }

    .container-managed-parrafo-qry-c {
        font-family: Lato;
        font-size: 16px;
        line-height: 26px;
        color: white;
        width: 275px;
    }
    #data_management {
        min-height: 900px;
    }

    .container-managed-dos-caja2 {
        height: 2171px;
    }

    .container-managed-dos-caja1 {
        height: 980px;
    }
    .container-color-two {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1225px;
    }

    .container-managed-dos-caja-color {
        background: linear-gradient(135deg, rgba(15, 76, 131, 1) 0%, rgba(24, 123, 205, 1) 35%);
        height: 1200px;
    }

    .readmore{
        width:150px;
    }
    .readmore a:hover{
        color:white;
    }
    .container-managed-uno-caja {
        height: 1590px;
        background-color: #e6e6e6;
    }

    .container-managed-dos-caja4 {
        height: 1070px;
    }
    .img-container{
        height:100px;
        width: 100px;
        margin-top:20px;
    }
    #data_platform_and_analytics_services {
        min-height: 800px;
    }

    #data_discovery {
        min-height: 1000px;
    }
}

</style>

<?php echo the_content(); ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/ws-scroli.js"></script>
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/readmore.js"></script>


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

$('#readmore').readmore({
    moreLink: '<a class="knowmore btn_read_bottom" href="#">KNOW MORE </a>',
    lessLink: '<a class="btn_cerrarz btn_read_bottom" href="#">SHOW LESS </a>',
    speed: 1000,
    collapsedHeight: 278,
    afterToggle: function(trigger, element, expanded) {

        if (!expanded) { // The "Close" link was clicked
            $('html, body').animate({
                scrollTop: element.offset().top - 100
            }, {
                duration: 100
            });
            //alert("si22");
            $('.clearsocial').fadeIn(0);

            $('.img-1-box-blue').attr('src',
                'https://www.anexinet.com/wp-content/uploads/2020/05/box-blue-fix2.png');
        } else {
            //  alert("si11");

            $('.clearsocial').hide(0);
            $('.img-1-box-blue').attr('src',
                'https://www.anexinet.com/wp-content/uploads/2020/05/largeblue.png');
        }
    }
});

$(function() {

    $('.knowmore').click(function() {
        // your code here
        $('.clearsocial').hide(0);
        $('.img-1-box-blue').attr('src',
            'https://www.anexinet.com/wp-content/uploads/2020/05/largeblue.png');
    });



    $('#WS-SL--content').WS_ScroLi({
        validEnd: {
            status: false
        },

        sections: [
            ['#data_platform_and_analytics_services', '<a href="#data_platform_and_analytics_services" class="font-14">Data <br/>& Analytics<br/></a>'
            ],
            ['#data_management', '<a href="#data_management" class="font-14">Data<br/>Management</a>'],
            // ['#cloud_adoption', '<a href="#cloud_adoption">Cloud<br/>Adoption</a>'],
            ['#data_discovery', '<a href="#data_discovery" class="font-14">Data<br/>Discovery</a>'],
            ['#operational_analytics', '<a href="#operational_analytics" class="font-14">Operational<br/>Analytics</a>'],
            ['#experience_analytics', '<a href="#experience_analytics" class="font-14">Experience<br/>Analytics</a>'],
            ['#advanced_AnalyticsAI','<a href="#advanced_AnalyticsAI" class="font-14">Advanced<br/>Analytics/AI</a>']
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
            height: 65,
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

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?>
<!-- Anexinet Main Form End -->

<?php if(!$full_pages == true) {echo '</div>';}?>

</div>

<?php endwhile; ?>

<?php get_footer();
