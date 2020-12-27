<?php
/**
 *
 * Template Name: Partners new Template
 *
 * @package      Page Template
 * @author       Eric Lukavsky <elukavsky@anexinet.com>
 * @copyright    Copyright (c) 2016, Anexinet
 * @license      https://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

?>
<?php get_header(); ?>
<!-- Section 1 -->
  <section class="part-main-cont">
    <div class="img-cont">
    </div>    
    <div class="text-cont">
      <div class="h2-cont">
        <h2>Partners</h2>
        <div class="subh2-cont">
        <p style="font-size: 26px;">Become your best by partnering with the best</p>
        </div>
      </div>
    </div>

  </section>
<!-- Section1 -->
<!-- Section 2 Begin -->
<section class="part-second-cont">
  <div class="jumbotron-cont">
    <h4>Anexinet drives innovation by partnering with today's leading technology providers. Our elite partnerships are testaments to our knowledge and ability to provide effective integrated solutions, which translate into significant value for our clients.</h4>
  </div>
</section>
 
<!-- Section 2 End -->
<!-- Section 2 Begin -->
<section class="premium-p">
  <style>
.modal{display:none;position:fixed;z-index:1;padding-top:20vh;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:#000;background-color:rgba(0,0,0,.4)}.modal-content{position:relative;background-color:#fefefe;margin:auto;padding:0;border:1px solid #888;width:80%;box-shadow:0 4px 8px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);-webkit-animation-name:animatetop;-webkit-animation-duration:.4s;animation-name:animatetop;animation-duration:.4s}@-webkit-keyframes animatetop{from{top:-700px;opacity:0}to{top:0;opacity:1}}@keyframes animatetop{from{top:-700px;opacity:0}to{top:0;opacity:1}}.close{color:#4d4d4d;float:right;font-size:28px;font-weight:700;margin-left:12px;margin-top:12px}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer}.modal-header{padding:2px 16px;background-color:#5cb85c;color:#fff}.modal-body{padding:2px 16px}.modal-footer{padding:2px 16px;background-color:#5cb85c;color:#fff}.max-w-250{max-width:250px}.max-w-300{max-width:300px}.max-w-400 img{width:100%}.margin-0-a{margin:0 auto}.flex-center{display:flex;flex-direction:column;max-width:540px;margin-bottom:20px}.premium-p{background-color:#ededed;padding:50px 0}.single-premium-p{padding:0px; display:flex; flex-direction:column; align-items:center; background-color:#fff;box-shadow:0 0 16px 2px grey}.part-prem-cont p{color:#9b9b9b;font-size:22px;margin-left:40px;margin-bottom:30px}.read-more-p-p{margin-top:40px;margin-bottom:40px}.read-more-p-p a{font-weight:600;color:#2b78ff!important}.popover-premium{display:flex;align-items:center;}.popover-premium a{display:block;color: #0f4c83;margin-top: 40px;}@media screen and (max-width:768px){.popover-premium{display:initial}}.popover-premium p{font-size:18px;padding:40px 40px}.popover-premium img{max-width:282px;transition:.5s}@media screen and (max-width:360px){.popover-premium img{max-width:240px}}.modal-quote{background:linear-gradient(222deg,#6f42c1 35%,#2cd5db)}.modal-quote p{color:#fff;text-align:center;max-width:800px;margin:0 auto;font-size:18px;padding:30px 0;font-style:italic}
  </style>
  <?php 
    $aws_img = '/wp-content/uploads/2020/02/LOGO-AWS-1.png';
    $hpe_img = '/wp-content/uploads/2020/02/LOGO-HPE-2.png';
    $dell_img = '/wp-content/uploads/2020/02/LOGO-DELL-1.png';
    $microsoft_img = '/wp-content/uploads/2020/02/LOGO-M-1.png';
  ?>
  <div class="container">
    <!-- <div class="part-prem-cont">
      <p>Premium Partners</p>
    </div> -->
    <div class="row">
      
      <div class="col-md-6 flex-center">
      <div class="single-premium-p">
        <div class="max-w-250 margin-0-a">
          <img src="<?php echo $aws_img ?>" class="myBtn" alt="AWS Premium Partner">
        </div>
        <div class="max-w-300 margin-0-a">
          <p>As an Advanced Consulting Partner, Anexinet is uniquely positioned to help clients accelerate their journey to the cloud by designing, architecting…</p>
          <div class="read-more-p-p"><a class="myBtn">Read More &rarr;</a></div>
        </div>
        </div>
      </div>
      <div class="col-md-6 flex-center">
      <div class="single-premium-p">
        <div class="max-w-250 margin-0-a">
          <img src="<?php echo $hpe_img ?>" class="myBtnTwo" alt="HPE Platinum Partner">
        </div>
        <div class="max-w-300 margin-0-a">
          <p>As an HPE Platinum Partner, Anexinet offers decades of experience optimizing IT infrastructures. We solve clients’ most critical business challenges...</p>
          <div class="read-more-p-p"><a class="myBtnTwo">Read More &rarr;</a></div>
        </div>
        </div>
      </div>

      <div class="col-md-6 flex-center">
        <div class="single-premium-p">
          <div class="max-w-250 margin-0-a">
            <img src="<?php echo $dell_img ?>" class="myBtnThree" style="padding:32px 0" alt="DELL  Authorized Partner">
          </div>
          <div class="max-w-300 margin-0-a">
            <p>Anexinet is the fastest-growing Dell Technologies partner in the Philadelphia Tri-State Area. Together with Dell Technologies, Anexinet…</p>
            <div class="read-more-p-p" style="margin:50px 0"><a class="myBtnThree">Read More &rarr;</a></div>
          </div>
          </div>
        </div>
        <div class="col-md-6 flex-center">
        <div class="single-premium-p">
          <div class="max-w-250 margin-0-a">
            <img src="<?php echo $microsoft_img ?>" style="padding:32px 0" class="myBtnFour" alt="Microsoft Gold Partner">
          </div>
          <div class="max-w-300 margin-0-a">
            <p>As a Gold Partner, Anexinet leverages Microsoft-based solutions to empower clients from strategy through execution, to embrace…</p>
            <div class="read-more-p-p" style="margin:50px 0"><a class="myBtnFour">Read More &rarr;</a></div>
          </div>
        </div>
      </div>


  <!-- The Modal -->
      <div id="myModal" class="modal">

    <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="popover-premium">
          <img src="<?php echo $aws_img ;?>" alt="AWS COnsulting Partner">
          <p>As an Advanced Consulting Partner, Anexinet is uniquely positioned to help clients accelerate their journey to the cloud by designing, building, migrating, and managing both their workloads and applications on Amazon Web Services (AWS). We have a proven record of customer success as an AWS Advanced Consulting Partner. We have been recognized for our technical expertise and the extraordinary architecture of our digital solutions. Anexinet is also a part of the AWS Service Delivery Partner Program, the Immersion Day Program, and we have been selected as an AWS Well-Architected Partner to deliver AWS Well-Architected Reviews.</p>
        </div>
        <!-- <div class="modal-quote">
          <p>Their team is not only thorough but also extremely professional and knowledgeable in all areas of AWS.  They were able to quickly highlight big wins for me that will allow me to provide a better service to my customers and help me scale. The Anexinet team also worked with a sense of urgency and didn’t waste any time getting results.<br><br>- Technology services client.  </p>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Trigger/Open The Modal -->

  <!-- The Modal -->
  <div id="myModalTwo" class="modal">

<!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="closeTwo">&times;</span>
    <div class="popover-premium">
    <a href="https://www.anexinet.com/modernize-your-storage/"><img src="<?php echo $hpe_img ;?>" alt="HPE Platinum Partner"></a>
      <p>As an HPE Platinum Partner, Anexinet offers decades of experience in the optimization and utilization of IT infrastructures. We solve critical business challenges across the entire HPE portfolio, including hyperconverge, composable, intelligent storage, and networking. We empower our clients, ensuring that the IT environments they build envision the very future of their organization.<a href="/modernize-your-storage/" target="_blank">Modernize Your Storage &rarr;</a></p>
      
    </div>
    <!-- <div class="modal-quote">
      <p>Our partners are at the heart of HPE… As a leading technology consultancy and reseller, Anexinet is a trusted Platinum partner for HPE. Together, we are building the future of IT.<br><br>Terry Richardson HPE Vice President, North America Channels and Alliances </p>
    </div> -->
  </div>
</div>
</div>

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModalThree" class="modal">

<!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="closeThree">&times;</span>
    <div class="popover-premium">
      <img src="<?php echo $dell_img;?>" style="padding-left:30px;" alt="DELL Authorized Partner">
      <p>Anexinet is the fastest-growing Dell Technologies partner in the Philadelphia Tri-State Area. Together, with Dell Technologies, Anexinet solves business challenges by developing and implementing the most innovative industry-leading products and solutions. Anexinet helps clients modernize their infrastructure and transform their businesses from edge to core to cloud, all under one seamless umbrella of targeted solutions. Whether you are aiming to protect, analyze, store, or modernize, having a Gold Partnership with Dell enables Anexinet to deliver clients the best consulting and implementation experience in the industry.</p>
    </div>
    <!-- <div class="modal-quote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>- Lorem Ipsum  </p>
    </div> -->
  </div>
</div>
</div>

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModalFour" class="modal">

<!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="closeFour">&times;</span>
    <div class="popover-premium img-cont">
      <img src="<?php echo $microsoft_img;?>" alt="Microsoft Gold Partner">
      <p>As a Gold Partner, Anexinet leverages Microsoft-based solutions to empower clients. From the development of strategy through its execution, we embrace the core tenets of security, automation, standardization, scalability, and agility—whether in the public, private or hybrid cloud. We have established a close working relationship with Microsoft. As a Gold-Certified partner, we have attained the highest possible standards available in Microsoft's widely recognized partnership program, and have been duly recognized for our technical expertise. Additionally, as Tier 1 Cloud Solution Providers (CSP), Anexinet can directly manage the entire Microsoft cloud customer lifecycle for clients, including provisioning and management, as well as supporting Office 365 and Azure subscription services.</p>
    </div>
    <!-- <div class="modal-quote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>- Lorem Ipsum  </p>
    </div> -->
  </div>
</div>
</div>

<!-- Trigger/Open The Modal -->




</section>
<!-- Section 2 End -->
<div class="container" style="
    padding: 40px 0;
"><p style="color: #4d4d4d; font-size:20px; padding:16px;"><strong>At Anexinet, we bring industry-leading, best in breed vendor partnerships and alliances together to help solve our customer’s most challenging business issues. Our consultative approach helps us align the best technologies and solutions to transform your enterprise and create competitive advantage. Most importantly, we take the utmost pride in practicing due diligence to bring the best technology partners together so that you can focus on your business.</strong>

 </p></div>
<!-- Filter Begin -->
<div class="main-sect-cont">
  <section class="second-cont">
    <div class="container cont-btn">
      <a href="#" class="grdnt-btn tipo-cat btn active" data-slug="all">
        All</a>
        <a href="#" class="grdnt-btn btn" data-slug="cloud_partner">
        Cloud & Hybrid IT</a>
      <a href="#" class="grdnt-btn btn" data-slug="customer_engagement">
        Customer Engagement</a>
      <a href="#" class="grdnt-btn btn" data-slug="enterprise_mobility">
        Enterprise Mobility</a>
       <a href="#" class="grdnt-btn btn" data-slug="analytics_partner">
          Analytics & Insights</a> 
    </div>
  </section>
</div> 
<!-- Filter End -->
<!--Section3 begins-->
  <section class="part-frth-sect container-fluid">
    
    <div class="part-all-part-cont">
      <div class="container">
        <div class="row cont-post_all cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_partners',
            'posts_per_page' => '-1',
            'order' => 'ASC'
           // 'tax_query' => array( 
           // array( 'taxonomy' => 'partner_categories',
           // 'field' => 'slug', 
           // 'terms' => ''
            // can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
            //  ) 
           //  ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
          <?php 
              if(get_field("has_link")){ ?>
                <a href="<?php the_field("landing_link") ?>" target="_blank"><?php the_post_thumbnail('square-size')?></a>
           <?php  } else { 
              the_post_thumbnail('square-size'); }?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- cloud partners begin -->
        <div class="row cont-post_cloud_partner cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_partners',
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'tax_query' => array( 
            array( 'taxonomy' => 'partner_categories',
            'field' => 'slug', 
            'terms' => 'cloud_partner'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
          <?php 
              if(get_field("has_link")){ ?>
                <a href="<?php the_field("landing_link") ?>" target="_blank"><?php the_post_thumbnail('square-size')?></a>
           <?php  } else { 
              the_post_thumbnail('square-size'); }?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Cloud Partners end -->
<!-- Customer Engagement Partners begin -->
<div class="row cont-post_customer_engagement cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_partners',
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'tax_query' => array( 
            array( 'taxonomy' => 'partner_categories',
            'field' => 'slug', 
            'terms' => 'customer_engagement'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
          <?php 
              if(get_field("has_link")){ ?>
                <a href="<?php the_field("landing_link") ?>" target="_blank"><?php the_post_thumbnail('square-size')?></a>
           <?php  } else { 
              the_post_thumbnail('square-size'); }?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Customer Engagement Partners end -->
<!-- enterprise mobility partners begin -->
<div class="row cont-post_enterprise_mobility cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_partners',
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'tax_query' => array( 
            array( 'taxonomy' => 'partner_categories',
            'field' => 'slug', 
            'terms' => 'enterprise_mobility'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
          <?php 
              if(get_field("has_link")){ ?>
                <a href="<?php the_field("landing_link") ?>" target="_blank"><?php the_post_thumbnail('square-size')?></a>
           <?php  } else { 
              the_post_thumbnail('square-size'); }?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Enterprise Mobility partners end -->
<!-- Analytics and Insights partners begin -->
<div class="row cont-post_analytics_partner cont-query">
<!-- loop end -->
          <?php
            global $post;
            $args = array( 
            'post_type' => 'anxnt_partners',
            'posts_per_page' => '-1',
            'order' => 'ASC',
            'tax_query' => array( 
            array( 'taxonomy' => 'partner_categories',
            'field' => 'slug', 
            'terms' => 'analytics_partner'
             //can be set to ID 'terms' => 'bob' if field is ID you can reference by cat/term number 
              ) 
             ) 
            );

            global $the_query_category;
            $the_query_category = new WP_Query( $args );
            $count = 1;
            if ( $the_query_category->have_posts() ) : while ( $the_query_category->have_posts() ) : $the_query_category->the_post();
          ?>
<!-- loop end -->
<!-- looped content begin -->
          <div class="col-sm-6 col-md-3">
            <?php 
              if(get_field("has_link")){ ?>
                <a href="<?php the_field("landing_link") ?>" target="_blank"><?php the_post_thumbnail('square-size')?></a>
           <?php  } else { 
              the_post_thumbnail('square-size'); }?>
           </div>
<!-- looped content end -->   
<!-- If Begin -->
          <?php $count++; ?>
          <?php endwhile; ?>
          <?php
          wp_reset_query(); ?>
<!-- post navigation -->
          <?php else: ?>
<!-- no posts found -->
          <?php endif; ?>
<!-- If End -->
        </div> <!-- row end -->
<!-- Analytics and Insights partners end -->

      </div> <!-- container  end -->
    </div> <!-- part all end -->
  </section> <!-- section end -->
<!-- Section 3 ends-->
<!-- Anexinet Main Form Begin -->
<?php include('form.php'); ?> 
<!-- Anexinet Main Form End -->
<?php get_footer(); ?>