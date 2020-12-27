 <?php
/**
 *
 * Template Name: Guide to Digital Healthcare Template
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
    $( "#accordionTwo" ).accordion({
      collapsible: true
    });
  } );
</script>

<!-- Gradient Navegation Bar Begin -->
<section class="grndt-sec-nav blue-second-nav container-fluid" id="grdnt">
  <div class="container">

    <div class="cont-1">
      <a href="#care_provider">Care Provider Pain Points</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#healthcare_benefits">Key Healthcare Tech Benefits</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#reduce_costs">Reduce Costs via Digital Transformation</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#accesing_care">Accessing Care & Provider Info</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#internet_of_things">The Role of IoT & Big Data</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#risks_rewards">Risks & Rewards</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#final_analysis">Final Analysis</a> 
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
  font-weight:700;
}
.page-id-56600 .post-title{
  color: #0f4c83;
  font-weight: 700 !important;
}

#accordion-resizer {
    padding: 10px;
    width: 350px;
    height: 220px;
  }
.border-box{
  border: 1px solid #187bcd;
  max-width: 250px;
  padding: 20px;
  display: flex;
  align-items: center;
  min-width:225px;
  min-height: 106px;
  color: #217fce;
}
.border-box img{
  margin-right:18px;
}
.border-box a{
  margin-left:12px;
  color:#187bcd;
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
.healthcare-second{
  background-image:url('https://www.anexinet.com/wp-content/uploads/2020/02/doctors2.jpg');
  color:white;
}
.healthcare-second p{
  color:#fff;
  font-style:italic;
}
.vidyard-player-container{
  max-width:800px;
  /* padding-top:60px; */
}
.healthcare-third{
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
}
.ui-accordion-header img{
  max-width: 60px;
  margin-right: 30px;
}
.ui-accordion-content {
  box-shadow: 0 0 5px #ccc;
  position: relative;
  margin-bottom: 30px;
  margin-top: 30px;
  padding: 22px 25px;
  background-color: #ffffff;
}
#accordionTwo .uiacordion-conten{
  background-color:red;
}

.second-accordion #accordionTwo .ui-accordion-header{
  color:#187bcd;
}
.healthcare-fourth h2{
  font-size:42px;
  margin-bottom:40px;
}
.healthcare-fourth ul{
  margin-top:40px;
}
.healthcare-fifth{
  background-image: url('https://www.anexinet.com/wp-content/uploads/2020/02/adobe-stock-253025721.jpg');
  color:#fff;
  padding: 60px 0;
}
.healthcare-fifth p{
  color:white;
  font-weight:700;
}
.healthcare-fifth h3{
  margin-bottom: 20px;
}
.healthcare-fifth .portrait-healthcare{
  margin-right:40px;
}
.digital-healthcare-form .hbspt-form .hs-form .hs_submit .actions .hs-button{
  background-color: #FFB852 !important;
  padding: 3vh 1vw;
  width: 100%;
  color: white;
  font-weight: 900;
  font-size: 16px;
}
.healthcare-sixth p{
  margin-bottom:14px;
}
.healthcare-sixth {
  
}
.healthcare-text-video{
  max-width: 962px;
  margin-right: 40px;
}
.health-sixth-half{
  background-color: rgba(235, 235, 235, 0.3);
  padding: 80px 0;
  margin: 40px 0;
}
.healthcare-eight{
  background-image: url('/wp-content/uploads/2020/02/group-6.png');
  color:#FFF;
  padding:60px 0;
  background-size:cover;
}

.healthcare-eight p{
  color:#FFF;
  font-weight:700;
}
.healthcare-nine p{
  font-family:Montserrat;
  font-weight:500;
}
.healthcare-ten{
  background-color:#f9f9f9;
}
.healthcare-eleven{
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
  padding: 3vh 7vw;
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
.ui-accordion-header h4{
  font-weight:700;
  margin-right:30px;
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


</style>

<!-- Gradient Navegation Bar End -->

<!-- first section -->
  <section class="healthcare-first">
    <div class="container">

      <div class="ptb-40 animatedParent">
        <p class='animated fadeInDownShort'>Getting patients to assume responsibility for their own care has always presented a challenge. Thankfully, emerging technologies encourage patient engagement to improve compliance, and simplify tasks to improve appointment-keeping and booking follow-up visits. These new technologies also help patients implement measures to improve their health through diet, exercise and blood-sugar monitoring.</p>
      </div>

      <div class="ptb-40 animatedParent">
        <h3 STYLE="font-weight:700;"  class="animated fadeInDownShort">Using this Guide</h3>
        <p class="animated fadeInDownShort">Keep reading for information on how you can improve patient engagement, and the overall healthcare experience, through patient-centric access to information, customer journey mapping, gamification, price transparency, and more.<br><br>Specifically, in this guide you’ll learn about:</p>
      </div>

      <div class="row">

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#care_provider">  <div class="border-box animated fadeInDownShort">
            <?php $healthcare_1 = 56684; echo wp_get_attachment_image($healthcare_1, array('50', '50')); ?> 
            <!-- <img src="" alt=""> -->
            Care Provider Pain Points
          </div></a>
        </div>

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#healthcare_benefits">  <div class="border-box animated fadeInDownShort delay-250">
            <?php $healthcare_2 = 56683; echo wp_get_attachment_image($healthcare_2, array('50', '50')); ?> 
            <!-- <img src="" alt=""> -->
            Key Healthcare Tech Benefits
          </div></a> 
        </div>

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#reduce_costs">  <div class="border-box animated fadeInDownShort delay-500">
            <?php $healthcare_3 = 56682; echo wp_get_attachment_image($healthcare_3, array('50', '50')); ?> 
            <!-- <img src="" alt=""> -->
            Reduce Costs via Digital Transformation
          </div></a> 
        </div>

        <div class="col-s-4 col-md-6 col-lg-3 up-pill animatedParent">
        <a href="#accesing_care"> <div class="border-box animated fadeInDownShort delay-750">
            <?php $healthcare_4 = 56681; echo wp_get_attachment_image($healthcare_4, array('50', '50')); ?> 
            <!-- <img src="" alt=""> -->
            Accessing Care & Provider Info 
          </div></a>
        </div>

        <div class="col-md-6 col-lg-4 down-pill animatedParent">
        <a href="#internet_of_things">  <div class="border-box animated fadeInDownShort delay-1000">
            <?php $healthcare_5 = 56680; echo wp_get_attachment_image($healthcare_5, array('50', '50')); ?> 
            <!-- <img src="" alt=""> -->
            The Role of IoT & Big Data
          </div></a> 
        </div>

        <div class="col-md-6 col-lg-4 down-pill animatedParent">
        <a href="#risks_rewards">  <div class="border-box animated fadeInDownShort delay-1250">
            <?php $healthcare_6 = 56679; echo wp_get_attachment_image($healthcare_6, array('50', '50')); ?> 
            <!-- <img src="" alt=""> -->
            Risks & Rewards 
          </div></a>
        </div>

        <div class="col-md-6 col-lg-4 down-pill animatedParent">
        <a href="#final_analysis"> <div class="border-box animated fadeInDownShort delay-1500">
            <?php $healthcare_7 = 56678; echo wp_get_attachment_image($healthcare_7, array('50', '50')); ?> 
            <!-- <img src="" alt=""> -->
            Final Analysis
          </div></a>
        </div>

      </div>

      

      <div class="mtb-40 ta-center">
        <p>This guide also features videos that describe best practices for encouraging patients to assume responsibility for their care.</p>
      </div>

    </div>
  </section>
<!-- /First Section -->
    <section class="healthcare-second ptb-80">
      <div class="container ">
        <div class="d-flex align-items-center sloane-one">
          <div style="margin-right:40px;" class="animatedParent">
            <h3 class="animated fadeInDownShort" style="font-weight:700">Getting patients to assume responsibility for their self-care can be a challenge.</h3>
            <p>Online tools and connected medical devices bridge the gap between clinical recommendations and patient behaviors, while also providing solutions for critical healthcare-provider pain points.<br><br><strong>Watch our Digital Healthcare Kickstart video to learn the steps to providing patients a secure, modern digital experience that deepens engagement and offers a better quality of care.</strong></p><span id="care_provider"></span>
          </div>
          <div style="display:contents;">
            <!-- The script tag should live in the head of your page if at all possible --> <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>  <!-- Put this wherever you would like your player to appear --> <img   style="width: 100%; margin: auto; display: block;"   class="vidyard-player-embed"   src="https://play.vidyard.com/eiCv6eib9CoDMCrMNhLFKF.jpg"   data-uuid="eiCv6eib9CoDMCrMNhLFKF"   data-v="4"   data-type="lightbox"/>
          </div>
        </div>
      </div>
    </section>

    <section class="healthcare-third first-accordion" >
      <div class="container animatedParent">
        <h3 class="animated fadeInDownShort">Care Provider Pain Points</h3>
        <p class="animated fadeInDownShort">The digital disruption of healthcare speaks directly to the biggest industry challenges, such as building trust, less-than-ideal ROI, and the necessity of adequate security. Dive in to learn more: </p>
      </div>
      <div class="accordions container">
 
        <div id="accordion">

          <div>   
            <div class="d-flex align-items-center">
              <?php $trustBuildings = 56802; echo wp_get_attachment_image($trustBuildings, array('50', '50')); ?>  
              <h4>Trust-Building Difficulties</h4>
            </div>
          </div>
          <div class="poorIt">
            <p>To perform effectively, healthcare providers need to gather real-time patient information from multiple sources, which is difficult to find, access and collate without technology. And without this information, a provider's likelihood of building trust and improving a patient's involvement in monitoring their symptoms goes out the window.</p>
          </div>

          <div> 
            <div class="d-flex align-items-center">
              <?php $lowRoi = 56799; echo wp_get_attachment_image($lowRoi, array('50', '50')); ?> 
              <h4>Low ROI Outcomes</h4>
            </div> 
          </div>
          <div class="two-rows-accordion">
            <p>According to the Annals of Pharmacotherapy, non-optimized medication therapy in the U.S.—including the cost of readmissions, suboptimal treatment use, and patient non-compliance—is estimated to be responsible for over $520 billion in annual (avoidable) costs, and over 275,000 deaths per year.</p>
          </div>

          <div> 
            <div class="d-flex align-items-center">
              <?php $poorIt = 56800; echo wp_get_attachment_image($poorIt, array('50', '50')); ?>  
              <h4>Poor IT Performance</h4>
            </div> 
          </div>
          <div class="poorIt" >
            <p>Many healthcare organizations are locked into legacy technology, hampering IT performance and impacting the overall user experience. Traditional systems can't always distinguish between personal healthcare files and non-sensitive data. And in-house IT teams may not have the experience required to build and implement a tiered information-management system.</p>
          </div>

          <div> 
            <div class="d-flex align-items-center">
              <?php $securityConserns = 56801; echo wp_get_attachment_image($securityConserns, array('50', '50')); ?>   
              <h4>Security Concerns</h4>
            </div> 
          </div>
          <div class="two-rows-accordion">
            <p>In addition to the aforementioned legacy concerns, older systems can’t handle most modern security requirements, a problem compounded by the fact that attackers target healthcare systems more than ever. Phishing is high on the list of healthcare security issues, followed closely by compromised emails and ransomware attacks.</p>
          </div>
          <div> 
            <div class="d-flex align-items-center">
              <?php $patientCentric = 56803; echo wp_get_attachment_image($patientCentric, array('50', '50')); ?> 
              <h4>Patient-Centric Experiences</h4>
            </div><span id="healthcare_benefits"></span>
          </div>
          <div class="five-row-accordion">
            <p>Healthcare organizations are under intense pressure to differentiate themselves and provide a valuable, patient-centric user experience. This is a specialized area for any IT team, and institutions lacking specific expertise will likely struggle to achieve it.<br><br>Emerging technology can’t just focus on improving patient engagement. It needs to do so securely and cost-effectively, or the process is dead in the water. This makes it vitally important for the healthcare industry to continue to modernize by moving as quickly as possible to digital solutions in favor of the antiquated processes so many practices and institutions still use.</p>
          </div>
        </div>

      </div>
    </section>
    
    <section class="healthcare-fourth second-accordion">
      <div class="container ptb-60 animatedParent">

        <h3 class="animated fadeInDownShort">Key Healthcare Tech Benefits</h3>
        <p class="animated fadeInDownShort">Technology has already brought significant benefits to healthcare—most notably, Electronic Health Records (EHRs, which enable the following:</p>
        <ul>
          <li>Improved patient care, thanks to their ability to automatically <a href="https://www.ncbi.nlm.nih.gov/pubmed/22840256" class="link-blue fw-700" target="_blank">alert physicians to issues, such as medication allergies</a> or intolerances, and the option to access Electronic Health Records from almost any medical facility. This is essential for doctors assessing non-local or emergency patients, especially when a patient is unresponsive.</li>
          <li>Better public health, through the availability of data for clinical research. This improves our understanding and accelerates treatment development for problems affecting large populations  (e.g. <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4090236/" class="link-blue fw-700" target="_blank">viral outbreaks</a>). A widely available system provides information on the extent of an outbreak, enabling preventive measures (e.g. increased vaccine production) to be implemented more quickly.</li>
        </ul>
        <p>EHRs also deliver simpler workflows, reduced administrative costs, safer data-storage facilities, and better access to patient data from a centralized data point. These all help speed up responses from medical professionals, while providing more accurate and up-to-date information about the patient’s care, all of which enable providers to make the best possible decisions, particularly in a crisis.</p>
        <p style="margin-top:30px;">The advantages of emerging technologies aren’t limited to EHRs, however. Additional benefits include:</p>

        <div id="accordionTwo">

          <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/02/group-7333.png" alt="">
              <h4>Patient-Centric Access to Information</h4>
            </div>
          </div>
          <div class="two-rows-accordion">
            <p>Today's technology enables patient-centric experiences by providing a single point of (readily available) access for managing one's own healthcare records. This promotes patient engagement, and is in keeping with the trend towards <a href="https://www.healthaffairs.org/do/10.1377/hblog20190304.69786/full/" class="link-blue fw-700" target="_blank">healthcare consumerism</a>.</p>
          </div>

   
            <div>
              <div class="d-flex align-items-center">
                <img src="https://www.anexinet.com/wp-content/uploads/2020/02/shape-42323.png" alt="">    
                <h4>Better Experiences via Customer Journey Mapping</h4>
              </div>
            </div>

            <div class="video-accordion-cont">
              <p><a href="https://www.anexinet.com/blog/how-customer-journey-mapping-tools-drive-digital-transformation/" target="_blank" class="link-blue fw-700">Customers journey mapping</a> enables organizations to simplify and streamline the user experience by identifying those components that cause friction. This gives providers a deeper understanding of the patient experience. They can then “humanize” specific elements of the experience via physical and digital means to ensure they account for the patient’s emotional state at every stage.<br><br>For example, if patients are frustrated by the time and effort it takes to find parking at your healthcare facility, it can affect their emotions and, by extension, their attitude toward treatment. This indirectly impacts your patient success-count and your profitability.</p>
              <div class="d-flex align-items-center sloane-one video-acc-cont">
                <div style="margin-right:40px;" class="video-acc-cont-one">
                  <p> By addressing the challenges that occur at each stage, healthcare providers can build meaningful solutions into the experience.<br><br><strong>Watch our video to learn how AI and chatbots help you deliver great, 'humanized' patient experiences, and the key steps to ensure success with these emerging technologies.</strong></p>
                </div>
                <div class="video-acc-cont-one" style="display:contents;">
                  <!-- The script tag should live in the head of your page if at all possible --> <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>  <!-- Put this wherever you would like your player to appear --> <img   style="width: 100%; margin: auto; display: block;"   class="vidyard-player-embed"   src="https://play.vidyard.com/bpJbSbdj49irGqoByppFm6.jpg"   data-uuid="bpJbSbdj49irGqoByppFm6"   data-v="4"   data-type="lightbox"/>
                </div>
              </div>
            </div>

        <div class="five-row-accordion">
          <div class="d-flex align-items-center">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/02/group-8944.png" alt=""> 
            <h4>Interactive Telemedicine / Telehealth</h4>
          </div>
        </div>
        <div  class="six-row-accordion">
          <p>Telemedicine significantly improves the reach and availability of healthcare. In rural areas where services are far apart, or in areas where access is difficult, patients may consult providers via computer or mobile device. Physicians have grown comfortable making provisional diagnoses via video—everything from taking a medical history to confirming visible symptoms of illness.<br><br>Heart monitoring equipment and glucometers improve the outcome of virtual visits by (at least) identifying whether physical medical attention is needed. In addition to the obvious advantage of treating more people more conveniently, the cost benefits are significant. According to an <a href="https://www.healthitoutcomes.com/doc/telehealth-costs-up-to-less-than-office-visits-0001" target="_blank" class="link-blue fw-700">Alliance for Connected Care</a> study, Telehealth services can save up to $100 per doctor visit.</p>
        </div>

        <div> 
          <div class="d-flex align-items-center">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/02/group-1311.png" alt="">   
            <h4>Remote Patient Monitoring</h4>
          </div>
        </div>
        <div class="poorIt">
          <p>Remote patient-monitoring allows physicians to oversee the progress of patients with chronic conditions, without the inconvenience (and cost) of regular visits. Mobile devices that collect blood-sugar data, apps that track sleep patterns and CPAP usage, and wearable EKGs that automatically send data to healthcare providers help doctors provide a quality, seamless patient experience more easily.</p>
        </div>

        <div > 
          <div class="d-flex align-items-center">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/02/group-1222.png" alt=""> 
            <h4>Wearable Technology</h4>
          </div>
        </div>
        <div class="four-row-accordion">
          <p>According to a 2018 <a href="https://www.wearable-technologies.com/2018/12/new-pwc-study-reveals-consumers-use-wearables-to-stay-fit-and-live-longer/" target="_blank" class="link-blue fw-700">Pricewaterhouse Coopers analysis</a>, the number of wearable medical devices available is rapidly increasing, with 49% of US residents owning one device. These usually take the form of wrist bands or watches, which may be synchronized with proprietary online applications that record and report exercise levels, heart rate, water intake, and diet, helping doctors monitor and assess the wearer's health. Further, patients can set their own goals, track their progress, connect with other users, and stay engaged in their own care.</p>
        </div>
        <div >
          <div class="d-flex align-items-center">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/02/group-2666.png" alt=""> 
            <h4>Gamification</h4>
          </div> 
        </div>
        <div class="four-row-accordion">
          <p>Humans love a challenge, and one way to use emerging technology to improve patient engagement is by adding a gamification component to their care. Apple's Activity app provides competitions and awards, while a similar app for CPAP users provides a score for each night's sleep. These technologies give patients new ways to set goals, track their progress, and feel good about their compliance, etc. by winning a virtual award each time they reach a treatment milestone.</p>
        </div>
        <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/02/group-1443.png" alt="">  
              <h4>Reduced Paperwork</h4>
            </div> 
        </div>
        <div class="poorIt">
          <p>Healthcare providers can’t afford to take shortcuts when it comes to avoiding litigation. Every consult requires the completion of forms and questionnaires, followed by the lengthy process of capturing and recording the data. New technologies <a href="https://www.healthit.gov/topic/health-it-basics/benefits-health-it" target="_blank" class="link-blue fw-700">reduce the time and cost of this process</a>, while increasing the convenience of transmitting EHRs between providers.</p>
        </div>
        <div> 
          <div class="d-flex align-items-center">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/02/group-4433.png" alt="">   
            <h4>Eliminates Unnecessary Tests and Procedures</h4>
          </div>
        </div>
        <div class="four-row-accordion">
          <p>Most patients have had the experience of undergoing repeat medical tests because the results of their first tests were not available to other offices or physicians. This represents an unnecessary cost for both the patient and their insurer. Further, the procedures might be uncomfortable, inconvenient, or even present a risk for the patient. Electronic Health Records (EHR) give providers access to all the data in a patient’s record, reducing the likelihood of repeating a test.</p>
        </div>

      </div>

    </div>
  </section>

    <section class="healthcare-fifth">
      <div class="container">
        <div class="row animatedParent">
          <div class="col-md-8 animatedParent">
            <h3 class="animated fadeInDownShort">Finding Your Ideal Patient Engagement Strategy</h3>
            <h5 class="mb-60 animated fadeInDownShort">Learn the steps every healthcare organization should take to ensure patient satisfaction.</h5>
            <p>In the face of regulatory demands, consumer expectations, and evolving technologies, today's Healthcare organizations must overcome enormous challenges to engage patients, remain competitive (or at least, digitally relevant), and retain public trust. Specific challenges include:</p>

            <div class="d-flex align-items-center sloane-one mt-40">
              <div class="portrait-healthcare">
                <img src="https://www.anexinet.com/wp-content/uploads/2020/02/portrait-healthcare.png" alt="">
              </div>

              <div style="max-width:700px;">
                <ul>
                  <li>Legacy technology locked in a closed ecosystem</li>
                  <li>Daunting privacy and security management issues</li>
                  <li>IT teams deficient in core competencies</li>
                  <li>Lack of a prioritized roadmap</li>
                </ul>
                <p>Sound familiar? To learn the key strategies every healthcare organization should employ as part of its Patient Engagement Strategy, download our free white paper now</p>
              </div>

            </div>

          </div>

          <div class="digital-healthcare-form col-md-4">
            <!--[if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({
              portalId: "3474660",
              formId: "8485e366-d81b-4a83-ab0d-169fa8a06a0d"
            });</script>
          </div>
        </div>
      </div>
    </section>
    <span id="reduce_costs"></span>
    <section class="healthcare-sixth ptb-60">
      <div class="container animatedParent">
        <h3 class="animated fadeInDownShort">Reduce Costs via Digital Transformation</h3>
        <p class="animated fadeInDownShort">Financial factors are a primary motivator for consumer engagement across all industries, and healthcare is no exception. People want to be involved in the process of choosing services that impact their wallets, including the price of medical services and the choice of healthcare insurance.</p>
        <p>The democratization of healthcare means greater transparency into insurance data, allowing patients to manage their responsibilities and commitments in real time—so long as provider systems have achieved the necessary level of digital maturity.</p>
        <h4 style="color:#ffb852; margin-top:40px; font-weight:700">Insurance Planning and Implications</h4>
        <p>With the current high cost of healthcare insurance premiums, many patients can no longer afford a “one size fits all” approach, filled with bells and whistles. They want personalized insurance plans tailored to their specific needs, along with control over their costs. A consumer-driven healthcare plan (CDHP) offers both.</p>
        <p>The typical CDHP is a high-deductible plan that uses pre-tax dollars and enables patients to choose lower premiums. To use this type of plan effectively, the patient needs to behave like a consumer and take ownership of managing their healthcare expenses.</p>
        <p>Some ways new technology facilitates this are:</p>
        <ul>
          <li>By providing Medicare and Medicaid analysis tools that help patients understand upfront which costs are covered, and which costs they're responsible for.</li>
          <li>Via interactive tools that ask specific questions about patient needs, and use AI to interpret the complex industry rules to answer them, delivering easily-understandable explanations and recommendations.</li>
          <li>By linking insurance enrollment with long-term financial planning. This educates and guides the consumer to integrate future healthcare costs with retirement planning.</li>
        </ul>
        <div class="d-flex align-items-center sloane-one" >
          <div class="healthcare-text-video">
            <p>Research shows a high percentage of patients will make use of online tools, if they are available. This is equally beneficial for providers, as it generates useful data that allows further personalization for engagement.</p>
            <p><strong>Watch our video to learn more about the implications new technology has on insurance planning.</strong></p>
          </div>
          <div  style="display:contents;">
            <!-- The script tag should live in the head of your page if at all possible --> <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>  <!-- Put this wherever you would like your player to appear --> <img   style="width: 100%; margin: auto; display: block;"   class="vidyard-player-embed"   src="https://play.vidyard.com/gP2Kdsgz6DpjpJ4yC3Exgd.jpg"   data-uuid="gP2Kdsgz6DpjpJ4yC3Exgd"   data-v="4"   data-type="lightbox"/>
          </div>
        </div>
      </div>
      
      <div class="health-sixth-half" style="background-color: rgba(235, 235, 235, 0.3);">
        <div class="container animatedParent">

          <div class="animated fadeInDownShort">
            <h4 style="color:#ffb852; font-weight:700;">Transparency in Pricing</h4>
            <p>Transparency in pricing is not only <a href="https://www.newsweek.com/end-hidden-costs-january-1st-all-us-hospitals-must-publish-price-lists-all-1272328" class="link-blue ft-700" target="_blank">required by government mandates</a>, it’s also an essential factor in healthcare consumerism. Rising insurance premiums and high deductibles increase financial responsibilities for patients, causing them to ask more questions and take a more active role in their care.</p>
            <p>Emerging technology offers opportunities for healthcare providers to ensure healthcare is “shoppable” by making all relevant data available, including pricing. Combined with online reviews, this allows patients to make informed decisions based on the combination of pricing, quality, and outcome.</p>
          </div>

        <div class="d-flex align-items-center sloane-one">

          <div class="healthcare-text-video" style="display:contents;">
            <!-- The script tag should live in the head of your page if at all possible --> <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>  <!-- Put this wherever you would like your player to appear --> <img   style="width: 100%; margin: auto; display: block;"   class="vidyard-player-embed"   src="https://play.vidyard.com/ips19dB4tFzf92MCVkARUU.jpg"   data-uuid="ips19dB4tFzf92MCVkARUU"   data-v="4"   data-type="lightbox"/>
          </div>

          <div style="max-width: 927px; margin-left: 40px; margin-top:40px">
            <p>Artificial Intelligence and Machine Learning minimize expensive errors, and the identification, analysis, and evaluation of data lets providers deliver personalized, real-time information that builds trust and loyalty. Providers also benefit from higher satisfaction rates, more efficient care, and accurate patient expectations, all of which help to reduce write-offs and boost trust.</p>
            <p>Watch our video to learn more about the importance of price-transparency in healthcare.</p>
          </div>

        </div>
      </div>

    </section>
    <span id="accesing_care"></span>
    <section class="healthcare-seven container animatedParent">
      <h4 style="color: #ffb852;" class="animated fadeInDownShort">Accessing Care & Provider Info</h4>
      <p class="animated fadeInDownShort">Easily accessible information and a readily-available healthcare team are at the heart of patient-centered healthcare. Engaged consumers expect easy access to their care options, and to information about their healthcare providers. Direct access to one's care team means personalized, approachable healthcare.<br><br>Patients may book appointments via an app or text message, without having to call and schedule a time with a busy receptionist. Web/mobile patient portals facilitate increased engagement with medical professionals via chat, simplifying appointment scheduling, and even <a href="https://www.clinicalworkflowcenter.com/resources/workflow-process-definitions" class="link-blue fw-700" target="_blank">workflow-based diagnoses</a> for non-urgent needs. Immediate needs can be met through Telehealth. This reduces treatment wait times, significantly improving the patient care experience.<br><br>In addition, the use of technology tightens the patient’s connection with their health plan and increases their trust in providers. Plus, patients able to take virtual action are more likely to do so earlier—addressing health problems before they become acute, which both reduces the cost of treatment and improves the outcome.</p>
      <div class="d-flex align-items-center mb-80 sloane-one">
        <div class="max-1100-mr-40">
          <p>For example, patients may communicate with doctors about pain management, an acute condition, or how to manage the flu. Whatever circumstances the patient is experiencing, they can quickly and easily find the info and help they need from professional healthcare staff. Team members can reach out to consumers with follow-up information. Patients can request an appointment with a healthcare provider—and even complete the required documentation—online.<br><br><strong>Watch our video below about access to healthcare and team information.</strong></p>
        </div>
        <div style="display:contents; margin-bottom:40px;">
          <!-- The script tag should live in the head of your page if at all possible --> <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>  <!-- Put this wherever you would like your player to appear --> <img style="width: 100%; margin: auto; display: block;"   class="vidyard-player-embed"   src="https://play.vidyard.com/ZeFbzjDFfcHUGh6VrAY879.jpg"   data-uuid="ZeFbzjDFfcHUGh6VrAY879"   data-v="4"   data-type="lightbox"/>
        </div>
      </div>
    </section>
    <span id="internet_of_things"></span>
    <section class="healthcare-eight" style="margin-top:60px;">
      <div class="container">
        <div class="d-flex align-items-center mb-40 sloane-one">
        <div style="max-width:430px;" class="animatedParent">
          <img src="/wp-content/uploads/2020/02/artboard-966.png" class="animated fadeInDownShort" alt="Artboard"/ style="max-width:256px;">
        </div>
        <div style="max-width: 890px; margin-left: 40px;" class="animatedParent">
          <h3 class="animated fadeInDownShort">The Role of IoT & Big Data</h3>
          <p class="animated fadeInDownShort">The use of the Internet of Things (IoT) in healthcare offers new, unique opportunities to improve patient engagement. IoT centralizes and connects healthcare monitoring and remote treatment via linked networks. Data may be analyzed and gathered in real time and used to support customer-care plans, while keeping patients engaged in the details.</p>
          </div>
        </div>
        <div>
          <p>Today's devices  let diabetics continuously monitor their blood sugar, without constant finger pricks. Insulin pumps dramatically reduce the number of daily injections required. Users may connect a pump to their mobile device to track their blood sugar level, and make adjustments to keep it stable.<br><br>These technologies not only <a href="https://www.anexinet.com/blog/my-personal-journey-with-healthcare-mobility/" class="link-yellow fw-700" target="_blank">make users’ lives easier and encourage healthcare ownership</a>, they also improve the patient's engagement. This, in turn, increases their understanding of their medical conditions and treatments, enabling them to make better, more-informed decisions that are also more cost-effective. In this way, providers also win by building trust, increasing their patient base, and saving on costs.<br><br>Over the long term, technology and data will continue to reduce spending on medical services by substituting lower-cost activities—like remote monitoring and virtual visits—for more expensive, in-person engagements. Transparency tools will encourage more people to look for lower-cost providers, and the use of digital technology will continue to improve patient outcomes while also reducing the rate of hospital admissions and stays. Consumers will reap the main benefits, but insurers and providers will also enjoy reduced costs and greater efficiencies.</p>
        </div>
      </div>
    </section>
    <span id="risks_rewards"></span>
    <section class="healthcare-nine ptb-60 container">
      <div class="d-flex align-items-center sloane-one">
        <div style="max-width:1500px; margin-right:40px;">
          <h3 style="font-weight:700;">Risks and Rewards</h3>
          <p>Modernization is not without risks. Attackers continue to target healthcare systems, and the 2018 PWC <a href="https://www.pwc.com/us/en/services/consulting/cybersecurity/library/information-security-survey.html" class="link-blue fw-700" target="_blank">“Global State of Information Security Survey”</a> revealed the ongoing adoption of EHRs has increased the risks of cybersecurity attacks, along with other new and evolving threats. <br><br>In terms of rewards, however, investors have been quick to realize the promise of this market. In the first half of 2019, <a href="https://rockhealth.com/reports/2019-midyear-digital-health-market-update-exits-are-heating-up/" class="link-blue fw-700" target="_blank">Rock Health data</a> allocated $4.2 billion in venture capital for 180 digital health start-ups. This puts the market on track to reach $8.4 billion in investments by the end of the year.</p>
        </div>
        <div>
          <img src="/wp-content/uploads/2020/02/asset-334.png" alt="Woman Doctor"/ style="max-width:300px;">
        </div>
      </div>
    </section>
    <span id="final_analysis"></span>
    <section class="healthcare-ten ptb-60">
      <div class="container animatedParent">
        <h3 style="margin-bottom:20px;" class="animated fadeInDownShort">Final Analysis</h3>
        <p>To keep up with the ongoing evolution of technology and remain relevant and competitive while earning the market’s trust, healthcare organizations must address the consumer demand for modern user experiences. Patient engagement through digital channels requires stable functionality, intuitive design and modern interaction modalities to ensure a fulfilling user experience.<br><br>Such a goal can only be accomplished via a comprehensive roadmap and a solid patient-engagement strategy. Today's patients expect greater access to medical information, and a seamless relationship with their healthcare data, yet very few organizations have in-house IT teams capable of achieving this objective. This <a href="https://insights.anexinet.com/healthcare" class="link-blue fw-700" target="_blank">effective digital solution is available</a>, however, to help your organization leverage the latest technologies, ensure patient loyalty and satisfaction, and achieve success in the market.</p>
      </div>
    </section>

    <section class="healthcare-eleven container sloane-one">
    <div class="mb-m-60">
      <h3 style="margin-bottom:20px; font-weight:700;">Digital Healthcare Kickstart</h3>
      <p style="color: white; max-width: 470px; font-weight: 700;">What's the best, fastest way to guarantee a great digital journey that ensures HIPAA compliance at every turn? Simple. Kickstart it.</p>
      </div>
      <div>
      <a href="https://insights.anexinet.com/healthcare" target="_blank" class="yellow-btn-2020">Learn More &rarr;</a></div>
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

</div>

<?php endwhile; ?>

<?php get_footer();
