<?php
/**
 *
 * Template Name: Design Services
 *
 * @package      Page Template
 * @author       Britt McCormick <britt.mccormick@gmail.com>
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
  <style>

.post-intro-wrapper h1.post-title {
font-size: 40px !important;
}	  
.kickstartwhite {
    line-height: 22px !important;
    margin-top: 250% !important;
    padding-bottom: 15px;
}
	  body a:focus, body a:hover, body button:focus, body button:hover {
    color: inherit;
    color: #FFB852 !important;
}
	  
	  .fa, .fas {
    font-size: 12px;
    font-weight: 900;
    margin-left: 5px;
}
	  .yellowreadmore {
		  color: #FFB852 !important;
	  }
	 
	  .yellowreadmore:hover {
		  color: #187bcd !important;
	  }
	  
.svg-inline--fa {
    display: inline-block;
    font-size: inherit;
	height: .8em;align-content
	  }
	  .svg-inline--fa.fa-w-8 {
    width: 1em;
		  height: 1em;
}
	  
      .gray-p p{
          color:#6e6e68;
      }
      .related-span-cont{
          line-height:1.5;
      }
      .single-gray{
        color: #3d3d3b;
		font-size: 14px;
		line-height: 22px;
		text-align: center;
      }
	  
	  .missionbox {
		  width: 90%;
		  margin: 0 auto;
	  }
	  
	  .bluebtn {
    background-color: #187bcd;
    width: 150px;
    height: 45px;
    border: none;
    color: white !important;
    margin: 0 auto;
    text-align: center;
		  font-weight: bold;
	cursor: pointer;
	font-family: "Montserrat", sans-serif;
}
	  
	  .bluebtn:hover {
background-color:  #0F4C83;
		  color: white !important;
	  }
      .blue-subtitle{
        font-size: 18px;
    color: #187bcd;
    font-weight: 600;
      }
  .img-text-bottom-related{
    padding: 20px;
	  width: 60%;
    background-color: white;
  }
  .img-text-bottom-related img{
    margin-bottom:20px;
  }
	  
	.img-text-bottom-related-1{
    padding: 20px;
	  width: 75%;
    background-color: white;
  }
  .img-text-bottom-related img-1{
    margin-bottom:20px;
  }
  .single-blue{
    color:#187bcd;
  }
  .sub-h3{
    font-size: 18px;
    font-weight: 600;
    max-width: 400px;
    color: #797973;
  }
  .blue-background ul li::before{
    content: "\2022";
    color: #e4e4e4 !important;
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
  }
  .gray-li{
    background-color: whitesmoke;
    padding: 8px;
    margin-bottom: 16px;
  }
  .white-li{
    padding: 8px;
    margin-bottom: 16px;
  }
  .white-box{
    background-color: #fff;
    display: flex;
    padding: 20px;
    margin-bottom: 20px;
  }
  .whitebox-text{
    margin-left: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    max-width: 350px;
  }
  .whitebox-text h5{
    margin-bottom: 20px;
  }
  .related-img-left{
    display: flex;
    align-items: center;
    background-color: #f3f3f3;
    padding: 12px;
	  width: 350px

  }
  .related-text-left{
    font-size: 14px;
    margin-left: 25px;
  }
  .related-text-left h5{
    font-size:12px;
	  color: #3D3D3B;
  }
  .related-text-left p{
    font-size: 14px !important;
    margin-bottom: 0 !important;
    margin-bottom: 8px !important;
	  line-height: 16px;
	  color: #6E6E68;
  }
  .under-v-content{
    font-size: 14px;
    line-height: 1.3;
    margin: 12px 0;
    color: #6e6e68 !important;
    font-style: italic;
  }
  .color-w{
    color:#FFF !important;
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
    .mt-20{
      margin-top:20px;
    }
    .w-400-m-20{
      max-width: 400px;
      margin: 20px 0;
    }
    .white{
      color:#fff;
    }
  
    
    .blacky{
      color:#3d3d3b !important;
    }
    /* app refresh only */
    /* app refresh only */
    .dflex-column{
      display:flex;
      flex-direction:column;
      min-width:78px;
		padding: 25px;
      height:auto;
      justify-content: space-evenly;
    }
    .first{
      max-width: 550px;
    }
    #cybersecurity{
      margin-left:20px;
    }
    #platform-analytics-services {
    font-family: "Lato", sans-serif;
    font-size: 16px;
    color: #3d3d3b;
    line-height: 26px;
}

#platform-analytics-services h2 {
    font-family: "Montserrat", sans-serif;
    font-size: 30px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.37;
    letter-spacing: normal;
    margin-top:20px;
    
}

 #platform-analytics-services .p {
    font-size: 16px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.63;
    letter-spacing: normal;
    color: #6e6e68;
    margin: 0 0 2em;
    margin-top:20px;
}

#platform-analytics-services ul {
    list-style: none;
    color: #6e6e68;
    font-size:16px !important;
	margin-left: 10%;
}

#platform-analytics-services ul li::before {
    content: "\2022";
    color: #187bcd;
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

#platform-analytics-services a, #platform-analytics-services .link {
    cursor: pointer;
    color: #187bcd;
    text-decoration: none;
	font-weight: bold;
}

#platform-analytics-services a:hover, #platform-analytics-services .link:hover {
    color: #187bcd;
    text-decoration: none;
}

#platform-analytics-services a:focus, #platform-analytics-services a:visited, #platform-analytics-services .link:focus, #platform-analytics-services .link:visited {
    text-decoration: none;
    color: #187bcd;
}

* {
    box-sizing: border-box;
}

*:before,
*:after {
    box-sizing: border-box;
}




.clearfix:after,
.container:after,
.container-fluid:after,
.row:after {
    clear: both;
}

.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.pull-right {
    float: right !important;
}

.pull-left {
    float: left !important;
}

.hide {
    display: none !important;
}

.show {
    display: block !important;
}

.invisible {
    visibility: hidden;
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}

.hidden {
    display: none !important;
}

.affix {
    position: fixed;
}

#platform-analytics-services .cloud-services .right-rectangle, #platform-analytics-services .anexinet-solutions .right-rectangle {
    margin: 0 auto;
}

#platform-analytics-services .cloud-services .right-rectangle img, #platform-analytics-services .anexinet-solutions .right-rectangle img {
    float: left;
    margin-right: 30px;
}

#platform-analytics-services .cloud-services .right-rectangle .title, #platform-analytics-services .anexinet-solutions .right-rectangle .title {
    display: inline-block;
    margin-bottom: 10px;
    font-size: 11px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #3d3d3b;
}

#platform-analytics-services .cloud-services .right-rectangle .content, #platform-analytics-services .anexinet-solutions .right-rectangle .content {
    display: inline-block;
    max-width: 130px;
    font-size: 14px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 18px;
    letter-spacing: normal;
    margin:12px 0;
    color: #6e6e68;
}

#platform-analytics-services .cloud-services .right-rectangle a, #platform-analytics-services .anexinet-solutions .right-rectangle a {
    font-size: 14px;
    font-weight: bold;
    font-stretch: normal;
    font-style: italic;
    line-height: normal;
    letter-spacing: normal;
    color: #187bcd;
}

#platform-analytics-services .well-architected-framework .bg-rectangle, #platform-analytics-services .devops .bg-rectangle, #platform-analytics-services .consumption-based-it .bg-rectangle {
    font-family: "Lato", sans-serif;
    max-width: 350px;
    height: 160px;
    padding: 20px 25px;
    margin: 25px auto 0;
}
#engineering {
    background-image: url(https://www.anexinet.com/wp-content/uploads/2020/08/bitmap-3.png);
    background-size: cover;
    flex: 100%;
    max-width: 38% !important;
    padding-bottom: 0px;
    padding-right: 0px;
}

@media (min-width: 992px) {
    #platform-analytics-services .well-architected-framework .bg-rectangle, #platform-analytics-services .devops .bg-rectangle, #platform-analytics-services .consumption-based-it .bg-rectangle {
        margin: 0 auto;
    }
}
	  
  
	
	  

#platform-analytics-services .well-architected-framework .bg-rectangle .title, #platform-analytics-services .devops .bg-rectangle .title, #platform-analytics-services .consumption-based-it .bg-rectangle .title {
    font-size: 11px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #ffffff;
}

#platform-analytics-services .well-architected-framework .bg-rectangle .content, #platform-analytics-services .devops .bg-rectangle .content, #platform-analytics-services .consumption-based-it .bg-rectangle .content {
    font-size: 14px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.43;
    letter-spacing: normal;
    color: #ffffff;
    margin-bottom:28px;
}

#platform-analytics-services .well-architected-framework .bg-rectangle a, #platform-analytics-services .devops .bg-rectangle a, #platform-analytics-services .consumption-based-it .bg-rectangle a {
    font-size: 14px;
    font-weight: bold;
    font-stretch: normal;
    font-style: italic;
    line-height: normal;
    letter-spacing: normal;
    color: #187bcd;
}

html {
    scroll-behavior: smooth;
}
	  
	 

#WS-ScroLi {
    position: absolute;
    z-index: 9;
    left: 14% !important;
}

@media (min-width: 0) and (max-width: 768px) {
    #WS-ScroLi {
        display: none;
    }
}

#WS-ScroLi.fixed {
    z-index: 9;
    position: fixed;
    top: 110px !important;
}

#WS-ScroLi.absolute {
    position: absolute;
}

#WS-ScroLi [class^="item"] {
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

.item-1,
.item-2,
.item-3,
.item-3,
.item-4,
.item-5,
.item-6,
.item-7
{
    margin-top: -5px;
}
	
#WS-ScroLi .item-7 .line, #WS-ScroLi .item-7 .line-animation {
    display: none !important;
}
.icon-text {
    margin-top: -10px;
    position: absolute;
    text-align: right;
    right: 30px;
    width: 120px;
}

.icon-text a {
    text-decoration: none;
    font-weight: bold;
    font-size: 13px;
    line-height: 1.31px;
    color: #187bcd;
    font-family: "Montserrat", sans-serif;
}


#platform-analytics-services {
    /* Style the buttons that are used to open and close the accordion panel */
    /* Style the accordion panel. Note: hidden by default */
}

#platform-analytics-services .right-copy {
    font-size: 14px;
    line-height: 22px;
    max-width: 350px;
}

#platform-analytics-services .right-copy h5 {
    font-weight: bold;
    font-size: 14px;
    line-height: 22px;
}

#platform-analytics-services .accordion {
    font-size: 16px;
    font-family: "Montserrat", sans-serif;
    background-color: #187bcd;
    color: #ffffff;
    cursor: pointer;
    padding: 18px 25px 18px 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    position: relative;
}

#platform-analytics-services .accordion:after {
    content: '';
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/07/chevron-down.032a04f6.png');
    width: 14px;
    height: 8px;
    position: absolute;
    right: 10px;
    top: 25px;
}

#platform-analytics-services .active:after {
    transform: scaleY(-1);
}

#platform-analytics-services .panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}

#platform-analytics-services .page-section {
    margin-left:20px;
    margin-top:40px;
    padding:2vw;
}

#platform-analytics-services .cloud-services {
    background-color: #f7f8fa;
    margin-left:20px;
    padding-bottom:40px;
}

#platform-analytics-services .cloud-services .right-rectangle {
    max-width: 350px;
    font-family: "Lato", sans-serif;
    padding: 15px;
}

#platform-analytics-services .strategy-kickstart {
    background-color: #187bcd;
    color: #ffffff;
}

@media (min-width: 992px) {
    #platform-analytics-services .strategy-kickstart {
        background-image: url(../images/group-6.f5ab63a4.jpg);
        background-repeat: no-repeat;
        background-position: right;
        background-size: cover;
        margin-left:20px;
    }
}

@media (min-width: 1200px) {
    #platform-analytics-services .strategy-kickstart {
        background-size: initial;
    }
}

#platform-analytics-services .strategy-kickstart p, #platform-analytics-services .strategy-kickstart a {
    color: #ffffff;
}

#platform-analytics-services .strategy-kickstart a {
    font-family: "Lato", sans-serif;
    font-size: 16px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.5;
    letter-spacing: normal;
    color: #ffffff;
}

#platform-analytics-services .strategy-kickstart img {
    vertical-align: middle;
}

#platform-analytics-services .strategy-kickstart ul li::before {
    color: #ffffff;
}

#platform-analytics-services .well-architected-framework {
    background-color: #f7f8fa;
}

#platform-analytics-services .well-architected-framework a {
    font-weight: bold;
    color: #187bcd;
}

#platform-analytics-services .well-architected-framework img {
    vertical-align: middle;
}

/* #platform-analytics-services .well-architected-framework .bg-rectangle {
    background-image: url('/wp-content/uploads/2020/07/group-3.jpg');
    background-repeat: no-repeat;
    background-position: right;
} */

.cybersecurity .col-md-4 .bg-rectangle{
  background-image: url('/wp-content/uploads/2020/07/group-3-7.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  padding: 20px;
  max-width:350px;
}
.threat-defense .col-md-4 .bg-rectangle{
  background-image: url('/wp-content/uploads/2020/07/group-3-12.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  padding: 20px;
  max-width:350px;
}
.cybersecurity, .strategy-kickstart, .data-app-security .col-md-4 .bg-rectangle .title{
    font-size: 11px;
    color:white;
}
.data-app-security h3{
    font-size:18px;
    font-weight:600;
}
.data-risk .col-md-8{
    padding: 40px;
}
.data-risk{
  background-color: #f6f7f9;
}
.data-risk .img-bg{
  background-image: url('/wp-content/uploads/2020/07/bitmap-2.jpg');
  background-repeat: no-repeat;
  background-position: right;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  justify-content: space-between;
}
.data-risk .img-bg span{
  color: white;
  font-size: 18px;
  font-weight: 600;
}
.data-risk .img-bg .href-cont{
    display: grid;
}
.blue-background ul{
    color:#FFF !important;
}
.blue-background {
  line-height: 1.4;
  margin-bottom: 20px;
  margin-top: 20px;
  background-color: #187bcd;
  color: #ffffff;
  margin-left: 20px !important;
}
.blue-background a{
  color: #ffffff !important;
}
.blue-background p{
  color: #ffffff !important;
}
.blue-background .col-md-6{
  padding:2vw;
}
.gray-bg{
  background-color: #f7f8fa;
}
.detection-response .bg-rectangle{
  background-image: url('/wp-content/uploads/2020/07/group-3-11.jpg');
  background-repeat: no-repeat;
    background-position: right;
    padding: 20px;
}
.bg-rectangle span{
  color:#FFF;
}

.office-data .bg-img{
    background-image: url('/wp-content/uploads/2020/07/bitmap-3.jpg');
    background-size:cover;
  background-repeat: no-repeat;
  background-position: right;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  justify-content: space-between;
}

.href-cont .first-a-full-bg{
    color: white !important;
    margin-bottom: 40px;
}

.bg-rectangle .title-first-a{
    font-size: 14px;
    line-height: 1.4;
    margin-bottom: 20px;
    margin-top: 30px;
    margin-bottom:22px;
} 
 .title-first-a span{
    color:white;
}
.bg-rectangle .title-second-a{
    font-size: 14px;
}

.strategy-kickstart .col-md-4 .bg-rectangle{
  background-image: url('/wp-content/uploads/2020/07/group-3-8.jpg');
  background-repeat: no-repeat;
  background-position: right;
  padding: 20px;
  width: 350px;
}

#platform-analytics-services .well-architected-framework .bg-rectangle .title {
    margin-bottom: 20px;
    display: inline-block;
}

#platform-analytics-services .devops .bg-rectangle {
    background-image: url('/wp-content/uploads/2020/07/group-3-9.jpg');
    background-repeat: no-repeat;
    background-position: right;
    padding: 10px 20px;
}

#platform-analytics-services  .data-app-security .bg-rectangle{
    background-image: url('/wp-content/uploads/2020/07/group-3-10.jpg');
    background-repeat: no-repeat;
    background-position: right;
    padding: 10px 20px;
}

#platform-analytics-services .devops .bg-rectangle .title {
    margin-bottom: 15px;
    display: inline-block;
}

#platform-analytics-services .anexinet-solutions .right-rectangle {
    max-width: 350px;
    background-color: #f7f8fa;
    font-family: "Lato", sans-serif;
    padding: 15px;
}

#platform-analytics-services .anexinet-solutions .right-rectangle .title {
    margin-bottom: 40px;
}

#platform-analytics-services .consumption-based-it {
    background-image: linear-gradient(73deg, #187bcd 4%, #125b9b 45%, #0f4c83 94%);
    color: #ffffff;
}

#platform-analytics-services .consumption-based-it p {
    color: #ffffff;
}

#platform-analytics-services .consumption-based-it h5 {
    font-size: 16px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.63;
    letter-spacing: normal;
    color: #ffffff;
    margin-top: 0;
}

#platform-analytics-services .consumption-based-it .bg-rectangle {
    background-image: url('/wp-content/uploads/2020/07/group-3-2.jpg');
    background-repeat: no-repeat;
    background-position: right;
    padding: 10px 20px;
}

#platform-analytics-services .consumption-based-it .bg-rectangle .title {
    margin-bottom: 60px;
    display: inline-block;
}

#platform-analytics-services .group:before,
#platform-analytics-services .group:after {
    content: '';
    display: table;
}

#platform-analytics-services .group:after {
    clear: both;
}

#platform-analytics-services .group {
    zoom: 1;
    /* IE6&7 */
}

#platform-analytics-services .container-iframe {
    position: relative;
    overflow: hidden;
    width: 100%;
    /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

#platform-analytics-services .responsive-iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
}

@media (max-width: 1450px) {	  
	.img-text-bottom-related{
    padding: 20px;
	  width: 100%;
    background-color: white;
  }
	.img-text-bottom-related-1{
    padding: 20px;
	  width: 100%;
    background-color: white;
  }
	.kickstartwhite {
		   margin-top: 300% !important; 
	  }
	  }
@media (min-width: 768px) {
    .col-md-8 {
	   flex: 0 0 66.666667%;
       max-width: 55%;
       margin-right: 7%;
    }
}
    </style>
  <style type="text/css">@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700');</style>
  <style type="text/css">@import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');</style>

<!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->


<!-- back to top -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><img
        src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top" /></button>
<!-- / back to top -->

 

<?php echo the_content(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/ws-scroli.js"></script>
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/readmore.js"></script>


<script>


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

});
</script>
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

<script>
$(function() {

    $('#WS-SL--content').WS_ScroLi({
        validEnd: {
            status: false
        },
        sections: [
            ['#design_services','<a href="#design_services">Design Services</a>'],
            ['#research','<a href="#research">Research</a>'],
            ['#user_journeys','<a href="#user_journeys">User Journeys</a>'],
            ['#creative','<a href="#creative">Creative</a>'],
			['#ideation_prototypes','<a href="#ideation_prototypes">Ideation & Prototypes</a>'],
			['#functional_design','<a href="#functional_design">Functional Design</a>'],
			['#engineering_blueprints','<a href="#engineering_blueprints#">Engineering Blueprints</a>']
        ],
        position: {
            x: ['left', 'auto'],
            y: ['top', 70]
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
            height: 60,
            width: 2,
            color: '#187bcd',
            colorPast: '#187bcd',
            colorOff: 'grey',
        },
    });
});

</script>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?>
<!-- Anexinet Main Form End -->

<?php if(!$full_pages == true) {echo '</div>';}?>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>
