 <?php
/**
 *
 * Template Name: Guide For Migrating to Office 365
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true,

    });
  } );
</script>
<script>
  $( function() {
    $( "#accordionTwo" ).accordion({
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
<script>
  $( function() {
    $( "#accordion4" ).accordion({
      collapsible: true
    });
  } );
</script>

<!-- Gradient Navegation Bar Begin -->
<section class="grndt-sec-nav container-fluid" id="grdnt">
  <div class="container">

    <div class="cont-1">
      <a href="#what_is_hybrid_cloud">Step 1
	  <br />What is Hybrid Cloud?</a> 
	  </div><span style="padding-right: 2%;"></span>
    <div class="cont-1">
      <a href="#definite_benefits">Step 2
	  </br>Definite Benefits</a> 
    </div><span style="padding-right: 2%;"></span>
    <div class="cont-1">
      <a href="#hca_important">Step 3
	  </br>Why HCA is Important for Business</a> 
    </div><span style="padding-right: 2%;"></span>
      <div class="cont-1">
      <a href="#key_considerations">Step 4
	  </br>Key Considerations</a> 
    </div><span style="padding-right: 2%;"></span>
	   <div class="cont-1">
      <a href="#key_considerations">Step 5
	  </br>Key Considerations</a> 
    </div><span style="padding-right: 2%;"></span>
	   <div class="cont-1">
      <a href="#key_considerations">Step 6
	  </br>Key Considerations</a> 
    </div>
   
  
  </div>
</section> <!--  section  -->
<!-- back to top -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top"/></button>
<!-- / back to top -->

<style>
<!--
.grndt-sec-nav .container .cont-1 {
  text-align:left;
}
#what_is_hybrid_cloud, #definite_benefits, #hca_important, #key_considerations, #the_recovery{
    position: relative;
    display: block;
    top: -55px;
}
	ul {
    margin-left: 2.25rem;
    list-style-type: disc;
}
	h3{
	font-weight:700;
	}
	.grndt-sec-nav .container .cont-1{
	margin-right:0px;
	}
	.ransomware-first a {
    font-size: 16px;
    line-height: 16px;
    color: #ffffff;
    font-weight: 500;
	}

	.ransomware-second{
	background-image:url('https://www.anexinet.com/wp-content/uploads/2020/02/doctors2.jpg');
	color:white;
	}
	.ransomware-second p{
	color:#fff;
	font-style:italic;
	}
	.ui-accordion-content {
	box-shadow: 0 0 5px #ccc;
	position: relative;
	bottom: 0px;
	top: 0px;
	padding: 22px 25px;
	background-color: #ffffff;
	position: relative;
	display: block;
	height: 100% !important;
	}
	.mid-cta-text {
    color: white;
    font-size: 20px;
    margin-left: 34%;
    text-align: left;
    padding-top: 5%;
	font-weight: 700;
	}
	.mid-cta-text1 {
    color: white;
    font-size: 20px;
    margin-left: 30%;
    text-align: left;
    padding-top: 5%;
	font-weight: 700;
	}
	.grndt-sec-nav .container {
    display: table;
    padding: 20px 0;
    max-width: 100%;
    text-align: center;
    }
	.ui-accordion-content {
	max-height: 100% !important;
	}
	#accordionTwo .uiacordion-conten{
	background-color:red;
	}

	#accordion4 .ui-accordion-icons:after {
		color: #187bcd;
	}
	#accordion3 .ui-state-active:after{
		color:#187bcd;
	}
	#accordion4 .ui-state-active:after{
		color:#187bcd;
	}
	#accordion3 .uiacordion-conten{
		background-color:red;
	}
	#accordion4 .uiacordion-conten{
		background-color:red;
	}


	.ransomware-fourth h2{
		font-size:42px;
		margin-bottom:40px;
	}
	.ransomware-fourth ul{
		margin-top:40px;
	}
	.digital-ransomware-form .hbspt-form .hs-form .hs_submit .actions .hs-button{
		background-color: #FFB852 !important;
		padding: 3vh 1vw;
		width: 100%;
		color: white;
		font-weight: 900;
		font-size: 16px;
	}
	.ransomware-sixth p{
		margin-bottom:16px;
	}
	.ransomware-sixth {
		background-color: #fff;
	}
	.ransomware-text-video{
		max-width: 50%; 
	}
	.paddi {
		padding:0px 150px 0px 40px;
	}
	.green-nav {
		background: #0f4c83;
	}
	.ransomware-nine {
		background-color: rgba(235, 235, 235, 0.3);
	}

	.ransomware-ten{
		background-color:#0f4c83;
		color:#fff;
	}
	.ransomware-ten h3{
		color:#fff;
	}	
	.ransomware-ten p {
		color:#fff;
	}
	.ransomware-eleven{
		background: linear-gradient(45deg, #0f4c83, #187bcd);
		padding: 90px;
		color: white;
		margin-bottom: 60px;
		align-items: center;
		display: flex;
		justify-content: space-around;
		margin-top: 60px;
	}
	.yellow-btn-2020{
		padding: 3vh 4vw;
		background-color: #FFB852;
  font-weight: 700;
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

#accordion3 .ui-accordion-header {
background-color: rgba(235, 235, 235, 0.3);
}
#accordion4 .ui-accordion-header {
background-color: rgba(235, 235, 235, 0.3);
}
#accordion .ui-state-active:after, #accordion .ui-accordion-icons:after{
color: #0f4c83;
}
.mid-cta-button {
  background-color: #ffb852;
	border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
	margin-top: -4%
}
.row {
  display: flex;
}
.column {
  flex: 50%;
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
.black_box_ransmware{
  max-width: 770px;
  background-color: #000;
  border: solid 1px #a4ca53;
  padding: 30px;
  display: block;
  color: #a4ca53;
  font-size: 16px;
  line-height: 20px;
  position: relative;
   margin: 60px auto;
    word-wrap: break-word;
}
.grndt-sec-nav .container .cont-1 a {
    color: #fff;
    font-weight: 500;
}
.mitadran2 {
  position: relative;
  width: 30%;
  float: left;
}
.black_box_ransmware:before {
   background: #000;
   content: '';
	position: absolute;
  top: -15px;
  left: -15px;
  right: -15px;
  bottom: -15px;
  z-index: -1;
}
	.lista_verde_paloma {
	    margin: 20px 0;
	}
	.lista_verde_paloma li{
		margin-bottom: 20px;
    padding-left: 35px;
    background-image: url(/wp-content/uploads/2020/03/group-9-copy-1.png);
    background-repeat: no-repeat;
    background-position: 0px 5px;
    list-style: none;
    margin-left: 0px;
		color:#fff;
	}
		.lista_verde_paloma2 {
		    margin: 20px 0;
	}
	.lista_verde_paloma2 li{
		margin-bottom: 20px;
    padding-left: 35px;
    background-image: url(/wp-content/uploads/2020/03/group-9-copy-1.png);
    background-repeat: no-repeat;
    background-position: 0px 5px;
    list-style: none;
    margin-left: 0px;
		color:#000;
	}
	.ptb-60 {
		padding:60px 15px !important;
	}	
	.ransomware-eleven .mb-m-60{
		width:70%;
	}
@media only screen and (max-width: 600px) {
		.ransomware-eleven .mb-m-60{
		width:100%;
	}
.paddi {
  padding:20px;
}
.ransomware-eleven{
  padding: 40px;
}
}
-->

<!--  my custom css  -->
html, body {
    overflow: visible;
    background-color: #f9f9f9 !important;
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
.Congrats-on-Your-Dec {
    font-family: Montserrat;
    font-size: 30px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #464643;
	padding-bottom:20px;
}
.row {
  display: flex;
}
.Let-this-valuable-gu {
  font-family: Lato;
  font-size: 16px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.43;
  letter-spacing: normal;
  color: #464643;
}
.Understand-what-to {
  font-family: Lato;
  font-size: 16px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.43;
  letter-spacing: normal;
  color: #4f4f4c;
}
.Ready-Then-lets-g {
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #187bcd;
}
.Step-count {
  font-family: Montserrat;
  font-size: 30px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #215791;
}
.Top-Considerations-B {
  font-family: Lato;
  font-size: 18px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.33;
  letter-spacing: normal;
  color: #464643;
}
.Theres-no-denying-i {
  font-family: Lato;
  font-size: 16px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.43;
  letter-spacing: normal;
  color: #595956;
  background-color: #e6edf5;
  padding: 20px;
}
.Theres-no-denying-i .text-style-1 {
  color: #215791;
}
.Ensure-Your-Active-D {
  font-family: Montserrat;
  font-size: 18px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #464643;
  padding-bottom: 25px;
}
.Ensure-Your-Active-D-01 {
  font-family: Montserrat;
  font-size: 18px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #464643;
  padding-bottom: 10px;
}

.If-youre-an-Active {
  font-family: Lato;
  font-size: 16px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.43;
  letter-spacing: normal;
  color: #797973;
  padding-bottom: 25px;
}

.If-youre-an-Active .text-style-1 {
  color: #3887d7;
}
.Note-for-more-infor {
  font-family: Lato;
  font-size: 12px;
  font-weight: normal;
  font-stretch: normal;
  font-style: italic;
  line-height: 1.33;
  letter-spacing: normal;
  color: #797973;
}
.measure-border{
  padding:0px 20px 20px 20px;
  background-color: #0f4c83;
}
.Measure-twice-cut-o {
 font-family: Lato;
  font-size: 16px;
  font-weight: 500;
  font-stretch: normal;
  font-style: italic;
  line-height: 1.43;
  letter-spacing: normal;
  color: #fff;
}
.Stay-within-budget {
  font-family: Lato;
  font-size: 13px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #464643;
}
.Top-3-Office-365-Mig {
  font-family: Montserrat;
  font-size: 25px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #464643;
}
ul.staff-on-board-list li {
	list-style-type: none;
}
ul.staff-on-board-list li::before {
  content: "\2022";
  color: #669ee8;
  font-weight: bold;
  display: inline-block; 
  width: 1em;
  margin-left: -1em;
}
.Final-thoughts {
	padding-top:100px;
	padding-bottom:100px;
}
.Final-thoughts h3 {
  font-family: Montserrat;
  font-size: 25px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #fff;
  padding-bottom: 30px;
}
.Final-thoughts p {
    font-family: Lato;
    font-size: 16px;
    font-weight: 500;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.64;
    letter-spacing: normal;
    color: #fff;
	padding-bottom: 25px;
}
.get-started button {
    line-height: inherit;
    background-color: #ffb852;
    padding: 10px 50px;
    text-transform: capitalize;
    color: #fff;
    border: #ffb852;
    cursor: pointer;
	margin: 0;
	font-weight: 600;
}
.bg-images button {
    line-height: inherit;
    background-color: #ffb852;
    padding: 0px 15px;
	margin-top:0px;
    text-transform: capitalize;
    color: #fff;
    border: #ffb852;
    cursor: pointer;
	font-weight:600;
	margin-bottom:20px;
	width:auto;
	height:45px;
}
.Final-thoughts-01 h4 {
    color:#fff;
    font-size:25px
}
.Final-thoughts-01 p {
    color:#fff;
    padding-top:25px;
    line-height:20px
}
.padding-top-01 {
    padding-top: 50px;
}
.choose-adv-01 i {
    padding-right: 5px;
    font-size: 16px;
}
.padding-top-25{
	padding-top:25px;
}
.pro-tip {
    background-color: #ffb852;
    width: fit-content;
    padding: 2px 20px;
    color: #fff;
    margin-bottom: 10px;
}
.m-left-01{
	margin-left:1rem !important;
}
ul#step-sec-top li a{
	color:#4f4f4c;
}
section#step-02 {
    background-color: #f9f9f9;
    padding-top: 10px;
    padding-bottom: 30px;
    margin-bottom: 10px;
}
section#step-04 {
    background-color: #f9f9f9;
    margin-top: 70px;
    padding-bottom: 50px;
    margin-bottom: 20px;
}
section#step-06 {
    background-color: #f9f9f9;
    margin-top: 30px;
    padding-top: 30px;
    padding-bottom: 50px;
}
section.ransomware-first {
    background-color: #f9f9f9;
}
.right-sec-form button{
    background-color: #FFB852;
    padding: 0px 30px;
    color: #fff;
    border: none;
    height: 45px;
}
.choose-adv {
    display: flex;
    align-items: center;
}	
</style>

<!-- Gradient Navegation Bar End -->

<!-- first section -->
  <section class="ransomware-first">
    <div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="ptb-40 animatedParent">
					<h2 class="Congrats-on-Your-Dec">Congrats on Your Decision to Switch to Office 365!</h2>
					<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/computers.jpg">					
					</div>	
					<p style="padding-top:25px;" class="If-youre-an-Active">Let this valuable guide make your migration as seamless as possible and ensure success throughout the entire process by helping you:</p>
					<ul id="step-sec-top" class="m-left-01">
						<li class="Understand-what-to"><a href="https://www.anexinet.com/the-step-by-step-guide-for-migrating-to-office-365/#step-01">Understand what to consider before migrating</a></li>
						<li class="Understand-what-to"><a href="https://www.anexinet.com/the-step-by-step-guide-for-migrating-to-office-365/#step-02">Determine your ideal license</a></li>
						<li class="Understand-what-to"><a href="https://www.anexinet.com/the-step-by-step-guide-for-migrating-to-office-365/#step-03">Choose your migration strategy</a></li>
						<li class="Understand-what-to"><a href="https://www.anexinet.com/the-step-by-step-guide-for-migrating-to-office-365/#step-04">Get your staff on-board</a></li>
						<li class="Understand-what-to"><a href="https://www.anexinet.com/the-step-by-step-guide-for-migrating-to-office-365/#step-05">Increase end-user adoption</a></li>
						<li class="Understand-what-to"><a href="https://www.anexinet.com/the-step-by-step-guide-for-migrating-to-office-365/#step-06">Build your support plan</a></li>
					</ul>
					<p class="Ready-Then-lets-g">Ready? Then, let's go!</p>					
				</div>
			</div>
			<div class="col-md-6 right-sec-form">
			<div data-form-block-id="4a5c8944-a2bf-ea11-a812-000d3a33b4ee"></div> <script src="https://mktdplp102cdn.azureedge.net/public/latest/js/form-loader.js?v=1.64.2003.0"></script> <div id="dfslGs2ThqyVaTDao6iEYXRzT4e-_JrwHh_xYG-U1bhw"></div><script language="javascript" type="text/javascript">(function (id, f, t, ws, ms_tr_il_08, ms_tr_il_w_01) { var tr = function (cb) { var count = 0; var callback = function () { if (count == 0) { count++; if (w) { w.w(id, t, cb); } } }; var ts = document.createElement('script'); ts.src = ws; ts.type = 'text/javascript'; ts.onload = callback; ts.onreadystatechange = function () { if (this.readyState == 'complete' || this.readyState == 'loaded') { callback(); } }; var head = document.getElementsByTagName('head')[0]; head.appendChild(ts); }; if (typeof ms_tr_il_08 === 'function') { if (ms_tr_il_w_01 === null) { tr(function() { ms_tr_il_08(id, f, t); }); } else { ms_tr_il_w_01.w(id, t, function(websiteVisitedParams) { ms_tr_il_08(id, f, t, websiteVisitedParams); }, null); } } else { tr(); }})('fslGs2ThqyVaTDao6iEYXRzT4e-_JrwHh_xYG-U1bhw', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/f', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t/w', typeof ms_tr_il_08 === "undefined" ? null : ms_tr_il_08, typeof ms_tr_il_w_01 === "undefined" ? null : ms_tr_il_w_01);</script>

			</div>
		</div>
	</div>		
</section>

<!-- Second Section  -->


  <section id="step-01" class="ransomware-Second">
    <div class="container">
		<div class="row padding-top-01">
			<div class="col-md-6">
				<div class="ptb-40-second">
					<h2 class="Step-count">Step 1</p>
					<p class="Top-Considerations-B">Top Considerations Before Migrating</p>
				</div>
			</div>
			<div class="col-md-6">
				<p class="Theres-no-denying-i">There's no denying it. The Cloud is here, and Email should logically be the first thing to migrate. Email requires the most storage and-despite what Microsoft says-it consumes more lOPS (lnput/output operations per second) on your storage area network (SAN) than it should. So far, so good. But <span class="text-style-1">how do you ensure a successful Email migration for your organization?</span> The prudent move would be to engage Anexinet, But if poorer judgment prevails (and you don't call us), here’s a quick primer to explain the first few steps in the process:</p>
			</div>
		</div>
		<div class="row padding-top-01">
			<div class="col-md-8">
				<h3 class="Ensure-Your-Active-D-01">Ensure Your Active Directory is Healthy</h3>
				<p class="If-youre-an-Active">If you’re an Active Directory house (and you probably are), you’re most likely going to use something called <span class="text-style-1"><a href="https://www.microsoft.com/en-us/download/details.aspx?id=47594">Azure AD Connect (AADC)</a></span>. This allows folks to login with the same credentials they use for applications not being moved to the cloud.</p>
				<p class="If-youre-an-Active">But first, you need to ensure your Active Directory is healthy enough to synchronize with Azure. This means bringing a couple of tools into play.</p>
				<p class="If-youre-an-Active">First, review your Organizational Unit (OU) structure and decide if you want all that extraneous data pushed into the cloud. Many objects aren’t necessary in the cloud, so why push them there? Perhaps all you need migrated are user accounts and some distribution and security groups. Better to adjust the structure so that when you select the OUs to synchronize in Azure AD Connect (AADC), you don’t have to jump through more hoops to select what you want (and deselect what you don’t).</p>
				<p class="If-youre-an-Active">Next, run Microsoft’s <span class="text-style-1"><a href="https://www.microsoft.com/en-us/download/details.aspx?id=36832">IdFix</a></span> tool. This will provide a report of all the fields (names, addresses, etc.) that are incompatible with Azure Active Directory. IdFix also finds duplicate addresses and invalid characters. Since you’ve already tidied-up the OU structure, you can tackle the objects you know are in-scope first, then return to clean up the rest of the directory when time permits.</p>
				<p class="If-youre-an-Active">Azure AD Connect has specific requirements, so review this <span class="text-style-1"><a href="https://docs.microsoft.com/en-us/office365/enterprise/set-up-directory-synchronization?redirectSourcePath=%252fen-us%252farticle%252fset-up-directory-synchronization-for-office-365-1b3b5318-6977-42ed-b5c7-96fa74b08846"> link </a></span> and carefully follow them. The sites that only discuss AADC will tell you the AD Forest Functional Level (FFL) only needs to be 2003 or higher. While this is technically correct, you’ve probably got Exchange in the mix and you’re probably going to deploy an Exchange “hybrid” server, so you can manage users from an on-premises resource, which means you’ll need the FFL to be at least 2008 R2. Thankfully, the AADC is relatively easy to install and configure.</p>
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-5-3-x.png">
				</div>
			</div>
		</div>		

		<div class="row padding-top-01">
			<div class="col-md-8">
				<h3 class="Ensure-Your-Active-D-01">Review Your Current Email Environment</h3>
				<p class="If-youre-an-Active">Let’s assume you’re running Exchange (if you were running Notes you’d have greyer hair). First, you’ll want to review your Exchange environment to make sure it meets the minimum requirements. The bare minimum is Exchange 2010 SP3. That may seem old, but I’ve encountered Exchange 2010 SP2 a handful of times over the past year so it’s by no means a statistical outlier.</p>
				<p class="If-youre-an-Active">Spend some time cleaning up old distribution lists and removing mailboxes that are no longer required or in use. You don’t want to waste time (and perhaps licenses) on old data and users who are no longer with the company. Work with HR to clean the Exchange databases and purge any mailboxes that are no longer required. Management, legal and perhaps HR will also have a handle on how much Email ought to be retained. Sometimes, policies to purge old data are not universally applied. Don’t forget to ask users to purge data they know they shouldn’t keep but are reluctant to delete. The more unnecessary data you have, the longer it will take to move the good data to Exchange online.</p>
				<p class="If-youre-an-Active">Additionally, review your send and receive connectors. Sometimes, SMTP connectors persist that aren’t needed. Perhaps you switched from Mimecast to ProofPoint, or vice-versa. You don’t want to retain confusing information in the new environment.</p>
				<p class="If-youre-an-Active">Ideally, you’ll want an Exchange 2016 server in the environment, because it shares a similar look and feel with Office 365 Email Management. <span class="text-style-1"><a href="https://gallery.technet.microsoft.com/exchange/Rapid-Migration-from-1daaee0c">This Microsoft guide</a></span> will help you migrate a legacy Exchange 2010 server environment to Exchange 2016. Once you introduce this server into the environment, run the Hybrid Configuration Wizard (information on this is <span class="text-style-1"><a href="https://docs.microsoft.com/en-us/previous-versions/exchange-server/exchange-150/mt595788(v=exchg.150)">here</a></span>). This tool will create the necessary federation connections to the Office 365 tenant, letting you make changes to user mailboxes using the on-premises server, and then sync those changes to the cloud. You can also use this system to initiate the migration of on-premises mailboxes to Office 365.</p>
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-6-3-x.png">
				</div>
			</div>
		</div>		

		<div class="row padding-top-01">
			<div class="col-md-8">
				<h3 class="Ensure-Your-Active-D-01">Prepare Your Existing Email Security & Hygiene</h3>
				<p class="If-youre-an-Active">Message hygiene solutions are prevalent these days, both on-premises and cloud-based. These include Mimecast, ProofPoint, and Barracuda, to name just three. Each of these offers documentation on integrating with Office 365. Mainly, these services scan and pass SMTP traffic, so there’s little else that need be done. Download the relevant documentation from the vendor and review the Office 365 sections. These will help you configure the service to send Email into Office 365 rather than to the on-premises server, as well as configuring the outbound connector to send messages from Office 365 into the cloud-based solution.</p>
				<p class="If-youre-an-Active">If you have an existing on-premises hygiene solution, you’ll be getting rid of it. You don’t want your Email travelling out of Office 365 to your data center and then out again to the Internet. That’s pretty inefficient. Instead, implement a cloud-based hygiene solution from either your on-premises vendor, or have Microsoft take care of all the hygiene and data loss prevention (DLP in the parlance) for you.</p>				
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-7-3-x.png">
				</div>
			</div>
		</div>		

		<div class="row padding-top-01">
			<div class="col-md-8">			
				<h3 class="Ensure-Your-Active-D-01">Gather Info About All Applications & Services for SMTP Relay</h3>
				<p class="If-youre-an-Active">For many organizations this is going to be the thing that is most visible and takes the most time. You’ll want to gather all the information from your phone service vendor about voicEmail-to-Email integration (e.g. are you using Cisco, Mitel, Avaya, etc.?).</p>
				<p class="If-youre-an-Active">For instance, you’ll want to know the locations of all the fax servers because they‘ll need to be reconfigured to send faxes to an Office 365 mailbox rather than to the local Exchange server—not least because the server they currently communicate will be decommissioned as part of this migration exercise (and is almost certainly out of support, anyway).</p>
				<p class="If-youre-an-Active">Gather information about all applications deployed on-premises that need to send Email. Your IT help desk system, timesheet system, and expense notifications will all need to start delivering Email to Office 365. At your earliest opportunity, document everything and discuss reconfiguring the applications with the service owners. It’s best to get these things ironed out before moving users.</p>
				<p class="If-youre-an-Active">When planning your move to Office 365, one decision will be whether to continue with the distribution groups as-is, or move them to shared mailboxes or Office 365 groups. Some applications don’t like to communicate with shared mailboxes, but instead require a “conventional” mailbox. Don’t just assume you can make an Office 365 shared mailbox for all the applications delivering Email. Some incompatibility is possible, so be sure to research the vendor documentation. Luckily, you can convert from shared to normal, and back. Remember though, that if you convert from a shared mailbox, you will have to assign a license. So, it’s in your best interest to maintain a shared mailbox since it’s cheaper for the business.</p>

			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-8-3-x.png">
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- End Second Section  -->	


<!-- bg image Section  -->	

<section class="bg-images">
	<div class="mid-cta container-fluid" style="background-image: url('https://www.anexinet.com/wp-content/uploads/2020/08/photo.png'); background-size: cover; height: auto; padding-bottom:70px; padding-top:70px;">
		<div class="row">
			<div class="offset-md-1 col-md-7 Final-thoughts-01">				
				<div class="choose-adv-01"><button><i class="fa fa-lightbulb-o" aria-hidden="true"></i> TIP SHEET</button>
				</div>
				<h4>5 Critical Considerations for your Office 365 Migration</h4>
				<p>Uncover critical questions to ensure your migration successfully<br> optimizes performance & encourages adoption</p>
			</div>
			<div class="col-md-4 choose-adv">
				<button>Download Now</button>
			</div>
		</div>	
	</div>
</section>


<!-- End bg image Section  -->	


<!-- Step 2 Start -->

 <section id="step-02" class="ransomware-Second">
    <div class="container">
		<div class="row padding-top-01">
			<div class="col-md-6">
				<div class="ptb-40-second">
					<h2 class="Step-count">Step 2</p>
					<p class="Top-Considerations-B">Determine the License You Need</p>
					<p class="Note-for-more-infor">Note: for more information on licensing, be sure  to check out this <span class="text-style-1"><a href="https://www.anexinet.com/blog/which-office-365-license-do-i-need/">additional blog post.</a></span></p>
				</div>
			</div>
			<div class="col-md-6">
				<p class="Theres-no-denying-i">Licensing has changed radically from the methods you’ve gotten used to. You probably used a tool (possibly just a spreadsheet) to keep track of all server and client-access licenses (CALs). There was no physical relationship between how many mailboxes you had in operation and how many CALs you actually had. Obviously, you’d perform regular true-ups to align your use with your licensing obligations to Microsoft as the business expanded. But in Office 365 you can’t even give a user access to Office 365 resources without a license. But what license should you deploy? Here’s an overview:</p>
			</div>
		</div>
		<div class="row padding-top-01">
			<div class="col-md-12">
				<p class="If-youre-an-Active">For users who just need basic browser-based access to Email, an E1 license might suffice. No downloadable versions of Microsoft Office are available with this license, but Skype and Teams are available in the browser and the mailbox size can be as large as 50GB.</p>
				<p class="If-youre-an-Active">If your users need a local installation of Office, an E3 license is necessary. In addition to downloadable Office software, the package also includes eDiscovery, archiving, legal hold, and a maximum mailbox size of 100GB.</p>
				<p class="If-youre-an-Active">Other tiers and packages are available; those mentioned here are the most common. The takeaway here is to prepare an Active Directory group for each license type you’ll need—including add-on license packs such as Mobility or Azure Premium—and populate the groups with user IDs. Next, license the groups in Office 365 in order to know precisely how many licenses you have, how many you need, and who has what license. In this manner, you’ll also be able to tell if you’re short any licenses—and can take the necessary corrective steps—even before you’ve performed any migrations.</p>
				<p class="If-youre-an-Active">Another tangential aspect of licensing is that of shared mailboxes and resources. While user and service accounts do incur a license cost, shared mailboxes and resources do not. Bear this in mind when calculating your licensing needs. When you plan the migrations, be sure to convert the mailboxes to shared, and room or equipment resources as soon as the cut-over completes. You’ll discover that some applications (likely legacy) cannot be used with shared mailboxes. Unfortunately, you’ll have to assign a license to these mailboxes, but won’t be able to convert them to shared mailboxes in Office 365.</p>
			</div>
		</div>		

		<div class="row padding-top-0001">
			<div class="col-md-8">
				<h3 class="Ensure-Your-Active-D-01">Management Model – Delegate Functions</h3>
				<p class="If-youre-an-Active">Office 365 allows you to delegate far more functions than before, so it’s important to ensure you won’t be burdened with managing the whole environment by yourself. Assign users in finance responsibility for billing. Think carefully about which roles to assign to current Active Directory admins; the User Management Administrator role is probably more appropriate than Global Admin (who has rights over everything). Similarly, assign Exchange Admin and SharePoint Admin to those administrators rather than the Global Admin role. Your admins will know they’ve been granted administrator rights because the Admin Tile will appear on their personal Office 365 portal, and they will see only links to those tasks to which they’ve been assigned.</p>
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-9-3-x.png">
				</div>
			</div>
		</div>		

		<div class="row padding-top-0001">
			<div class="col-md-8">
				<h3 class="Ensure-Your-Active-D-01">File Storage – Take a Look at Your Sharing Policy in OneDrive</h3>
				<p class="If-youre-an-Active">Say you have a lot of data stored in Windows, or on other file servers and NAS systems. When moving to OneDrive in Office 365, not only will your users be able to store files in the cloud, they may also—if you permit it—share data with users inside and outside your organization. When you set up your tenant, take a look at the OneDrive admin console when setting up the sharing policy. The default is pretty wide open so you’re going to want to dial that down to a level your organization will be happy with. You may configure more than just Email with a retention policy, so be sure to have this in place before migrating users to the cloud. The same goes for DLP policies and any data that might be subject to legal hold. In terms of policy and retention, everything you can do in Exchange, you should also plan for in OneDrive.</p>

				<p class="If-youre-an-Active">Of course, you might not want to use that storage. Perhaps your file services aren’t ready (or appropriate) to move to the cloud. In this case, simply disable OneDrive. Work through the options with the business and implement before migrating any users.</p>
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-10-3-x.png">
				</div>
			</div>
		</div>		

		<div class="row padding-top-0001">
			<div class="col-md-8">			
				<h3 class="Ensure-Your-Active-D-01">File Storage – Take a Look at Your Sharing Policy in OneDrive</h3>
				<p class="If-youre-an-Active">Be aware, moving personal data to Office 365 exposes it to greater threats and challenges. You may already have a solution for managing devices that roam outside company property. And if so, great. All the major vendors offer solutions for managing access to Office 365, though some charge for the add-on security. But what if you don’t have a device management solution, or even an enforceable policy? Until now, you’ve been able to permit Email on mobile and home devices with great ease through ActiveSync and OWA. But without additional high-maintenance infrastructure, access to collaborative resources, such as SharePoint and Skype, have been out of reach. Carefully consider what you want to allow on devices your company doesn’t own, and what to permit outside the company environment on devices they do own. Plan to allow the same level of functionality in either case, and also plan to permit access to data located inside the company VPN. Review some basic security on the devices and require a configuration policy to set a PIN, PIN expiry, minimum device OS version, and so forth. If the devices are owned by the company, the company has the right to enforce policies. If users are allowed to use their own devices to connect to company data, they’re obliged to accept some restrictions in return for the access.</p>
			</div>
			<div class="col-md-4">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-11-3-x.png">
				</div>
			</div>
		</div>
		<div style="padding: 30px 20px;" class="row padding-top-01">
			<div class="col-md-12 measure-border">
				<p class="pro-tip">Pro-Tip</p>
				<p class="Measure-twice-cut-o">Measure twice, cut once! You have only one chance to get your Office 365 deployment right, so it’s vital to spend as much time as you need to map out your infrastructure, what services to migrate, and when to do the migrations. Gather all the info you can from your current Exchange environment: mailbox sizes, users on legal hold, and users with archived mailboxes. Purge your Active Directory of extraneous user accounts and groups you don’t need to replicate up to Azure AD. Understanding your licensing requirements matters because this represents a significant monthly cost to the business. Work with stakeholders—such as application or systems owners—who need to receive faxes, send helpdesk tickets and forward that data to mailboxes or SharePoint sites that will now be in Office 365.</p>
			</div>
		</div>
	</div>	
</section>

<!-- Step 2 end -->


<!-- Step 3 Start -->

 <section id="step-03" class="ransomware-Second">
    <div class="container">
		<div class="row padding-top-01">
			<div class="col-md-6">
				<div class="ptb-40-second">
					<h2 class="Step-count">Step 3</p>
					<p class="Top-Considerations-B">Choose Your Migration Plan Strategy</p>
				</div>
			</div>
			<div class="col-md-6">
				<p class="Theres-no-denying-i">Once your organization has decided to migrate to Office 365, many planning and execution strategies to ensure a successful migration must be considered. Let’s look at some of the less-technical aspects that enable a successful Office 365 journey, including what to focus on when developing your Migration Plan and best practices when selecting your Subject Matter Experts (SME).</p>
			</div>
		</div>
		<div class="row padding-top-01">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Select Your Subject Matter Experts (SMEs)</h3>
				<p class="If-youre-an-Active">First, you’ll need to ensure your organization has the correct SMEs in its migration team. SMEs include technical and business teams, such as Network, Exchange, Active Directory, Information Security, Communication, Help Desk & Desktop support leads. These individuals will play an important role in decision making, user acceptance testing and execution. It’s also beneficial to include a 3rd party integration partner, like Anexinet, one that has the expertise to guide you through a successful migration.</p>
			</div>
		</div>		

		<div class="row padding-top-0001">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Developing Your Migration Plan</h3>
				<p class="If-youre-an-Active">A Migration Plan is crucial to the overall strategy of any migration.<br>A few things to keep in mind when developing your strategy are:</p>
			</div>
			
		</div>	
		
		<div class="row padding-top-0001">
			<div class="col-md-3">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-12-3-x.png">
				</div>
				<p class="Stay-within-budget">Stay within budget</p>
			</div>	
			<div class="col-md-3">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-13-3-x.png">
				</div>
				<p class="Stay-within-budget">Maintain organizational security</p>
			</div>	
			<div class="col-md-3">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-14-3-x.png">
				</div>
				<p class="Stay-within-budget">Aim for a target completion date</p>
			</div>	
			<div class="col-md-3">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/recurso-15-3-x.png">
				</div>
				<p class="Stay-within-budget">Keep users happy</p>
			</div>
			<div class="col-md-10">
				<p class="If-youre-an-Active padding-top-25">Now let’s take a look at the top three strategies for migrating to Office 365 to help you determine which approach best suits your organization: Staged-Exchange Migration, Cutover-Exchange Migration, and Hybrid-Exchange Migration.</p>
				<h3 style="padding-top:50px;" class="Ensure-Your-Active-D-01">Top 3 Office 365 Migration Strategies</h3>
			</div>
			
		</div>		

		<div class="row padding-top-01">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">1.  Staged-Exchange Migration</h3>
				<p class="If-youre-an-Active">When developing a migration plan, an organization may take several approaches. One strategy—most commonly used by large organizations—is a “Staged-Exchange Migration” or “Phased” Migration. This strategy schedules the migration in “waves” based on the project-completion timeline. This timeline, in turn, should be based upon the number of users and the amount of data to be migrated.</p>

				<p class="If-youre-an-Active">When creating your migration waves, always consider the Shared/Resource Mailboxes. Migration waves may be categorized by geographical or physical location, by department, or by mailbox size. Regardless of which method you use, always consider users who have access or mailbox delegation to a Shared/Resource Mailbox. For example: Administrative assistants should be migrated with the individuals whose mailboxes they manage.</p>

				<p class="If-youre-an-Active">The same goes for the “Accounting” team—regardless of their geographical or physical location. Those who have access to the “Accounting” mailbox should also be migrated in the same migration wave. This will not always be an easy task; however, it will alleviate issues and reduce support calls during the coexistence period.</p>

			</div>
			<div class="col-md-12">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/bitmap-2-2.png">
				</div>	
			</div>
		</div>		

		<div class="row padding-top-01">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">2. Cutover-Exchange Migration</h3>
				<p class="If-youre-an-Active">A second migration strategy is the “Cutover-Exchange Migration.” This is good for small organizations looking for a fast migration cutover (say, over a weekend). A cutover migration is recommended for organizations utilizing an on-premises Exchange Server (2003 or later) or an on-premises Exchange with fewer than 2,000 mailboxes.</p>
			</div>
			<div class="col-md-12">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/bitmap-2-3.png">
				</div>
			</div>
		</div>		

		<div class="row padding-top-01">
			<div class="col-md-12">			
				<h3 class="Ensure-Your-Active-D-01">3. Hybrid-Exchange Migration</h3>
				<p class="If-youre-an-Active">The third option is a “Hybrid Exchange Migration.” This allows for long-term, cross-premises coexistence, in which your organization’s end state is both on-premises Exchange and Office 365. This approach may be required when some mailboxes or 3rd party applications (that integrate with Exchange) aren’t compatible with Office 365.</p>

				<p class="If-youre-an-Active">The Hybrid Exchange Migration approach lets an organization keep a leg in the Exchange and Office 365 worlds, while also allowing it to move a select number of users or departments (at a time) into Office 365, at a pace suited to the organization’s needs.</p>

				<p class="If-youre-an-Active">To utilize this approach, your organization will need to meet some requirements. First, you’ll need to setup (or have in place) a Hybrid Server to host the connection between your on-premises Exchange Server and Office 365. You’ll also need to utilize Directory Synchronization (such as Azure AD Connect Sync), since a Hybrid configuration relies on it.</p>
			</div>
			<div class="col-md-12">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/bitmap-2-4.png">
				</div>
			</div>
		</div>
		<div class="row padding-top-01">		
			<div class="col-md-12 measure-border">
				<p class="pro-tip">Pro-Tip</p>
				<p class="Measure-twice-cut-o">The strategy an organization ultimately chooses is dependent on its environment, priorities and culture. When determining their ideal Office 365 migration strategy, an organization must ask, “What’s the best way to improve the performance of our data migration, optimize the migration pace, minimize downtime, and achieve a positive user experience?”</p>
			</div>
		</div>
	</div>	
</section>

<!-- Step 3 end -->


<!-- Step 4 Start -->

<section id="step-04" class="ransomware-Second">
    <div class="container">
		<div class="row padding-top-01">
			<div class="col-md-6">
				<div class="ptb-40-second">
					<h2 class="Step-count">Step 4</p>
					<p class="Top-Considerations-B">Get Your Staff On-Board with Your Migration</p>
				</div>
			</div>
			<div class="col-md-6">
				<p class="Theres-no-denying-i">When developing a solid communications plan, it’s best to start early to ensure the correct team members are included in the process. Namely, recruit executive-level adoption, technical writers, and anyone from the corporate communications team to review and send communication Emails. The actual plans will lay out exactly what communications should be sent, in what form, to what users, at what times. Nowadays most communication will be in the form of Emails. These may be mass-distributed, precisely targeted, or both. It all depends on the specific situation and your organization.</p>
			</div>
		</div>
		<div class="row padding-top-01">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Office 365 Communication Content Tips</h3>
				<p class="If-youre-an-Active">As part of the migration process, your organization will need to send several communication Emails. Here are a few suggestions:</p>
			</div>
		</div>		
		
		<div class="row padding-top-0001">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Initial Announcement Email:</h3>
			</div>

			<div class="col-md-1">
				<div class="text-center">
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/announcement.png">
				</div>
			</div>
			<div class="col-md-11">
				<ul class="staff-on-board-list">
					<li>Send at least 3-6 months prior to migration, depending on the size of your organization.</li>
					<li>Content should let the entire userbase know the organization is moving to Office 365.</li>
					<li>Email should communicate excitement and enthusiasm. Include a list of benefits and describe how O365 will increase both in-office and remote productivity.</li>
				</ul>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Follow-Up Emails:</h3>
			</div>

			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/followup.png">
				</div>
			</div>
			<div class="col-md-11">
				<ul class="staff-on-board-list">
					<li>Send at least twice per month.</li>
					<li>Emails should also be exciting and contain a more detailed description of O365’s benefits. For instance, describe how MS Teams boosts internal communication via collaboration and chat.</li>
					<li>Describe the greater storage limits in Exchange/Outlook, OneDrive & SharePoint, as well as the added benefits of the suite’s mobile features.</li>
					<li>Emails should also include a high-level approach to any pre-training information that will be performed pre- and post-migration.</li>
				</ul>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Specific User-Wave Targeted Emails (1-2 weeks prior):</h3>
			</div>

			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/emails-1.png">
				</div>
			</div>
			<div class="col-md-11">
				<ul class="staff-on-board-list">
					<li>Send approximately 1-2 weeks prior to a specific user-migration batch.</li>
					<li>Emails should target specific users scheduled for migration in the next 1-2 weeks.</li>
					<li>Emails should indicate the expected date each user is scheduled to be migrated.</li>
					<li>Content should also include information on how and where to report issues, location of FAQ’s, and any known/expected issues.</li>				
				</ul>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Specific User-Wave Targeted Emails (1-2 days prior):</h3>
			</div>

			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/emails-2.png">
				</div>
			</div>
			<div class="col-md-11">
				<ul class="staff-on-board-list">				
					<li>Send 1-2 business days prior to a specific user-migration batch.</li>
					<li>Email should target specific users scheduled for migration in the next day or two.</li>
					<li>Content should contain specific tasks the user should perform and document prior to leaving the office the following day.</li>
					<li>Content should also include information on how and where to report issues, location of FAQ’s, and any known/expected issues.</li>
				</ul>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Specific User-Wave Targeted Emails (day after):</h3>
			</div>

			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/emails-3.png">
				</div>
			</div>
			<div class="col-md-11">
				<ul class="staff-on-board-list">				
				<li>Should be sent the day after a specific user-migration batch.</li>
				<li>Email should target users who have been migrated as part of the specific user-migration batch.</li>
				<li>Email should congratulate the user on a successful migration.</li>
				<li>Content should also include information on how and where to report issues, location of FAQ’s, and any known/expected issues.</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Step 4 end -->



<!-- Step 5 Start -->

<section id="step-05" class="ransomware-Second">
    <div class="container">
		<div class="row padding-top-01">
			<div class="col-md-6">
				<div class="ptb-40-second">
					<h2 class="Step-count">Step 5</p>
					<p class="Top-Considerations-B">Increase End User Adoption with a Training Plan</p>
				</div>
			</div>
			<div class="col-md-6">
				<p class="Theres-no-denying-i">End-user adoption is one of the most critical aspects of your O365 rollout, and can literally mean the difference between a dud and a success. Here are the most crucial elements to include:</p>
			</div>
		</div>
		<div class="row padding-top-01">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Crucial Elements to Include in Your Office 365 Training Plan</h3>
				<p class="If-youre-an-Active">Developing an effective training plan means anticipating and documenting all the questions users may have and providing adequate training materials. Training should take several approaches and be geared toward maximizing training effectiveness (along with the users’ time) during the sessions.</p>
			</div>
		</div>		
		
		<div class="row padding-top-0001">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Useful training methods that have proven effective  for specific user-types:</h3>			
			</div>		

			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/vip.png">
				</div>
			</div>	
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">VIP-Specific Material</h3>
				<p class="If-youre-an-Active">Specific to executive staff and assistants, the main focus here would be on the “White Glove Treatment.” This consists of a select, dedicated group of technicians skilled at troubleshooting and interacting with executives. All VIP troubleshooting is typically coordinated with the executive’s assistant.</p>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/migration.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Onsite Migration-Prep Sessions</h3>
				<p class="If-youre-an-Active">The target audience for Onsite Migration Prep Sessions should include all user types, and the content should include general info on what users will experience and what they will be required to do as part of the migration process. Example topics include a user migration demo/test, known/expected issues users may encounter as part of the migration process, a catalog of items that will (and won’t) be migrated, and (reiteration of) the details of the post-migration support-request process.</p>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/lunch.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">User Lunch & Learns</h3>
				<p class="If-youre-an-Active">User Lunch & Learns should include a demo of the benefits and features Office 365 has to offer. Topics should include: how to request permissions to shared mailboxes, how to save files to OneDrive, how to properly and effectively collaborate using MS Teams (including chat and meeting-scheduling). Additional topics might include a deeper dive into Outlook’s features, depending on the organization’s level of expertise.</p>			
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/faq.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">FAQ Document</h3>
				<p class="If-youre-an-Active">When transitioning to O365, a detailed FAQ document is always helpful as it provides information on what users should expect as part of the migration. An FAQ document should include what users should do prior to leaving the office the day before their scheduled migration, along with what will be expected of them following the migration. It’s also important to document any “known issues,” along with a running list of frequent questions being called in to the helpdesk to help reduce future helpdesk calls. This document should be posted on the organization’s intranet and the link Emailed to users as part of communications.</p>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/webinars.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Live Webinars—Pre- and Post-Migration</h3>
				<p class="If-youre-an-Active">Internal support staff should conduct live webinars, utilizing a 3rd party partner to assist in hosting sessions, specifically around pre- and post-migration questions and issues. This also represents a great opportunity to stay ahead of the game regarding documentation in order to help eliminate or reduce repeat questions/calls to your support staff.</p>
			</div>
		</div>

		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/intranet.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Intranet Site Information</h3>
				<p class="If-youre-an-Active">All the applicable information your IT team has developed as part of their testing and pilot experience should be placed on an intranet site. Be sure to capture all material used to document the user experience around pilot migrations, FAQ, as well as feedback from pilot users and helpdesk scripts.</p>
			</div>
		</div>

		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/support.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Support Training</h3>
				<p class="If-youre-an-Active">Support training materials are specifically targeted to your helpdesk, desktop and onboarding teams. Content should include specifics around O365 support training, including how support staff would add new users, delete users, change SMTP addresses, apply Legal Hold, apply mailbox permissions, create Microsoft support tickets, view the O365 Service Health Portal, and perform O365 connectivity testing (<a href="https://testconnectivity.microsoft.com/">https://testconnectivity.microsoft.com</a>).</p>
			</div>
		</div>
	</div>
</section>

<!-- Step 5 end -->

<!-- Step 6 Start -->

<section id="step-06" class="ransomware-Second">
    <div class="container">
		<div class="row padding-top-01">
			<div class="col-md-6">
				<div class="ptb-40-second">
					<h2 class="Step-count">Step 6</p>
					<p class="Top-Considerations-B">Build a Support Plan</p>
				</div>
			</div>
			<div class="col-md-6">
				<p class="Theres-no-denying-i">Developing an effective Support Plan is always a crucial element of any O365 deployment as it will ensure the business continues to function seamlessly, without any loss in productivity. When developing a support plan, the first step is to identify all the teams in your organization affected by a support or escalation call.</p>
			</div>
		</div>
		
		<div class="row padding-top-01">
			<div class="col-md-12">
				<h3 class="Ensure-Your-Active-D-01">Examples of what to include in your support plan:</h3>
			</div>		


			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/migration-1.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Onboarding Process</h3>
				<p class="If-youre-an-Active">Developing an onboarding process and designating the responsible teams (post-migration) is a critical step. At some point, your organization will need to stop creating mailboxes via a legacy process and start creating them using Microsoft’s recommended method (the Microsoft Azure Active Directory Synchronization Tool or Microsoft Azure Active Directory Sync Services) in order to synchronize/create on-premises users in Office 365. After migrating mailboxes to Office 365, you’ll be able to manage user accounts on-premises via Active Directory, which would then synchronize with Office 365. For additional information on directory synchronization, refer to this Microsoft article on <span class="text-style-1"><a href="https://docs.microsoft.com/en-us/previous-versions/azure/azure-services/jj573653(v=azure.100)">Directory integration.</a></span></p>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/support-1.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Helpdesk Process</h3>
				<p class="If-youre-an-Active">Ensure all helpdesk processes are in place at least one week prior to production migration. This will allow your team to be prepared for—and focused on—handling support calls, versus having to tidy up helpdesk scripts and processes at the last minute</p>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/escalation.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Escalation Support</h3>
				<p class="If-youre-an-Active">Developing and implementing a well-designed escalation path for Level 1, 2 and 3 support prior to migration will reduce user frustration by ensuring support staff is comfortable handling high-priority issues and knows where and to whom they should be escalated.</p>			
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/tools.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Equip Support Teams</h3>
				<p class="If-youre-an-Active">Ensure all support teams are informed on migration dates and on which users are being migrated. Provide them with adequate training and materials for troubleshooting.</p>
			</div>
		</div>
		
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/staff.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Ramp-Up Support Staff</h3>
				<p class="If-youre-an-Active">To handle the increased call volume and eliminate extended wait-times and walk-up visits, it’s beneficial to increase the number of Support Techs available during and after the migration.</p>
			</div>
		</div>
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/call.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Call-Number Option</h3>
				<p class="If-youre-an-Active">Enact a specific Call-Number Option for users experiencing migration-related issues. This will let your helpdesk handle migration-related calls more efficiently as they will be quickly directed to a support tech who will be immediately aware if the user is inquiring about an Office 365 or migration-related issue.</p>
			</div>
		</div>
		<div class="row padding-top-0001">
			<div class="col-md-1">
				<div class="text-center">	
					<img src="https://www.anexinet.com/wp-content/uploads/2020/08/analytics.png">
				</div>
			</div>
			<div class="col-md-11">
				<h3 class="Ensure-Your-Active-D-01">Analytics</h3>
				<p class="If-youre-an-Active">Ensure proper daily analytics are collected, analyzed, and sent to requisite stakeholders. This allows the stakeholders and technical support staff to implement any processes, technical needs or helpdesk scripts that may be required to efficiently handle issues that arise during and after the migration.</p>
			</div>
		</div>
	</div>
</section>

<!-- Step 6 end -->


<!-- bg images section -->

<section class="bg-images">
	<div class="container-fluid mid-cta" style="background-image: url('https://www.anexinet.com/wp-content/uploads/2020/08/group-36.png'); background-size: cover; height: auto;">
		<div class="row">
			<div class="offset-md-1 col-md-10 offset-md-1 Final-thoughts">
				<h3>Final Thoughts</h3>
				<p>While the benefits of moving to Office 365 are many, laying-out a comprehensive plan beforehand is critical to ensure project success, optimizing and accelerating your migration while avoiding the usual risks, letting you maintain productivity and realize fast gains on initial investment. Whether you’re upgrading from an older version of Exchange, Lotus Notes, or transferring data from tenant to tenant, a seamless, secure migration is key to minimizing disruption.</p>

				<p>Anexinet’s <a href="https://insights.anexinet.com/office-365-migration-kickstart" style="color:gold;">Office 365 Migration Strategy Kickstart</a> prepares your organization for a successful Office 365 migration. Anexinet takes a holistic, best practices approach to Office 365 migration that optimizes performance and encourages adoption through training. Our consultants guide your organization through the migration lifecycle, steering you around potential pitfalls to guarantee a successful outcome.</p>

				<p>Our Office 365 Migration Strategy Kickstart enables process efficiencies on day one, strengthens your security organization, assesses the preparedness of your infrastructure, and generates an Office 365 Adoption Roadmap. All in just two short weeks.</p>
			</div>
		</div>
	</div>
</section>

<!-- end bg images section -->


<!-- /First Section -->

	
	
	
</div>



	
	
<!--
<span id="final_analysis"></span>
    <section class="ransomware-ten ptb-60" style="display:none">
      <div class="container animatedParent">
        <h3 style="margin-bottom:20px;" class="animated fadeInDownShort">In Conclusion</h3>
		  
		  <div class="mitad_con35">
			  <img style="margin:0px auto 20px auto; display:block;" src="https://www.anexinet.com/wp-content/uploads/2020/03/asset-7-pillar.png" />
		  </div>
		  
		   <div class="mitad_con65">
		  <p style="margin-bottom:20px;">
			  When it comes to ransomware, your best defense is a good offense. Educate your employees. Explain to them that they are a target and should regard themselves as such and take common-sense precautions so as not to fall victim to an attack. Partnering with an organization such as Anexinet that has vast experience protecting organizations against ransomware is essential. If you’d like help ensuring your organization’s readiness against ransomware attacks, <a target="_blank" style="color:#a4ca53;" href="https://insights.anexinet.com/disaster-recovery-strategy-kickstart">please check out our Disaster Recovery Kickstart</a>, which helps you eliminate vulnerabilities by adopting the latest industry-standard practices and procedures, or <a target="_blank" style="color:#a4ca53;" href="https://insights.anexinet.com/identity-access-management-modernization-assessment">sign up for our Identity Access Management (IAM) Modernization Assessment </a>for strategic direction to strengthen, mature and modernize your Identity Management Program.<br/><br/>

			  Lastly, <a target="_blank" style="color:#a4ca53;" href="https://www.anexinet.com/contact-us">please don’t hesitate to reach out to us</a> with any questions or concerns. We’d love to help you get protected.</p>
		  </div>
		  
		  <div class="clearam">
			  
		  </div>
		  
      </div>
    </section>


-->





    <script src="https://cdnjs.cloudflare.com/ajax/libs/css3-animate-it/1.0.3/js/css3-animate-it.min.js"></script>
 
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
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
    
	<?php if(!$full_pages == true) {echo '</div>';}?>



<?php endwhile; ?>

<?php get_footer();
