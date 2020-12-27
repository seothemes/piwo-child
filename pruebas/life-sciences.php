 <?php
/**
 *
 * Template Name: Life Sciences
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



/* INICIA CSS LIFE SCIENCE */


.post-intro-wrapper {

padding-top: 220px !important;
}

.post-intro-wrapper h1.post-title{
  font-size: 50px !important;
}


.circ_white{
  position: relative;
  background-image: url(https://www.anexinet.com/wp-content/uploads/2020/06/icon_top_centered.png);
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


/* TERMINAN CSS LIFE SCIENCE */



.piwo-nav .menu-item .sub-menu li{
 width: initial !important;
}

.single-post-content {
  margin-top: -50px;
}

.parrafofix {
  left:9.5vw;
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



/* ############# SECCIONES DE PAGINA #############*/

#life_sciences {
  min-height: 826px;
}
#patient_services{
  min-height: 860px;
  height: 860px;
}
#future_of_work {
  min-height: 1160px;
}
#digital_core {
  min-height: 1060px;
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
  left: 14% !important;
}



}


@media only screen and (max-width: 1200px) {




   #life_sciences {
    min-height: 1070px;
  }

  #patient_services{
    min-height: 865px;
  }

  #future_of_work {
    min-height: 1201px;
  }





.parrafofix {
    left:11vw;
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
    left:4vw;
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

  #digital_core {
    min-height: 1100px;
}

  #future_of_work {
    min-height: 1300px;
  }

#life_sciences {
    min-height: 1150px;
  }

#patient_services{
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



@media screen and (max-width:900px){
  .dereparrafo{
    width: 100%;
    margin-top: 40px;
    align-items: center;
    
  }
}

@media only screen and (max-width: 850px) { 

  .parrafofix {
    left:5vw;
  }

}


@media only screen and (max-width: 769px) { 


#digital_core {
    min-height: 1400px;
}

#future_of_work {
    min-height: 1600px;
  }

#life_sciences {
    min-height: 1350px;
  }

#patient_services{
    min-height: 1250px;
  }




.parrafofix {
    left:8vw;
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




#digital_core {
    min-height: 1450px;
  }

#life_sciences {
    min-height: 1450px;
  }

#patient_services{
    min-height: 1300px;
    height: 850px;
  }





  .container-managed {
left: 20px;
    padding-right: 50px;
    padding-top: 50px;
  }
  #WS-ScroLi {
    display: none;
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



#life_sciences {
    min-height: 1650px;
  }

#patient_services{
    min-height: 1450px;
  }

#digital_core {
    min-height: 1550px;
  }

#future_of_work {
    min-height: 1600px;
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
@media only screen and (max-width: 376px) {



#life_sciences {
    min-height: 1600px;
  }
#patient_services{
    min-height: 1400px;
}
  #digital_core {
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
    left:2vw;
  }
}


@media only screen and (max-width: 320px) {
#life_sciences {
    min-height: 1800px;
}

#digital_core {
    min-height: 1550px;
  }
}

</style>

<?php //echo the_content(); ?>


<div class="parrafofix">

</div>


<div id="WS-SL--content">
        

      <section id="life_sciences">

                 <div class="container container-managed container-managed-uno">

                                <div class="izqparrafo">

                                  <h2>Life Sciences</h2>


<p>The healthcare ecosystem has transformed drastically during a dramatically short period of time. As a consequence of this radical technological evolution, patient expectations are vastly different than they once were. Patients want to be empowered by their healthcare experience and play an active role in choosing their treatment path. Their well-being is paramount, but it is not merely a physical need, it is a need that is psychological and financial as well.<br/> 
Life Sciences organizations (as an entity or across each brand) can address and solve these complex problems by providing sophisticated solutions through a patient-centric approach to healthcare. Interactions must be personalized so patients can access their individual data, lab results, health and support groups. By gaining access to tools such as these, patients begin to truly possess the necessary knowledge to use their voices effectively during treatment. <br/><br/>
From strategy through execution, we deliver award-winning self-service applications and the infrastructure to run them on. Our multi-disciplinary teams of strategists, designers, technologists and data experts imagine, design, develop, and implement flexible digital strategies that respond to emerging trends in technology healthcare—driving patient engagement as well as IT efficiencies and cost savings. Further, Anexinet has deep experience helping Life Sciences organizations at all levels of technological maturity modernize their core infrastructure from end-to-end to support their new strategy direction, empower patients, and promote enablement in line with user expectations. Finally, we keep honing your strategy and applications through trends and insights gleaned from advanced analytics to ensure your digital experience always keeps pace with the evolution of technology.    
</p>
                                </div>

                      
                                <div class="dereparrafo">

                                      
                                      <div class="bg_white_box_shadow">
                                        <div class="circ_white"></div>

                                        <img class="img_box_forshadow" src="https://www.anexinet.com/wp-content/uploads/2020/06/futurebox-logo-bayhealth.jpg">

                                        <p>Bay Health came to us with little more than a mission to provide “easy and transparent access to care.” The organization now boasts a suite of cross-platform mobile apps that enable 24/7 video visits with physicians (telehealth), and an updated technical architecture to support it. Additionally, our new member portal enabled a single user experience that leveraged multiple EHRs to provide the client with a key competitive differentiator that offers instant access to provider directories, along with self-service insight into medical histories, prescription info, and procedural costs.
                                        </p>

                                      </div>

                                </div>
                               
                    </div>

      </section>








       <section id="patient_services">

                 <div class="container container-managed container-managed-dos">

                                <div class="izqparrafo">

                                  <h2>Engage: Patient Services </h2>


                                  <p>Each patient’s needs are remarkably different. Providing frictionless interactions across the patient journey will lead to an exponential increase in positive outcomes. At Anexinet we create digital solutions, to improve patient awareness and access, while driving adherence and retention; all lead to across-the-board brand loyalty. Additionally, as the overall experience of the patient improves: patients will be safer and use fewer unnecessary healthcare services. The entire ecosystem benefits from a comprehensive system of digital services that address omnipresent patient needs.   Consider recent statistics that estimate that 20-30% of medication prescriptions are never filled, and nearly 50% of medications to treat chronic diseases are not taken as prescribed by a doctor. That is an enormous group of people who do not receive the care and help they desperately need. Imagine if brands correctly identify those patients and connect with them.  By utilizing an omnichannel approach, brands accomplish precisely that: communicating with patients in real-time to provide better healthcare outcomes while driving revenue.<br/><br/>

A 24 hours a day, 7 days a week approach to patient care can be delivered in a seamless, intuitive solution.  We improve both the patient and business outcomes by aligning business KPIs, across R&D, Manufacturing, Sales, Marketing, and patient services, to the patient journey:   <br/><br/>

<strong>Awareness</strong><br/>
Brand recognition fuels growth. By providing necessary services in a holistic package, we help your brand become synonymous with healthcare success and fuel patient engagement. We raise the awareness of your brand. Ours is an à la carte experience, which means we craft solutions that solve problems that are specific to your business approach.<br/><br/>

<strong>Onboarding & Access</strong><br/>
Increasing communication seems like a simple task yet building user-friendly systems that allow for personalization is indeed more of strategic art than an exact science. We are experienced in creating digital solutions that link all necessary systems and are patently accessible. Whether you are communicating with patients or employees you can count on a safe and frictionless experience that functions across platforms and operating systems. Easy access to records and telemedicine options, both during the onboarding phase and while the patient is on-script, have become critical offerings in our ever-changing-world. <br/><br/>

<strong>Adherence</strong><br/>
We create systems that help users form meaningful relationships with brands, effectively motivating adherence, making your personalized interactions become an integral part of users’ day to day routine. Imagine an elderly patient who receives a mobile notification twice a day reminding them to take the medication needed to treat their chronic illness. That application becomes an ingrained part of their life; they rely on it. Through research and social listening, we are able to glean valuable insights to help you anticipate user needs and shape their future behavior. We deliver the metrics that matter most to your business and influence your bottom line.<br/><br/>

<strong>Retention</strong><br/>
Through the implementation of scalable platforms to support long-term engagement, we boost user retention. From day one, complex information is expressed via simple design concepts. Because we are able to provide insights and transparency, users trust the experience we cultivate, helping them to make smart decisions. Gamification strategies can drive further engagement and provide invaluable user data, helping to identify possible knowledge gaps.

 </p>
                                </div>




                                


                    </div>

       </section>







         <section id="future_of_work">

         <section id="life_sciences">

<div class="container container-managed container-managed-uno">

               <div class="izqparrafo">

                 <h2>Empower:  Future of Work</h2>


<p>The agility required to support today’s workforce is rapidly evolving. Distributed teams, mobile workforces, and complex security issues are just a few challenges companies face. Without the right strategy, architecture, applications, and mobile tools to connect and empower employees, your organization is fighting a losing battle.<br><br>
Anexinet’s modern work solutions enable clients to realize successful outcomes, including increased employee productivity, enhanced customer experiences, and additional market share. But achieving these outcomes requires understanding your organization’s key business drivers, identifying opportunities for innovation, and creating a strategy and actionable roadmap aligned with your strategic objectives.</p>
               </div>

     
               <div class="dereparrafo">

                     
                     <div class="bg_white_box_shadow">
                       <div class="circ_white"></div>

                       <img class="img_box_forshadow" src="https://www.anexinet.com/wp-content/uploads/2020/06/futurebox-logo-astrazeneca.jpg">

                       <p>Bay Health came to us with little more than a mission to provide “easy and transparent access to care.” The organization now boasts a suite of cross-platform mobile apps that enable 24/7 video visits with physicians (telehealth), and an updated technical architecture to support it. Additionally, our new member portal enabled a single user experience that leveraged multiple EHRs to provide the client with a key competitive differentiator that offers instant access to provider directories, along with self-service insight into medical histories, prescription info, and procedural costs.
                       </p>

                     </div>

               </div>
              
   </div>

</section>



      <section id="digital_core">

                <div class="container container-managed container-managed-uno">

                        <div class="izqparrafo">

                                  <h2>Managed Infrastructure</h2>


                                  <p>For many organizations, managing IT is the black hole of the back office: a drain on resources, money and—most of all—time. Performance, uptime, and other critical infrastructure issues place huge demands on your IT team. The solution? Outsource maintenance functions to a qualified partner so your team can focus on the business of IT.​<br/><br/>

                              Your organization requires and deserves great service and responsive support. That’s why, with Anexinet, you’ll get everything you need from an IT infrastructure and cloud services provider at the right price. ​<br/><br/>

                              From advisory services to remediation, we improve IT service delivery and availability by monitoring, operating, and optimizing performance and capacity—eliminating bottlenecks and downtime as well as reinvigorating top-line growth. We keep you up and running,  provide the personal attention you deserve, and make sure you have the ideal mix of services to meet your needs—today and in the future.​<br/><br/>

                              Our Managed Operations Services include:​</p>

                    <ul>
<li>NOC & SOC</li>
<li>O365​</li>
<li>Cloud Management​​</li>
<li>Server/Network/Security System Administration</li>
<li>Backup & Disaster Recovery</li>
<li>Vulnerability & Patch Management​</li>
<li>Malware/Ransomware Defense</li>
<li>Desktop Management</li>
</ul>

                           <p>   Think of Anexinet as your trusted IT partner for the long haul, enabling you to focus on managing and growing  your business.​

                              ​ </p>

                        </div>



                        <div class="dereparrafo">
                          <div>
                            <img src="https://www.anexinet.com/wp-content/uploads/2020/05/group-6-1.jpg">
                          </div>

                          <div class="tit-maged-art">
                            <p>CASE STUDY</p>
                            <p>Customers Bank</p>
                            <div>
                              <a target="_blank" href="https://www.anexinet.com/case-studies-testimonials/customers-bank/">Read More​</a>
                            </div>
                          </div>
                        </div>


              </div>

      </section>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/ws-scroli.js"></script>
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/readmore.js"></script>


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




  $('#readmore').readmore({
      moreLink: '<a class="knowmore btn_read_bottom" href="#">KNOW MORE </a>',
      lessLink: '<a class="btn_cerrarz btn_read_bottom" href="#">SHOW LESS </a>',
      speed: 1000,
      collapsedHeight: 278,
      afterToggle: function(trigger, element, expanded) {
        
        if(! expanded) { // The "Close" link was clicked
          $('html, body').animate({scrollTop: element.offset().top - 100}, {duration: 100});
        //alert("si22");
       $('.clearsocial').fadeIn(0);
        
        $('.img-1-box-blue').attr('src','https://www.anexinet.com/wp-content/uploads/2020/05/box-blue-fix2.png');
        }else {
        //  alert("si11");
        
        $('.clearsocial').hide(0);
        $('.img-1-box-blue').attr('src','https://www.anexinet.com/wp-content/uploads/2020/05/largeblue.png');
        }
      }
    });



$( function() {

  $('.knowmore').click(function(){
    // your code here
      $('.clearsocial').hide(0);
      $('.img-1-box-blue').attr('src','https://www.anexinet.com/wp-content/uploads/2020/05/largeblue.png');
  });



        $('#WS-SL--content').WS_ScroLi({
            validEnd : {
                status  : false
            },
          
            sections : [
                [ '#life_sciences', '<a href="#life_sciences">Life Sciences</a>' ],
                [ '#patient_services', '<a href="#patient_services">Engage:<br/> Patient Services</a>' ],
                [ '#future_of_work', '<a href="#future_of_work">Empower: <br/>Future Of Work</a>' ],
                [ '#digital_core', '<a href="#digital_core">Enable: Digital Core</a>' ]
            ],
            position : {
                x : ['left','auto'],
                y : ['top', 90]
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

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
    
	<?php if(!$full_pages == true) {echo '</div>';}?>

</div>

<?php endwhile; ?>

<?php get_footer();
