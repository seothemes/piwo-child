 <?php
/**
 *
 * Template Name: Guide Secure Identity and Access Management
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



<!-- Gradient Navegation Bar Begin -->
<section class="grndt-sec-nav green-nav container-fluid" id="grdnt">
  <div class="container">

    <div class="cont-1">
      <a href="#barriers">Barriers to IAM</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#top5iam">Top 5 IAM Challenges</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#things">Things to Consider in Your IAM Strategy When Securing Cloud Services</a> 
    </div><span class="grdnt-divider">|</span>
      <div class="cont-1">
      <a href="#steps">3 Steps to Building A Secure Identity Management Program</a> 
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


#what_is_iamprogram, #current_state, #iamprogram_removed, #prevent_ransoware, #the_recovery{
    position: relative;
    display: block;
    top: -55px;
}




ul li {
  margin-bottom: 15px;
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

h4 {
  font-size: 20px;

}

.iamprogram-fifth h3, .iamprogram-eleven h3{
  color: #fff !important;
}

.iamprogram-fifth .hs-input{
  padding: 5px !important;

    margin-bottom: 6px !important;
}


.grndt-sec-nav .container .cont-1{
  margin-right:0px;
}

.page-template-guide-for-banks .post-title{
  color: #187bcd;
  font-weight: 700 !important;
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
.border-box a{
  margin-left:12px;
  color:#187bcd;
  font-weight: 700;
}

.iamprogram-first a {
    font-size: 13px;
    line-height: 16px;
    margin-left: 12px;
    color: #3c3d47;
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
.iamprogram-second{
  background-image:url('https://www.anexinet.com/wp-content/uploads/2020/02/doctors2.jpg');
  color:white;
}
.iamprogram-second p{
  color:#fff;
  font-style:italic;
}
.vidyard-player-container{
  max-width:800px;
  /* padding-top:60px; */
}
.iamprogram-third{
  background-color: rgba(235, 235, 235, 0.3);
  padding:20px 0px 40px 0px;
}
.ui-accordion-header{
  background-color: #f4f4f4;
  padding: 20px 40px;
  margin-top: 20px;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  color:#187bcd;
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

.grndt-sec-nav .container {
    display: table;
    padding: 12px 0;
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
  color: #a4ca53;
}
#accordion3 .ui-state-active:after{
  color:#a4ca53;

}





#accordion3 .uiacordion-conten{
  background-color:red;
}

.second-accordion #accordion3 .ui-accordion-header{
  color:#187bcd;
}


.iamprogram-fourth h2{
  font-size:42px;
  margin-bottom:40px;
}
.iamprogram-fourth ul{
  margin-top:40px;
}
.iamprogram-fifth{
  background-image: url('https://www.anexinet.com/wp-content/uploads/2020/02/adobe-stock-253025721.jpg');
  color:#fff;
  padding: 60px 0;
}
.iamprogram-fifth p{
  color:white;
  font-weight:700;
}
.iamprogram-fifth h3{
  margin-bottom: 20px;
}
.iamprogram-fifth .portrait-healthcare{
  margin-right:40px;
}
.digital-iamprogram-form .hbspt-form .hs-form .hs_submit .actions .hs-button{
  background-color: #FFB852 !important;
  padding: 3vh 1vw;
  width: 100%;
  color: white;
  font-weight: 900;
  font-size: 16px;
}
.iamprogram-sixth p{
  margin-bottom:14px;
}
.iamprogram-sixth {
      background-color: #fff;
  
}
.iamprogram-text-video{
  max-width: 50%;
  
}
.health-sixth-half{
  background-color: rgba(235, 235, 235, 0.3);
  padding: 80px 0;
  margin: 40px 0;
}
.iamprogram-eight{
  background-image: url('/wp-content/uploads/2020/02/group-6.png');
  color:#FFF;
  padding:60px 0;
  background-size:cover;
}
  
.iamprogram-eight p{
  color:#FFF;
  font-weight:700;
}
.paddi {
  padding:0px 150px 0px 40px;
}

.green-nav {
  background: #187bcd;
}

.iamprogram-nine {
  background-color: rgba(235, 235, 235, 0.3);
 
}


.iamprogram-third {
  background-color: #fff;

}


.iamprogram-ten{
  background-color:#0f4c83;
	color:#fff;
}


.iamprogram-ten10 {
  background-color: #fff;
}

.iamprogram-ten1{
  background-color: rgba(235, 235, 235, 0.3);
 
}

h3 {
  font-size: 24px;
  line-height: 26px;
}

.iamprogram-ten1 h3{
  color: #3c3d47;

 
}



	
	.iamprogram-ten h3{
		color:#fff;
		
	}
	
	.iamprogram-ten p {
		color:#fff;
	}
	
	
.iamprogram-eleven{
  background: linear-gradient(45deg, #187bcd, #187bcd);
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
  color: #187bcd;
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
color: #0f4c83;

}

.first-accordion .ui-accordion-header {

    background-color: rgba(235, 235, 235, 0.3)
}



#accordion3 .ui-accordion-header h4{
color: #a4ca53;



}

#accordion3 .ui-accordion-header {

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
color: #187bcd;
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

.txtwhotebook {
  font-family: Montserrat;
  font-size: 20px;
  font-weight: bold;
  color: #FFF;
  padding: 53px 40px;
  line-height: 24px;
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


.mitadran1 {
  position: relative;
  width: 70%;
  float: left;
}


.lista_verde_paloma strong{
  font-size: 24px;
  color: #fd8949;
  font-weight: normal !important;
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

	.tresbok3 {
    padding-top: 86px;
  }
	
	
	.lista_verde_paloma {
		    margin: 20px 0;
        clear: both;
        float: none;
        position: relative;
	}
	
	.lista_verde_paloma li{
		margin-bottom: 40px;
    padding-left: 35px;
    background-image: url(https://www.anexinet.com/wp-content/uploads/2020/04/group-9-copy-25.png);
    background-repeat: no-repeat;
    background-position: 0px 5px;
    list-style: none;
    margin-left: 0px;
		color:#fff;
	}
	
	
.guidebook {
  width: 100%;
  height: 200px;
  display: block;
  position: relative;

    background-image: linear-gradient(261deg, #187bcd 114%, #187bcd -45%);
    margin-bottom: 90px;
    margin-top: 40px;
    float: none;
    clear: both;
}

.tresbok {
  position: relative;float: left;
  text-align: left;
  width: 33.33%;

}


.tresbok1 {
  margin-top: -40px;
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


    .lista_verde_paloma3 li{
    margin-bottom: 40px;
    padding-left: 35px;
    background-image: url(https://www.anexinet.com/wp-content/uploads/2020/03/group-9-copy-1.png);
    background-repeat: no-repeat;
    background-position: 0px 5px;
    list-style: none;
    margin-left: 0px;
    color:#000;
  }


 .lista_verde_paloma3 {
  clear: both;
  float: none;
  position: relative;
 }

 .lista_verde_paloma3 strong{
  color: #a4ca53;
    font-size: 24px;

  font-weight: normal !important;
 }


	.ptb-60 {
		padding:60px 15px !important;
	}
	
	.iamprogram-eleven .mb-m-60{
		width:70%;
	}




#barriers {
     position: relative;
    display: block;
    margin-top: -90px !important;
    padding-top: 90px !important;
}

#guidebook {
 position: relative;
    display: block;
    margin-top: 60px !important;

}

#things{
    position: relative;
    display: block;
    margin-top: -30px !important;
    padding-top: 30px !important;

}

#steps{
  position: relative;
    display: block;
    margin-top: -20px !important;
    padding-top: 20px !important;

}





#final_analysis {
 position: relative;
    display: block;
    margin-top: 60px !important;

}



#top5iam {
    position: relative;
    display: block;
    margin-top: -60px !important;
    padding-top: 60px !important;
}














@media only screen and (max-width: 600px) {


.guidebook {
  height: 100%;
  margin-bottom: 0px;
}

.tresbok1 {
  padding-top: 40px;
}

.tresbok3 {
    padding-top: 0px;
    padding-bottom: 60px}

.tresbok3 a{
  display: table;
  margin:0 auto;
}
 .tresbok {
  width: 100%;
  float: none;
 }
	
		.iamprogram-eleven .mb-m-60{
		width:100%;
	}

	
	
	.mitadran1, .mitadran2, .mitad3, .mitad4, .mitad_con35, .mitad_con65 {
		float:none;
		width:100%;
	}
	
	
.paddi {
  padding:20px;
}

.iamprogram-eleven{
  padding: 40px;
}

}




</style>

<!-- Gradient Navegation Bar End -->

<!-- first section -->
  <section class="iamprogram-first">
    <div class="container">



      <div class="ptb-40 animatedParent">
        <p class='animated fadeInDownShort mb-20'>
        <strong>Identity and Access Management (IAM)</strong> is the practice of defining and managing the enterprise roles and access privileges of network users, along with establishing any details that further qualify these access privileges. The goal of an IAM program is to create a single digital identity for each individual; key advantages of IAM include enhanced security, simplified auditing and reporting, and a streamlined user experience that boosts productivity by providing easy access from anywhere. Naturally, once each digital identity has been created, it needs to be maintained and adjusted as needed with technology-shifts, or as a user’s standing, employment status, or relationship with the company changes. 

In this guide, you can expect to learn more about: 
        </p>
        
        
      </div>



      <div class="row" style="margin-bottom:40px;">

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#barriers">  <div class="border-box animated fadeInDownShort">
           <img src="https://www.anexinet.com/wp-content/uploads/2020/04/unnamed.png" />
            <!-- <img src="" alt=""> -->
         Barriers to IAM
          </div></a>
        </div>

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#top5iam">  <div class="border-box animated fadeInDownShort delay-250">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-8.png" />
            <!-- <img src="" alt=""> -->
          Top 5 IAM Challenges
          </div></a> 
        </div>

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#things">  <div class="border-box animated fadeInDownShort delay-500">
           <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-5.png"/>
            <!-- <img src="" alt=""> -->
         Things to Consider in Your IAM Strategy When Securing Cloud Services
          </div></a> 
        </div>


        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#steps">  <div class="border-box animated fadeInDownShort delay-500">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-19-1.png"/>
            <!-- <img src="" alt=""> -->
         3 Steps to Building A Secure Identity Management Program
          </div></a> 
        </div>



      </div>

      

		
    </div>
  </section>
<!-- /First Section -->







   
<span id="barriers"></span>
    <section class="iamprogram-third first-accordion" >
      <div class="container animatedParent">
        <h3 class="animated fadeInDownShort">Barriers to IAM </h3>
        <p class="animated fadeInDownShort">Modernizing an Identity and Access Management (IAM) program to account for cloud and hybrid environments is becoming increasingly complex for organizations of all sizes. Migration to the cloud requires a strong IAM strategy. The first step is to understand how your IAM strategy aligns with business objectives. Also, consider how any applicable compliance requirements factor into your Identity Management strategy. Users will demand fast and simple access to resources. Without this efficiency, users won’t adopt—or will work around—the controls in place, if they can. Finally, the strategy and road map should share an end-to-end plan for IAM workloads, both on-premises and in the cloud.</p>

      </div>
      <div class="accordions container">
 
        <div id="accordion">

          <div>   
            <div class="d-flex align-items-center">
             <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-11.png">
              <h4>Lack of strategy around people, process, and technology </h4>
            </div>
          </div>
          <div class="poorIt li1">

            <p style="margin-bottom:20px;">IAM is a critical and complex issue that spans departments, requiring a strategy around people, process, and technology. The majority of today’s breaches are tied to compromised credentials, and the number of credentials per user continues to increase. According to a McAfee survey, users “have an average of 23 online accounts that require a password, but on average only use 13 unique passwords for those accounts. 31% only use two to three passwords for all their accounts so they can remember them more easily. And lists are far from dead, as the most common way to remember passwords is to keep a written or digital list of all passwords (52%).” Security through integrated technologies is only one key component. Without collaboration among all business stakeholders, and a clear understanding of responsibilities, there will be critical gaps in your IAM program. A technology or product alone will not solve this problem</p>

          </div>

          <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-115.png">
              <h4>Poor business alignment</h4>
            </div> 
          </div>
          <div class="two-rows-accordion">
            <p>Today’s Identity Access Management solutions do a lot more than just sync passwords or manage access rights. They need to be business-process oriented and tightly integrated with your business processes. Establishing an agreed-upon strategy will help align stakeholders, including IT executives and line-of-business managers. It’s essential to understand the interests and priorities of each area of the business throughout the IAM modernization project. Through this alignment, key stakeholders will understand the benefits of IAM (e.g. how it creates efficiency and security for them and their team) and will ensure the processes and technology accomplish your objectives and outcomes. </p>
          </div>

          <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-108.png">
              <h4>Limited resources</h4>
            </div> 
          </div>
          <div class="poorIt" >
            <p>Now that you have a plan, the next step is to determine who is going to implement and manage your IAM modernization strategy. Often, several managers are needed to ensure every requirement is satisfied. Unfortunately, training existing IT Administrators is just not an option. In addition, you now have the operational aspect of running an IAM program to consider—fielding support tickets, incident monitoring and resolution, etc., as an IAM program is only as good as its management.<br/><br/>

To address these challenges and acquire the skills necessary to successfully transition to a modern IAM solution, organizations rely on professional services providers like Anexinet. Anexinet provides services that help your organization with strategy and business alignment, IAM tool selection, implementation and operationalization, along with providing ongoing management. These services are available in many capacities, whether you want to supplement and train existing staff for a specific project or need Anexinet to lead and provide all managed services. Many flexible models are available to ensure your success. <br/><br/>

Organizations have made significant investments in IAM over the past few years. Building a new, modernized IAM program that meets digital transformation initiatives requires new skills, experience and insights designed to grow the business. A holistic approach to modernization will help ensure your business is successful and secure.
</p>
          </div>


        </div>

      </div>
    </section>






<section class="guidebook">

<div class="container sloane-one">

        <div class="tresbok tresbok1">
          <img src="https://www.anexinet.com/wp-content/uploads/2020/04/asset-3.png">
        </div>

        <div class="tresbok txtwhotebook">
          Take a copy of the Guide to Building a Secure Identity and Access Management (IAM) Program with you 
        </div>

        <div class="tresbok tresbok3">
         <a href="https://insights.anexinet.com/guide-to-building-a-secure-identity-and-access-management-program" target="_blank" class="yellow-btn-2020">Download Now →</a>
        </div>

</div>

    </section>




    <span id="top5iam"></span>
    <section class="iamprogram-ten1 ptb-60">
      <div class="container animatedParent">

		  <div class="mitad3">
						<h3 style="margin-bottom:20px;" class="animated fadeInDownShort">Top Five IAM Challenges
						</h3>
				  <p style="margin-bottom:20px;">From small and mid-sized businesses to Fortune 500 companies, IT organizations everywhere are abandoning on-premises software in favor of on-demand, cloud-based services. As more companies transition to hybrid configurations, maintaining tight control over resource access becomes increasingly important. In addition, users must keep track of the countless URLs, usernames, and passwords they use to access their applications and data. The following are the top five identity and access management (IAM) challenges associated with adopting a hybrid environment, along with some best practices for addressing each of them.</p>		  
			</div>
		  
 <div class="mitad4">	  
    <img style="margin:0px auto 40px auto; display:block; padding-left:25px;" src="https://www.anexinet.com/wp-content/uploads/2020/04/asset-2-pillar.png" />
	 </div>
		  
		  
		     <ul class="lista_verde_paloma">
								   <li><strong>Challenge #1: Protecting Resources in the Cloud </strong>
									   <p style="margin-top:15px;">
Enterprises eager to leverage the benefits of the cloud (e.g. scalability, customization, mobility, and more) are transitioning away from traditional environments at an astonishing rate. Specifically, we are seeing enterprises migrating IT workloads to a hybrid infrastructure, with cloud environments seeing the greatest growth in adoption. The hitch is that common, on-premises legacy identify management deployments can be difficult to replicate in a cloud environment.<br/><br/>

Therefore, protecting cloud resources will require a shift in IT—whether that means expanding an existing legacy access management platform or implementing a new one. Both come with challenges. If remaining on-premises, mirroring components such as the heavy database infrastructure for session storage, policies and encryption keys is complex and expensive to manage. Deploying a new solution, however, means overcoming some migration complexities, as well as a learning curve. On the whole, however, pursuing a cloud-ready solution has a far greater upside.<br/><br/>
<span style="color:#187bcd; font-size:21px;">Solution</span><br/><br/>
IAM systems can be cloud-based (IDaaS) or on-premises; a modern cloud-IAM solution is generally much more lightweight and cloud-ready, allowing protection for resources hosted on-premises and in the cloud.  Today, more organizations are moving to cloud IAM systems. Reports indicate only 38% of enterprises expect to remain on-prem for the next three years; 60% will rely on a third-party IAM service that supports multiple cloud environments and unifies access across on-prem and public-cloud resources. These hybrid or SaaS-based solutions and policies can be easily extended from on-premises to the cloud to ensure the right people have access to sensitive resources. Additional advantages of Cloud IAM include cost savings in infrastructure and maintenance, increased reliability, for reduced risk of downtime, and ease-of-upgrade, so your software is always current.
									   </p>
									</li>

								   <li><strong>Challenge #2: An increasingly distributed workforce</strong>
										 <p style="margin-top:15px;">
				Remote employees are increasingly becoming the norm rather than the exception; in the last decade, <a target="_blank" style="color:#0028c6" href="https://money.cnn.com/2017/06/21/pf/jobs/working-from-home/index.html">the number of remote workers jumped 115%.</a> One strategy for recruiting and retaining the best talent is providing a flexible work environment. However, with employees requiring access from all over the globe, maintaining a consistent user experience without sacrificing security is a daunting challenge for IT teams. Reduced visibility and control over employee work practices have made traditional workplace security methods impractical. To further complicate matters, BYOD enables employees, contractors, partners, and others to connect devices and access the corporate network.  IT needs to address these devices and protect company assets without disrupting employee productivity and the user experience. <br/><br/>
        <span style="color:#187bcd; font-size:21px;">Solution</span><br/><br/>
        Many organizations have IAM best practices in place, however these practices and procedures are only effective if they are adhered to across the organization. Unchecked or mismanaged exceptions to IAM policies are the most common cause of compromised data. Even with policies in place, it’s critical to periodically review and validate your IAM program for areas of strength and weakness and make adjustments as necessary. In addition, IAM needs to be included in your overall modernization strategy to ensure the solution you implement today is still secure tomorrow.
									   </p></li>
								   <li><strong>Challenge #4: Lack of a centralized User Directory</strong>
									   <p style="margin-top:15px;">
										   The effective management and security of user identities and data requires visibility into all aspects of IAM, yet many organizations still lack this essential component. Without a unified approach and a centralized user directory, identity sprawl is (or will become) a real challenge. Identity sprawl occurs when a user’s identity is managed by siloed, unsynchronized systems, resulting in multiple identities for each user. Investment in a corporate directory (such as Microsoft Active Directory) is necessary to manage access to on-premises network resources. And as your organization adopts cloud-based services, most can be extended into the cloud. Oftentimes, however, an application isn’t—or can’t be—integrated with the central directory service, requiring the management of another set of user identities to support access and grant permissions. With cloud and SaaS-based services being accessible to IT and non-IT staff alike, this challenge is not going away. <br/><br/>
 <span style="color:#187bcd; font-size:21px;">Solution</span><br/><br/>
One of the main challenges of identity sprawl is being aware of every system that contains identities and data security management, so the first critical step is to identify these systems. Once this step is complete, it’s essential to gather all requirements and layout a unified plan. If the chosen solution fails to support your requirements and provide the services users require, your project will also likely fail. In addition, when establishing a centralized repository, it’s important to analyze risk to determine the potential impact of centralizing critical data so appropriate countermeasures may be implemented. 
									   </p></li>
								   <li><strong>Challenge #5: User Password Fatigue</strong>
				 <p style="margin-top:20px;">
					 This oneThe growth of cloud-based applications means users must remember an increasing number of passwords and may be required to use numerous authentication protocols. User frustration can result from the additional time needed to manage multiple passwords along with varying requirements for password complexity, history, expiration length, etc. Users tire of remembering passwords for different accounts and as a result use the same password for multiple accounts. The problem, of course, is that if one account becomes compromised, others can be easily compromised as well. Due to the prevalence of outside threats, passwords have become essential to holding and managing accounts, yet companies continue to rely on key accounts that serve critical functions (e.g. human resources, finance, access to protected data, and contract management). A balance of security and ease of management is essential to keep these critical accounts safe.<br/><br/>
						<span style="color:#187bcd; font-size:21px;">Solution</span><br/><br/>

Enterprises can readily make password issues a thing of the past by federating user identity and extending secure Single Sign-On (SSO) capabilities to SaaS, cloud-based, web-based, and virtual applications. However, solid design and groundwork must be laid in order to trust the identities being federated. Assessment and cleanup of your Active Directory (or whichever directory is your trusted source) is absolutely vital. In addition, once implemented, having governance in place to ensure users are provided appropriate access is a key component of ongoing security.
            			   </p>
				 </li>
							   </ul>
			  


     
      </div>
    </section>











    <span id="things"></span>
    <section class="iamprogram-sixth" style="padding:80px 0px;">
      <div class="container animatedParent">
      

      <div class="mitad3">
            <h3 style="margin-bottom:20px;" class="animated fadeInDownShort">Things to Consider in Your IAM Strategy When Securing Cloud Services
            </h3>
          <p style="margin-bottom:20px;">The growing popularity of Cloud services (IaaS, PaaS, and SaaS) use by all organizations should come as no surprise, since they offer enterprises instant access and predictable expenses. The security of these cloud services, however, is much less predictable. Such a diverse cloud footprint creates a security and compliance risk for any organization. According to a Kleiner Perkins report, cloud-enabled applications have risen because they are cheaper to build and easier to adopt. But the report states they have “serious security and compliance implications” and that 94% of all cloud apps used are “not enterprise ready.”</p>      
      </div>
      
 <div class="mitad4">   
    <img style="margin:0px auto 40px auto; display:block; padding-left:35px;" src="https://www.anexinet.com/wp-content/uploads/2020/04/asset-3-pilla.png" />
   </div>
      

<p style="margin-bottom:60px;">For example, many breaches occurred on Amazon S3 buckets, and companies breached had cloud networks that were open for weeks, giving ample time for cyber-criminals to take advantage of the security holes. One leak involved a third-party contractor who misconfigured an Amazon S3 server and leaked 50,000 records of Australian employees. In another incident, Accenture misconfigured an Amazon server, accidentally exposing more than 137 gigabytes of data, including databases of 40,000+ credentials and passwords. The risk here is not only IaaS. With cloud infrastructure applications such as online backup, virtual desktops, platform services, and other tools growing significantly during the past three years, the risk vector has grown exponentially.</p>      

                  <div id="accordion3">

                            <div> 
                              <div class="d-flex align-items-center">
                                <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-9.png" alt="">
                                <h4>Select a comprehensive toolset that spans infrastructure to cloud to application</h4>
                              </div>
                            </div>
                            <div class="two-rows-accordion">
								<p style="margin-bottom:20px;">The type of enterprise data stored in the cloud is also the data most at risk, including emails, customer information, consumer data, employee records, and payments. It’s vital to have an integrated toolset that spans all these technologies—both on-premises and emerging cloud services—that can provide monitoring from a single pane of glass. Manually correlating events from multiple tools is too complex and labor-intensive to effectively address real concerns in a timely manner. By the time a breach is caught, it’s likely too late, if it gets caught at all.</p>
                            </div>
                      

                          <div class="five-row-accordion">
                            <div class="d-flex align-items-center">
                              <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-39.png" alt=""> 
                              <h4>Visibility and compliance monitoring </h4>
                            </div>
                          </div>
                          <div  class="six-row-accordion">
                            <p style="margin-bottom:20px;">Federal agencies and DoD components are required in order to maintain compliance with information security controls so sensitive government information and IT assets remain protected. Many of these compliance requirements also apply to private sector contractors and subcontractors who work with these government agencies (e.g. Defense Federal Acquisition Regulations Supplement (DFARS) certification and newly announced Cybersecurity Maturity Model Certification (CMMC)). Companies often struggle with the underlying technical complexities of implementing effective solutions in order to meet the information security controls specified by the National Institute of Standards and Technology (NIST) Security Engineering and Risk Management Group. Cloud services make this challenge even more difficult. Addressing these technical complexities takes integrated, comprehensive solutions powered by automation and extensible analytics. This approach significantly improves visibility into both on-premises and cloud operations, enabling data-driven decision-making that aligns with regulations and compliance requirements.</p>
							  						  
                          </div>


                          <div class="five-row-accordion">
                            <div class="d-flex align-items-center">
                              <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-19.png" alt=""> 
                              <h4>Implement governance and establishing a formal security program</h4>
                            </div>
                          </div>
                          <div  class="six-row-accordion">
                       
				                            <p style="margin-bottom:20px;">Adding to the challenges of the scale and diversity of these environments is the near-constant change introduced by the immediate availability cloud services provide. The dynamic nature of these systems and users requires continuous monitoring to truly understand the ideal security posture. It’s critical to establish a formal security program with a clearly defined owner, accountability, and governance structure. Key components of this program include clear business expectations, policies, and technical standards for security. Additionally, the program should include guidance on proactive security controls, such as implementation of patches and updates, change management, or secure configurations, along with Incident Response, Disaster Recovery, and Business Continuity plans. Finally, security-awareness training plans are invaluable for encouraging users to think security-first, since this is the area where most attacks originate. Though implementing this plan can be a monumental task, what with overwhelmed staff and inadequate budget. This is where a Managed Security and Operations Provider like Anexinet can help—whether through an augmentation effort, or by providing a fully managed service to maintain and enhance your security program.</p>
							  
				
                          </div>



               </div>




                 </div>

    </section>








    <span id="steps"></span>
    <section class="iamprogram-ten ptb-60">
      <div class="container animatedParent">

      <div class="mitad3">
            <h3 style="margin-bottom:20px; margin-top:40px;" class="animated fadeInDownShort">3 Steps to Building an Identity Management Program 
            </h3>

        <p style="margin-bottom:20px;">Every security technology website today features at least one article about Identity Management (IdM). Many of these point to tools and products that magically give you a complete IdM system or fill some gap in your IdM posture. But for those who are less mature in their journey, or who haven’t revisited their IdM Program since iPhone 4, let’s review the process of building (or assessing) an IdM Program. Just so we’re all on the same page, an IdM Program is the playbook your organization will use to define, build, manage, and govern its IdM. </p>

      </div>
      
           <div class="mitad4">
                  
          <img style="margin:-15px auto 40px auto; display:block;" src="https://www.anexinet.com/wp-content/uploads/2020/04/asset-2.png" />
             </div>
      
      
         <ul class="lista_verde_paloma3">
                   <li><strong>Step 1 – Articulate the Program </strong>
                     <p style="margin-top:15px;">
                       Start by articulating the overarching strategy of your IdM Program. State the strategy in terms non-technical users can understand. This is the core tenet of why your program exists and describes its value to your organization. Keep in mind this statement can be referred to in the future when securing funding for a new IdM initiative, so it is critically important to get it right. <br/><br/>

Next, define the program’s business and technical requirements. Survey constituents throughout the organization to ensure you don’t miss a key requirement. Business requirements might include regulatory concerns, user/partner/customer satisfaction concerns, data and privacy issues, ability to support new initiatives, and costs. Technical requirements may include the use of automation for efficiency, open standards to allow federation across multiple systems, system capacity needs, process limitations, and SLA considerations. <br/><br/>

Finally, define who and what the Program is meant to protect. Here, you would define the internal user groups, partner or supplier user groups, and customer user groups. You will also need to define the access vectors, audit requirements, and access requirements for each of these groups. Simply put, this is where you define who has access, what they have access to, how they would access it, how long they should have access to it, and who can approve or deny the access. <br/><br/>

Further, this section of your Program should be reviewed on a regular basis to ensure the requirements remain aligned with the current reality of the business. 


                       </p>
                  </li>
                   <li><strong>Step 2 – Define the Management and Governance Processes </strong>
                     <p style="margin-top:15px;">
         In this step of your Program you will define who has responsibility for the operation and governance of the IdM/IAM/PAM systems. You’ll want to provide a high-level overview of who has administrative responsibility within each IdM domain, along with their reporting and governance requirements. The goal here is to ensure you have adequate staff with the right experience to properly administer all systems, and that clear, consistent reporting and governance is implemented. This step is also helpful in determining whether you need to utilize contract or MSP resources. 
                     </p></li>
                   <li><strong>Step 3 – Build the “Reference Architecture” </strong>
                     <p style="margin-top:15px;">
                     In order to build the reference architecture, you must first inventory all the systems and applications that will leverage the identity platforms. This includes infrastructure, OS, core applications, customer applications, and cloud applications. If you’re leveraging APIs for application integration or microservices, you may also have identity requirements here, too. Ensure you’re gathering any technical requirements, dependencies or limitations with the inventory. <br/><br/>

Next, you will need to inventory all associated IdM systems. These include directory, password management, vaults, SSO, provisioning, access, and auditing tools. You’ll want to list the major capabilities and standards each tool has. If you plan to integrate data or events across toolsets, you’ll also want to list API capabilities. <br/><br/>

Finally, build your high-level reference architecture with a focus on how the systems will support IdM process during standard end-user or application workflows. This section tells the story of how toolsets will support your needs and should expose any gaps in your toolsets or capabilities. 
 </p></li>
      
                 </ul>
        


     
      </div>
    </section>










    <span id="final_analysis"></span>
    <section class="iamprogram-ten10 ptb-60" >
      <div class="container animatedParent">
        
		  
		  <div class="mitad_con35">
			  <img style="margin:0px auto 20px auto; display:block;" src="https://www.anexinet.com/wp-content/uploads/2020/04/artboard-5.png" />
		  </div>
		  
		   <div class="mitad_con65">

        <h3 style="margin-bottom:20px; padding-left:40px; padding-top:40px" class="animated fadeInDownShort">Conclusion</h3>

		  <p style="margin-bottom:20px; padding-left:40px;">
That’s it! We hope you found our explanation of common Identity and Access Management (IAM) program adoption barriers, IAM challenges and considerations helpful and informative. If your organization has any trouble following our steps to building a secure Identity Management Program, <a target="_blank" href="https://www.anexinet.com/contact-us/" style="color:#0028c6;">please don’t hesitate to reach out to us.</a> Further, if your organization needs additional help getting started, or would simply like an outside opinion on how well you’re progressing, Anexinet’s <a target="_nlank" href="https://insights.anexinet.com/identity-access-management-modernization-assessment" style="color:#0028c6;">IAM Modernization Assessment</a> will get you moving quickly by providing strategic direction around the steps necessary to strengthen, mature and modernize your Identity Management Program.
        </p>        

        
		  </div>
		  
		  <div class="clearam">
			  
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

</div>

<?php endwhile; ?>

<?php get_footer();
