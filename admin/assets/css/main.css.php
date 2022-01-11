<?php
include("../config/config.php");
include("../include/consultas.php");

if ($row = mysqli_fetch_array($result)){
	
?>
/* ==========================================================================
   Base Styles and Bootstrap Modifications
   ========================================================================== */

html,
button,
input,
select,
textarea {
    color: #222;
}

body {
    font-size: 1em;
    line-height: 1.4;
}

/*
 * Remove text-shadow in selection highlight: h5bp.com/i
 * These selection rule sets have to be separate.
 * Customize the background color to match your design.
 */

::-moz-selection {
    background: #f2c2c9;
    color: #a4003a;
    text-shadow: none;
}

::selection {
    background: #16a085;
    color: #a4003a;
    text-shadow: none;
}

/*
 * A better looking default horizontal rule
 */

 hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

/*
 * Remove the gap between images and the bottom of their containers: h5bp.com/i/440
 */

 img {
    vertical-align: middle;
}

.img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
}

/*
 * Allow only vertical resizing of textareas.
 */

 textarea {
    resize: vertical;
}


/* ==========================================================================
   General styles
   ========================================================================== */

html,
body {
    height: 100%;
}

body {
    font-family: "Lato";
    font-weight: 300;
    font-size: 16px;
    color: #555;

    -webkit-font-smoothing: antialiased;
    -webkit-overflow-scrolling: touch;
}

.col-md-4 {
	padding-bottom: 20px;
}

.row {
margin-right: 0px;
margin-left: -15px;
}

.modal-header {
	background: #3498db;
}

.modal-header h4 {
	color: white;
}

.modal-footer {
	background: #2b2b2b;
}


.navbar-default {
border-color: transparent;
background-color: #dadada;
}


.navbar-toggle {
border-color: transparent;
border: 0px solid transparent;
}

.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
	background-color: #16a085;
	color: white;
}



hr {
    position: relative;
    border: none;
}

hr:before {
    content: " ";
    position: absolute;
    top: 0;
    left: 25%;
    width: 50%;
    height: 2px;
    background: #ccc;
}

a img {
    background: white;
}

.odd a img {
    background: #f5f5f5;
}

/* Titles */
h1, h2, h3, h4, h5, h6 {
    font-family: "Raleway";
    font-weight: 300;
    color: #333;
}


/* Paragraph & Typographic */
p {
    line-height: 28px;
    margin-bottom: 25px;
}

.centered {
    text-align: center;
}

.paragraph-lead {
    font-size: 20px;
    color: #3498db;
}

strong {
    font-weight: 700;
}

em {
    font-weight: 300;
}

pre {
    background: #ebebeb;
    border: none;
    font-family: "Monaco";
    font-size: 16px;
    color: #666;
    padding: 20px;
    line-height: 28px;
}

small {
    font-size: 12px;
}

blockquote,
blockquote p {
    line-height: 28px;
    color: #999;
    font-weight: 300;
    font-style: italic;
}

blockquote {
    position: relative;
    margin: 0 0 40px -30px;
    padding-left: 30px;
    border-left: 5px solid #3498db;
}

blockquote cite {
    position: absolute;
    bottom: -25px;
    right: 0;
    font-size: 12px;
    font-style: italic;
    color: #333;
    font-weight: 300;
}

blockquote cite:before {
    content: "-- "
}

/* Images */
.overflow-image {
    margin-top: -65px;
}

/* Links */
a {
    color: #3498db;
    word-wrap: break-word;

    -webkit-transition: color 0.1s ease-in, background 0.1s ease-in;
    -moz-transition: color 0.1s ease-in, background 0.1s ease-in;
    -ms-transition: color 0.1s ease-in, background 0.1s ease-in;
    -o-transition: color 0.1s ease-in, background 0.1s ease-in;
    transition: color 0.1s ease-in, background 0.1s ease-in;
}

a:hover,
a:focus {
    color: #c0392b;
    text-decoration: none;
    outline: 0;
}

a:before,
a:after {
    -webkit-transition: color 0.1s ease-in, background 0.1s ease-in;
    -moz-transition: color 0.1s ease-in, background 0.1s ease-in;
    -ms-transition: color 0.1s ease-in, background 0.1s ease-in;
    -o-transition: color 0.1s ease-in, background 0.1s ease-in;
    transition: color 0.1s ease-in, background 0.1s ease-in;
}

/* ==========================================================================
   Wrap Sections
   ========================================================================== */

#headerwrap {
	background: url(<?php echo $row["imagen_home"];?>) no-repeat center top;
	margin-top: -50px;
	padding-top:120px;
	text-align:center;
	background-attachment: relative;
	background-position: center center;
	min-height: 650px;
	width: 100%;
	
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

#headerwrap h1 {
	color:#ffffff;
	margin-top: 90px;
	padding-bottom: 30px;
	letter-spacing: 8px;
	font-size: 100px;
	font-weight: bold;
	text-shadow: 2px 2px 2px #000;
}

#headerwrap p {
	color:#ffffff;
	font-size: 40px;
	font-weight: 400;
	text-align: center;
	line-height: 40px;
	letter-spacing: 3px;
	margin-left: 15px;
	text-shadow: 1px 1px 1px #000;
}

#greywrap {
	background: #f5f5f5;
	margin-top: 0px;
	padding-top: 40px;
	border-bottom: 1px solid #ddd;
	text-align: center;
}

#greywrap .callout {
	margin-bottom: 20px;
}

#greywrap p {
	margin-left: 30px;
	margin-right: 30px;
	letter-spacing: 1px;
	padding-top: 15px;
	padding-bottom: 15px;
}

#greywrap .icon {
	font-size: 60px;
	line-height: 30px;
	margin-bottom: 10px;
}

#footerwrap {
	background: #2b2b2b;
	margin-top: 0px;
	padding-top: 40px;
	padding-bottom: 20px;
	border-bottom: 1px solid #ddd;
	text-align: center;
}

#footerwrap h4 {
	color: white;
}

/* ==========================================================================
   Box Sections
   ========================================================================== */

.white h1 {
	padding-top: 35px;
}

.white p {
	padding-top: 25px;
}

.table {
    border-radius: 5px;
    width: 50%;
    margin: 0px auto;
    float: none;
}

/* Section Dividers */
.section-divider {
    z-index: 999;
    width: 100%;
    display: table;
    max-height: 450px;
    border-bottom: 2px solid #E6EAED;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    padding-top: 30px;
    padding-bottom: 70px;
    margin-top: 45px;


    background-position: center center;

    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

    background-attachment: relative;
    
    text-align: center;
}

.textdivider h1 {
	padding-top: 70px;
	color: white;
	font-size: 40px;
}

.textdivider p {
	color: white;
	font-size: 25px;
}

/* Section Dividers Backgrounds */

.divider1 {
	background-image: url('<?php echo $row["imagen_bg_principal_1"];?>')
}

.divider2 {
	background-image: url('<?php echo $row["imagen_bg_principal_2"];?>')
}

.divider3 {
	background-image: url('<?php echo $row["imagen_bg_principal_3"];?>');
	margin-top: 0px;
}

.divider4 {
	background-image: url('<?php echo $row["imagen_bg_principal_4"];?>')
}

.divider5 {
	background-image: url('<?php echo $row["imagen_bg_principal_5"];?>')
}

.divider6 {
	background-image: url('<?php echo $row["imagen_bg_principal_6"];?>')
}

#fb-root {
  display: none;
}

/* To fill the container and nothing else */
.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
  width: 100% !important;
}

/* ==========================================================================
   Services Section
   ========================================================================== */

.service-trigger {
    display: block;
	position: relative;
    margin-bottom: 15px;
    color: white;
    font-size: 20px;
    text-align: center;
    height: 168px;
    cursor: pointer;
	padding: 90px 20px 50px 20px;
    border: none;
    background: #333;
}

.service-trigger:before {
    width: 100%;
    top: 50px;
    color: #3498db;
    font-size: 36px;
    text-align: center;
	position: absolute;
	left: 0;
}

.service-active .service-trigger {
    background: #222;
}

.service-active p {
	font-family: 'Lato', sans-serif;
	padding-top: 10px;
}

.service-content {
    padding: 15px 20px;
    background: #e6eaed;
    display: block;
    height: auto
}

.service-content p:last-child {
    margin: 0;
}

/* ==========================================================================
   Image Mask
   ========================================================================== */

.grid figure {
	margin: 0;
	position: relative;
}

.grid figure img {
	width: 100%;
	display: block;
	position: relative;
}

.grid figcaption {
	position: absolute;
	top: 0;
	left: 0;
	padding: 20px;
	color: #fff;
	background: #3498db;
}

.grid figcaption h5 {
	margin: 0;
	padding-top: 0px;
	padding-left: 20px;
	padding-bottom: 5px;
	color: #fff;
	font-weight: 700;
	text-align: left;
	letter-spacing: 2px;
	
}

.grid figcaption a {
	text-align: left;
	padding: 5px 10px;
	margin-left: 20px;
	display: inline-block;
	background: #2f2f2f;
	color: #fff;
	font-size: 13px;
}

/* Caption Style */
.mask figure {
	overflow: hidden;
}

.mask figure img {
	-webkit-transition: -webkit-transform 0.4s;
	-moz-transition: -moz-transform 0.4s;
	transition: transform 0.4s;
}

.no-touch .mask figure:hover img,
.mask figure.cs-hover img {
	-webkit-transform: translateY(-30px);
	-moz-transform: translateY(-30px);
	-ms-transform: translateY(-30px);
	transform: translateY(-30px);
}

.mask figcaption {
	height: 50px;
	width: 100%;
	top: auto;
	bottom: 0;
	opacity: 0;
	-webkit-transform: translateY(100%);
	-moz-transform: translateY(100%);
	-ms-transform: translateY(100%);
	transform: translateY(100%);
	-webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
	-moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
	transition: transform 0.4s, opacity 0.1s 0.3s;
}

.no-touch .mask figure:hover figcaption,
.mask figure.cs-hover figcaption {
	opacity: 1;
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	-ms-transform: translateY(0px);
	transform: translateY(0px);
	-webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
	-moz-transition: -moz-transform 0.4s, opacity 0.1s;
	transition: transform 0.4s, opacity 0.1s;
}

.mask figcaption a {
	position: absolute;
	top:10px;
	bottom: 10px;
	right: 30px;
}


/* ==========================================================================
   Blog Section
   ========================================================================== */

.blog-bg {
	background: #2b2b2b;
	padding-right: 0px;
	padding-left: 0px;
	
}

.blog-bg h4 {
	color: #dadada;
	padding-top: 0px;
}

.blog-bg h5 {
	color: #dadada;
	font-size: 11px;
}

.blog-content {
	padding-top: 10px;
	background: #f2f2f2;
}


/* ==========================================================================
   MEDIA QUERIES
   ========================================================================== */


@media screen and (max-width:1050px), screen and (max-device-width:1050px){
	body .header{background-attachment: scroll;}
}


/*ipad portrait*/
@media only screen and (min-device-width:768px) and (max-device-width : 1024px) and (orientation : portrait){
	.header{background-attachment: scroll;}
}

@media screen and (max-width:769px) {
	#headerwrap h1 {
		font-size: 80px;
	}
	#headerwrap p {
		font-size: 30px;
		line-height: 38px;
	}
}
<?php
}
?>