<?php
$patientColor = "#980F09";
$haColor = "#112242";
$insurerColor = "#006600";
$providerColor = "#660066";
?>
<title>Patient Centric Collaborative Healthcare</title>
<meta name="description" content="A KEY technology that empowers the patient to access and share all of their medical and health information with their Medical Providers.">
<meta name="keywords" content="Collaborative Healthcare, Patient-Centric, Patient Advocacy, Evidence-Based Health Care, Healthcare Information System">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css">
<!-- <link rel="stylesheet" href="/ha/javascript/jquery-ui-1.10.1.custom/css/ui-lightness/jquery-ui-1.10.1.custom.css" type="text/css"> -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|PT+Sans" type="text/css">
<link rel="stylesheet" href="/ha/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<!-- <script type="text/javascript" src="/ha/javascript/jquery-1.9.1.js"></script> -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- <script type="text/javascript" src="/ha/javascript/jquery.cycle.all.js"></script> -->
<!-- <script type="text/javascript" src="/ha/javascript/jquery-ui-1.10.1.custom/js/jquery-ui-1.10.1.custom.js"></script> -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="/ha/nivo-slider/jquery.nivo.slider.js"></script>
<script src="http://www.youtube.com/player_api"></script>

<!-- jquery menu plugin -->
<link rel="stylesheet" href="/ha/css/jMenu.jquery.css" type="text/css" />
<script type="text/javascript" src="/ha/javascript/jMenu.jquery.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41947437-1', 'healthallianze.com');
  ga('send', 'pageview');

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<style>
.container {
	position:absolute;top:0;left:0;width:100%;margin: 0 0;padding:0;background-color:#F6F7ED; 
}

/*#banner {
	display:block;height:115px;margin:0;padding:0;width:100%;background:#F6F7ED url(/ha/images/ywstripe.png) repeat-x 0 -5px;
}*/

#banner {
    display:block;height:135px;margin:0;padding:0;width:100%;background:#F6F7ED;
}

#main-content {
	display:block;margin:0;padding-top:20px;width:100%;background:#F6F7ED;
}

.habreadcrumbs {
	display:block;height:20px;margin:0;padding-left:80px;width:100%;background:#F6F7ED;
	font-family:'OFL Sorts Mill Goudy TT', georgia, times, serif;font-size:15px; font-weight:bold;color:gold;
}
.section-article {
	display:block; padding-left:0;font-family:'OFL Sorts Mill Goudy TT', georgia, times, serif;font-size:20px;width:90%;white-space: wrap;
	margin-left: 0 ;
  margin-right: 0 ;
}

#section-panel {
	display:block; padding-left:80px;  
}

/*welcome specific*/
#welcome-panel {
	display:block; padding-left:80px;  
}

/*menu stuff*/
#horizontal-nav {
	display:block;height:40px;margin:0;padding-left:80px;width:100%;background:#F6F7ED;
}

/* start of new menu stuff */
#hmenu {
  width:85%;
  background:#112242;
}

#hmenu li a {
  text-decoration: none;
}

#hmenu > li > a {
  color: #fff;
  /*font-variant:small-caps; */
  text-decoration: none;
  font-weight: bold;
}

#hmenu > li:hover > a {
  background: #112242;
  color: lightblue;
}

.jMenu li a {
    text-transform: none;
    /*font-variant:small-caps; */
    font-size: 14px;
    font-weight: bold;
    font-family: Arial;
}
/* end of new menu */

#mainmenu {
	width:80%;
	background:#112242;
}

#mainmenu ul {
  list-style: none;
  list-style-type: none;
	padding:0;
}

#mainmenu {
  float: left;
	font-family: Arial;
  font-size: 12px;
  background: #112242;
}

#mainmenu > li {
  float: left;
  list-style-type: none;
}

#mainmenu li a {
	display: block;
  height: 2em;
  line-height: 2em;
  padding: 0 3.5em;
  text-decoration: none;
}

#mainmenu ul {
  position: absolute;
  display: none;
	z-index: 999;
	background: #112242;
}

#mainmenu ul li a {
  width: 85px;
	color: white;
}

#mainmenu li:hover ul {
  display: block;
}

/* Main menu
------------------------------------------*/
#mainmenu > li > a {
  color: #fff;
  font-weight: bold;
}

#mainmenu > li:hover > a {
  background: #112242;
  color: lightblue;
}
 
/* Submenu
------------------------------------------*/
#mainmenu ul li:hover a {
    background: #112242;
		color: lightblue;
}
/*end of menu stuff*/

/*start of image slider stuff*/
.slider-wrapper { 
	width: 80%; 
	margin: 5px 0px 0px 99px;
}

#image-slider  {
	display:block;
	padding-top:5px;
}
/*end of image slider stuff*/

h1, h2, h3, h4, nav a {
	font-family: 'OFL Sorts Mill Goudy TT', georgia, times, serif;
}

h2 {
    font-variant:small-caps;font-style:italic;
}
 
body {
	font-family:'PT Sans', Helvetica, sans-serif;background-color:#F6F7ED;
} 

.keyWord {
    color:<?php print $haColor; ?>;
    font-weight:bold;
}

.emphasizePhrase {
    font-style:italic;font-weight:bold;
}

.emphasizePhraseMore {
    font-style:italic;font-size:110%;font-weight:bold;
}

.boldTitle {
    font-size:110%;font-weight:bold;
}

.sectionHeadersInline {
  font-variant:small-caps; font-style: italic;
}

.sectionHeadersStandAlone {
  font-variant:small-caps;font-weight:900;
}

.sectionHeadersStandAloneLarger {
  font-variant:small-caps; font-weight:bold; font-size:130%;
}

.button-link {
    padding: 10px 15px;
    background: #4479BA;
    color: #FFF;
    font-family: 'OFL Sorts Mill Goudy TT', georgia, times, serif; font-size:14px; font-weight:bold;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: solid 1px #20538D;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    -webkit-transition-duration: 0.2s;
    -moz-transition-duration: 0.2s;
    transition-duration: 0.2s;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
}
.button-link:hover {
    background: #356094;
    border: solid 1px #2A4E77;
    text-decoration: none;
    cursor: pointer;
}

.justifyListBullets { margin-left: 10px; }

.listSeparation li { padding-bottom: 10px; text-align:justify}

.css3gallery img{
-webkit-transform:scale(0.8); /*Webkit: Scale down image to 0.8x original size*/
-moz-transform:scale(0.8); /*Mozilla scale version*/
-o-transform:scale(0.8); /*Opera scale version*/
-webkit-transition-duration: 0.5s; /*Webkit: Animation duration*/
-moz-transition-duration: 0.5s; /*Mozilla duration version*/
-o-transition-duration: 0.5s; /*Opera duration version*/
opacity: 0.7; /*initial opacity of images*/
margin: 0 10px 5px 0; /*margin between images*/
}
 
.css3gallery img:hover{
-webkit-transform:scale(1.1); /*Webkit: Scale up image to 1.2x original size*/
-moz-transform:scale(1.1); /*Mozilla scale version*/
-o-transform:scale(1.1); /*Opera scale version*/
box-shadow:0px 0px 30px gray; /*CSS3 shadow: 30px blurred shadow all around image*/
-webkit-box-shadow:0px 0px 30px gray; /*Safari shadow version*/
-moz-box-shadow:0px 0px 30px gray; /*Mozilla shadow version*/
opacity: 1;
}

/*
#displayArea img:hover {
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 10px 10px 5px #888;
}*/
</style>