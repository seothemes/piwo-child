<?php
/**
 *
 * Template Name: CLoud & Hybrid IT conejonegro
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
  <style>
  .vidyard-lightbox-centering{
    padding-bottom: 56.25% !important;
  }
  .link-white{
    color:#FFF !important;
  }
  .partner-logos-cont{
    display: flex;
    justify-content: start;
    align-items:center;
    margin-top: 60px;
  }
  .partner-logos-cont img{
    max-width:250px;
  }

.post-intro-wrapper h1.post-title {
font-size: 40px !important;
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
    .strategy-kickstart .col-lg-6{
        padding: 40px 20px 40px 40px;
    }
    .strategy-kickstart .col-md-6{
      background:url('/wp-content/uploads/2020/07/group-6@2x.jpg');
      background-repeat: no-repeat;
      background-size:cover;

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
    }

    #cloud-hybrid-it{
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
    font-size: 40px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.37;
    letter-spacing: normal;
    margin-top:20px;

}

#platform-analytics-services p, #platform-analytics-services .p {
    font-size: 16px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.63;
    letter-spacing: normal;
    color: #6e6e68;
    margin: 0 0 2em;
}

#platform-analytics-services ul {
    list-style: none;
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
    margin-right: 15px;
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
    #platform-analytics-services .accordion {
    height:auto;
}

}
@media (min-width: 0) and (max-width: 968px) {
    .partner-logos-cont{
    display: inherit;
  }
}

#WS-ScroLi.fixed {
    z-index: 9;
    position: fixed;
    top: 110px !important;
}

#WS-ScroLi.asbolute {
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
.item-4,
.item-5,
.item-6 {
    margin-top: -5px;
}

.icon-text {
    margin-top: -10px;
    position: absolute;
    text-align: right;
    right: 30px;
    width: 140px;
}

.icon-text a {
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    line-height: 1.31px;
    color: #187bcd;
    font-family: "Montserrat", sans-serif;
}

#WS-ScroLi .item-6 .line, #WS-ScroLi .item-6 .line-animation {
    display: none !important;
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
}

#platform-analytics-services .cloud-services {
    background-color: #f7f8fa;
    margin-left:20px;
}

#platform-analytics-services .cloud-services .right-rectangle {
    max-width: 350px;
    background-color: #ffffff;
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
    padding: 40px;
}

#platform-analytics-services .well-architected-framework a {
    font-weight: bold;
    color: #187bcd;
}

#platform-analytics-services .well-architected-framework img {
    vertical-align: middle;
}

#platform-analytics-services .well-architected-framework .bg-rectangle {
    background-image: url('/wp-content/uploads/2020/07/group-3.jpg');
    background-repeat: no-repeat;
    background-position: right;
}

#platform-analytics-services .well-architected-framework .bg-rectangle .title {
    margin-bottom: 20px;
    display: inline-block;
}

#platform-analytics-services .devops .bg-rectangle {
    background-image: url('https://www.anexinet.com/wp-content/uploads/2020/07/group-3-1.jpg');
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
    padding:40px;
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
    </style>
  <style type="text/css">@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,700');</style>
  <style type="text/css">@import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');</style>

<!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->


<!-- back to top -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><img
        src="https://www.anexinet.com/wp-content/uploads/2020/03/back-to-top.png" alt="Back to top" /></button>
<!-- / back to top -->



<?php echo the_content(); ?>





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
        var hT = $('.anxnt-main-form').offset().top - 610;
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
            ['#cloud-hybrid-it','<a href="#cloud-hybrid-it">Cloud & </br>Hybrid IT</a>'],
						['#cloud-services','<a href="#cloud-services">Cloud Services</a>'],
						['#anexinet_solutions_microsoft','<a href="#anexinet_solutions_microsoft">Anexinet Solutions on Azure and Office 365</a>'],
						['#anexinet_solutions_aws','<a href="#anexinet_solutions_aws">Anexinet Solutions on AWS</a>'],
						['#dev_ops','<a href="#dev_ops">DevOps</a>'],
            ['#consumption-based-it','<a href="#consumption-based-it">Consumption-</br>Based IT</a>']
        ],
        position: {
            x: ['left', 'auto'],
            y: ['top', 100]
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
            height: 90,
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
