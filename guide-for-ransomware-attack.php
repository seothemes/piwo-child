 <?php
/**
 *
 * Template Name: Guide for Ransomware Attack
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
      <a href="#what_is_ransomware">What is Ransomware?</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#current_state">Current State of Ransomware</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#ransomware_removed">How is Ransomware Removed?</a> 
    </div><span class="grdnt-divider">|</span>
      <div class="cont-1">
      <a href="#prevent_ransoware">How to Prevent Ransomware</a> 
    </div><span class="grdnt-divider">|</span>
    <div class="cont-1">
      <a href="#the_recovery">The Recovery</a> 
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


#what_is_ransomware, #current_state, #ransomware_removed, #prevent_ransoware, #the_recovery{
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
color: #0f4c83;
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




</style>

<!-- Gradient Navegation Bar End -->

<!-- first section -->
  <section class="ransomware-first">
    <div class="container">



      <div class="ptb-40 animatedParent">
        <p class='animated fadeInDownShort mb-20'>It’s 6:05 AM on a Friday. Diane, the CEO of NotReallyTechCorp, a medium-sized local business, is attempting to login to her computer to begin the business of the day. Sign-on goes fine, but as soon as she tries to open local applications, she receives errors. Finally, she notices a new file on the desktop. She opens it and finds something that looks a lot like this: </p>
        
<div class="black_box_ransmware">

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; !!! IMPORTANT INFORMATION !!!!<br/><br/>

All of your files are encrypted with RSA-2048 and AES 128 ciphers.<br/>
More information about the RSA and AES can be found here:<br/>
&nbsp; &nbsp; &nbsp; http://en.wikipedia.org/RSA_(cryptosystem)<br/>
&nbsp; &nbsp; &nbsp; http://en.wikipedia.org/wiki/Advanced_Encryption_Standard<br/><br/>

Decrypting of your files is only possible with the private key and decrypt program, which is on our secret server.
To recive your private key follow one of the links:<br/>
&nbsp; &nbsp; &nbsp; 1. http://6dtxgqam4crv6rr6.tor2web.org/ECCEADD847A1F1A<br/>
&nbsp; &nbsp; &nbsp; 2. http://6dtxgqam4crv6rr6.onion.to/ECCEADD847A1F1A<br/>
&nbsp; &nbsp; &nbsp; 3. http://6dtxgqam4crv6rr6.onion.to/ECCEADD847A1F1A<br/><br/>

If all of this addresses are not available, follow these steps:<br/>
&nbsp; &nbsp; &nbsp; 1. Download and install Tor Browser: https://www.torproject.org/download/download-easy.html<br/>
&nbsp; &nbsp; &nbsp; 2. After a succesful installation, run the browser and wait for initialization.<br/>
&nbsp; &nbsp; &nbsp; 3. Type in the address bar: 6dtxgqam4crv6rr6.onion/ECCEADD847A1F1A<br/>
&nbsp; &nbsp; &nbsp; 4. Follow the instructions on the site.<br/><br/>

!!! Your personal identification ID: ECCEADDE847A1F1A !!!


</div>

        <p class='animated fadeInDownShort' style="margin-bottom:20px;"> Diane immediately calls her CISO, then her CIO, and then her VP of Information Technology. Finding they were all still asleep, Diane calls Dennis, the Systems Engineer in charge of the databases that make up the heart of NotReallyTechCorp’s business. <br/><br/>

“I was wondering when you’d call,” Dennis mumbles. “I started getting alerts from some systems about an hour ago. I-” <br/><br/>

“Just cut to it, Dennis,” interrupts Diane. “What’s happening?! Why can’t I log into anything? I have this weird message in a text file on my desktop and I can’t make heads or tails of it. What is a Tor, and what does it have to do with onions?” <br/><br/>

“We have been hit by a ransomware attack. I don’t know how bad yet, but…it’s bad. At least five systems that are definitely infected, and I haven’t gone through them all yet. I shut off the backup server and all the database servers as a precaution, so…”<br/><br/>

Diane is incredulous. “You shut off the database!? How can we do business?”<br/><br/>

“I didn’t feel like we had a choice. I took down the external network connection, too. Hell, the only way you were able to login is because you’re in the office. And with your permission, even that’s not gonna last much longer. I had to shut down the database in case it wasn’t infected yet. That’s the only way to be sure. Same for the backups too. The thing is,” Dennis said, slowly, “The way we’re set up, that Database IS the business. And those backups? They’re the only ones we got. And if we can’t get clear of this with those systems intact, we’re going to lose a lot more than a day’s earnings. NotReallyTechCorp might never get back online at all.” <br/><br/>

It was going to be a long, long day. <br/><br/>

“Ok,” Diane finally says. “Tell me everything I need to know about Ransomware.”
</p>
        
      </div>



      <div class="row" style="margin-bottom:40px;">

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#what_is_ransomware">  <div class="border-box animated fadeInDownShort">
           <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-14.png" />
            <!-- <img src="" alt=""> -->
            What is Ransomware?
          </div></a>
        </div>

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#current_state">  <div class="border-box animated fadeInDownShort delay-250">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-29.png" />
            <!-- <img src="" alt=""> -->
          Current State of Ransomware
          </div></a> 
        </div>

        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#ransomware_removed">  <div class="border-box animated fadeInDownShort delay-500">
           <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-5-1.png"/>
            <!-- <img src="" alt=""> -->
         How is Ransomware Removed?
          </div></a> 
        </div>


        <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#prevent_ransoware">  <div class="border-box animated fadeInDownShort delay-500">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-19-3.png"/>
            <!-- <img src="" alt=""> -->
         How to Prevent Ransomware
          </div></a> 
        </div>


         <div class="col-s-4 col-md-4 col-lg-3 up-pill animatedParent">
        <a href="#the_recovery">  <div class="border-box animated fadeInDownShort delay-500">
            <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-25.png"/>
            <!-- <img src="" alt=""> -->
           The Recovery
          
          </div></a> 
        </div>

      </div>

      

		
    </div>
  </section>
<!-- /First Section -->






    <span id="what_is_ransomware"></span>
    <section class="ransomware-nine">

       <div class="container ptb-60 ">

        <div style="max-width:1500px; margin-bottom:20px; ">

<h3 style="font-weight:700;">What is Ransomware?</h3>


        </div>


      <div class="d-flex align-items-center sloane-one">

                  <div class="mitadran1">


                          

                          <p style="margin-bottom:20px;">In short, ransomware is a specialized form of malware designed to lock down as much of your IT infrastructure as possible until a ransom is paid. It is straight-up extortion—no more, no less. The screenshot above is an example ransom note that is left on the system, giving instructions on how to pay the ransom. Once the ransom is paid, the attacker will hopefully unlock your infrastructure and remove all traces of ever being in your systems. </p>

                          <p style="margin-bottom:20px; font-size:20px; font-weight:600;">How does a ransomware attack work?</p>

                          <p style="margin-bottom:20px;">The most common attack vector for ransomware (and indeed, many kinds of malware) are through spearphishing emails. These are specifically targeted emails that trick a user into running an executable (or a document containing a malicious macro) on their system. The executable then locks the user out of that system, attempts to gain as many credentials as possible, and then tries to traverse the network to lock as many computers and fileshares as possible. Critical targets are most valuable, and things like Administrator-level passwords can literally allow an attacker to disable an entire business. <br/><br/>

                          The worst-case scenario will see data exfiltrated to an attacker’s networks and backups destroyed (or otherwise compromised), which limits the ability of a business to do anything at all in terms of recovery. 
                          </p>

                    
                  </div>

                  <div class="mitadran2">

                    <img style="margin-left:-15px; padding:20px;" src="https://www.anexinet.com/wp-content/uploads/2020/03/asset-3-pillar.png">

                  </div>

        </div>




      </div>
    </div>
    </section>







   
<span id="current_state"></span>
    <section class="ransomware-third first-accordion" >
      <div class="container animatedParent">
        <h3 class="animated fadeInDownShort">What’s the current state of ransomware? </h3>
        <p class="animated fadeInDownShort">Several players in the anti-malware and anti-ransomware markets publish annual reports on the state of things. These include <a style="color:#0028c6;" target="_blank" href="https://blog.malwarebytes.com/reports/2020/02/malwarebytes-labs-releases-2020-state-of-malware-report/">MalwareBytes</a>, <a style="color:#0028c6;" target="_blank" href="https://www.comparitech.com/antivirus/ransomware-statistics/">Comparitech</a>, and even the <a style="color:#0028c6;" target="_blank" href="https://www.fbi.gov/file-repository/ransomware-prevention-and-response-for-cisos.pdf/view">Federal Bureau of Investigation</a>—just to name a few. Their reports are all comprehensive and illuminating, and thoroughly worth your time. For now, though, let’s look at some numbers. </p>
     
<p style="font-size:22px; margin-bottom:20px; margin-top:40px; margin-top:20px; font-weight:600;">2020 Ransomware Trends: </p>

      </div>
      <div class="accordions container">
 
        <div id="accordion">

          <div>   
            <div class="d-flex align-items-center">
             <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-29.png">
              <h4>Business are being attacked more aggressively than individuals </h4>
            </div>
          </div>
          <div class="poorIt li1">

            <p style="margin-bottom:20px;">Reports of attacks against business endpoints globally have increased an impressive 13 percent year-over-year. This is unsurprising as tools for scanning for malicious and untrusted URLs are improving, and frankly, businesses have deeper pockets. Today’s businesses also rely far more heavily on their IT resources and thus (the thinking goes) they are more willing to pay.</p>

          </div>

          <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-19-1.png">
              <h4>The most likely market segment to be targeted continues to be Small to Medium-Sized Businesses (SMBs)</h4>
            </div> 
          </div>
          <div class="two-rows-accordion">
            <p>There is a misconception among many business owners that they are ‘too small’ to be a target. While the big attacks that shut down cities, hospitals and massive manufacturers are making the most news, the reality is that small and medium businesses represent by far the majority (over 70%) of reported ransomware victims. The trend in that space is to spend less on information security. Plus, there are simply more of them to target. </p>
          </div>

          <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-25.png">
              <h4>The amount asked per ransom is on the rise</h4>
            </div> 
          </div>
          <div class="poorIt" >
            <p>In 2018, the median ransom demand was approximately $6,700 USD. Just by the end of Q1 that number nearly doubled to $12,700 USD. New boutique attackers such as Ryuk, who only go after what they deem high-end targets, are asking between $97,000 and $320,000 USD for businesses of similar size. </p>
          </div>

          <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-14.png">
              <h4>Net-new ransomware is at an all-time high </h4>
            </div> 
          </div>
          <div class="two-rows-accordion">
            <p style="margin-bottom:20px;">New heavy hitters like Ryuk (up 543%) and Sodinokibi (up 820%) are really making a name for themselves. Sodiniokibi is actually a “Ransomware-as-a-service” model that allows less sophisticated attackers into the space. The Sodiniokibi service takes a cut of any stolen funds, leaving the people behind the attack with the lion’s share. It’s script-kiddies, 2020 style. </p>

          </div>
          <div> 
            <div class="d-flex align-items-center">
              <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-16.png">
              <h4>The targeting of Ransomware against businesses has gotten more precise</h4>
            </div>
          </div>
          <div class="five-row-accordion">

            <p style="margin-bottom:20px;"> Ransomware software and attack pattern sophistication is ‘far more advanced’ than in 2018. Long gone are the salad days of malware being delivered by a spam email with a fake URL. New flavors of ransomware are being delivered more covertly, such as via fake browser plugins and advanced adware and phishing campaigns. Sadly, old vulnerabilities are still the overwhelming method of choice, with Remote Desktop Protocol (RDP) leading the pack of attack vectors. </p>


          </div>
        </div>

      </div>
    </section>






    <span id="ransomware_removed"></span>
    <section class="ransomware-ten ptb-60">
      <div class="container animatedParent">

		  <div class="mitad3">
						<h3 style="margin-bottom:20px;" class="animated fadeInDownShort">How is Ransomware Removed?
						</h3>

				<p style="margin-bottom:20px; font-size:20px; font-weight:600;">Should I pay the ransom? </p>

				  <p style="margin-bottom:20px; padding-left:35px;">This is a tough question. The FBI discourages making payments to criminal actors. Payment is almost always required to be anonymous and virtually untraceable. Because of this, and because of the duplicitous nature of the transaction, </p>

							   <ul class="lista_verde_paloma">
								   <li>There is no guarantee an attacker will provide a tool to decrypt data</li>
								   <li>There is no guarantee a provided tool will work (even partially)</li>
								   <li>There is no guarantee a payment won’t be followed by demands for further funds</li>
								   <li>There is no guarantee an attacker won’t target the same victim again</li>
							   </ul>
			  
			  
			</div>
		  
 <div class="mitad4">
			  
<img style="margin:0px auto 40px auto; display:block;" src="https://www.anexinet.com/wp-content/uploads/2020/03/asset-5-pillar-1.png" />
	 </div>
		  
	
		  			  <p style="padding-left:35px; width:100%; clear:both; float:none; position:relative;">
				  However, in situations where there appears to be a substantial or total loss, the risk/reward ratio might need to be considered. The <a style="color:#a4ca53;" target="_blank" href="https://www.engadget.com/2019/06/06/baltimore-ransomware-18-million-damages">Baltimore City Government famously lost about $18 million in damages over a ransom of $75,000.</a> The city government believed the funds would have to be spent to recover and remediate anyway, so why encourage this kind of crime? That same year, <a style="color:#a4ca53;" href="https://www.bbc.com/news/business-48661152" target="_blank">Danish company Demant had an even bigger breach, and recovering from a ransomware attack cost them upwards of $85 million.</a> <br/><br/>

				  To be fair, many infected companies do choose to pay, often without the public ever learning about it. The few statistics available show a reasonable chance data will be recovered, with an average of 96% of payees reporting receiving a decryption tool, and that tool working fully 93% of the time. This is a massive increase in both numbers over the past few years, as the criminals behind ransomware attacks get more organized and, in certain ways, become more professional.  <a style="color:#a4ca53;" href="https://www.coveware.com/blog/2019/4/15/ransom-amounts-rise-90-in-q1-as-ryuk-ransomware-increases" target="_blank">This also explains why the average ransom demand is getting bigger, along with the frequency of attacks.</a> <br/><br/>

It’s important to note the efficacy of the recovery tool varies wildly from attacker to attacker, as well as from ransomware strain to ransomware strain. No attacker will guarantee they won’t use the same vector (or a sleeping tool) to attack again. This is one reason why companies like Demant refuse to pay; they simply believe that they will have to spend the money to recover anyway. As one customer memorably put it, “There’s no entry on my [expletive deleted] bank account that says ‘Peace of mind.’ But that doesn’t mean I don’t need it.” <br/><br/>

A lot goes into the decision of whether or not to pay and, unfortunately, only the business impacted is knowledgeable enough to decide. 
			  </p>
		  
		  
		  
		  
		  	<p style="margin-bottom:20px; margin-top:40px; font-size:20px; font-weight:600;">If I don’t pay the ransom, how can I recover? </p>
		  
		     <ul class="lista_verde_paloma">
								   <li><strong>This is going to be a difficult process</strong>
									   <p style="margin-top:15px;">
										   There’s only one way to be sure the ransomware is out of your environment, and that’s by surveying every IT asset. This will necessarily take time and, depending on the size of the organization, could require outside assistance from a technology consultancy like Anexinet. But rest assured, it is necessary to be 100% certain. <br/><br/>
If you can maintain a disconnected BC environment, now would be the time to consider flipping over to it. This is not an option for all businesses, but it is the reason such environments exist. 
									   </p>
									</li>
								   <li><strong>Assume every system is compromised, at first</strong>
										 <p style="margin-top:15px;">
					 Contain the spread of the infection as quickly as possible. This will likely mean taking down your external and internal network temporarily. 
									   </p></li>
								   <li><strong>Identify the kind of ransomware and the scope of the infection</strong>
									   <p style="margin-top:15px;">
										   Different ransomware attacks in different ways. Most are well-known. Understanding what you’re up against can help you determine the best response. <br/><br/>

Once the attacker is identified, the next step is to determine how many computers were infected. This can be a slow process, but it’s a necessary one. Custom network rules can be built to bring systems up one at a time for deep scanning without the risk of further spread.
									   </p></li>
								   <li><strong>Recover all the data you can, then (ideally) reinstall everything</strong>
				 <p style="margin-top:20px;">
					 This one hurts, but it’s the only way to be sure. The data is what’s essential. The OS means next to nothing and applications can be reinstalled. If you can, build an entire parallel IT so the business can come back online in the “Good” environment, while post-mortem and data-mining can take place in the “Bad.” And never the twain shall meet.
									   </p>
				 </li>
							   </ul>
			  


     
      </div>
    </section>











    <span id="prevent_ransoware"></span>
    <section class="ransomware-sixth ptb-60">
      <div class="container animatedParent">
        <h3 class="animated fadeInDownShort" style="margin-bottom:20px;">How to Prevent Ransomware</h3>



                  <div id="accordion3">

                            <div> 
                              <div class="d-flex align-items-center">
                                <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-58.png" alt="">
                                <h4>Secure everything</h4>
                              </div>
                            </div>
                            <div class="two-rows-accordion">
								<p><a style="color:#0028c6;" target="_blank" href="https://www.bleepingcomputer.com/news/security/ransomware-attacks-hit-everis-and-spains-largest-radio-network/">Everis left “hundreds of RDP servers” open to the internet. As a result, they were shut down by ransomware.</a> A patch for the bug (the famous BlueKeep) appears to have been applied. Similarly, Sodinokibi uses an attack method that targets known closed bugs, such as <a style="color:#0028c6;"  href="https://www.oracle.com/security-alerts/alert-cve-2019-2725.html" target="_blank">CVE-2019-2725</a> in Oracle WebLogic. A patch was promptly released, but the ‘success’ of Sodinokibi is ample evidence the patch was not always applied quickly enough.<br/><br/>

The lesson? When a patch is released, test it and apply it. Quickly.</p>
                            </div>
                      

                          <div class="five-row-accordion">
                            <div class="d-flex align-items-center">
                              <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-39-1.png" alt=""> 
                              <h4>Train and protect your users </h4>
                            </div>
                          </div>
                          <div  class="six-row-accordion">
                            <p style="margin-bottom:20px;">As stated above, targeted spearphishing campaigns are an increasingly common attack vector. </p>
							  
							  <ul class="lista_verde_paloma2">
								  <li>User training should be enacted, and reinforced yearly, to educate your workforce on evolving dangers. </li>
								  <li>Utilize an enterprise-grade email and file-storage system capable of strong email filtering and scanning of attachments and URLs.</li>
								  <li>Enforce multi-factor authentication and geofencing to further protect users from accidentally causing a breach.</li>
								  <li>Centralize and carefully manage the use of privileged accounts. Follow the principle of least privilege and NEVER share Administrator-level account credentials. Configure access controls, and log user rights escalations and instances of system access, and audit those logs regularly.</li>
							  </ul>
							  
					  <p style="margin-bottom:20px;">Invest in strong endpoint-protection software. The tools to defend systems are getting better every day, almost as quickly as attacks are evolving. There are very few 0-day ransomwares. The ransomware-software families discussed in this article are well known; some are over four years old. <br/><br/>

Remember, security is most effective when applied in many layers. Aggressive, active endpoint-protection software can be the last bastion between an attacker and a successful attack. 
</p>
							  
							  
							  
							  
                          </div>


                          <div class="five-row-accordion">
                            <div class="d-flex align-items-center">
                              <img src="https://www.anexinet.com/wp-content/uploads/2020/03/group-2-2.png" alt=""> 
                              <h4>Build and maintain Disaster Recovery / Business Continuity plans and infrastructure</h4>
                            </div>
                          </div>
                          <div  class="six-row-accordion">
                       
				                            <p style="margin-bottom:20px;">Backups are the bedrock of any DR/BC plan. As such:  </p>
							  
							  <ul class="lista_verde_paloma2">
								  <li>They should be encrypted and protected</li>
								  <li>Copies should be kept offline, and most importantly, </li>
								  <li>Backups need to be tested. A backup is not a backup if it can’t be recovered.</li>
								
							  </ul>
							  

							  
					  <p style="margin-bottom:20px;">It’s imperative to ensure your DR team is comfortable with the restore process. The more comfortable the team is with the process, the faster they’ll be able to implement it in the event of an emergency.<br/><br/>

A business continuity plan helps every member of your organization know what to do when a disaster is declared. The plan should be tested in tabletop exercises so that when the worst-case scenario happens the staff assigned to resolve it will be as prepared as possible. <br/><br/>

Read this blog post to dive deeper into <a target="_blank" style="color:#0028c6" href="https://www.anexinet.com/blog/ransomware-backup-protection">backup and recovery from ransomware attacks.</a>
</p>			  

                          </div>



               </div>




                 </div>

    </section>






        <span id="the_recovery"></span>
    <section class="ransomware-nine ptb-60">

	<div class="container">
		

		<div class="d-flex align-items-center sloane-one">
        <div class="container animatedParent" style="max-width:1500px; margin-right:10px;">
          <h3 style="margin-bottom:20px;" class="animated fadeInDownShort">The Recovery</h3>
          <p style="margin-bottom:20px;">Diane checks her watch. It’s 8:05 AM, Monday morning. Friday’s long day had stretched into a long, sleep-deprived weekend. In a crowded conference room, Diane takes a deep breath and says, “OK, Dennis, give me the good news and the bad news. And PLEASE tell me there’s no bad news.”<br/><br/>

“We caught a break, here,” Dennis replies, “I’m glad this happened so close to the weekend. Aside from some customer aggravation, I don’t think that there’s any permanent damage. I’m looking at the dashboard and it looks like orders are flowing normally. All the sales we had to record on paper on Friday are showing up as transactions in the system.” He pauses. “I think we are back in business.” <br/><br/>

Cheers erupt from the conference-room phone. <br/><br/>

 “We don’t know how exactly they got in.” Dennis adds, “Best guess is through a user with admin privileges. All the logs were scrubbed, so there’s no way to tell for sure. We do know that a shared Administrator password allowed the ransomware to propagate. Their mistake was locking open data files on the first database server, which caused the application to crash. This was what notified me in the first place, and we were able to start shutting down systems. We went one computer at a time and manually scanned them. Short answer: we found seven that were definitely locked and ten more that had the ransomware loaded-up but not activated. We immediately unplugged them from the network, which is how they’ll stay. We were able to recover from backup to get five back up and running, and it looks like the data we recovered from the read-only database copy was reasonably up to date. It only comes online every four hours, so it’s likely the attackers never knew it was there. Sales reports the system is slow, but it’s working.” <br/><br/>

Diane paused a moment, forcing herself to focus. “So, what happens now? What do we do next?” <br/><br/>

“I submitted a draft report that outlines everything in more detail, but in short, it could have been a lot worse. Backups of both systems and the database were not affected. Without that, we would have had to start from scratch. I’m recommending a much more robust IAM solution to ensure we’re never in a position of having shared passwords again, along with an offline logging system to ensure we can always go back and see what happened. Finally, I recommend better endpoint protection be implemented on servers and desktops.” <br/><br/>

“One more thing,” Diane says. “I want us to put together a Business Continuity Plan so we’re not the only people who know all this stuff when something bad happens again. What would’ve happened if Dennis was on vacation?” 
</p>


        </div>


      </div>
	</div>
    
    </section>







    <span id="final_analysis"></span>
    <section class="ransomware-ten ptb-60">
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
