<?php
/**
 *
 * Template Name: Managed Ransomware Defense
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2018, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

	?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="content single-post" id="ks-top">
	<?php 
	if(function_exists('get_field')) {
		$intro_bg = $intro_color = $breadcrumb_bg = $breadcrumb_color = '';
		$intro = get_field('piwo_post_intro_section','option');
		$breadcrumb = get_field('piwo_post_breadcrumbs','option');
		$intro_bg = get_field('piwo_post_intro_bg','option');
		$intro_color = get_field('piwo_post_intro_color', 'option');
		$breadcrumb_bg = get_field('piwo_post_breadcrumbs_intro_bg','option');
		$breadcrumb_color = get_field('piwo_post_breadcrumbs_color', 'option');
		if($intro == true ) {
			echo piwo_intro_section($intro_bg,$intro_color);	
		}
		if($breadcrumb == 'true') {
			piwo_breadcrumb($breadcrumb_bg,$breadcrumb_color);	
		} 
	} else {
		echo piwo_intro_section();	
		piwo_breadcrumb();	
	}
	?>
	<style>
    html{
      scroll-behavior: smooth;
    }
    /* form dynamics */
    .form-styles{
      position: absolute;
     left: 59vw;
     top: 90px;
     right: 32px;
     padding: 20px;
     max-width: 474px;
    }
    .form-styles input{
      margin-bottom:0;
			padding: 12px !important;
    }
		div[data-editorblocktype="SubmitButtonBlock"]{
			margin:inherit;
			width:100%;
		}
  
  
		.form-styles .field{
     margin-bottom:2px !important;
    }
  
    .form-styles form{
		background-color: #ffffffb0;
		}
		.form-styles button{
			background-color: #ff924b;
      border: none;
			cursor:pointer;
			color:#FFF;
		}
		.onFormSubmittedFeedback .onFormSubmittedFeedbackButtonSuccess{
			display:none;
		}
		
	
	.form-styles .lp-form-header p{
			color:#000 !important;
		}

   .input{
     margin-bottom:8px;
   }
    /* /dynamics form */
    .ks-main-desc{
      position: absolute;
      top: -160px;
      left: 9.2%;
    }
    .ks-main-desc h5{
      color: white;
      max-width: 477px;
      font-size: 20px;
    }
    @media screen and (max-width:1168px){
    .ks-main-desc {
      left: 10.2%;
    }
  }
    @media screen and (max-width:991px){
    .ks-main-desc {
      left: 3.7%;
    }
  }
  @media screen and (max-width:768px){
    .ks-main-desc {
      left: 41px;
    }
  }
	  .gray-typo p{
      color:#6e6e68;
    }
    .square-cont{
      display: flex;
      justify-content: space-around;
      margin: 40px 0;
    }
    .square-top-blue{
      padding: 30px;
      background-color: #f7f8fa;
      border-top: 3px solid #187bcd;
      text-align:center;
    }
    .mw-100-square{
      max-width:130px;
    }
    .mw-100-square img{
      max-width:54px;
    }
    .mw-100-square p{
     margin-top:26px;
    }
    .cover-cont{
      padding: 60px 50px;
     display: flex;
     align-items: center;
    }
    .cover-cont img{
      max-width: 300px;
      float: left;
    }
    .cover-info-cont{
      margin-left: 60px;
      max-width: 570px;
    }
    .cover-info-cont h5{
      font-size: 26px;
    }
    .cover-info-cont p{
      color: #6e6e68;
    }
    .cover-info-cont a{
      padding: 20px 24px;
    background-color: #187bcd;
    color: white;
    font-weight: 700;
    font-family: Montserrat;
    }
    .multi-approach p{
      max-width:700px;
      margin: 20px auto;
      color:#6e6e68;
    }
    .icon-title-desc{
      align-items: flex-start;
      display: flex;
      margin: 30px 0;
      margin-top:60px;
    }
    .icon-title-desc img{
      max-width: 60px;
    }
    .icon-title-desc div{
      margin-left: 20px;
    }
    .icon-title-desc p{
      margin-top: 8px;
      color: #6e6e68;
    }
    .last-banner{
      background-color: #0b4d85;
      padding: 80px 0;
      color: white !important;
    }
    .last-banner h3{
      color: white;
      font-weight: 700;
      font-size: 30px;
    }
    .last-banner p{
      color: white;
      max-width: 482px;
    }
    .last-banner a{
      padding: 20px 24px;
     background-color: #187bcd;
     color: white;
     font-weight: 700;
     font-family: Montserrat;
     cursor:pointer;
    }
    .form-styles{
      position: absolute;
     
     top: -380px;
    
    }
    .form-styles input{
      margin-bottom:0;
    }
   

   .input{
     margin-bottom:8px;
   }

    @media screen and (max-width:1000px){
      .form-styles{
        position:initial;
        padding-left:9%;
      }
    }
    
    @media screen and (max-width:1000px){
    .square-cont{
      display:initial;
    }
  }
     
    @media screen and (max-width:1000px){
    .square-top-blue div{
      margin:0 auto;
    }
  }

  @media screen and (max-width:1000px){
   .last-banner .col-md-8{
    padding-left: 30px;
   }
  }

  @media screen and (max-width:1000px){
   .last-banner .col-md-4{
    margin-top: 60px;
   }
  }
  .anxnt-main-form{
    display:none;
  }

	</style>

	<div class="row" >

		<div class="single-post-content d-none small-12 columns container <?php $post_class = ''; echo esc_attr( $post_class ); ?>">
			<div class="post-content-wrapper">

			  <div class="post-header hide">

				  <?php 
					// POST FORMAT - IMAGE
					$postFormat = '';
					if($postFormat == 'image' || !function_exists('get_field')) : ?>
					<?php if ( has_post_thumbnail() ) : ?>

						<div class="post-images">
							<?php
							$image = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image, 'blog-single');
							echo '<img class="b-lazy" height="'.esc_attr($image_url[2]).'" width="'.esc_attr($image_url[1]).'" src="'.piwo_image_preloader($image_url[1],$image_url[2]).'" data-src="'.esc_url($image_url[0]).'"/>';
							?>
				    </div>

            <?php endif; ?>
            <?php endif; ?>

        </div>

				<div>
			    <div>
       
            <?php the_content();
                  wp_link_pages( array(
                  'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'piwo' ),
                  'after'       => '</div>',
                  'link_before' => '<span class="page-number">',
                  'link_after'  => '</span>',
                ) );
            ; ?>

				  </div>
			  </div>

				
		  </div>

  	</div>
<!-- Hard Code Content -->
	<section class="ks-main-desc">
    <h5>Anexinet’s fast, effective, comprehensive solution to today's most-pressing cyber threat.</h5>
  </section>

  <div class="form-styles">
   <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<div data-form-block-id="a53c7a9f-6fc0-ea11-a812-000d3a33243a"></div> <script src="https://mktdplp102cdn.azureedge.net/public/latest/js/form-loader.js?v=1.63.1039.0"></script> <div id="d5qQ1lQYRme22HInTwX3VDUDXaLl1M3wEDFuVIogXiQI"></div><script language="javascript" type="text/javascript">(function (id, f, t, ws, ms_tr_il_08, ms_tr_il_w_01) { var tr = function (cb) { var count = 0; var callback = function () { if (count == 0) { count++; if (w) { w.w(id, t, cb); } } }; var ts = document.createElement('script'); ts.src = ws; ts.type = 'text/javascript'; ts.onload = callback; ts.onreadystatechange = function () { if (this.readyState == 'complete' || this.readyState == 'loaded') { callback(); } }; var head = document.getElementsByTagName('head')[0]; head.appendChild(ts); }; if (typeof ms_tr_il_08 === 'function') { if (ms_tr_il_w_01 === null) { tr(function() { ms_tr_il_08(id, f, t); }); } else { ms_tr_il_w_01.w(id, t, function(websiteVisitedParams) { ms_tr_il_08(id, f, t, websiteVisitedParams); }, null); } } else { tr(); }})('5qQ1lQYRme22HInTwX3VDUDXaLl1M3wEDFuVIogXiQI', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/f', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t/w', typeof ms_tr_il_08 === "undefined" ? null : ms_tr_il_08, typeof ms_tr_il_w_01 === "undefined" ? null : ms_tr_il_w_01);</script>
</div>

  <section class="container-fluid gray-bg">
    <div class="container gray-typo ptb-60">
      <p>Last year, reported ransomware attacks more than doubled from the previous year. And by the end of 2019, businesses were falling victim to ransomware every 14 seconds.<br><br> It’s easy to assume your business won’t be a target, or that you already have a rock-solid security infrastructure in place. But just recently, one of the nation’s largest cybersecurity insurance providers itself became the target of a data-stealing ransomware attack. So, the question you should be asking is “Are we sure our remote workforce is protected against the growing threat of ransomware?”</p>
    </div>
  </section>

  <section class="container pl-30 pr-30">

    <div class="mt-60" style="margin-bottom:30px;">
      <h5>Data loss isn’t the only concern. Additional risks include:</h5>
    </div>

    <div class="square-cont">

    <div class="square-top-blue">
      <div class="mw-100-square">
        <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-12@2x.png" alt="Handshake Icon">
        <p>Lost business income</p>
      </div>
    </div>

    <div class="square-top-blue">
      <div class="mw-100-square">
        <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-8@2x.png" alt="Handshake Icon">
        <p>Leaked corporate and personal data</p>
      </div>
    </div>

    <div class="square-top-blue">
      <div class="mw-100-square">
        <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-28@2x.png" alt="Handshake Icon">
        <p>Lost productivity</p>
      </div>
    </div>

    <div class="square-top-blue">
      <div class="mw-100-square">
        <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-19@2x.png" alt="Handshake Icon">
        <p>Reputation damage</p>
      </div>
    </div>

    <div class="square-top-blue">
      <div class="mw-100-square">
        <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-58@2x.png" alt="Handshake Icon">
        <p>Fines and litigation</p>
      </div>
    </div>

    </div>

  </section>

  <section class="container-fluid gray-bg">
    <div class="container ptb-60 gray-typo">
      <h5 class="mb-40 ta-center">Why You Need to Ditch Traditional Ransomware Services</h5>
      <p>Attackers are deploying more sophisticated host-encrypted malware every day. Meanwhile, traditional ransomware service providers lock you into long-term contracts. This inflexible approach to network security leaves companies juggling defense and dollars at the expense of protecting digital assets. <br><br>Anexinet’s proven as-a-service approach offers month-to-month ransomware defense based on actual usage. With no annual commitment, companies can better reduce their network security costs by ratcheting services up or down as needs require. <br><br>What would you do if your critical files and data were held for ransom? A recent study found nearly half of all organizations hit by ransomware end up paying, even with no guarantee their data will be returned fully functional—or at all. </p>
    </div>
  </section>

  <section class="container cover-cont">
    <img src="https://www.anexinet.com/wp-content/uploads/2020/04/cover@2x.png" alt="Managed Ransomeare cover"/>
    <div class="cover-info-cont">
      <h5>Anexinet Protect Its Own Ransomware Services</h5>
      <p>Your ransomware protection is only as good as your provider’s ability to protect its network from attacks. To protect your digital assets, Anexinet has taken extra precautions such as the Cisco Umbrella for Managed Security Service Provider authorization.</p>
      <div class="mt-40">
        <a href="https://www.anexinet.com/wp-content/uploads/2020/04/Managed-Ransomware-Defense-Solution-1.pdf" target="_blank">Download Solution Brief</a>
      </div>
    </div>
  </section>

  <section class="container-fluid gray-bg ta-center multi-approach">
    <div class="container ptb-60 ">
      <h5>Multi-Pronged Approach</h5>
      <p class="mtb-20">Defending against ransomware takes a multi-pronged strategy aimed at prevention, spread restriction, and rapid remediation and recovery should a compromise occur.</p>
      <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-2.png" alt="Multi Prolonged Approach Image">
    </div>
  </section>

  <section class="container-fluid ptb-60">

  <div class="container">
    <div class="mb-60">
      <h4>Engagement Process</h4>
      <p>Our proven Managed Ransomware-Defense Solution follows a comprehensive six-step process that includes policy development, infrastructure and device security, data protection, user training, vulnerability patching, and 24x7 monitoring.</p>
    </div>

    

    <div class="icon-title-desc-cont">

    <div class="icon-title-desc">
      <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-112@2x.png" alt="lighted Brain">
      <div>
      <h5>Policy Development</h5>
      <p>We begin by working with your team to understand your risks and to review all attack vectors, policies, processes and tools to develop comprehensive policies to define access needs.</p></div>
    </div>

    <div class="icon-title-desc">
      <img src="https://www.anexinet.com/wp-content/uploads/2020/04/green-server.png" alt="lighted Brain">
      <div>
      <h5>Infrastructure and Device Security</h5>
      <p>Industry-leading security tools enable layers of protection across attack vectors. Includes next- gen firewalls, advanced email/web security, DNS security, and advanced endpoint protection.</p></div>
    </div>

    <div class="icon-title-desc">
      <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-23@2x.png" alt="lighted Brain">
      <div>
      <h5>Data Protection </h5>
      <p>We implement a properly functioning backup system with offline duplication of critical data to enable quick recovery following an attack.</p></div>
    </div>

    <div class="icon-title-desc">
      <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-58@2x.png" alt="lighted Brain">
      <div>
        <h5>User Awareness Training</h5>
        <p>Thorough employee security awareness training to help end-users guard against compromise.</p>
      </div>
    </div>

    <div class="icon-title-desc">
      <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-26@2x.png" alt="lighted Brain">
      <div>
      <h5>Monitoring and Management</h5>
      <p>We manage all relevant systems 24x7x365 and provide automated alerts and immediate response to any detected concerns.</p></div>
    </div>

    <div class="icon-title-desc">
      <img src="https://www.anexinet.com/wp-content/uploads/2020/04/group-30@2x.png" alt="lighted Brain">
      <div>
      <h5>Vulnerability Patching</h5>
      <p>Critical systems are routinely patched to minimize your attack surface. </p></div>
    </div>

    </div>

    </div>

  </section>

  <section class="container-fluid last-banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h3>Leverage the industry’s most-effective Cybersecurity Defense Solution in a comprehensive, fully managed package.</h3>
          <p>Minimize risk, eliminate the need for staff security experts, and enjoy a simple, as-a-service consumption model. </p>
        </div>
        <div class="col-md-4 ta-center">
          <div>
            <a href="#ks-top">Let's Get Started!</a>
        </div>
      </div>
    </div>
  </div>

  </section>



<!-- /Hard Code Content -->


  </div>

  
<?php endwhile; ?>

<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer();