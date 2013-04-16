<?php
$patientColor = "#980F09";
$haColor = "#445E83";
$insurerColor = "#006600";
$providerColor = "#660066";
?>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<link rel="stylesheet" href="/ha/javascript/jquery-ui-1.10.1.custom/css/ui-lightness/jquery-ui-1.10.1.custom.css" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|PT+Sans" type="text/css">
<link rel="stylesheet" href="/ha/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="/ha/javascript/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/ha/javascript/jquery.cycle.all.js"></script>
<script type="text/javascript" src="/ha/javascript/jquery-ui-1.10.1.custom/js/jquery-ui-1.10.1.custom.js"></script>
<script type="text/javascript" src="/ha/nivo-slider/jquery.nivo.slider.js"></script>
<script src="http://www.youtube.com/player_api"></script>

<style>
.container {
	position:absolute;top:0;left:0;width:100%;margin: 0 auto;padding:0;background-color:#F6F7ED; 
}

#banner {
	display:block;height:115px;margin:0;padding:0;width:100%;background:#F6F7ED url(/ha/images/ywstripe.png) repeat-x 0 -5px;
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

#mainmenu {
	width:80%;
	background:#112242;
}

#mainmenu ul {
  list-style: none;
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
  width: 80px;
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
/*

#displayArea img:hover {
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 10px 10px 5px #888;
}*/
</style>