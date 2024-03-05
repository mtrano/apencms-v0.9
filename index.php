<?php require_once("data/setting.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php show_content_area('WebSite Name'); ?> &raquo; <?php show_title(); ?></title>
<meta name="description" content="APENCMS is the smallest text file based cms written in php and support bootstrap. As the APENCMS name suggests the cms is really tiny, small,elegant, easy to use interface. You can create saperate pages and also sidebar content pages. The sidebar links are added automatically" />
<meta name="keywords" content="APENCMS, EPMItalia, private, bootstrap, nano, cms, tiny, small, easy to use, easy, free, opensource, easy, interface, pages, static, dynamic content, beginners" />
<meta name="author" content="Michele Trancossi" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php runTweak('head'); ?>
<?php

if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;}
?>

<style>

* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding-top: 90px;
  padding-bottom: 90px;
  text-align: center;
  background:navy;
  color: white;
}

h1 {
font-size:48px; 
}

h2 {
font-size:32px; 
}

h3 {
font-size:24px; 
}

p {
font-size:16px; 
}

a {
color:#ff6600;
}

a:hover {
background:#ff6600;
color:white;
}


/* Style the top navigation bar */
.navbar {
  display: flex;
  background-color: white;
  margin: 2px;
  margin-color:white;
}

/* Style the navigation bar links */
.navbar a {
  color: #ff8c00;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ff8c00;
  color: white;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: white;
  padding: 20px;
}

/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: grey;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding:5px;
  text-align: left;
  background: green;
  color: white;
}

/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 360px;
  background-color: green;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  top: 125%;
  left: 50%;
  margin-left: 0px;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}


/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}  
</style>
</head>

<body>

<!-- Note -->

<div id="wrapper">

<!-- Header -->
<div class="header color:white">
    <img src="data/uploads/apencmslogo360.png" alt="coockie banner" width="360px" height="auto">
    <h1><?php show_content_area('WebSite Name'); ?></h1>
    <h2><?php show_content_area('WebSite slogan'); ?></h2>
</div>

<div class="navbar">
      <p> <?php
      //show_links( link_place, format[ nolist->with out <li> or default <li>%s</li>, before, after )
        show_links('top-navigation','nolist');
      ?>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
  <div class="popup" style="text-align: right" onclick="myFunction()"><p color="#ff8c00" >Cookies & Privacy in brief!</p>
  <span class="popuptext" id="myPopup">This website is realized by using APENCMS. APENCMS does not use cookies and does not acquire any user's data involutarily. <br> The only acquired data refers to email and forms sent by users voluntarily.</span>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
<br>
<br>

<!-- start of freefind search box html -->
<table cellpadding=0 cellspacing=0 border=0 >
<tr>
	<td  style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;">
		<form style="margin:0px" action="https://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">
		<input type="hidden" name="si" value="39078243">
		<input type="hidden" name="pid" value="r">
		<input type="hidden" name="n" value="0">
		<input type="hidden" name="_charset_" value="">
		<input type="hidden" name="bcd" value="&#247;">
		<input type="text" name="query" size="15"> 
		<input type="submit" value="search">
		</form>
	</td>
</tr>
<tr>
	<td style="text-align:left; font-family: Arial, Helvetica, sans-serif;	font-size: 7.5pt; padding-top:4px;">
		<a style="text-decoration:none; color:gray;" href="https://www.freefind.com"  rel="nofollow">search engine</a><a style="text-decoration:none; color:gray;" href="https://www.freefind.com"  rel="nofollow" > by
		<span style="color: #606060;">freefind</span></a>
	</td>
</tr>
</table>
<!-- end of freefind search box html -->
<br>
<table cellpadding=0 cellspacing=0 border=0 >
<tr>
	<td  style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;">
Traduci il sito con Google Translate: </td></tr>
<tr><td>
 
    <div id="google_translate_element"></div>
	</td>
</tr>
</table> 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script>
 
    <script type="text/javascript"
            src=
"https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    </script>
    </p>

<br>
        <h2>Menu</h2>
      	<ul>
		  <?php show_sidebar(); ?>
        </ul>
		  <?php show_content_area('Below Navigation'); ?>
  </div>
  <div class="main">
   	  <?php show_content_slug(); ?>
  </div>
</div>
<!-- Footer -->
<div class="footer">
		<p align="center"><small> APENCMS.com is an ethical website and privacy respectfull. It does not acquire any data about visitors. It does not adopt any cookie. <a href="https://www.cookieserve.com/scan-summary/?url=www.apencms.com" target="_blank"> Test yourself!</a>
		<br>
		<br><b>ETHICAL PROPERTY MANAGEMENT ITALIA</b> - Offices - Viale Vittorio Bottego 20, 43043 Borgo Val di Taro (Italia)
		<br>
		</b>Tel.: <b>+39.0525.1900457</b> - Cell. <b>+39.3534581170</b> / <b>+39.3331203135 </b>- E-mail: <b><a href="mailto:enexergy@engineer.com?subject=Richiesta%20informazioni%20dal%20sito">enexergy@engineer.com </a></b>	
		<br>Registered address - Viale Milazzo 8, 430125 Parma (Italia)- P. IVA: 02883590347 - N. REA: PR-274654
		<br>
		<br>Copyright (C) 2023-2024, Ethical Property Management Italia s.r.l.; Some rights reserved according to <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed">Creative Commons CC BY-NC-ND 4.0 Deed </a>
		<br><br>Powered by <a href="https://apencms.com">APENCMS</a> by "Ethical Property Management Italia" is a fork of <strong>NANOCMS v0.4</strong> and released according to <a href="index.php?page=license-support">GNU/GPL</a> 
		<br><br>Login <a href="./data/nanoadmin.php">Admin Login</a></small></p>
</div>

<?php runTweak('end-body'); ?>
</body>
</html>
