 <?php
/**
 *
 * Template Name: Guide to Hybrid Cloud Architecture
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
      <a href="#what_is_hybrid_cloud">What is Hybrid Cloud?</a> 
	  </div><span style="padding-right: 5%;"></span>
    <div class="cont-1">
      <a href="#definite_benefits">Definite Benefits</a> 
    </div><span style="padding-right: 5%;"></span>
    <div class="cont-1">
      <a href="#hca_important">Why HCA is Important for Business</a> 
    </div><span style="padding-right: 5%;"></span>
      <div class="cont-1">
      <a href="#key_considerations">Key Considerations</a> 
    </div>
   
  
  </div>
</section> <!--  section  -->
<!-- back to top -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top"/></button>
<!-- / back to top -->

<style>

html, body {
    overflow: visible;
}
.page-id-59756 .parallax-header-background {
    top: 0 !important;
}
.img-cont .post-intro-wrapper {
    padding-right: 0% !important;
    padding-left: 30px !important;
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


#what_is_hybrid_cloud, #definite_benefits, #hca_important, #key_considerations, #the_recovery{
    position: relative;
    display: block;
    top: -55px;
}

	
	ul {
    margin-left: 2.25rem;
    list-style-type: disc;
}
	
	.page-id-56980 h3 {
		
	font-size:26px !important;
	}
	
	
		.page-id-56980 h4 {
		
	font-size:17px !important;
	}
	
	
h3{
  font-weight:700;
	
}

.ransomware-fifth h3, .ransomware-eleven h3{
  color: #fff !important;
}

.ransomware-fifth .hs-input{
  padding: 5px !important;

    margin-bottom: 6px !important;
}


.grndt-sec-nav .container .cont-1{
  margin-right:0px;
}

.page-template-guide-for-banks .post-title{
  color: #0f4c83;
  font-weight: 700 !important;
}

#accordion-resizer {
    padding: 10px;
    width: 350px;
    height: 220px;
  }
.border-box{
  border: 2px solid #0f4c83;
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
.border-box a{
  margin-left:12px;
  color:#187bcd;
  font-weight: 700;
}

.ransomware-first a {
    font-size: 16px;
    line-height: 16px;
    color: #ffffff;
    font-weight: 500;
}

.videofix1 iframe, .videofix1 img{
  height: auto !important;
}


.vidyard-player-container {
  height: auto !important;
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
.ransomware-second{
  background-image:url('https://www.anexinet.com/wp-content/uploads/2020/02/doctors2.jpg');
  color:white;
}
.ransomware-second p{
  color:#fff;
  font-style:italic;
}
.vidyard-player-container{
  max-width:800px;
  /* padding-top:60px; */
}
.ransomware-third{
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

   box-shadow: 3px 2px 4px 0 rgba(0, 0, 0, 0.15);
}
.ui-accordion-header img{
  max-width: 60px;
  margin-right: 30px;
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
    font-size: 25px;
    margin-left: 34%;
    text-align: left;
    padding-top: 5%;
	font-weight: 700;
}
	
.mid-cta-text1 {
    color: white;
    font-size: 25px;
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

.ui-accordion-content {max-height: 100% !important;}

#accordionTwo .uiacordion-conten{
  background-color:red;
}

.second-accordion #accordionTwo .ui-accordion-header{
  color:#187bcd;
}



#accordion3 .ui-accordion-icons:after {
  color: #187bcd;
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

.second-accordion #accordion3 .ui-accordion-header{
  color:#187bcd;
}
.second-accordion #accordion4 .ui-accordion-header{
  color:#187bcd;
}


.ransomware-fourth h2{
  font-size:42px;
  margin-bottom:40px;
}
.ransomware-fourth ul{
  margin-top:40px;
}
.ransomware-fifth{
  background-image: url('https://www.anexinet.com/wp-content/uploads/2020/02/adobe-stock-253025721.jpg');
  color:#fff;
  padding: 60px 0;
}
.ransomware-fifth p{
  color:white;
  font-weight:700;
}
.ransomware-fifth h3{
  margin-bottom: 20px;
}
.ransomware-fifth .portrait-healthcare{
  margin-right:40px;
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
  margin-bottom:14px;
}
.ransomware-sixth {
      background-color: #fff;
  
}
.ransomware-text-video{
  max-width: 50%;
  
}
.health-sixth-half{
  background-color: rgba(235, 235, 235, 0.3);
  padding: 80px 0;
  margin: 40px 0;
}
.ransomware-eight{
  background-image: url('/wp-content/uploads/2020/02/group-6.png');
  color:#FFF;
  padding:60px 0;
  background-size:cover;
}
  
.ransomware-eight p{
  color:#FFF;
  font-weight:700;
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


.ransomware-third {
  background-color: #fff;

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
.ransomware-ten .mitad3 p {
    color: #fff;
    text-align: justify;
}	
.ransomware-ten ul li {
    text-align: justify;
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


.first-accordion .ui-accordion-header h4{
	color: #187bcd;
	font-weight: normal !important;
	font-size:14pt;
}

.first-accordion .ui-accordion-header {

    background-color: rgba(235, 235, 235, 0.3)
}



#accordion3 .ui-accordion-header h4{
	color: #187bcd;
	font-weight: normal !important;
	font-size:14pt;
}
#accordion4 .ui-accordion-header h4{
	color: #187bcd;
	font-weight: normal !important;
	font-size:14pt;
}

#accordion3 .ui-accordion-header {
	background-color: rgba(235, 235, 235, 0.3);
}
#accordion4 .ui-accordion-header {
background-color: rgba(235, 235, 235, 0.3);
}


.lista-finan {
  margin: 20px 0;
}

.lista-finan li{
       margin-bottom: 20px;
    padding-left: 35px;
    background-image: url(https://www.anexinet.com/wp-content/uploads/2020/03/group-9-copy-1.png);
    background-repeat: no-repeat;
    background-position: 0px 5px;
    list-style: none;
    margin-left: 0px;
}

.lista-finan li span{
  font-weight: bold;
  color: #000;
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

	
	.mitad3 {
		float:left;
		width:60%;
	}

	
	
		.mitad4 {
		float:left;
		width:40%;
			
	}

	
	.mitad_con35 {
			float:left;
		width:35%;
	}
	
	.mitad_con65 {
			float:left;
		width:65%;
	}
	
	
	
	
	.clearam {
		width:100%;
		height:1px;
		display:block;
		float:none;
		clear:both;
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
	
.mid-cta-button1 {
  background-color: #ffb852;
	border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
	margin-top: -5%
}

.row {
  display: flex;
}

.column {
  flex: 50%;
  padding-left:15px;
  padding-right:15px;
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

.mitadran1 {
  position: relative;
  width: 70%;
  float: left;
}


.mitadran2 {
  position: relative;
  width: 30%;
  float: left;
}
h3.title-nubold {
    font-weight: normal !important;
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
.text-justify{
	text-align:justify;
}
ul.margin-zero {
    margin-left: 0px;
}
.margin-zero ol {
    margin: 0;
}
@media only screen and (max-width: 600px) {
	
		.ransomware-eleven .mb-m-60{
		width:100%;
	}

	
	
	.mitadran1, .mitadran2, .mitad3, .mitad4, .mitad_con35, .mitad_con65 {
		float:none;
		width:100%;
	}
	
	
.paddi {
  padding:20px;
}

.ransomware-eleven{
  padding: 40px;
}

}
.choose-adv button {
    line-height: inherit;
    background-color: #ffb852;
    padding: 15px 15px;
    text-transform: capitalize;
    color: #fff;
    border: #ffb852;
    cursor: pointer;
    margin: 0;
    font-weight: 600;
}
.Final-thoughts-01 h4 {
    color: #fff;
    font-size: 20px;
}

</style>

<!-- Gradient Navegation Bar End -->

<!-- first section -->
<section class="ransomware-first">
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ptb-40 animatedParent">
					<p>The cloud has paved new operational avenues for businesses across all industries. Instead of having to maintain local, capital-demanding infrastructure and relying on internal services alone, most have (naturally) shifted towards acquiring readily-available resources and technology from cloud services providers.</p><br>

					<p>But how do you settle for a cloud solution when market players are rushing to outdo one another with better infrastructure, more attractive pricing, and <a style="color:#0028c6;" target="_blank" href="https://www.anexinet.com/blog/security-in-the-cloud-is-fundamentally-different/">cutting-edge security innovations? </a></p><br>

					<p>Perhaps there’s a better answer. Instead of getting locked-in with a single provider, you should build a diversified portfolio of cloud assets to mix-and-match, depending on your needs.</p><br>

					<p>Welcome to the realm of <a style="color:#0028c6;" target="_blank" href="	https://www.anexinet.com/blog/the-top-4-automation-features-and-benefits-of-hybrid-cloud/">hybrid cloud computing. </a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>






<!-- bg image Section  -->	

<section class="bg-images">
	<div class="mid-cta container-fluid" style="background-image: url('https://www.anexinet.com/wp-content/uploads/2020/08/image-1.png'); background-size: cover; height: auto; padding-top:90px; padding-bottom:90px;">
		<div class="row">
			<div class="offset-md-3 col-md-5 Final-thoughts-01">				
				<h4>Download a Copy of the Ultimate <br>Guide to Hybrid Cloud <br>Architecture to Take with You</h4>
			</div>
			<div class="col-md-4 choose-adv">
				<a href="https://www.anexinet.com/resources/ebooks/the-ultimate-guide-to-hybrid-cloud-architecture/"><button>Learn More</button></a>
			</div>
		</div>	
	</div>
</section>

<!-- End bg image Section  -->	

<!-- /First Section -->
<span id="what_is_hybrid_cloud"></span>

<section class="ransomware-nine">
	<div class="container ptb-60 ">
		<div class="row">
		<div class="col-md-12">
			<div style="max-width:1500px; margin-bottom:20px; ">
				<h3 style="font-weight:700; text-align: center;">What is Hybrid Cloud?</h3>
			</div>
			<div class="d-flex align-items-center sloane-one">
				<div class="mitadran1">
					<p style="margin-bottom:20px;">Hybrid cloud combines the best of two worlds. As a computing environment, it leverages a mix of on-premises, public cloud and private cloud services to deploy and run workloads. </p>
					<p style="margin-bottom:20px;">Hybrid cloud infrastructure incorporates three delivery models:</p>
					<p style="margin-bottom:20px;">
						<ul class="margin-zero">		 
						<ol>1. Traditional data center and/or a locally-hosted private cloud.</ol>
						<ol>2. Managed private cloud hosted within a cloud service provider’s data center. </ol>
						<ol>3. Portfolio of public-cloud services. </ol></ul>
					</p>    
				</div>
				<div class="mitadran2">
					<img style="margin-left:15px; padding:0px; width:200px; height:auto;" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-64@2x.png">
				</div>
			</div>
			<div>
				<p style="margin-bottom:20px;">Various cloud-resource combinations may be generated in your portfolio, on an as-needed basis. For instance, private IaaS solutions can happily co-exist with publicly hosted SaaS applications. 
				<br><br>
				Hybrid cloud has become a significant enabler of digital business transformation, even for legacy companies who weren’t “born in the cloud.”<br>
				Thanks to coordinated management and service provisioning, hybrid cloud architecture significantly boosts the availability, scalability and utilization of IT resources, while reducing operational costs. </p>
			</div>
		</div>
		</div>
	</div>	
</section>

<section class="bg-images">
	<div class="mid-cta container-fluid" style="background-image: url('https://www.anexinet.com/wp-content/uploads/2020/07/image-1-copy.png'); background-size: cover; height: auto; padding-top:90px; padding-bottom:90px;">
		<div class="row">
			<div class="offset-md-3 col-md-5 Final-thoughts-01">				
				<h4>Find Your Right Mix of<br>Hybrid IT<br><span style="font-size: 14px;">View our checklist of 7 Critical Categories for Evaluation</h4>
			</div>
			<div class="col-md-4 choose-adv">
				<a href="https://www.anexinet.com/resources/tip-sheets/find-your-right-mix-of-hybrid-it/"><button>Download Now</button></a>
			</div>
		</div>	
	</div>
</section>



   
<span id="definite_benefits"></span>

<section class="ransomware-third first-accordion" >
	<div class="container animatedParent">
		<div class="row">
			<div class="col-md-12">
				<h3 class="animated fadeInDownShort" style="text-align: center;">The Definite Benefits of Hybrid Cloud </h3>
				<p class="animated fadeInDownShort">In 2019, <a style="color:#0028c6;" target="_blank" href="https://451research.com/images/Marketing/press_releases/Pre_Re-Invent_2018_press_release_final_11_22.pdf">69% of enterprises</a> will incorporate hybrid cloud environments and 60% of workloads will be sent to run in a mix of public/private clouds. </p><br>
				<p>A hefty <a style="color:#0028c6;" target="_blank" href="https://www.emc.com/collateral/analyst-reports/idg-research-hybrid-cloud-white-paper.pdf">96% of trailblazing companies</a> who have already migrated to a hybrid cloud environment, report that their initiatives are delivering measurable results. Let’s take a look at the metrics:</p>
				
				<div>
					<img style="margin: 0 auto; padding: 20px; display: block; text-align: center;" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-10@2x.png">
					<p>Q11. Thinking of all the applications your organization runs, what percentage are currently running in the following environments?</p><br>
					<p>Q12. Thinking of all the applications your organization runs, what percentage will be the running following environments two years from now?</p>
					<p style="font-size: 12px;"><i>Source:451 Research, Voice of the Enterprise: Cloud Transformation, Workloads and Key Projects 2017.</i></p>
				</div>
				<div class="accordions">
					<div id="accordion">
						<div>   
							<div class="d-flex align-items-center">
								<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-12-2.png">
								<h4>Lower Total Cost of Ownership</h4>
							</div>
						</div>
						<div class="poorIt li1">
							<p style="margin-bottom:20px;">The elasticity, workflow, and resource-usage optimization enabled by hybrid cloud and IT transformations translates into an <a style="color:#0028c6;" target="_blank" href="https://www.emc.com/collateral/analyst-reports/idg-research-hybrid-cloud-white-paper.pdf">average TCO reduction of 24%.</a> Hybrid cloud infrastructure—especially when paired with a hybrid cloud management platform like HPE OneSphere—enables granular visibility into resource usage and respective costs—providing even greater control over spending. HPE OneSphere's dashboard reports provide analytics across the entire hybrid cloud estate for near-real-time utilization, health, and cost insights. This enables greater visibility and control of on-premises and public cloud costs while helping you manage deployments and optimize cloud usage. HPE GreenLake's proven pay-per-use, IT-as-a-service model further accelerates time to value and improves economics while simplifying operations.</p>
						</div>
						<div> 
							<div class="d-flex align-items-center">
								<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-24-1.png">
								<h4>Enhanced Operational Efficiency</h4>
							</div> 
						</div>
						<div class="two-rows-accordion">
							<p>Cloud bursting minimizes downtime and lets organizations easily sustain peak loads. Development teams can instantly tap into new cloud integration capabilities. The latest technologies (e.g. SQL Server’s Stretch Databases) enable seamless extension of your databases from on-premises to the cloud. Or teams can choose to tap into the readily available services offered by providers, including BI, machine learning, IoT, and other leverageable tech stacks.</p>
						</div>
						<div> 
							<div class="d-flex align-items-center">
								<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-16.png">
								<h4>Minimal Risk</h4>
							</div> 
						</div>
						<div class="poorIt" >
							<p>For companies with low cloud maturity, the hybrid cloud is an excellent toe-dipping option. An IT department can experiment by migrating non-critical workloads before moving more sensitive data and applications to the new private environment. Additionally, a multi-cloud strategy mitigates the risk of vendor lock-in; even if one service provider goes out of business (or experiences other issues), your business’s operation should be unaffected.</p>
						</div>
						<div> 
							<div class="d-flex align-items-center">
								<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-64.png">
								<h4>Increased Availability and Accessibility </h4>
							</div> 
						</div>
						<div class="two-rows-accordion">
							<p style="margin-bottom:20px;">Most cloud-service providers guarantee better availability rates than local on-premises setups. Additionally, cloud environments boast built-in redundancy, along with the ability to backup key data across properties. </p>
						</div>
						<div>
							<div class="d-flex align-items-center">
								<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-4-1.png">
								<h4>Improved Disaster Recovery</h4>
							</div>
						</div>
						<div class="five-row-accordion">
							<p> <a style="color:#0028c6;" target="_blank" href="https://www.vmware.com/content/dam/digitalmarketing/vmware/en/pdf/infographic/cloud/vmware-infographic-the-move-is-on-to-hybrid-cloud.pdf">56% of businesses</a> report that hybrid cloud has improved their disaster recovery capabilities. Organization-wide DR plans are hard to implement and keep up-to-date, while maintaining secondary sites to support operations in case of failure is also cost-inhibitive. But setting up a secondary site in a private cloud is more affordable, especially given the pay-as-you-go pricing model provided by services such as HPE GreenLake. With variable payments based on actual metered usage, rapid scalability using an on-site buffer of extra capacity, and enterprise-grade support, HPE GreenLake brings a cloud-like experience for infrastructure on-premises. Additionally, the tasks of setting up, configuring and maintaining a DR destination are now left to the cloud service provider.</p>
							<p style="margin-bottom:20px;">Hybrid cloud architecture has become a proven catalyst for transformational change, even for traditional organizations who also want to play by the “startup” rulebook. The advantages in costs, availability, flexibility and operational improvements enable businesses to create new revenue sources, expand into new markets and explore new business models. In short, the case for hybrid cloud is undeniable. Are you on board? Why would you not be, especially when Anexinet’s team of strategists let you take a deeper dive into the benefits of hybrid cloud and will <a style="color:#0028c6;" target="_blank" href="https://www.anexinet.com/cloud-hybrid-it/">help your organization devise an ideal cloud strategy in just two weeks.</a>  </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<span id="hca_important"></span>

    <section class="ransomware-ten ptb-60">
	<div class="row">
	<div class="col-md-12">
      <div class="container animatedParent">
		<h3 style="margin-bottom:20px; text-align: left;" class="animated fadeInDownShort">Why Hybrid Cloud Architecture is Important for Businesses</h3>
		  <div class="mitad3">

			  <p>Hybrid cloud’s key selling point is that it enables the seamless use of public cloud services, in conjunction with line-of-business applications. Successful startups such as Airbnb and Uber have outpaced their competition by strategically utilizing a multi-cloud infrastructure to deliver new omnichannel experiences to consumers. </p><br>
				  <p style="margin-bottom:35px;">Today’s traditional enterprises are challenged to keep up the set pace. Most turn to the cloud. Further, <a style="color:#ffb852;" target="_blank" href="https://www-01.ibm.com/common/ssi/cgi-bin/ssialias?htmlfid=GBE03766USEN">92% of executives</a> assert their most successful cloud initiatives enabled the creation and support of a new business model.   </p>
			  <p><i>By leveraging multiple cloud services, your business:</i></p>
 

							   <ul>
								   <li>Gains access to new tools and data to steer innovation</li>
								   <li>Removes the on-premises constraint of a “selected few” services</li>
								   <li>Expands its toolkit by tapping into massive new realms of services delivered through APIs.</li>
							   </ul>
			  
			  <p>Depending on your needs, you may combine services from both on-premises and off-premises resources to accelerate time-to-market for new offerings, while balancing development costs.</p><br>

			  <p>No longer restricted to launching monolith applications, you may deploy standalone micro-services that complement and enhance your main offerings. Forget the long deployment cycles and welcome agility.</p><br>

			</div>
		  
<div class="mitad4">
			  
<img style="padding-bottom: 55px; margin:0px auto 40px auto; display:block;" src="https://www.anexinet.com/wp-content/uploads/2020/07/asset-1-a@2x.png" />
</div>
		  <div>
			  

		  <p><i>Hybrid cloud architecture:</i></p>
			   <ul>
								   <li>Increases your IT elasticity to adapt to changing needs. For instance, IT systems can be effectively augmented to handle peak loads with the help of cloud bursting. Cloud bursting programmatically expands workloads to a designated public cloud during activity spikes and scales back to original servers once the need passes and it allows you to affordably “rent” additional computational and storage resources in real-time.</li>
								   <li>Hybrid cloud computing provides greater visibility into resource usage across your entire environment and lets you rapidly identify misallocated and over-provisioned resources.</li>
								   <li>Allows your enterprise to keep sensitive data away from the "public pool" and meet all compliance requirements while running front-end applications in the open, benefiting from on-demand scalability and cost efficiency.</li>
							   </ul>

			  		  </div>

      </div>
      </div>
      </div>
    </section>


    <span id="key_considerations"></span>
	
	
	
	
<!--
<section class="ransomware-sixth ptb-60">
      <div class="container animatedParent">
	  <div class="row">
	  <div class="col-md-12">
        <h3 class="animated fadeInDownShort" style="margin-bottom:20px; text-align: center;">Key Considerations for Hybrid Cloud Adoption </h3>
		  <p style="text-align:center;"><i>
			  Hybrid cloud architecture’s “silver lining” is compelling. But no transformational process is without its challenges. When it comes to hybrid cloud migration, three critical success factors should be taken into consideration.</i>
		  </p>
		</div>	
		<div class="row">
		<div class="col-md-12">
	<div class="column">
	<h3 class="title-nubold">1. Develop a Workload Migration Strategy</h3>
	<p>Hybrid cloud adoption is not a <a style="color:#0028c6;" target="_blank" href="https://www.anexinet.com/blog/to-cloud-lift-and-shift-or-not-a-few-thoughts/">“lift &amp; shift” operation</a>. It requires careful workload orchestration—from business processes, through the application, platform, and infrastructure. Your first task is to de-tangle the current intricate system of workflows running on-premises (and perhaps even in the cloud). </p>

	<p>Certain workflows are inherently better suited for the public cloud. <a style="color:#0028c6;" target="_blank" href="https://www.anexinet.com/blog/which-applications-workflows-should-never-be-moved-to-the-cloud/">Legacy applications</a>—that weren’t built with the cloud in mind—may be easier to replatform or repurpose for the private cloud. Establishing workload destinations and placements is a balancing act between performance, cost, security and integration.</p> 
	<p>To determine the optimal workflow placements, consider the following technical characteristics:</p>
		  </div>
		  <div class="column">

                    <img style="margin-left:-15px; padding:20px; float: right;" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-24@2x-e1595536355442.png">

        </div>
</div>
		
<div class="accordions container">
                  <div id="accordion3">

                            <div> 
                              <div class="d-flex align-items-center">
                                <img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-21-1.png" alt="">
                                <h4>Performance</h4>
                              </div>
                            </div>
                            <div class="two-rows-accordion">
								<p>According to <a style="color:#0028c6;" target="_blank" href="https://www.intel.com/content/dam/www/public/us/en/documents/white-papers/optimal-workload-placement-for-public-hybrid-and-private-clouds-white-paper.pdf">Intel’s internal analysis</a>, high-performance, data-heavy workflows tend to be better suited for private clouds. The chart below provides a general overview. </p>
                            </div>
                      

                          <div class="five-row-accordion">
                            <div class="d-flex align-items-center">
                              <img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-14-4.png" alt=""> 
                              <h4>Security</h4>
                            </div>
                          </div>
                          <div  class="six-row-accordion">
                            <p style="margin-bottom:20px;">Certain workflows, both internal and external, are subject to stricter security compliance. Applications processing in-house data or storing personally identifiable information (PII) may not be suitable candidates for the public cloud.<br/><br/>
								
								Beyond this, you should benchmark the risk of exposing any intellectual property or strategic data versus the rewards of migrating those from a traditional data center to a hybrid environment. Security solutions tend to be readily available only for certain workflows (e.g. email) and are less mature for complex workflows related to scientific and R&D operations. Carefully assess how the proposed change in the workflow could affect your risk.
</p>
					  
                          </div>


                          <div class="five-row-accordion">
                            <div class="d-flex align-items-center">
                              <img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-30.png" alt=""> 
                              <h4>Integration</h4>
                            </div>
                          </div>
                          <div  class="six-row-accordion">
                       
				                            <p style="margin-bottom:20px;">Your workflow placement will be impacted by the complexity and quantity of integrations so it’s important to clearly identify the extent of your applications’ interdependence. Breaking up a monolith architecture may not be worth the migration trade-offs. On the other hand, decoupling certain workflows from legacy applications can give your company a competitive agility. Determine if your legacy systems offer open APIs (those developed a decade ago probably don’t). Migration of specific applications may be discouraged, based on proximity, or on security and hardware requirements. Refactoring or replacing such applications may be uneconomical; better to let them remain on-prem.
</p>			  

                          </div>

<div class="five-row-accordion">
                            <div class="d-flex align-items-center">
                              <img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-8.png" alt=""> 
                              <h4>Data Volume</h4>
                            </div>
                          </div>
                          <div  class="six-row-accordion">
                       
				                            <p style="margin-bottom:20px;"> Large local datasets can cost a fortune to transfer remotely. Ensure that long-term cloud storage will be more cost-effective than maintaining local data centers. Physical location of data is important as well—due to both compliance and performance requirements. <br><Br></p>

Be sure to ask the following:<br><br>
<ul>				
<li><i>1. What is the ROI of moving the workflow? How do the benefits compare to the risks?</i></li>
<li><i>2. Where will we place the workflow: geographical location, provider, and cloud type?</i></li>
<li><i>3. How will the migration occur? Do we need external expertise for refactoring and re-architecting certain applications?  After all, workflow assessment and migration are tedious processes that may require outside expertise.</i></li>
	</ul>
			  

                          </div>

         </div>
</div>
		  </div>
		  </div>
		  </div>
		  </div>
    </section>
	
-->



<section class="ransomware-sixth ptb-60">
      <div class="container animatedParent">
	  <div class="row">
	  <div class="col-md-12">
        <h3 class="animated fadeInDownShort" style="margin-bottom:20px; text-align: center;">Key Considerations for Hybrid Cloud Adoption </h3>
		  <p style="text-align:center;"><i>
			  Hybrid cloud architecture’s “silver lining” is compelling. But no transformational process is without its challenges. When it comes to hybrid cloud migration, three critical success factors should be taken into consideration.</i>
		  </p>
		</div>	
		<div class="row">
			<div class="col-md-12">
				<div class="column">
					<h3 class="title-nubold">1. Develop a Workload Migration Strategy</h3>
					<p>Hybrid cloud adoption is not a <a style="color:#0028c6;" target="_blank" href="https://www.anexinet.com/blog/to-cloud-lift-and-shift-or-not-a-few-thoughts/">“lift &amp; shift” operation</a>. It requires careful workload orchestration—from business processes, through the application, platform, and infrastructure. Your first task is to de-tangle the current intricate system of workflows running on-premises (and perhaps even in the cloud). </p>

					<p>Certain workflows are inherently better suited for the public cloud. <a style="color:#0028c6;" target="_blank" href="https://www.anexinet.com/blog/which-applications-workflows-should-never-be-moved-to-the-cloud/">Legacy applications</a>—that weren’t built with the cloud in mind—may be easier to replatform or repurpose for the private cloud. Establishing workload destinations and placements is a balancing act between performance, cost, security and integration.</p> 
					<p>To determine the optimal workflow placements, consider the following technical characteristics:</p>
				</div>
				<div style="padding-bottom:90px;" class="column">
                    <img style="margin-left:-15px; padding:20px; float: right;" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-24@2x-e1595536355442.png">
				</div>

		
			<div class="accordions">
				<div id="accordion3">
					<div> 
					  <div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-21-1.png" alt="">
						<h4>Performance</h4>
					  </div>
					</div>
					<div class="two-rows-accordion">
						<p>According to <a style="color:#0028c6;" target="_blank" href="https://www.intel.com/content/dam/www/public/us/en/documents/white-papers/optimal-workload-placement-for-public-hybrid-and-private-clouds-white-paper.pdf">Intel’s internal analysis</a>, high-performance, data-heavy workflows tend to be better suited for private clouds. The chart below provides a general overview. </p>
					</div>
					<div class="five-row-accordion">
						<div class="d-flex align-items-center">
							<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-14-4.png" alt=""> 
							<h4>Security</h4>
						</div>
					</div>
                    <div  class="six-row-accordion">
                        <p style="margin-bottom:20px;">Certain workflows, both internal and external, are subject to stricter security compliance. Applications processing in-house data or storing personally identifiable information (PII) may not be suitable candidates for the public cloud.<br/><br/>
						Beyond this, you should benchmark the risk of exposing any intellectual property or strategic data versus the rewards of migrating those from a traditional data center to a hybrid environment. Security solutions tend to be readily available only for certain workflows (e.g. email) and are less mature for complex workflows related to scientific and R&D operations. Carefully assess how the proposed change in the workflow could affect your risk.</p>
					</div>
					<div class="five-row-accordion">
						<div class="d-flex align-items-center">
							<img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-30.png" alt=""> 
							<h4>Integration</h4>
						</div>
					</div>
					<div  class="six-row-accordion">
						<p style="margin-bottom:20px;">Your workflow placement will be impacted by the complexity and quantity of integrations so it’s important to clearly identify the extent of your applications’ interdependence. Breaking up a monolith architecture may not be worth the migration trade-offs. On the other hand, decoupling certain workflows from legacy applications can give your company a competitive agility. Determine if your legacy systems offer open APIs (those developed a decade ago probably don’t). Migration of specific applications may be discouraged, based on proximity, or on security and hardware requirements. Refactoring or replacing such applications may be uneconomical; better to let them remain on-prem.</p>			  
					</div>
					<div class="five-row-accordion">
						<div class="d-flex align-items-center">
                            <img src="https://www.anexinet.com/wp-content/uploads/2020/07/group-8.png" alt=""> 
                            <h4>Data Volume</h4>
                        </div>
                    </div>
					<div  class="six-row-accordion">
						<p style="margin-bottom:20px;"> Large local datasets can cost a fortune to transfer remotely. Ensure that long-term cloud storage will be more cost-effective than maintaining local data centers. Physical location of data is important as well—due to both compliance and performance requirements. <br><Br></p>
						Be sure to ask the following:<br><br>
						<ul>				
							<li><i>1. What is the ROI of moving the workflow? How do the benefits compare to the risks?</i></li>
							<li><i>2. Where will we place the workflow: geographical location, provider, and cloud type?</i></li>
							<li><i>3. How will the migration occur? Do we need external expertise for refactoring and re-architecting certain applications?  After all, workflow assessment and migration are tedious processes that may require outside expertise.</i></li>
						</ul>
			        </div>
				</div>
			</div>
			</div>
		</div>
		  </div>
	  </div>
    </section>






<section class="bg-images">
	<div class="mid-cta container-fluid" style="background-image: url('https://www.anexinet.com/wp-content/uploads/2020/07/image-1-copy-1.png'); background-size: cover; height: auto; padding-top:90px; padding-bottom:90px;">
		<div class="row">
			<div class="offset-md-3 col-md-5 Final-thoughts-01">				
				<h4>Need a Cloud Strategy?<br><span style="font-size: 14px;">Lower costs, streamline operations and boost
	revenue with our Cloud Strategy Kickstart!</h4>
			</div>
			<div class="col-md-4 choose-adv">
				<a href="https://insights.anexinet.com/cloud-strategy-kickstart"><button>Learn More</button></a>
			</div>
		</div>	
	</div>
</section>



    

        <span id="the_recovery"></span>
    <section class="ransomware-nine ptb-60">

	<div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="d-flex align-items-center sloane-one">
        <div class="animatedParent" style="max-width:1500px; margin-right:10px;">
          <h3 style="margin-bottom:20px;" class="animated fadeInDownShort title-nubold">2. Establish New Networking</h3>
          <div class="d-flex align-items-center sloane-one">

                  <div class="mitadran1">


                          

                          <p style="margin-bottom:20px;">Public cloud providers always specify their preferred connection methods. If your portfolio will leverage several service providers, you must ensure their standards match. To avoid any performance issues, private clouds within your portfolio will need to be similarly connected. Your main goal is to to deflect possible bottlenecks by ensuring a consistent connection between all the elements in your environment. Some hybrid workloads may have a low tolerance for the internet’s variations in throughput. So you may need to establish a point-to-point connection between the cloud service provider and your data center. </p>    
                  </div>

                  <div class="mitadran2">

                    <img style="margin-left:-15px; padding:20px;" src="https://www.anexinet.com/wp-content/uploads/2020/07/group-38@2x.png">

                  </div>

        </div>
<div>
<p>Maintaining a high-performing hybrid WAN presents another challenge to address. The new cloud architecture will alter data traffic patterns and likely require re-architecting of WANs to avoid performance setbacks. Sometimes, the best way to steer traffic (based on application requirements) may require a direct connection to public cloud, without backhauling to the data center. However, this may also result in wasted bandwidth while creating additional security threats. In general, an over-reliance on the internet as part of your WAN strategy may open new vulnerabilities, endangering sensitive data and network uptime. </p>





        </div>


      </div>
	</div>
		</div>
		</div>
		</div>
    
    </section>


<!-- section three start  -->








<section class="ransomware-sixth ptb-60">
	<div class="container animatedParent">
	<div class="row">
	<div class="col-md-12">
		<div class="d-flex align-items-center sloane-one">
        <div class="animatedParent" style="max-width:1500px; margin-right:10px;">
				 <h3 style="margin-bottom:20px;" class="animated fadeInDownShort title-nubold">3. Review Your Security Best Practices </h3>
				  <div class="d-flex align-items-center sloane-one">
                  <div class="mitadran1">
				<p style="margin-bottom:20px;">While <a style="color:#0028c6;" target="_blank" href="#">81% of enterprises</a> now rely on hybrid cloud architecture, 77% of them still view security as the main challenge. For multi-cloud environments, you will need to define a custom security-perimeter that accounts for the following:</p>
			</div>
			</div></div>
		</div>

		<div class="accordions">
			<div id="accordion4">

				<div> 
					<div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/08/group-26.png" alt="">
						<h4>Unified governance</h4>
					</div>
				</div>
				<div class="two-rows-accordion">
					<p>Aligned governance processes should apply to public cloud services, private cloud services, and on-premises systems. </p>
				</div>
			

			<div> 
					<div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/08/group-9.png" alt="">
						<h4>Isolation failure</h4>
					</div>
				</div>
				<div class="two-rows-accordion">
					<p>Ensure that no element in the cloud system provides a “back-door” into the internal systems, after they are integrated into the hybrid environment. </p>
				</div>
			
			<div> 
					<div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/08/group-34.png" alt="">
						<h4>Shared handling and reporting of security incidents</h4>
					</div>
				</div>
				<div class="two-rows-accordion">
					<p>Monitoring, detecting and reporting need to be shared between all entities within the environment. The public cloud service level agreement should specify the rules for reporting threats in accordance with internal policies.</p>
				</div>


		

				<div> 
					<div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/08/group-25.png" alt="">
						<h4>Compliance and legal risks</h4>
					</div>
				</div>
				<div class="two-rows-accordion">
					<p>Ensure public cloud services don’t compromise your compliance status. </p>
				</div>
			

				<div> 
					<div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/08/group-38.png" alt="">
						<h4>Service unavailability</h4>
					</div>
				</div>
				<div class="two-rows-accordion">
					<p>Hybrid systems should be designed with greater resilience that accounts for possible disruptions in hardware, software, or communication network failures. </p>
				</div>
			

				<div> 
					<div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/08/group-240.png" alt="">
						<h4>Application Protection</h4>
					</div>
				</div>
				<div class="two-rows-accordion">
					<p>Becomes more challenging whenever an application relies on cloud services in a mix of environments.</p>
				</div>
		

				<div> 
					<div class="d-flex align-items-center">
						<img src="https://www.anexinet.com/wp-content/uploads/2020/08/group-24.png" alt="">
						<h4>Multiple Interfaces</h4>
					</div>
				</div>
				<div class="two-rows-accordion">
					<p>Amplify risk, as each comes with its own set of security and privacy standards. This risk can be proactively mitigated by adopting a hybrid cloud management platform. HPE OneSphere provides flexibility to compose virtualized and containerized workloads across private and public cloud platforms from a single unified user interface and common API.</p>
				</div>
		
	</div>
	</div>
	</div>
</section>

<section class="ransomware-ten ptb-60">
      <div class="container animatedParent">
      <div class="row">
      <div class="col-md-12">
        <h3 style="margin-bottom:20px; font-size:30px;" class="animated fadeInDownShort text-justify">Hybrid Cloud Management Solutions: An “Add-On” to Consider</h3>
		  
		
		  
		   
		 <p class="text-justify" style="margin-bottom:20px;">
		Hybrid cloud-managed platforms simplify the process of asset management by providing a “master switch” to govern your hybrid cloud environment (versus having to interact with multiple, disparate interfaces). </p>
  		<p class="text-justify" style="margin-bottom:20px;">Beyond simplified management, the benefits of an HCM solution like HPE OneSphere include improved visibility into costs, compliance and resource distribution; IT efficiency; and additional analytics capabilities.</p>
		  
		  
		  <div class="clearam">
			  
		  </div>
		  
      </div>
      </div>
      </div>
    </section>


<span id="final_analysis"></span>
    <section class="ransomware-ten ptb-60" style="display:none">
      <div class="container animatedParent">
      <div class="row">
      <div class="col-md-12">
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
      </div>
      </div>
    </section>








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



<?php endwhile; ?>

<?php get_footer();
