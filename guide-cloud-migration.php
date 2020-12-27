<?php
/**
 *
 * Template Name: Guide for Cloud Migration
 *
 * @package      Page Template
 * @author       Susann Konkus
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
</script>

<script>
  $( function() {
    $( "#accordion2" ).accordion({
      collapsible: true
    });
  } );
</script>

<script>
  $( function() {
    $( "#accordion3" ).accordion({
      collapsible: true
    });
  } );
</script>

<!-- Gradient Navegation Bar Begin -->
<section class="grndt-sec-nav blue-rey-second-nav container-fluid" id="grdnt">
  <div class="container">


    <div class="cont-1">
      <a href="#section_3">Planning for Performance</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#section_5">Securing Your Workload</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#section_7">Optimizing for Cost</a> 
    </div><span class="grdnt-divider">|</span>
      <div class="cont-1">
      <a href="#section_8">Transforming to Cloud Native</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#section_9">Ensuring Resiliency</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#section_10">Workload Selection</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#section_11">Piloting a Migration</a> 
    </div>
 
  </div>
</section> <!--  section  -->
<!-- back to top -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top"/></button>
<!-- / back to top -->

<style>
html{
    scroll-behavior: smooth
}
.container .white-color-text {
    color: #ffffff !important;
}
#section_12 {
    background-color: #0f4c83 !important;
}
ul.guide-list li {
    font-size: inherit;
    font-family: 'Lato',Arial, Helvetica, sans-serif !important;
    color: #3d3d3b !important;
}
#section_3 {
    background-color: #f6f6fa !important;
}
.padding-top-30{
	padding-top:30px !important;
}
h3.title-left {
    text-align: left !important;
    width: 100% !important;
    margin-top: 0 !important;
    font-style: normal !important;
}
.padding-top-20{
	padding-top:20px !important;
}
.padding-bottom-30{
	padding-bottom:30px !important;
}


.post-intro-wrapper .post-header.post-meta {
    left: 270px !important;
}
.page-id-59680 .parallax-header-background {
    top: -90px !important;
    background-position: unset !important;
}
.grndt-sec-nav .container {
    display: block;
    padding: 12px 0;
    max-width: 100%;
    margin: 0 auto;
    width: 1100px;
    text-align: center !important;
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
  max-width:100px;
}
h3{
  color: #3d3d3b;
  font-style: italic;
	margin: 20px auto;
	font-weight: 400;
	font-family: 'Lato', sans-serif;
	font-size: 24px;
}
	
.anxnt-main-form p {margin-bottom: 0px !important;}
	
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

	.blue-bkg {background-color: #187bcd; color:#fff;}
	.bb-title {font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 700;}
	#section_4 .container p {color:#fff !important;}
	
	#section_1{}
	#section_1 .container-two {
		
	}
	
	#section_2, #section_7, #section_10 {background-color:#f6f6fa;}
	#section_2 .container-one {}
	#section_2 .s2-text {text-align:center;}
	
	#section_3 {}
	#section_3 .container-one {}
	
	#section_4 {min-height: 254px;background-color: #187bcd;}
	
	#section_6 {
		background-image: url('https://www.anexinet.com/wp-content/uploads/2020/07/ccmg-cloud-bkg.png');
		background-position: center;
		background-size: cover;
  		color:#fff;
  		padding: 60px 0;
		min-height: 240px;
	}
	
	#section_6 .container p {color:#fff !important;}
	
	#section_8 {background-color: #0f4c83;}
	
	#section_8 .intro h2, .intro p { color: #fff !important;}
	
	#section_8 .container p { color: #fff !important;}
	
	#section_11 {min-height: 600px;}

	
.col_50 {
    position: relative;
    float: left;
    width: 50%;
    padding-right: 3%;
}
	
.clearam {
    width: 100%;
    height: 1px;
    display: block;
    float: none;
    clear: both;
}
	
.ptb-40 {
    padding-top: 40px;
    padding-bottom: 40px;
}

#section_4 .col_50 img {
/*    position: absolute; */
    left: 0;
    bottom: 0;
}
#section_4 .container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    /* margin-top: 40px; */
}
	
.container p {
    color: #3d3d3b !important;
 /*   margin-bottom: 16px !important; */
    display: block;
	font-size: 16px !important;
/*	font-style: italic !important; 
	line-height: 19px !important; */
	margin-bottom: 20px;
}

#section_3 h2, #section_5 h2, #section_7 h2, #section_9 h2, #section_10 h2, #section_11 h2 {
  text-align:center;
}
	
#section_3 h3, #section_5 h3, #section_7 h3, #section_9 h3, #section_10 h3, #section_11 h3 {
  text-align:center;
}
	
	h4 {
		font-size: 20px;
		color: #3d3d3b;
		font-family: 'Montserrat', sans-serif;
		font-weight: 500; 
	}
	
/*	
.page-template-guide-for-banks .post-title{
  color: #0f4c83;
  font-weight: 700 !important;
}

  .page-template-guide-for-banks h3 {
    
  font-size:26px !important;
  }
.page-template-guide-for-banks h4 {
  font-size:17px !important;
}

.blue-rey-second-nav{
  background: #0f4c83;
}
*/
	
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: center;
}

#accordion-resizer {
    padding: 10px;
    width: 350px;
    height: 220px;
  }
.border-box{
  border: 2px solid #187bcd;
  max-width: 250px;
  padding: 20px;
  display: flex;
  align-items: center;
  min-width:225px;
  min-height: 106px;

}
.border-box img{
	margin-right:18px;
}
	
.border-box-all {
    border: 1px solid #ffb852 !important;
    max-width: 210px;
    max-height: 70px;
    display: flex;
    align-items: center;
    min-width: 210px !important;
    min-height: 70px !important;
    border-radius: 8px;
    font-size: 14px;
    line-height: 16px;
    padding: 10px 20px;
}
	
.border-box-all img{
  margin-right: 14px;
}
	
.border-box-num {
    border: 1px solid #ffb852 !important;
	max-width: 240px;
    max-height: 90px;
    display: flex;
    align-items: center;
    min-width: 240px !important;
    min-height: 90px !important;
    border-radius: 8px;
    font-size: 14px;
    line-height: 16px;
    padding: 10px 20px;
    position: relative;
}
	
.border-box-yellow {
    border: 1px solid #ffb852 !important;
	background-color: #fff;
	}
	
.border-box-blue {
    border: 1px solid #187bcd !important;
	}
	
.border-num {
	position: absolute;
    top: -15%;
    left: 45%;
	}
	
.bn-text {
    font-size: 14px !important;
    text-align: center;
    line-height: 14px;
    margin: 0 auto;
    padding-top: 12px;
}
	
span.num {
	background: #ffb852;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 0.8em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 1.75em;
    /* margin-right: 15px; */
    text-align: center;
    width: 1.75em;
    font-size: 17px;
}


.lista-bank {
  margin: 20px 0;
}

.lista-bank li{
    margin-bottom: 20px;
    padding-left: 35px;
    background-image: url(/wp-content/uploads/2020/03/group-9-copy.png);
    background-repeat: no-repeat;
    background-position: 0px 5px;
    list-style: none;
    margin-left: 0px;
}

.lista-bank li span{
  font-weight: bold;
  color: #000;
}


.lista-stars{
   margin: 20px 0;
}
  
.lista-stars li{
  margin-left: 25px;
       margin-bottom: 20px;
 
}


.banking-first a{
    font-size: 13px;
  line-height: 16px;
  margin-left:12px;
  color:#3c3d47;
  font-weight: 500;
}
.border-box a{

  margin-left:12px;
  
  font-weight: 700;
}
.up-pill{
  margin-bottom:20px;
  display: flex;
  justify-content: center;
}
.down-pill{
  align-items: center;
  display: flex;
  justify-content: center;
  margin-bottom:20px;
}
.banking-second{
  background-image:url('https://www.anexinet.com/wp-content/uploads/2020/02/doctors2.jpg');
  color:white;
}
.banking-second p{
  color:#fff;
  font-style:italic;
}
.vidyard-player-container{
  max-width:800px;
  /* padding-top:60px; */
}
.banking-third{
  background-color: rgba(235, 235, 235, 0.3);
  padding:60px 0;
}
.ui-accordion-header{
  background-color: #f4f4f4;
  padding: 20px 40px;
  margin-top: 20px;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  color:#0F4C83;
  justify-content: space-between;

/* box-shadow: 3px 2px 4px 0 rgba(0, 0, 0, 0.15); */

}
.ui-accordion-header img{
  max-width: 60px;
  margin-right: 30px;
}
.ui-accordion-content {
/*  box-shadow: 0 0 5px #ccc; */
  position: relative;
  margin-bottom: 30px;
  margin-top: 30px;
  padding: 22px 25px;
  background-color: #ffffff;
  height: auto !important;
}

.ui-accordion-content {max-height: 100% !important;}


.first-accordion .ui-accordion-header{
color: #187bcd;
background-color: #fff;

}
.first-accordion .ui-accordion-header h4{
color: #187bcd;

}

.second-accordion #accordionTwo .ui-accordion-header{
  color:#187bcd;
}


#accordion3 .uiacordion-conten{
  background-color:red;
}

#accordion2 .ui-accordion-header, #accordion3 .ui-accordion-header{
  color:#187bcd;
  background-color: #fff;
  border-left: 6px solid #187bcd;
}
	
.footer .container .row p {
    display: block;
    font-size: 14px !important;
    padding: 7px 0;
    font-weight: 400;
    color: #4a4a4a !important;
	margin-bottom: 0px;
}
	
.footer p {
	margin-bottom:0px;
}
.banking-fourth h2{
  font-size:42px;
  margin-bottom:40px;
}
.banking-fourth ul{
  margin-top:40px;
}
.banking-fifth{
  background-image: url('https://www.anexinet.com/wp-content/uploads/2020/02/adobe-stock-253025721.jpg');
  color:#fff;
  padding: 60px 0;
}
.banking-fifth p{
  color:white;
  font-weight:700;
}
.banking-fifth h3{
  margin-bottom: 20px;
}
.banking-fifth .portrait-healthcare{
  margin-right:40px;
}
.digital-banking-form .hbspt-form .hs-form .hs_submit .actions .hs-button{
  background-color: #FFB852 !important;
  padding: 3vh 1vw;
  width: 100%;
  color: white;
  font-weight: 900;
  font-size: 16px;
}
.banking-sixth p{
  margin-bottom:14px;
}
.banking-sixth {
      background-color: rgba(235, 235, 235, 0.3);
  
}
.banking-text-video{
  max-width: 962px;
  margin-right: 40px;
}
.health-sixth-half{
  background-color: rgba(235, 235, 235, 0.3);
  padding: 80px 0;
  margin: 40px 0;
}
.banking-eight{
  background-image: url('/wp-content/uploads/2020/02/group-6.png');
  color:#FFF;
  padding:60px 0;
  background-size:cover;
}

.banking-eight p{
  color:#FFF;
  font-weight:700;
}


.banking-nine p{
 
}
.banking-ten{
  background-color:#f9f9f9;
}
.banking-eleven{
  background: linear-gradient(45deg, #0f4c83, #187bcd);
  padding: 90px;
  color: white;
  margin-bottom: 60px;
  align-items: center;
  display: flex;
  justify-content: space-around;
  margin-top: 60px;
}
.yellow-btn-2020 {
  	background-color: #FFB852;
	font-family: Montserrat;
    font-size: 16px;
    font-weight: bold;
    padding: 15px 25px;
}
	
.max-1100-mr-40{
  max-width:1100px;
  margin-right:40px;
}
.link-blue{
  color: #1752e4;
}
.link-blue:hover{
  color: #0F4C83;
}
.link-yellow{
  color: #ffb852;
}
.link-yellow:hover{
  color: #f9a62e;
}
.fw-700{
  font-weight:700;
}
.ui-accordion-header h4{
  font-weight:700;
  margin-right:30px;
  font-size: 18px;
}
.second-accordion .ui-accordion-header h4{
color: #0f4c83;
}

#accordion2 .ui-accordion-header h4, #accordion3 .ui-accordion-header h4{
color: #187bcd;
}

.sticky {
  position: fixed;
  top: 86px;
  width: 100%;
  z-index: 10;
}
.mh-1200{
    /* max-height: 100% !important;
    height:100% !important; */
    }
    .mh-256{
  max-height: 100% !important;
  height: 100% !important;
}

.grndt-sec-nav .container .cont-1{
  margin-right: 0px;
}

.ui-accordion-icons:after{
  content: ">";
  font-weight:700;
  font-size:28px;
}
.ui-state-active:after{
  content: "∨";
  font-weight:700;
  font-size:28px;
}

#accordion2 .ui-state-active:after, #accordion3 .ui-accordion-icons:after{
  color: #187bcd;
}

#accordion3 .ui-state-active:after, #accordion3 .ui-accordion-icons:after{
  color: #187bcd;
}

.fixpaddi {
  padding:0px 150px 0px 40px;
}


.ui-icon{
  display:none;
}
.grdnt-divider{
  margin-left: 1%;
  margin-right: 1%;
  color:white;
}
.page-id-56600 .grndt-sec-nav .container .cont-1{
  margin-right:0;
}

.banking-fifth h3, .banking-eleven h3{
  color: #fff !important;
}

.banking-fifth .hs-input{
  padding: 5px !important;

    margin-bottom: 0px !important;
}
a.different-color {
    color: #007bff;
}
@media only screen and (max-width: 767px) {
	.page-id-59680 .post-intro-wrapper .post-header.post-meta {
		left: 0px !important;
		padding-left: 10px;
	}
}

@media (min-width: 1200px)
.container {
    max-width: 1140px;
}
@media (min-width: 992px)
.container {
    max-width: 960px;
}
@media (min-width: 768px)
.container {
    max-width: 720px;
}
@media only screen and (max-width: 600px) {
.fixpaddi {
  padding:20px;
}

.banking-eleven{
  padding: 40px;
}
}
@media (min-width: 1200px){
.post-intro-wrapper h1.post-title {
    font-size: 30px;
    width: 700px;
    max-width: 600px !important;
}
}

<!-- new css  -->



 

</style>

<section id="section_1" class="ptb-40">
<div class="container">
	<div class="row">
		<div class="col-md-6 align-items-center intro">
			<p>Before getting started on your own workload migration plan, read this guide to gain a deeper understanding of how to prepare and avoid making mistakes. With the right migration strategy, you can avoid inheriting technical debt from the deployment and introducing errors in the cloud. You'll also be able to use your plan to help you improve workload structure and evolve it to become more cloud native over the course of your migration.</p>
			<h2>Using this Guide</h2>
			<p>Keep reading for information about how to get started, optimize your workload, and begin the <a class="different-color" href="https://www.anexinet.com/cloud-hybrid-it/">transition to cloud</a> native. From there, you can continue building greater alignment with the cloud's capabilities so you can realize more benefits to the business. In this guide, you can expect to learn more about:</p>
			<ul class="guide-list">
				<li>Planning for Performance</li>
				<li>Securing Your Workload</li>
				<li>Optimizing for Cos</li>
				<li>Transforming to Cloud Native</li>
				<li>Ensuring Resiliency</li>
				<li>Workload Selection</li>
				<li>Piloting a Migration</li>
			</ul>
			<p>While it's true that there are different public cloud services available, they have enough in common that this guide applies regardless of the service you ultimately use. The <a class="different-color" href="https://www.anexinet.com/blog/5-lifesaving-must-haves-for-your-public-cloud-migration-strategy/">same basic principles and best practices</a> are still relevant. You'll need a plan that brings your strategy into focus with concrete goals.</p>
			<p>By the end, you should have a better understanding of how to plan your migration strategy by workload. If you need additional information, we're happy to share our expertise.</p>
			<p>Here's how to create your own migration strategy.</p>
			<!-- <img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/cm_recurso-1.png" /> -->
		</div>
	
<div class="col-md-6 align-items-center intro">
	<div class="form-styles">
		<div data-form-block-id="76acf43c-5ac0-ea11-a812-000d3a33243a"></div> <script src="https://mktdplp102cdn.azureedge.net/public/latest/js/form-loader.js?v=1.64.1061.0"></script> <div id="dsdT-xgdCmKlrsi-Nnq0K_Hc4bj3Z2xt53OZoRvJKpNE"></div><script language="javascript" type="text/javascript">(function (id, f, t, ws, ms_tr_il_08, ms_tr_il_w_01) { var tr = function (cb) { var count = 0; var callback = function () { if (count == 0) { count++; if (w) { w.w(id, t, cb); } } }; var ts = document.createElement('script'); ts.src = ws; ts.type = 'text/javascript'; ts.onload = callback; ts.onreadystatechange = function () { if (this.readyState == 'complete' || this.readyState == 'loaded') { callback(); } }; var head = document.getElementsByTagName('head')[0]; head.appendChild(ts); }; if (typeof ms_tr_il_08 === 'function') { if (ms_tr_il_w_01 === null) { tr(function() { ms_tr_il_08(id, f, t); }); } else { ms_tr_il_w_01.w(id, t, function(websiteVisitedParams) { ms_tr_il_08(id, f, t, websiteVisitedParams); }, null); } } else { tr(); }})('sdT-xgdCmKlrsi-Nnq0K_Hc4bj3Z2xt53OZoRvJKpNE', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/f', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t/w', typeof ms_tr_il_08 === "undefined" ? null : ms_tr_il_08, typeof ms_tr_il_w_01 === "undefined" ? null : ms_tr_il_w_01);</script>

	</div>
</div>
</div>
</div>
<div class="clearam"></div>
</section>

<section id="section_3" class="ptb-40">
<div class="container container-one">
<div class="row">
<div class="col-md-12">
<h2>Planning for Performance</h2>
<h3 style="padding-bottom:30px;">How should we start planning for performance at the early stages of a cloud migration?</h3>

<p>In the early stages, it can be confusing to know where to start, but it doesn't have to be that way. You should let your workload's current state guide you on your first steps through migration.</p>

<p>Performance, for reasons that may be somewhat obvious, is an essential part of the equation. You want your system to perform well after the migration happens--at least as well as it does on-premises, and ideally, even better than it did before. To keep your workload's performance strong, you're going to need a plan that takes into account the differences between on-premise and public cloud services.</p>
</div>

<div class="col-md-6  align-items-center intro">
<p>Begin by assessing your current baseline performance. From there, you'll look for any bottlenecks that may impede progress. Finally, you'll determine how performance works in your target public cloud and develop a plan for success. Without a plan, it's all too easy to fail. Cloud computing migration is vastly complex and requires a roadmap to be successful.</p>

<p>Sometimes, companies try moving to the cloud very quickly. They begin lifting and shifting directly into the public cloud with little knowledge of how this can impact performance. Often, they aren't aware of the need to evaluate performance in advance before undergoing a complex migration. Thankfully, this is largely preventable with the right approach. With the right plan, you can meet your performance requirements.</p>
</div>

<div class="col-md-6">
	<div class="image-right">
		<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-25-1.png" />
	</div>
</div>

<div class="col-md-12">
<h4 class="padding-top-30">Asking the Right Performance Questions</h4>
<p>Here are questions you should be asking yourself:</p>
</div>

<div class="row" style="margin-bottom: 40px;">
<div class="col-md-4 up-pill animatedParent">
	<div class="border-box-num border-box-yellow animated fadeInDownShort">
		<div class="border-num"><span class="num">1</span></div>
		<div class="bn-text">What's performing well?</div>
	</div>
</div>

<div class="col-md-4 up-pill animatedParent">
	<div class="border-box-num border-box-yellow animated fadeInDownShort">
		<div class="border-num">
			<span class="num">2</span>
		</div>
		<div class="bn-text">What are the current bottlenecks?</div>
	</div>
</div>

<div class="col-md-4 up-pill animatedParent">
<div class="border-box-num border-box-yellow animated fadeInDownShort">
<div class="border-num"><span class="num">3</span></div>
<div class="bn-text">How do storage, computational resources, and memory boundaries impact performance today?</div>
</div>
</div>
<div class="col-md-4 up-pill animatedParent">
<div class="border-box-num border-box-yellow animated fadeInDownShort">
<div class="border-num"><span class="num">4</span></div>
<div class="bn-text">What KPIs should we measure?</div>
</div>
</div>
<div class="col-md-4 up-pill animatedParent">
<div class="border-box-num border-box-yellow animated fadeInDownShort">
<div class="border-num"><span class="num">5</span></div>
<div class="bn-text">How can we improve performance in the cloud?</div>
</div>
</div>
</div>


	<div class="col-md-12">
		<p>If you don't know how well your system is performing now, you won't be able to measure any improvements and know how you're winning at performance. Take stock of how your on-premise applications and data perform right now. Don't rush this--an accurate historical map of your peak and average usage to make appropriate decisions.</p>
		<p>Not sure where to begin? Your team should start conducting a thorough assessment of each application by looking at every element of storage and computing. Consider each aspect of your system's environment, including dependent systems and supporting services.</p>
		<h3 class="title-left">Knowing Your Obstacles</h3>
		<p>Once you begin to understand your own obstacles, you can start developing a plan to resolve these challenges as you go through the migration process. This will require a keen understanding of how your chosen cloud solution impacts performance. You'll need to determine how memory size, storage, CPU specs, and other details can change how your applications perform.</p>
		<p style="width:100%; padding-bottom:25px;">Consider these details that can impact performance:</p>
	</div>


<div class="row" style="margin-bottom: 40px;">
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-15-1.png" /><!-- <img src="" alt=""> -->Memory Usage</div>
</div>
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-12-nb.png" /><!-- <img src="" alt=""> -->Networking Bandwidth</div>
</div>
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-26.png" /><!-- <img src="" alt=""> -->Storage IO</div>
</div>
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-12-1.png" /><!-- <img src="" alt=""> -->Latency</div>
</div>
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-34.png" /><!-- <img src="" alt=""> -->Virtual Machine Use</div>
</div>
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-17.png" />Platform</div>
</div>
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-27.png" />Code</div>
</div>
<div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
<div class="border-box-all border-box-blue animated fadeInDownShort"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-41.png" />System Specs</div>
</div>
</div>

	<div class="col-md-12">
		<p>This is just barely scratching the surface. There is a large variety of factors that can impede performance and give you bad results. If you start measuring performance and notice any slowdowns or steep declines, you'll need to backtrack and gain an in-depth understanding of what's really going on.</p>
		<p>As you work to uncover weaknesses in your system, be on the lookout for how individual details contribute to performance. Taking one workload at a time can help you understand the migration process as a whole as well.</p>
		<p>A workload-centric approach like this allows you to focus in on a single workload instead of being distracted by everything happening in the background. This can help you pick apart each element and look for areas that can be optimized during migration.</p>
	</div>
</div>
</section>

<section style="padding-bottom:0px;" id="section_4" class="blue-bkg ptb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="https://www.anexinet.com/wp-content/uploads/2019/07/adventure_image.png" />
			</div>
			<div class="col-md-6">
				<div class="bb-title">Cloud Migration Assessment</div>
				<p>No matter where you're at in your cloud migration, there's always room for better performance</p>
				<div class="yello-button"><a class="yellow-btn-2020">Choose Your Adventure</a></div>
			</div>
		</div>
	</div>
</section>

<div class="clearam"></div>

<section id="section_5" class="ptb-40">
	<div class="container container-one">
		<div class="row">
			<div class="col-md-12 align-items-center intro">
				<h2>Securing Your Workload</h2>
				<h3>How would you define "securing your workload?"</h3>
			</div>
			<div class="col-md-12 align-items-center intro padding-top-30">
				<p>Workload security changes when you migrate to the cloud because it's fundamentally different in a public cloud environment. For instance, you may be sharing services in the cloud with other companies, and a vulnerability or a breach impacting others can become your problem, too. You may be tempted not to do your due diligence to secure your system because a third-party cloud provider owns the infrastructure.</p>
			</div>
			<div class="col-md-6 align-items-center intro">
				<P>It's important to know how security approaches diverge in the cloud and impact your security posture. Looking at various aspects such as application level, identity management, and network security can help you understand what is changing during migration. In the cloud, you may be using different applications, services, and strategies--these can all change how your security team operates.</p>

				<p>One of the most important aspects of security in the cloud is proper protection of data. Whether it's at rest or in transit, data and access to it should be administered appropriately and with the right identity management. Keep in mind, too, that while your public cloud service does share responsibility with you for security, you will need to be vigilant and involved with your own security to ensure your data and applications are protected.</p>

				<p>Whenever possible, take securing your system into your own hands. Learn everything you can. If possible, gather information before making irreversible or expensive decisions.</p>
			</div>
			<div class="col-md-6 align-items-center intro">
				<div class="text-align-center">
					<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-22.png" />
				</div>
			</div>
		</div>
	</div>
</section>

<section id="section_6" class="ptb-40">
<div class="container">
<div class="col_50 align-items-center">
<div class="bb-title">Need a Cloud Strategy?</div>
Lower costs, streamline operations, and boost revenue with our Cloud Strategy Kickstart!

</div>
<div class="col_50 align-items-center ptb-40"><a class="yellow-btn-2020">Learn More</a></div>
</div>
</section>
<div class="clearam"></div>


<section id="section_7" class="ptb-40">
	<div class="container container-one">
		<h2>Optimizing for Cost</h2>
		<h3 class="text-center"><em>How can someone create a workload migration project plan that optimizes for cost?</em></h3>
		<p class="text-center">Optimizing for cost requires taking a step back. Once again, you'll need to zero in on how the public cloud is different from private on-premise computing.</p>
		<div id="accordion2">
			<div>
				<div class="d-flex align-items-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-16-1.png" />
					<h4>On-premise costs</h4>
				</div>
			</div>
			<div class="poorIt li1">
				<p style="margin-bottom: 20px;">Generally, CAPEX (capital expenditure) in the form of purchasing servers and related equipment. Ongoing costs associated with utilities, personnel, and operations.</p>
			</div>
			<div>
				<div class="d-flex align-items-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-12-3.png" />
					<h4>Public cloud costs</h4>
				</div>
			</div>
			<div class="poorIt li1">
				<p style="margin-bottom: 20px;">Typically, incurred on a per-usage basis that scales up or down with demand placed on the cloud.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 align-items-center intro">
				<p>When you use on-premise computing, you are free to use whatever computing resources you have without incurring much-added cost. In the cloud, you're paying per minute or per hour. These <a class="different-color" href="https://www.informationweek.com/cloud/tightening-the-belt-on-excess-spending-for-cloud/a/d-id/1333847?">usage costs can rack up</a> quickly with the public cloud if you try managing usage the same way you would with on-premise solutions.</p>

				<p>Scaling your workload, setting cost-controlling guidelines for your team, and moving some of your workload to cheaper services can help. By using services outside virtual machines and by identifying ways to connect workload size with end user demand, you can begin setting sensible limits on computational usage and demand. If you do use virtual machines, you can determine steady-state usage levels and buy capacity up front to help reduce costs.</p>
			</div>
			<div class="col-md-6 text-align-center">
				<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-14-2.png" />
			</div>

			<div class="col-md-12">
				<p>Usage guidelines are key here. Your team should always know your expectations regarding usage and have an ideal budget in mind. Resource use should be connected to accomplishing specific goals and should occur for value-added reasons. For instance, a large increase in end user demand is one good reason for usage to increase. If usage is increasing without a corresponding boost in demand from end users, you should be taking a closer look at consumption.</p>
				<p>Of course, in order to understand your costs, it's important to be tagging workload elements appropriately. Know how each aspect of your computing impacts cost. It's also key to find a provider that can partner with you to manage costs and keep them low. Experienced partners who comprehend public cloud services and how to control costs can bring knowledge they've gained from working with previous customers into your migration to ensure you're successful. Since they've already learned from past experience, these migration partners are often already familiar with performing cost analysis calculations, too.</p>
				<p>As a result, typically businesses see as much as a 30 percent cost reduction within the first two to three months of working with a cloud migration partner. This can have a significant impact on corporate budgets for the migration process.</p>
				<p>Additionally, helping your applications become cloud native over time can also assist with reducing costs. Legacy applications can be redesigned for the cloud instead of scrapped or completely rewritten, helping to keep functionality constant for end users while eventually improving performance and cutting expenses.</p>
				<p>If you're ready to transition your workload to cloud native, there are some important considerations to keep in mind.</p>
			</div>
		</div>
	</div>
</section>

<section id="section_8" class="ptb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="white-color-text">Transforming your Workload to Cloud Native</h2>
				<p class="white-color-text"><em>What are the biggest workload considerations when it comes to the cloud native perspective?</em></p>
			</div>
			<div class="col-md-6">
				<p class="white-color-text padding-top-20">Depending on how complex the project is, it may take one to two years to completely transform a project to a cloud native level. In fact, in many respects, the job is never truly done. Cloud native is a constant evolution, not a static, one-time goal. Gradually, an application can be transitioned into a cloud native--as an alternative to writing code from scratch, this allows companies to still benefit from software natively designed for the cloud. Because the cloud is constantly evolving, your application will see constant evolution, also.</p>
				<p class="white-color-text padding-top-20">Once you finish your project, there will be new features you can take advantage of and optimize your application for. In other words, you never really can be completely done with making a workload cloud native. It'll be a constant process, just like ensuring resiliency in your system.</p>
			</div>
			<div class="col-md-6">
				<div class="text-align-center">
					<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-29.png" />
				</div>
			</div>
		</div>
	</div>
</section>

<section id="section_9" class="ptb-40">
	<div class="container container-one">
		<div class="row">
			<div class="col-md-12">
				<h2>Ensuring Resiliency</h2>
				<h3>What are the most common ways we see systems not be resilient after a migration project plan?</h3>
			</div>

			<div class="col-md-6">
				<p>Resilience is important, but it also works differently in the cloud than it does with an on-premise data center. This can sometimes be a source of confusion. Without resiliency, your organization can lose customer confidence and even lose revenue. Eventually, significant downtime and the necessity of constantly using workarounds can lead away customers from your solution. Resiliency can increase costs, but it also prevents more significant potential losses.</p>
				<p>For these reasons, it's essential to plan for resiliency with the required level of availability of your applications. Avoid a "lift and shift" strategy where you attempt a migration without fully accounting for the differences inherent in the private and public cloud. Just patching-together your resiliency after the migration is finished isn't really an effective strategy.</p>
				<p class="padding-bottom-30">These questions are worth asking yourself:</p>
			</div>
			<div class="col-md-6">
				<div class="text-align-center">
					<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-21.png" />
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 40px;">
			<div class="col-md-4 up-pill animatedParent">
				<div class="border-box-num border-box-yellow animated fadeInDownShort">
					<div class="border-num"><span class="num">1</span></div>
					<div class="bn-text">Is my system resilient right now?</div>
				</div>
			</div>
			<div class="col-md-4 up-pill animatedParent">
				<div class="border-box-num border-box-yellow animated fadeInDownShort">
					<div class="border-num"><span class="num">2</span></div>
					<div class="bn-text">What level of redundancy is needed to keep my application(s) resilient?</div>
				</div>
			</div>
			<div class="col-md-4 up-pill animatedParent">
				<div class="border-box-num border-box-yellow animated fadeInDownShort">
					<div class="border-num"><span class="num">3</span></div>
					<div class="bn-text">What are the consequences for my business if a failure occurs?</div>
				</div>
			</div>
			<div class="col-md-4 up-pill animatedParent">
				<div class="border-box-num border-box-yellow animated fadeInDownShort">
					<div class="border-num"><span class="num">4</span></div>
					<div class="bn-text">How can I prevent significant downtime and protect the resiliency of my system?</div>
				</div>
			</div>
			<div class="col-md-4 up-pill animatedParent">
				<div class="border-box-num border-box-yellow animated fadeInDownShort">
					<div class="border-num"><span class="num">5</span></div>
					<div class="bn-text">How will backups work in the public cloud?</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>From there, you can build a proactive plan to help prevent resiliency issues from happening in the first place. Looking for opportunities to plan your workloads accordingly as you migrate, too, can help with ensuring a resilient system.</p>
			</div>
		</div>	
	</div>	
</section>

<section id="section_10" class="ptb-40">
	<div class="container container-one">
		<div class="row">
			<div class="col-md-12">
				<h2>Workload Selection</h2>
				<h3>What information do I need to consider at this stage of migration planning?</h3>
			</div>
			<div class="col-md-6 align-items-center intro">
				<p>Workload selection is about determining which workloads can move to the public cloud, which should stay on-premise, and how a transition to the public cloud should occur. Setting the right priorities and understanding dependencies enables the process to move forward more smoothly.</p>
				<p>Sure, there are other methods, but planning a migration according to workload helps you simplify. As you select workloads and start prioritizing, you'll see the process with greater clarity and you can begin identifying potential problems and finding solutions. It's easier to do selection beforehand, and to do so deliberately so you don't get lost in the details.</p>
				<p>For instance, here are some considerations to think about during your planning:</p>
			</div>
			<div class="col-md-6">
				<div class="text-align-center">
					<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-12.png" />
				</div>
			</div>
		</div>
<div class="clearam"></div>

<div id="accordion3">
<div>
<div class="d-flex align-items-center"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-34-1.png" />
<h4>Types of workloads</h4>
</div>
</div>

<div class="poorIt li1">
<p style="margin-bottom: 20px;">If you have HR, payment processing, and billing to move to the public cloud, which should be moved first? You will need to carefully consider each workload's type, importance, and contribution.</p>
</div>

<div>
<div class="d-flex align-items-center"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-24-2.png" />
<h4>Prioritization</h4>
</div>
</div>

<div class="poorIt li1">
<p style="margin-bottom: 20px;">Some workloads may be at a higher priority than others.<br>
Dependencies: Is one workload dependent on another? That can impact which one you decide to transition to the public cloud first.</p>
</div>

<div>
<div class="d-flex align-items-center"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-22-1.png" />
<h4>Security</h4>
</div>
</div>

<div class="poorIt li1">
<p style="margin-bottom: 20px;">Are there any security issues that may impact your decision of which workloads to move, when to move them, and how to do so?</p>
</div>
<div>
<div class="d-flex align-items-center"><img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-25-2.png" />
<h4>Monitoring</h4>
</div>
</div>
<div class="poorIt li1">
<p style="margin-bottom: 20px;">Based on your monitoring needs, are there any workloads that should be moved first or migrated in a special way?</p>
</div>
</div>
		<div class="row">
			<div class="col-md-12">
				<p>Selecting workloads can help you make sense of the process and avoid future problems. It's valuable to know what you're getting into by choosing workloads carefully. Costly mistakes can be prevented if you have the right workloads where they need to be at the right time. For instance, if you have one workload with dependencies on others, you can probably save yourself stress and frustration by prioritizing the dependencies ahead or moving the systems in tandem.</p>
				<p>In the end, you can craft a list of priorities and begin looking at the resources needed to safely and securely migrate each workload in order. Using your list as a guide, you can step forward confidently knowing exactly what it will take to transition each application over into the public cloud.</p>
				<p>Mistakes and errors can still happen, but careful selection can help you minimize any damage and have a worthwhile approach you can take if you need to do serious damage control. Piloting your migration will be easier knowing what to expect with your workloads.</p>
			</div>
		</div>
	</div>
</section>

<section id="section_11" class="ptb-40">
	<div class="container container-one">
		<div class="row">
			<div class="col-md-12">
				<h2>Piloting a Migration</h2>
				<h3>What should we know about piloting a migration? </h3>
			</div>
			<div class="col-md-6">
				<p>Before you pilot a migration, you'll need to validate your assumptions and clear up some of the unknowns you have about the process. Some of these assumptions you or your team have made are faulty to begin with--these you'll want to expose early enough in the process to make meaningful course adjustments. You want to avoid having any misconceptions take down your production system or dramatically interfere with your operations. Overall, your intent is to have a migration that is quick, relatively simple, and turned into a production deployment at some point in the future.</p>
				<p>A pilot migration is the phase when you have an opportunity to test your assumptions and plan for the full migration. You can start by identifying a workload to test as a representative use case. Determine what you’ll study and evaluate to help with future phases of the migration.</p>
			</div>
			<div class="col-md-6">
				<div class="text-align-center">
					<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-3-4.png" />
				</div>
			</div>
			<div class="col-md-12">
				<p>Having help from an experienced partner can make this easier. They can show you what to expect and empower your business to pilot the migration effectively. If you can, try to develop a list of questions and concerns to review with your migration partner for each aspect of the transition. </p>
			</div>
		</div>
	</div>
</section>

<section id="section_12" class="ptb-40">
	<div class="container container-one">
		<div class="row">
			<div class="col-md-6">
				<h2 class="white-color-text">Conclusion:</h2>
				<p class="white-color-text padding-top-20">We hope this guide helped you better understand how to get started optimizing workloads and costs in preparation for piloting your transition to cloud-native. Cloud migration is no easy task, certainly not one to be approached casually.<br> However, it’s well worth the effort as the benefits are huge.</p>
				
				<p class="white-color-text padding-top-20">Anexinet has helped countless client navigate this complex process; let us help your organization accelerate project success by avoiding the usual pitfalls and roadblocks.</p>
				
				<p class="white-color-text padding-top-20"><span style="color:#ffb852;">Our Cloud Migration Assessment</span> is a great way to quickly determine your readiness to get started on your migration journey, and our <span style="color:#ffb852;">Cloud Strategy Kickstart</span> helps you develop your ideal cloud adoption strategy that lowers costs, streamlines operations, and boosts revenue in just two weeks.</p>
			</div>
			<div class="col-md-6">
				<div class="text-align-center">
					<img class="aligncenter" src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-1.png" />
				</div>
			</div>
		</div>
	</div>
</section>


<?php echo the_content(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/css3-animate-it/1.0.3/js/css3-animate-it.min.js"></script>
    <!-- <script>
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script> -->

 
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

<!-- <script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("grdnt");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
</script>  -->


<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
    
	<?php if(!$full_pages == true) {echo '</div>';}?>

</div>

<?php endwhile; ?>

<?php get_footer();
