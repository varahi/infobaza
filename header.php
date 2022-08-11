<?php if (! defined('ABSPATH')) {
    exit;
} ?>
<!DOCTYPE html>
<html lang="ru" />
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="preconnect" href='https://fonts.gstatic.com'  />
<link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php wp_head();?>  

<svg style="display:none;">
<symbol id="icon-telephone" viewBox="0 0 544.49 544.489">
<path d="M392.923,0H151.576c-19.508,0-35.314,15.807-35.314,35.314v473.86c0,19.507,15.807,35.314,35.314,35.314h241.338
			c19.508,0,35.314-15.808,35.314-35.314V35.314C428.238,15.807,412.431,0,392.923,0z M368.233,20.971
			c2.151,0,3.901,1.75,3.901,3.901c0,2.161-1.759,3.901-3.901,3.901c-2.161,0-3.901-1.75-3.901-3.901
			C364.322,22.721,366.072,20.971,368.233,20.971z M230.476,17.604h87.219c3.089,0,5.575,2.496,5.575,5.565
			c0,3.079-2.486,5.565-5.575,5.565h-87.219c-3.089,0-5.575-2.496-5.575-5.565C224.911,20.101,227.387,17.604,230.476,17.604z
			 M194.894,521.262h-8.587c-0.574,0-1.033-0.469-1.033-1.043c0-0.563,0.459-1.042,1.033-1.042h8.587
			c0.583,0,1.042,0.479,1.042,1.042C195.926,520.793,195.467,521.262,194.894,521.262z M194.894,517.073h-8.587
			c-0.574,0-1.033-0.459-1.033-1.033c0-0.573,0.459-1.042,1.033-1.042h8.587c0.583,0,1.042,0.469,1.042,1.042
			C195.926,516.614,195.467,517.073,194.894,517.073z M202.123,519.798c0,1.234-0.995,2.238-2.228,2.238
			c-1.234,0-2.238-1.004-2.238-2.238v-7.372h-14.124v7.372c0,1.234-0.994,2.238-2.228,2.238c-1.233,0-2.237-1.004-2.237-2.238
			v-9.601c0-1.233,1.004-2.237,2.237-2.237h18.59c1.233,0,2.228,1.004,2.228,2.237V519.798L202.123,519.798z M300.206,519.11
			c0,4.876-3.959,8.826-8.836,8.826h-38.623c-4.887,0-8.836-3.95-8.836-8.826v-7.727c0-4.877,3.949-8.826,8.836-8.826h38.623
			c4.877,0,8.836,3.949,8.836,8.826V519.11z M357.858,522.457h-7.01c-1.233,0-2.228-1.004-2.228-2.238
			c0-1.233,0.994-2.228,2.228-2.228h7.01c1.511,0,2.734-1.177,2.734-2.62c0-1.444-1.224-2.61-2.734-2.61h-5.91
			c-0.22,0.306-0.497,0.459-0.994,0.497c-0.124,0.066-0.335-0.029-0.487-0.096l-3.644-1.54c-0.44-0.191-0.736-0.621-0.736-1.1
			c0-0.478,0.287-0.918,0.727-1.1l3.644-1.539c0.439-0.191,0.966-0.086,1.31,0.258c0.048,0.048,0.096,0.096,0.134,0.153h5.958
			c3.969,0,7.19,3.184,7.19,7.086C365.048,519.282,361.827,522.457,357.858,522.457z M404.685,491.513H136.859V54.449h267.826
			V491.513z"/>
</symbol>
<symbol id="icon-whatsapp" viewBox="0 0 512 512">
<path fill="#25d366" stroke="#fff" d="M123 393l14-65a138 138 0 1150 47z"/>
<path fill="#fff" d="M308 273c-3-2-6-3-9 1l-12 16c-3 2-5 3-9 1-15-8-36-17-54-47-1-4 1-6 3-8l9-14c2-2 1-4 0-6l-12-29c-3-8-6-7-9-7h-8c-2 0-6 1-10 5-22 22-13 53 3 73 3 4 23 40 66 59 32 14 39 12 48 10 11-1 22-10 27-19 1-3 6-16 2-18"/>
</symbol>
<symbol id="icon-mail" viewBox="0 0 343.814 343.814">
<path id="XMLID_665_" d="M152,253.937H22V59.686l35.805,52.074c2.052,2.984,5.442,4.768,9.064,4.768h161.534
	c3.622,0,7.012-1.783,9.064-4.768l35.806-52.077v96.113c0,6.075,4.925,11,11,11s11-4.925,11-11V37.21c0-6.075-4.925-11-11-11h-8.742
	c-0.096-0.001-0.195-0.001-0.291,0H20.032c-0.098-0.001-0.195-0.001-0.293,0H11c-6.075,0-11,4.925-11,11v227.727
	c0,6.075,4.925,11,11,11h141c6.075,0,11-4.925,11-11S158.075,253.937,152,253.937z M254.464,48.21l-31.847,46.318H72.655
	L40.808,48.21H254.464z M339.136,234.078l-90.461-63.525c-3.357-2.358-7.752-2.651-11.394-0.759
	c-3.643,1.893-5.928,5.656-5.928,9.761v30.668h-40.312c-6.075,0-11,4.925-11,11v43.716c0,2.917,1.159,5.715,3.222,7.778
	c2.063,2.063,4.861,3.222,7.779,3.222l40.311-0.002v30.668c0,4.104,2.285,7.868,5.928,9.761c1.597,0.83,3.337,1.239,5.071,1.239
	c2.223,0,4.436-0.673,6.322-1.998l90.461-63.525c2.933-2.059,4.679-5.418,4.679-9.002S342.068,236.138,339.136,234.078z
	 M253.354,285.439v-20.502c0-2.917-1.159-5.715-3.222-7.778c-2.063-2.063-4.861-3.222-7.779-3.222l-40.311,0.002v-21.716h40.312
	c6.075,0,11-4.925,11-11v-20.502l60.32,42.359L253.354,285.439z"/>
</symbol>
</svg>


<style>

#burger{
  position: fixed;
  right: 0;
  top: 0;
  color: white;
  background: linear-gradient(45deg, #c2c2c2 10%, #b53a1a);
  /*background: linear-gradient(45deg, #9682C8 10%, #05BCC9);*/
  font-size: 32px;
  padding: 16px 16px 32px 32px;
  border-radius: 0% 0% 0% 100%;
  transition: 1s;
  cursor: pointer;
  z-index: 10;
}

#quit{
  position: fixed;
  top: 0;
  color: white;
  font-size: 32px;
  padding: 16px;
  display: none;
  cursor: pointer;
  z-index: 20;
}

#links{
  display: none;

  width: 95vw;
  height: 50vh;
  padding: 25vh 0;


}
#links a{
  color: #ffffff;
}
#links ul{
  z-index: 1000;
  position: fixed;
   margin-left: 9vw;
}
.spisok{
z-index: 1000;
position: fixed;
flex-direction: column;
justify-content: space-around;
display: flex;
text-align: center;
width: 95vw;
}
.spisok a{
	margin-bottom: 10px;
	font-size: 18px;
	}
@media only screen  and (min-width: 1224px) {
.spisok a{
    font-size: 24px;
}
}
#links li{
	list-style-type: none; 
  text-align: center;
  text-decoration: none;
  color: #ffffff;
  font-size: 2em;
  font-family:  'Open Sans', sans-serif;
  z-index: 100;
}</style>

<style>
body{
	font-family: 'Open Sans', sans-serif;
	background-color: #ffffff;	
	margin-top: 0;
}
html{
	scroll-behavior: smooth;
}
body p{
	color: #000000;
}
 a{
	color:#b53a1a;
	text-decoration: none;
}
a:hover{
	text-decoration: underline;
}
.page, .footer{
	max-width:1920px;
	margin: 0 auto; 	
}
.tel a, .email a{
    color: #ffffff;
    font-size: 26px;
    font-weight: 400;
    text-decoration: none;
}
.tel{
	text-align: center;
}
.tel img{
	margin-bottom: -15px;
	margin-right: 7px;
}
.header_txt p{
	text-align: center;
}
.menu .vc_icon_element{
	margin: 0;
	padding: 0;
}
.menu p{
	margin-top: 0;
	font-size: 18px !important;
	color: #ffffff;
}
.menu a{
	color: #ffffff;
}
.menu a:hover{
	background-color: rgba(255, 255, 255, 0.8);
	box-shadow: -10px 0 0 rgba(255, 255, 255, 0.8), 10px 0 0 rgba(255, 255, 255, 0.8);
	padding: 0 10px 0 0;
	color: #000000;
}
.header_txt span{
	display: inline;
    background-color: rgba(255, 255, 255, 0.7);
    box-shadow: -10px 0 0 rgb(255 255 255 / 70%), 10px 0 0 rgb(255 255 255 / 70%);
    padding: 0 10px 0 0;
    color: #000000;
    font-size: 22px;
    font-weight: 700;
    text-decoration: none;
    text-align: center;
}
.header_txt svg{
	color: #ffffff;
	width: 24px;
}
.page,.footer{
	padding-left:30px;
	padding-right:30px;	
}
.page p{
	font-size: 22px;
}
.footer{
	 text-align: center;
	 font-size: 14px;
	 padding-bottom: 5px;
	 padding-top: 15px;
	 background-color: #ffffff;
	 border-top: 1px dotted black;
}
.footer .wpb_text_column{
	margin-bottom: 0 !important;
	padding-bottom: 0 !important;;
}

.white p{
	color: #ffffff;
}
.red p{
	color: #ff0000;
}
.blue p{
	color: #097aff;
}
.border{
	border: 1px solid #c7c7c7;
	border-radius: 5px;
}
.border p{
	padding: 0px 10px 10px 10px;
}
.menu{
	text-align: right;
}
.footer-bottom-logo img{
	max-height: 30px;
	width: auto;
}
.footer-bottom-logo{
	border-right: 2px solid #f7f7f7;
}
.footer-bottom-contact{
	border-left: 2px solid #f7f7f7;
}
.text-center p{
	margin-top: 0;
	text-align: center;
}
.contact-mob ul{
	text-align: center;
	margin: 0;
	padding: 0;
}
.contact-mob li a{
	list-style: none;
	color: #ffffff;
}
.contact-mob li{
	margin-bottom: 10px;
}

.img-logo .wpb_wrapper{
  background: rgba(255,255,255,.7);
  border-radius: 8px;
  padding: 10px;
}
.img-logo img{
	width: 300px;
}
@media (max-width:767px) {
  .img-logo img {
    width: 90%;
  }
}
</style>
</head>
<body <?php body_class(); ?>>