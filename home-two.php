<?php
/**
 *
 * Template Name: homepage 2-0
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2016, Anexinet
 * @license      https://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

?>
<?php include('header-newmenu.php');?>

<link rel="stylesheet" href="https://www.anexinet.com/wp-content/themes/piwo-child/public/css/owl.carousel.min.css">
<link rel="stylesheet" href="https://www.anexinet.com/wp-content/themes/piwo-child/public/css/owl.theme.default.min.css">


<style>
html{
  scroll-behavior: smooth !important;
}
body{
  margin-top:0 !important;
}
div[data-editorblocktype="SubmitButtonBlock"]{
  width:100% !important;
}
#rev_slider_9_2_forcefullwidth{
  height: 983px !important;
}
.img-cont img:hover{
  transform: none;
    transition: none;
}
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{
  background: #f0f5f9 !important;
}
.owl-theme .owl-dots .owl-dot span{
  background: #b9b9b9;
}
.owl-prev{
  position: absolute;
    top: 39%;
    left: 0%;
    width: 65px;
    background: transparent !important;

}
.owl-next{
  position: absolute;
    top: 39%;
    left: 1%;
    width: 65px;

    background: transparent !important;

}
.counter-text-cont{
  display:flex;
  justify-content: space-evenly;
}
.counter-cont{
  width: 223px;
}
.counter-text{
  width: 223px;
}
.chat-a {
  display:flex;
  justify-content:flex-end;
}

.icon img{
  max-width:100px;
}
  /* .main-banner-img{
    background: url('/wp-content/uploads/2020/06/home-main-banner.jpg');
    background-size: cover;
    height: 600px;
    display: flex;
    align-items: center;
  } */
  .main-title{
    margin: 0 auto;
    max-width: 800px;
    text-align: center;
  }
 .main-title h1{
    color: #ffb852;
    font-family: 'Montserrat' !important;
    font-variant-caps: all-petite-caps;
  }
 .main-title h2{
  color: white;
    font-family: 'Montserrat';
    font-weight: 600 !important;
    font-size: 24px;
    max-width: 600px;
    margin: 0 auto;
  }

  .digital-transform .container{
    padding: 0px 0 40px 0;
  }
  .digital-transform .a-cont{
     margin-left:auto;
  }
  .digital-transform .col-md-6{
    padding: 0px 0 40px 0;
     display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    max-width: 463px;

  }
  .digital-transform .row{
    justify-content: space-between;
  }
  .digital-transform .col-md-6 .img-cont{
     max-width:444px;
  }
  .digital-transform .col-md-6 .text-cont{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
  }
  .digital-transform .text-cont h2{
    font-size: 30px;
    text-align: right;
    max-width: 400px;
    margin-left: auto;
  }
  .digital-transform .text-cont h3{
    font-size: 16px;
    margin-top: 11px;
    margin-bottom: 29px;
    text-align: right;
    font-weight: 600;
  }
   .a-cont{
    max-width: 174px;
    color: #187bcd;
    font-weight: 600;
    font-family: 'Montserrat';
  }
  .counter .img-cont{
    background:url('/wp-content/uploads/2020/06/untitled-1.jpg');
    background-size:cover;
    padding:60px 15px;
    color: white;
  }
  .counter-of-counters{
    display: flex;
    justify-content: space-evenly;
  }

  .counter .img-cont span{
    font-weight: 900;
    font-size: 28px;
    font-family: 'Montserrat';
  }
  .counter .img-cont p{
    color:white;
  }
.counter .row{
  margin-top: 5%;
}
.counter .col-md-6 h2{
  color: white;
  font-size: 40px;
}
.counter .col-md-6 h5{
  color: white;
  font-size: 20px;
}
.lp-required{
  display:none;
}
.lp-form-button{
  background-color: #ffb852;
  border: none;
  width:100%;
}
  .x-background{
    background:url('/wp-content/uploads/2020/08/Xbackground.png');
    position: relative;
    padding-left: 0;
    padding-right: 0;
    background-size: 110%;
    background-repeat: no-repeat;
    background-position: top;
  }

  .x-background .chat-cont{
    max-width: 360px;
    text-align: right;
    margin-left: auto;
    padding-top: 40px;
  }
  .x-background .chat-cont h2{
    font-size:24px;
  }
  .circle-left{
    max-width: 33%;
  }
  .circle-right{
    max-width: 33%;
    margin-left: auto;
    display: flex;
    justify-content: flex-end;
  }
  .service-text-one{
    max-width: 597px;
    position: absolute;
    top: 299px;
    left: 29%;
  }
  .x-background h2{
    font-size:20px;
  }
  .x-background h3{
    font-size: 16px;
    font-weight: 500;
    color: #464643;
    margin: 8px 0;
    max-width: 496px;
  }

  .x-background a{
    color: #187bcd;
    font-size: 14px;
    font-weight: 700;

  }

  /* service text 2 */
  .service-text-two{
    max-width: 597px;
    position: absolute;
    top: 31.5vw;
    left: 35%;
  }
  /* /Service text 2 */
  .service-text-three{
    max-width: 597px;
    position: absolute;
    top: 45vw;
    left: 35%;
  }
  .service-text-four{
    max-width: 597px;
    position: absolute;
    top: 59vw;
    left: 29%;
  }
  .service-text-five{
    max-width: 597px;
    position: absolute;
    top: 79vw;
    right: 29vw;
    text-align: right;
  }
  .service-text-six{
    max-width: 597px;
    position: absolute;
    top: 92vw;
    right: 35vw;
    text-align: right;
  }
  .service-text-seven{
    max-width: 597px;
    position: absolute;
    top: 105vw;
    right: 35vw;
    text-align: right;
  }

  /* Carousel */
   .item {
    position: relative;
    width: 100%;
    height: 731px;
}

/* .img-carru{
  background:url('/wp-content/uploads/2020/08/XCasestudy-min.png');
  background-size:cover;
  padding-bottom: 220px;
} */
.img-prototype{
  max-width: 550px;
    position: relative;
    left: 56vw;
    top: 300px;
}
.img-prototype img{
  max-width: 533px;
}

.carousel-text{
  position: absolute;
  top: 267px !important;
  color: white;
  left: 9%;
  max-width: 40vw;
}
.carousel-text h2{
  color: white;
  font-weight: 800;
  font-size:30px;
}
.carousel-text h3{
  color: white;
    font-weight: 600;
    font-size: 18px;
    margin: 12px 0;
}
.carousel-text h4{
  color: white;
    margin-top: 8%;
    margin-bottom: 3%;
    font-size: 20px;
}
.carousel-text p{
  color: white;
  margin-bottom: 26px;
}

.carousel-text a{
  color: #ffb852;
  font-weight: 800;
}

.owl-dots{
  position: absolute !important;
  top: 652px !important;
  left: 8.5vw !important;
}

.partners{
  background:url('/wp-content/uploads/2020/06/partners-backgroun.png');
  padding: 60px 0;
  background-size: 100%;
    background-position: center;
  margin-bottom: 40px;
  padding-top:0;
  background-repeat: no-repeat;
}
.partners h2{
  font-size:30px;
}
.partners .text-cont p{
 color:#6e6e68;
}
.partners .text-cont{
 padding-top:0;
 padding-bottom:20px;
}
.partners .col-md-7{
  padding-right:0;
}

.partners .img-cont{
  width: 100%;
  display: flex;
  justify-content: space-around;
    margin-left: auto;
    max-width: 444px;
  margin-bottom: 40px;
  align-items:center;
}
.partners .img-cont-2{
  width: 100%;
  display: flex;
  justify-content: space-between;
    margin-left: auto;
    max-width: 444px;
    margin-top: 62px;
  align-items:center;
}

label{
  color:white;
}

@media screen and (min-width:768px){
  .partners .col-md-5{
    padding:0;
  }
  .owl-next{
    left: 94%;
  }
  .d-none-desktop{
    display:none;
  }
  /* .service-text-one{
    top: 8.9%;
  }
  .service-text-two{
    top: 13.4%;
  }
  .service-text-three{
    top: 18..8%;
  }
  .service-text-four{
    top: 23.9%;
  }
  .service-text-five{
    top: 30.9%;
  }
  .service-text-six{
    top: 34.5%;
  }
  .service-text-seven{
    top: 40.4%;
  } */
  .service-text-one img{
    display:none;
  }
  .service-text-two img{
    display:none;
  }
  .service-text-three img{
    display:none;
  }
  .service-text-four img{
    display:none;
  }
  .service-text-five img{
    display:none;
  }
  .service-text-six img{
    display:none;
  }
  .service-text-seven img{
    display:none;
  }
}


/* @media screen and (min-width:800px){
  .service-text-one{
    top: 8.9%;
  }
  .service-text-two{
    top: 14.4%;
  }
  .service-text-three{
    top: 20.2%;
  }
  .service-text-four{
    top: 25.9%;
  }
  .service-text-five{
    top: 31.9%;
  }
  .service-text-six{
    top: 36.6%;
  }
  .service-text-seven{
    top: 41.4%;
  }
} */

  /* @media screen and (min-width:960px){
  .service-text-one{
    top: 8.9%;
  }
  .service-text-two{
    top: 14.4%;
  }
  .service-text-three{
    top: 19.6%;
  }
  .service-text-four{
    top: 24.9%;
  }
  .service-text-five{
    top: 33.2%;
  }
  .service-text-six{
    top: 38.3%;
  }
  .service-text-seven{
    top: 43.4%;
  }
} */

/* @media screen and (min-width:1024px){
  .service-text-one{
    top: 8.9%;
  }

  .service-text-two{
    top: 15%;
  }
  .service-text-three{
    top: 20.8%;
  }
  .service-text-four{
    top: 26.9%;
  }
  .service-text-five{
    top: 35.6%;
  }
  .service-text-six{
    top: 41.2%;
  }
  .service-text-seven{
    top: 46.8%;
  }
} */

/* @media screen and (min-width:1180px){
  .service-text-one{

  }
  .service-text-two{

  }
  .service-text-three{

  }
  .service-text-four{

  }
  .service-text-five{
    top: 36.8%;
  }
  .service-text-six{
    top: 42.8%;
  }
  .service-text-seven{
    top: 48.5%;
  }
} */

/* @media screen and (min-width:1280px){
  .service-text-one{
    top: 8.3%;
  }
  .service-text-two{
    top: 14.4%;
  }
  .service-text-three{
    top: 20.9%;
  }
  .service-text-four{
    top: 28.4%;
  }
  .service-text-five{
    top: 37.7%;
  }
  .service-text-six{
    top: 43.8%;
  }
  .service-text-seven{
    top: 50.1%;
  }
} */

 @media screen and (min-width:1520px){
  .service-text-one{
    top: 7%;
  }
  .service-text-two{
    top: 12.8%;
  }
  .service-text-three{
    top: 18.4%;
  }
  .service-text-four{
    top: 24.4%;
  }
  .service-text-five{
    top: 33.4%;
  }
  .service-text-six{
    top: 38.6%;
  }
  .service-text-seven{
    top: 43.9%;
  }
}

/* @media screen and (min-width:1440px){
  .service-text-one{
    top: 8.3%;
    left: 413px;
  }
  .service-text-two{
    top: 14.9%;
    left: 505px;
  }
  .service-text-three{
    top: 21.6%;
    left: 505px;
  }
  .service-text-four{
    top: 28.8%;
    left: 423px;
  }
  .service-text-five{
    top: 39.1%;
    right: 422px;
  }
  .service-text-six{
    top: 45.3%;
    right: 504px;
  }
  .service-text-seven{
    top: 51.8%;
    right: 508px;
  }
} */

/* @media screen and (min-width:1600px){
  .service-text-one{
    top: 8.3%;
    left: 434px;
  }
  .service-text-two{
    top: 14.7%;
    left: 533px;
  }
  .service-text-three{
    top: 21.6%;
    left: 533px;
  }
  .service-text-four{
    top: 28%;
    left: 432px;
  }
  .service-text-five{
    top: 38.4%;
    right: 440px;
  }
  .service-text-six{
    top: 44.9%;
    right: 530px;
  }
  .service-text-seven{
    top: 50.9%;
    right: 530px;
  }
} */


@media screen and (max-width:1366px){
  .service-text-one{
    top: 7%;
  }
  .service-text-two{
    top: 12.6%;
  }
  .service-text-three{
    top: 18.4%;
  }
  .service-text-four{
    top: 24%;
  }
  .service-text-five{
    top: 33.2%;
  }
  .service-text-six{
    top: 38.4%;
  }
  .service-text-seven{
    top: 43.8%;
  }
}

@media screen and (max-width:1336px){
  .service-text-five{
    top: 32.8%;
  }
  .service-text-six{
    top: 38.2%;
  }
  .service-text-seven{
    top: 43.6%;
  }
}

@media screen and (max-width:1315px){
  .service-text-five{
    top: 32.8%;
  }
  .service-text-six{
    top: 37.6%;
  }
  .service-text-seven{
    top: 42.8%;
  }
}

@media screen and (max-width:1280px){
  .service-text-one{
    top: 7%;
  }
  .service-text-two{
    top: 12.4%;
  }
  .service-text-three{
    top: 18.2%;
  }
  .service-text-four{
    top: 23.8%;
  }
  .service-text-five{
    top: 32.3%;
  }
  .service-text-six{
    top: 37.3%;
  }
  .service-text-seven{
    top: 42.4%;
  }
}



@media screen and (max-width:1168px){
  .service-text-one{
    top: 7.8%;
  }
  .service-text-two{
    top: 13%;
  }
  .service-text-three{
    top: 18.8%;
  }
  .service-text-four{
    top: 24.3%;
  }
  .service-text-five{
    top: 32.6%;
  }
  .service-text-six{
    top: 37.9%;
  }
  .service-text-seven{
    top: 43.1%;
  }
  .x-background h2{
    font-size: 16px;
    margin-bottom: 4px;
  }
  .x-background h3{
    font-size: 13px;
    margin: 4px 0;
  }
  .x-background a{
    font-size: 10px;
  }
}

@media screen and (max-width:1100px){
  .service-text-one{
    top: 8.2%;
  }
  .service-text-two{
    top: 13.2%;
  }
  .service-text-three{
    top: 19%;
  }
  .service-text-four{
    top: 24.4%;
  }
  .service-text-five{
    top: 32.8%;
  }
  .service-text-six{
    top: 38.1%;
  }
  .service-text-seven{
    top: 43.2%;
  }
}

@media screen and (max-width:1024px){
  .service-text-one{
    top: 8.4%;
  }
  .service-text-two{
    top: 13.4%;
  }
  .service-text-three{
    top: 19.2%;
  }
  .service-text-four{
    top: 24.6%;
  }
  .service-text-five{
    top: 32.9%;
  }
  .service-text-six{
    top: 38.2%;
  }
  .service-text-seven{
    top: 43.4%;
  }
}

@media screen and (max-width:982px){
  .service-text-one{
    top: 8.6%;
  }
  .service-text-two{
    top: 13.6%;
  }
  .service-text-three{
    top: 19.4%;
  }
  .service-text-four{
    top: 24.8%;
  }
  .service-text-five{
    top: 32.9%;
  }
  .service-text-six{
    top: 38.4%;
  }
  .service-text-seven{
    top: 43.4%;
  }
}

@media screen and (max-width:932px){
  .service-text-one{
    top: 8.8%;
  }
   .service-text-two{
    top: 13.8%;
  }
  .service-text-three{
    top: 19.7%;
  }
  .service-text-four{
    top: 24.9%;
  }
  .service-text-five{
    top: 33.2%;
  }
  .service-text-six{
    top: 38.4%;
  }
  .service-text-seven{
    top: 43.4%;
  }
}

@media screen and (max-width:900px){
  .service-text-one{
    top: 9%;
  }
   .service-text-two{
    top: 14.1%;
  }
  .service-text-three{
    top: 19.8%;
  }
  .service-text-four{
    top: 25.2%;
  }
  .service-text-five{
    top: 33.2%;
  }
  .service-text-six{
    top: 38.5%;
  }
  .service-text-seven{
    top: 43.7%;
  }
}

@media screen and (max-width:860px){
  .service-text-one{
    top: 9.2%;
  }
   .service-text-two{
    top: 14.3%;
  }
  .service-text-three{
    top: 19.9%;
  }
  .service-text-four{
    top: 25.3%;
  }
  .service-text-five{
    top: 33.4%;
  }
  .service-text-six{
    top: 38.7%;
  }
  .service-text-seven{
    top: 43.6%;
  }
}

@media screen and (max-width:825px){
  .service-text-one{
    top: 9.4%;
  }
   .service-text-two{
    top: 14.3%;
  }
  .service-text-three{
    top: 20.3%;
  }
  .service-text-four{
    top: 25.3%;
  }
  .service-text-five{
    top: 33.6%;
  }
  .service-text-six{
    top: 38.8%;
  }
  .service-text-seven{
    top: 43.6%;
  }
}

@media screen and (max-width:800px){
  .service-text-one{
    top: 9.6%;
  }
   .service-text-two{
    top: 14.3%;
  }
  .service-text-three{
    top: 20.5%;
  }
  .service-text-four{
    top: 25.6%;
  }
  .service-text-five{
    top: 33.7%;
  }
  .service-text-six{
    top: 38.9%;
  }
  .service-text-seven{
    top: 43.8%;
  }
}

@media screen and (max-width:768px){
  .x-background .chat-cont{
    margin:0 auto;
  }
  .circle-a{
    max-width: 488px;
    margin: 0 auto;
  }
  .owl-dots{
    top: 156px !important;
  }
  .owl-prev{
    left: -5% !important;
  }
  .owl-next{
    left: 85% !important;
  }
  .digital-transform .text-cont h2 {
      font-size:22px !important;
  }
  .digital-transform .text-cont h3{
    font-size:16px;
  }
  .partners{
    background-size: contain;
  }
  .img-carru{
    padding-bottom: 0;
  }
  .d-none-mobile{
    display:none !important;
  }
  .counter-cont{
    margin-bottom:30px;
  }
  .counter-of-counters{
    display: initial;
  }
  .partners .img-cont-2 img{
    width: 175px;
  }
  .partners .img-cont-2{
    justify-content: space-between;
  }
  .partners .col-md-8{
    margin-top:40px;
  }
  .digital-transform .col-md-6{
    padding-left:15px;
    padding-right:15px;
  }
  .rightcolumn{
    width: 99% !important;
  }
  .chat-a img{
  margin: 0 auto;
}
  .item{
    height: 942px;
  }
  .img-prototype{
    max-width: 500px;
    left: 7vw;
    top: 579px;
  }
  .img-prototype img{
    max-width: 400px;
  }

  .carousel-text{
    max-width: 82vw;
    top: 195px !important;
  }
  .x-background{
    background-size: 1643px;
  }
  .x-background .chat-cont h2{
    text-align: center;
    margin-bottom: 19px;
  }
  .x-background h3{
    font-size: 16px !important;
    font-weight: 500;
    text-align:left;
    max-width: 493px;
    margin: 0 auto !important;
  }
  .circle-a a{
    display:flex;
    margin-top: 20px;
  }
  .mb-20-home{
    margin-bottom:20px;
  }
  .circle-left{
    display:none;
  }
  .circle-right{
    display:none;
  }
  .service-text-one{
    position:initial;
    text-align:center;
    margin-bottom:48px;
    padding: 0 16px 0 16px;
    max-width: initial;
    margin-top: 40px;
  }
  .service-text-two{
    position:initial;
    text-align:center;
    margin-bottom:40px;
    padding: 0 16px 0 16px;
    max-width: initial;
  }
  .service-text-three{
    position:initial;
    text-align:center;
    margin-bottom:40px;
    padding: 0 16px 0 16px;
    max-width: initial;
  }
  .service-text-four{
    position:initial;
    text-align:center;
    margin-bottom:40px;
    padding: 0 16px 0 16px;
    max-width: initial;
  }
  .service-text-five{
    position:initial;
    text-align:center;
    margin-bottom:40px;
    padding: 0 16px 0 16px;
    max-width: initial;
  }
  .service-text-six{
    position:initial;
    text-align:center;
    margin-bottom:40px;
    padding: 0 16px 0 16px;
    max-width: initial;
  }
  .service-text-seven{
    position:initial;
    text-align:center;
    margin-bottom:40px;
    padding: 0 16px 0 16px;
    max-width: initial;
  }
}

  /* Carousel */

</style>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<section class="main-banner">
 <?php add_revslider('homepagenew-1'); ?>
  <!-- <div class="main-banner-img">
     <div class="main-title" data-aos="zoom-in">
      <h1>Empowering what’s next</h1>
      <h2>Award-winning applications and the infrastructure to run them on.</h2>
    </div>
  </div> -->
</section>

<!-- section x -->
<section class="x-background container-fluid">

  <div class="container">
    <div class="chat-cont" data-aos="zoom-in" data-aos-delay="10" data-aos-offset="200" data-aos-duration="1500" data-aos-easing="ease-in-out">
      <h2>Let’s get the conversation started</h2>
    <a href="#main_form" class="chat-a"> <img src="/wp-content/uploads/2020/06/chat.png" alt="Chat With Us"></a>
    </div>
    </div>

    <div class="circle-left">
      <img src="/wp-content/uploads/2020/06/left-circle.png" alt="Circle image">
    </div>

    <div class="service-text-one icon" data-aos="zoom-in">
    <img src="/wp-content/uploads/2020/07/cloudit.png" class="mb-20-home" alt="">
      <h2>Cloud & Hybrid IT</h2>
      <h3>Accelerate automation, standardization, scalability, and agility in the Public Cloud or your on-premises Data Center. </h3>
      <div class="circle-a">
        <a href="https://www.anexinet.com/cloud-hybrid-it/">IGNITE INNOVATION WITH CLOUD ></a>
      </div>
    </div>

    <div class="service-text-two icon" data-aos="zoom-in">
    <img src="/wp-content/uploads/2020/07/connected-exp.png" class="mb-20-home" alt="">
      <h2>Connected Experiences</h2>
      <h3>Engage customers and employees across the entire journey and deliver a digital ecosystem of multi-channel services and experiences.</h3>
      <div class="circle-a">
        <a href="https://www.anexinet.com/connected-experiences/">RE-IMAGINE ENGAGEMENT ></a>
      </div>
    </div>

    <div class="service-text-three icon" data-aos="zoom-in">
    <img src="/wp-content/uploads/2020/07/cyber-sec.png" class="mb-20-home" alt="">
      <h2>Cyber Security</h2>
      <h3>Ward off threats to your applications, data, and infrastructure at every layer via our holistic security approach</h3>
      <div class="circle-a">
        <a href="https://www.anexinet.com/cybersecurity/">GET PROTECTED ></a>
      </div>
    </div>

    <div class="service-text-four icon" data-aos="zoom-in">
    <img src="/wp-content/uploads/2020/07/datacenter.png" class="mb-20-home" alt="">
      <h2>Data Center</h2>
      <h3>Ensure best-in-breed Data Center Modernization solutions across computing, network, and storage thanks to our elite technology partnerships.</h3>
      <div class="circle-a">
        <a href="https://www.anexinet.com/data-center/">SIMPLIFY YOUR OPERATIONS ></a>
      </div>
    </div>

    <div class="circle-right">
      <img src="/wp-content/uploads/2020/06/right-circle.png" class="mb-20-home" alt="">
    </div>

    <div class="service-text-five icon" data-aos="zoom-in">
    <img src="/wp-content/uploads/2020/07/future-work.png" class="mb-20-home" alt="">
      <h2>Future of Work</h2>
      <h3>Increase operational efficiencies and enable employees with intelligent, user-centric solutions.</h3>
      <div class="circle-a">
        <a href="https://www.anexinet.com/future-of-work/">PREPARE FOR TOMORROW ></a>
      </div>
    </div>

    <div class="service-text-six icon" data-aos="zoom-in">
    <img src="/wp-content/uploads/2020/07/networking.png" class="mb-20-home" alt="">
      <h2>Networking</h2>
      <h3>Modernize your network for increased stability and scalability and to ensure the security of cloud data and remote workforces. </h3>
      <div class="circle-a">
        <a href="https://www.anexinet.com/networking/">GET CONNECTED ></a>
      </div>
    </div>

    <div class="service-text-seven icon" data-aos="zoom-in">
    <img src="/wp-content/uploads/2020/07/p-innovation.png" class="mb-20-home" alt="">
      <h2>Product Innovation</h2>
      <h3>Engineer game-changing platforms and applications to generate compelling experiences and uncover new revenue streams.​</h3>
      <div class="circle-a">
        <a href="https://www.anexinet.com/product-innovation/">ACCELERATE SUCCESS</a>
      </div>
    </div>

<!-- Section x end -->
<!-- Case Studies Carousel -->
          <div class="owl-carousel case-studies img-carru owl-theme">
          <?php add_revslider('slider-1'); ?>
            <!-- <div class="item">
              <div class="img-prototype">
                <img src="/wp-content/uploads/2020/08/canopysmart@2x-min.png" alt="Case Study Background">
              </div>

              <div class="carousel-text" data-aos="zoom-in">
                <h2 class="tit-carru">Our Work</h2>
                <h3>Our digital solutions speak for themselves.</h3>
                <h4>Canopy Health</h4>
                <p class="desc-carru">“Canopy Health was looking to be a true differentiator, compared to traditional health plans and provider-portals that aren’t inherently consumer-centric,” said Aman Bhasin, Digital Information Officer, BayHealth Development. “We wanted to provide members easy-to-use tools that didn’t look or feel stale, meeting and exceeding consumer expectations across other industries.”</p>
                <a class="learmore-carru" href="/case-studies-testimonials/canopy-health/" target="_blank">View Case Studie</a>
              </div>
            </div> -->

            <!-- <div class="item">
              <div class="img-prototype" data-aos="zoom-in">
                <img src="/wp-content/uploads/2020/08/brighthorizonssmart@2x-min.png" alt="Case Study Background">
              </div>

              <div class="carousel-text">
                <h2 class="tit-carru">Our Work</h2>
                <h3>Our digital solutions speak for themselves.</h3>
                <h4>Bright Horizons</h4>
                <p class="desc-carru">Bright Horizons’ mobile app users can input just about any information needed to build a complete customer profile. New dynamic features have also been added, such as the ability to copy and edit reservations</p>
                <a class="learmore-carru" href="/case-studies-testimonials/bright-horizons/" target="_blank">View Case Studie</a>
              </div>
            </div> -->

            <!-- <div class="item">
              <div class="img-prototype">
                <img src="/wp-content/uploads/2020/08/traveltrasportsmart@2x-min.png" alt="Case Study Background">
              </div>

              <div class="carousel-text" data-aos="zoom-in">
                <h2 class="tit-carru">Our Work</h2>
                <h3>Our digital solutions speak for themselves.</h3>
                <h4>Travel and Transport</h4>
                <p class="desc-carru">Anexinet and Travel and Transport worked as an integrated team to create a roadmap and approach to migrate onto Xamarin. Using Agile project management methodology, the combined Anexinet/Travel and Transport IT teams</p>
                <a class="learmore-carru" href="https://www.anexinet.com/case-studies-testimonials/travel-and-transport/" target="_blank">View Case Studie</a>
              </div>
            </div> -->

          </div> <!-- owl carrusel -->
      </section>
<!-- /Case Studies Carousel -->

<section class="digital-transform container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-cont">
          <img src="/wp-content/uploads/2020/06/digital-transform.jpg" alt="Digital Transformation"/>
        </div>
      </div>
      <div class="col-md-6 text-cont" data-aos="zoom-in">
        <h2>Are You Overdue for Digital Transformation?</h2>
        <h3>As a leading technology consultancy and reseller, Anexinet helps clients achieve digital and infrastructure transformation.</h3>
        <div class="a-cont">
        <a href="/anexinet-advisory/">Know more about us</a>
      </div>
      </div>

    </div>
  </div>
</section>

<section class="partners">
  <div class="container">
    <div class="row">

      <div class="col-md-5">
        <div class="text-cont" data-aos="zoom-in">
          <h2>You get to be the best by partnering with the best.</h2>
          <p>We’re able to deliver great, comprehensive digital experiences thanks to our partnerships with these leading technology vendors:</p>
        </div>
        <div class="a-cont" data-aos="zoom-in">
            <a href="/partners/">View All Partners</a>
          </div>
      </div>

      <div class="col-md-7">

        <div class="img-cont" data-aos="zoom-in">
          <img src="/wp-content/uploads/2020/06/aws-consulting-partner.png" height="108px" width="82px" alt="Aws Consulting Partner">
          <img src="/wp-content/uploads/2020/06/hpe-platinum-partner-2x.png" height="116px" width="111px"  alt="HPE Platinum Partner">
        </div>

        <div class="img-cont-2" data-aos="zoom-in">
          <img src="/wp-content/uploads/2020/06/microsoft-gold-partner-2x.png" height="43px" width="166px"  alt="Microsoft Gold Partner">
          <img src="/wp-content/uploads/2020/06/dell-partner-2x.png" height="60px" width="207px"  alt="Dell Platinum Partner">
        </div>

      </div>
    </div>
  </div>
</section>

<section class="counter">
  <div class="img-cont">
    <div class="counter-of-counters d-none-mobile">

      <div class="counter-cont">
        <span data-purecounter-start="0"  data-purecounter-end="5075" data-purecounter-duration="1" data-purecounter-delay="5" class="purecounter">0</span>
        <p class="d-none-desktop">FiNISHED PROJECTS</p>
      </div>

      <div class="counter-cont">
        <span data-purecounter-start="0"  data-purecounter-end="9789" data-purecounter-duration="2" data-purecounter-delay="10" class="purecounter">0
        </span>
        <p class="d-none-desktop">HAPPY CLIENTS</p>
      </div>

      <div class="counter-cont">
        <span data-purecounter-start="0"  data-purecounter-end="1191000000" data-purecounter-duration="2" data-purecounter-delay="10" class="purecounter">0
        </span>
        <p class="d-none-desktop">LINES OF CODE</p>
      </div>

      <div class="counter-cont">
        <span data-purecounter-start="0"  data-purecounter-end="133000000" data-purecounter-duration="2" data-purecounter-delay="10" class="purecounter">0
        </span>
        <p class="d-none-desktop">LINES OF CODE</p>
      </div>

    </div>

    <div class="counter-text-cont d-none-mobile">
      <div class="counter-text">
        <p>FiNISHED PROJECTS</p>
      </div>

      <div class="counter-text">
        <p>HAPPY CLIENTS</p>
      </div>

      <div class="counter-text">
        <p>LINES OF CODE</p>
      </div>

      <div class="counter-text">
        <p>LINES OF CODE</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="zoom-in" style="margin-top: 50px;">
          <h2>Let’s get the conversation started</h2>
          <h5>Reach out now to begin your digital transformation.</h5>
        </div>

        <div class="col-md-6">
          <div class="form" id="main_form" data-aos="zoom-in">
            <div data-form-block-id="049dc2e8-73c0-ea11-a812-000d3a33243a"></div> <script src="https://mktdplp102cdn.azureedge.net/public/latest/js/ form-loader.js?v=1.63.1039.0"></script> <div id="dETKvCv7CyC0MsH0kAoRKsP3-3yAVlfPFhIGnRNXRvZ0"></div><script language="javascript" type="text/javascript">(function (id, f, t, ws, ms_tr_il_08, ms_tr_il_w_01) { var tr = function (cb) { var count = 0; var callback = function () { if (count == 0) { count++; if (w) { w.w(id, t, cb); } } }; var ts = document.createElement('script'); ts.src = ws; ts.type = 'text/javascript'; ts.onload = callback; ts.onreadystatechange = function () { if (this.readyState == 'complete' || this.readyState == 'loaded') { callback(); } }; var head = document.getElementsByTagName('head')[0]; head.appendChild(ts); }; if (typeof ms_tr_il_08 === 'function') { if (ms_tr_il_w_01 === null) { tr(function() { ms_tr_il_08(id, f, t); }); } else { ms_tr_il_w_01.w(id, t, function(websiteVisitedParams) { ms_tr_il_08(id, f, t, websiteVisitedParams); }, null); } } else { tr(); }})('ETKvCv7CyC0MsH0kAoRKsP3-3yAVlfPFhIGnRNXRvZ0', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/f', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t', 'https://304d97d0c24840d3b17bbd7ce79acb08.svc.dynamics.com/t/w', typeof ms_tr_il_08 === "undefined" ? null : ms_tr_il_08, typeof ms_tr_il_w_01 === "undefined" ? null : ms_tr_il_w_01);</script>
            <!-- / Form -->
            </div>
          </div>
        </div>
        <div class="counter-of-counters d-none-desktop">

          <div class="counter-cont">
            <span data-purecounter-start="0"  data-purecounter-end="5075" data-purecounter-duration="1" data-purecounter-delay="5" class="purecounter">0</span>
            <p class="d-none-desktop">FiNISHED PROJECTS</p>
          </div>

          <div class="counter-cont">
            <span data-purecounter-start="0"  data-purecounter-end="9789" data-purecounter-duration="2" data-purecounter-delay="10" class="purecounter">0
            </span>
            <p class="d-none-desktop">HAPPY CLIENTS</p>
          </div>

          <div class="counter-cont">
          <span data-purecounter-start="0"  data-purecounter-end="1191000000" data-purecounter-duration="2" data-purecounter-delay="10" class="purecounter">0
          </span>
          <p class="d-none-desktop">LINES OF CODE</p>
          </div>

          <div class="counter-cont">
            <span data-purecounter-start="0"  data-purecounter-end="133000000" data-purecounter-duration="2" data-purecounter-delay="10" class="purecounter">0
            </span>
            <p class="d-none-desktop">LINES OF CODE</p>
          </div>

          </div>

          <div class="counter-text-cont d-none-desktop">
          <div class="counter-text">
            <p>FiNISHED PROJECTS</p>
          </div>

          <div class="counter-text">
            <p>HAPPY CLIENTS</p>
          </div>


          <div class="counter-text">
            <p>LINES OF CODE</p>
          </div>

          <div class="counter-text">
            <p>LINES OF CODE</p>
          </div>
          </div>
      </div>
    </div>
  </section>





<!--  -->
<script src="https://www.anexinet.com/wp-content/themes/piwo-child/public/js/owl.carousel.min.js"></script>

<script>
  $(document).ready(function(){
  $(".testo").owlCarousel();
});
</script>

<script>
$(function() {

    $(".case-studies").owlCarousel({
        loop: true,
        rewind: true,
        margin: 30,
        slideBy: 1,
        center: false,
        smartSpeed: 600,
        dots: true,
        // dotsEach:3,
        autoplay: false,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        nav:true,
        navText : ["<img src='/wp-content/uploads/2020/08/arrow_WHITE_left@2x.png'/>","<img src='/wp-content/uploads/2020/08/arrow_WHITE_right@2x.png'/>"],
        responsiveClass: true,
        responsive: {
            200: {
                items: 1
            },
            340: {
                items: 1
            },
            769: {
                items: 1
            },
            900: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });

});
</script>


<script>
  !function(e){var t={};function n(r){if(t[r])return t[r].exports;var a=t[r]={i:r,l:!1,exports:{}};return e[r].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)n.d(r,a,function(t){return e[t]}.bind(null,a));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=2)}([,,function(e,t,n){e.exports=n(3)},function(e,t,n){"use strict";function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}n.r(t);new(function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.registerEventListeners()}var t,n,a;return t=e,(n=[{key:"registerEventListeners",value:function(){var e=this,t=document.querySelectorAll(".purecounter");if(this.intersectionListenerSupported())for(var n=new IntersectionObserver(this.animateElements.bind(this),{root:null,rootMargin:"20px",threshold:.5}),r=0;r<t.length;r++)n.observe(t[r]);else window.addEventListener&&(this.animateLegacy(t),window.addEventListener("scroll",function(n){e.animateLegacy(t)},{passive:!0}))}},{key:"animateLegacy",value:function(e){for(var t=0;t<e.length;t++){!0===this.parseConfig(e[t]).legacy&&this.elementIsInView(e[t])&&this.animateElements([e[t]])}}},{key:"animateElements",value:function(e,t){var n=this;e.forEach(function(e){var r=void 0!==e.target?n.parseConfig(e.target):n.parseConfig(e);return r.duration<=0?e.innerHTML=r.end.toFixed(r.decimals):!t&&!n.elementIsInView(e)||t&&e.intersectionRatio<.5?e.target.innerHTML=r.start>r.end?r.end:r.start:void setTimeout(function(){return void 0!==e.target?n.startCounter(e.target,r):n.startCounter(e,r)},r.delay)})}},{key:"startCounter",value:function(e,t){var n=this,r=(t.end-t.start)/(t.duration/t.delay),a="inc";t.start>t.end&&(a="dec",r*=-1),r<1&&t.decimals<=0&&(r=1);var i=t.decimals<=0?parseInt(t.start):parseFloat(t.start).toFixed(t.decimals);e.innerHTML=i,!0===t.once&&e.setAttribute("data-purecounter-duration",0);var o=setInterval(function(){var s=n.nextNumber(i,r,t,a);e.innerHTML=n.formatNumber(s,t),((i=s)>=t.end&&"inc"==a||i<=t.end&&"dec"==a)&&(clearInterval(o),i!=t.end&&(e.innerHTML=t.decimals<=0?parseInt(t.end):parseFloat(t.end).toFixed(t.decimals)))},t.delay)}},{key:"parseConfig",value:function(e){for(var t=[].filter.call(e.attributes,function(e){return/^data-purecounter-/.test(e.name)}),n={start:0,end:9001,duration:2e3,delay:10,once:!0,decimals:0,legacy:!0},r=0;r<t.length;r++){var a=t[r].name.replace("data-purecounter-","");n[a.toLowerCase()]="duration"==a.toLowerCase()?parseInt(1e3*this.castDataType(t[r].value)):this.castDataType(t[r].value)}return n}},{key:"nextNumber",value:function(e,t,n,r){return r||(r="inc"),"inc"===r?n.decimals<=0?parseInt(e)+parseInt(t):parseFloat(e)+parseFloat(t):n.decimals<=0?parseInt(e)-parseInt(t):parseFloat(e)-parseFloat(t)}},{key:"formatNumber",value:function(e,t){return t.decimals<=0?parseInt(e):e.toLocaleString(void 0,{minimumFractionDigits:t.decimals,maximumFractionDigits:t.decimals})}},{key:"castDataType",value:function(e){return/^[0-9]+\.[0-9]+$/.test(e)?parseFloat(e):/^[0-9]+$/.test(e)?parseInt(e):e}},{key:"elementIsInView",value:function(e){for(var t=e.offsetTop,n=e.offsetLeft,r=e.offsetWidth,a=e.offsetHeight;e.offsetParent;)t+=(e=e.offsetParent).offsetTop,n+=e.offsetLeft;return t>=window.pageYOffset&&n>=window.pageXOffset&&t+a<=window.pageYOffset+window.innerHeight&&n+r<=window.pageXOffset+window.innerWidth}},{key:"intersectionListenerSupported",value:function(){return"IntersectionObserver"in window&&"IntersectionObserverEntry"in window&&"intersectionRatio"in window.IntersectionObserverEntry.prototype}}])&&r(t.prototype,n),a&&r(t,a),e}())}]);
</script>


 <?//php include('form.php'); ?>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
</script>


<?php get_footer(); ?>
