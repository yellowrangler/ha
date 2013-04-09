<html>

<head>
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

<style>
.container {
	position:absolute;top:0;left:0;width:100%;margin: 0 auto;padding:0;background-color:#F6F7ED; 
}

#banner {
	display:block;height:100px;margin:0;padding:0;width:100%;background:#F6F7ED url(/images/ywstripe.png) repeat-x 0 -5px;
}

#main-content {
	display:block;margin:0;padding-top:20px;width:100%;background:#F6F7ED;
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
	margin: 5px auto;
}

#image-slider  {
	display:block;
	padding-top:5px;
}
/*end of image slider stuff*/

h1, h2, h3, h4, nav a {
	font-family: 'OFL Sorts Mill Goudy TT', georgia, times, serif;
}

body {
	font-family:'PT Sans', Helvetica, sans-serif;background-color:#F6F7ED;
} 
/*

#displayArea img:hover {
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 10px 10px 5px #888;
}*/
</style>

</head>
<body>
<script type="text/javascript" >
var titleBanner = "Healthcare Collaboration Services";
var titleIndex = 0;
var intervalVar = "";

$(document).ready(function() {
	intervalVar=setInterval(function(){buildTitle()},50);

	// $('#mainmenu').find('> li').mouseenter(function () {
	// 	        $('ul.menu_body').slideDown('medium');
	// 	    });
	//    $('#mainmenu').find('> li').mouseleave(function(){
	// 	    $('ul.menu_body').slideUp('medium');
	// 	        });
	// 	
	// $('#mainmenu').find('> li').hover(function(){
	//         $(this).find('ul').stop(true, true).slideToggle('fast');
	//     });
});

function buildTitle()
{
	if (titleIndex < titleBanner.length)
	{
		$("#ywTitle").append(titleBanner[titleIndex]);
		titleIndex++;
	}
	else
	{
		window.clearInterval(intervalVar);
		
		$('#slider').nivoSlider({
		        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
		        slices: 15, // For slice animations
		        boxCols: 8, // For box animations
		        boxRows: 4, // For box animations
		        animSpeed: 500, // Slide transition speed
		        pauseTime: 4000, // How long each slide will show
		        startSlide: 0, // Set starting Slide (0 index)
		        directionNav: true, // Next & Prev navigation
		        controlNav: true, // 1,2,3... navigation
		        controlNavThumbs: false, // Use thumbnails for Control Nav
		        pauseOnHover: true, // Stop animation while hovering
		        manualAdvance: false, // Force manual transitions
		        prevText: 'Prev', // Prev directionNav text
		        nextText: 'Next', // Next directionNav text
		        randomStart: false, // Start on a random slide
		        beforeChange: function(){}, // Triggers before a slide transition
		        afterChange: function(){}, // Triggers after a slide transition
		        slideshowEnd: function(){}, // Triggers after all slides have been shown
		        lastSlide: function(){}, // Triggers when last slide is shown
		        afterLoad: function(){} // Triggers when slider has loaded
		    });
	}
}
</script>

<div class="container">
<div id="banner">
<img border="0" style="float:left; padding-left:75px; padding-top:15px" src="images/HAlogo.png">
<h1 id="ywTitle" style="float:left; padding-left:35px; padding-top:5px; font-size: 35px;" ></h1>
</div> <!-- end of banner -->

<div id="horizontal-nav">
<ul id="mainmenu">
	<li>
		<a href="/ha/">Home</a>
		<ul class="menu_body">
			<li><a href="/ha/home/welcome.html">Welcome</a></li>
			<li><a href="/ha/home/collaboration.html">Collaboration</a></li>
		</ul>
	</li>
	<li>
		<a href="/ha/patients/">Patients</a>
		<ul class="menu_body">
			<li><a href="/ha/patients/collaboration.html">Collaboration</a></li>
			<li><a href="/ha/patients/technology.html">Technology</a></li>
			<li><a href="/ha/patients/usingthekey.html">Using the KEY</a></li>
			<li><a href="/ha/patients/signup.html">Sign Up</a></li>
			<li><a href="/ha/patients/support.html">Support</a></li>
		</ul>
	</li>
	<li>
		<a href="/ha/providers/">Providers</a>
		<ul class="menu_body">
			<li><a href="/ha/providers/collaboration.html">Collaboration</a></li>
			<li><a href="/ha/providers/advantages.html">Advantages</a></li>
			<li><a href="/ha/providers/technology.html">Technology</a></li>
			<li><a href="/ha/providers/support.html">Support</a></li>
		</ul>
	</li>
	<li>
		<a href="/ha/payors/">Payors</a>
		<ul class="menu_body">
			<li><a href="/ha/payors/collaboration.html">Collaboration</a></li>
			<li><a href="/ha/payors/technology.html">Technology</a></li>
			<li><a href="/ha/payors/membership.html">Membership</a></li>
			<li><a href="/ha/payors/support.html">Support</a></li>
		</ul>
	</li>
	<li>
		<a href="/ha/aboutus/">About US</a>
		<ul class="menu_body">
			<li><a href="/ha/aboutus/team.html">Team</a></li>
			<li><a href="/ha/aboutus/news.html">News</a></li>
			<li><a href="/ha/aboutus/career.html">Career</a></li>
			<li><a href="/ha/aboutus/contactus.html">Contact Us</a></li>
		</ul>
	</li>
</ul>
</div> <!-- end of horizontal-nav  -->

<div id="main-content">
<div id="image-slider">
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="/ha/images/bg1.jpg" data-thumb="/ha/images/bg1.jpg" alt=""  />
            <img src="/ha/images/bg2.jpg" data-thumb="/ha/images/bg2.jpg" alt="" />
            <img src="/ha/images/bg3.jpg" data-thumb="/ha/images/bg3.jpg" alt=""  />
            <img src="/ha/images/bg4.jpg" data-thumb="/ha/images/bg4.jpg" alt=""  />
        </div>
    </div>

</div>
</div> <!--end of main-content -->
</div> <!-- end of container -->
</body>
</html>
