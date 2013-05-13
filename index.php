<html>
<head>
<?php include ('include/head.php'); ?>
</head>
<body>
<script type="text/javascript" >
var titleBanner = "Patient-Centric Collaborative Healthcare";
var titleIndex = 0;
var intervalVar = "";

// var aninmateLineCnt = 0;
// var animateLineNbr = 3;

var animateLine = new Array();
animateLine[0] = "";
animateLine[1] = "Health Allianze Empowers You";
animateLine[2] = "Patients Empowered to Grant Collaborative Access at the Point of Care";
animateLine[3] = "Medical Providers Empowered with Patient-Centric Knowledge-Based Collaborative Information";
animateLine[4] = "Insurers Empowered with Evidence-Based Knowledge of Patients Health & Medical Information";

var animateLineColor = new Array();
animateLineColor[0] = "";
animateLineColor[1] = "<?php print $haColor; ?>";
animateLineColor[2] = "<?php print $patientColor; ?>";
animateLineColor[3] = "<?php print $providerColor; ?>";
animateLineColor[4] = "<?php print $insurerColor; ?>";

$(document).ready(function() {
	$("#horizontal-nav").hide();
	$("#section-panel").css("display","none");

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

		$("#horizontal-nav").show();
		
		$('#slider').nivoSlider({
		        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
		        slices: 15, // For slice animations
		        boxCols: 8, // For box animations
		        boxRows: 4, // For box animations
		        animSpeed: 500, // Slide transition speed
		        pauseTime: 4000, // How long each slide will show
		        startSlide: 0, // Set starting Slide (0 index)
		        directionNav: true, // Next & Prev navigation
		        controlNav: false, // 1,2,3... navigation
		        controlNavThumbs: false, // Use thumbnails for Control Nav
		        pauseOnHover: true, // Stop animation while hovering
		        manualAdvance: false, // Force manual transitions
		        prevText: 'Prev', // Prev directionNav text
		        nextText: 'Next', // Next directionNav text
		        randomStart: false, // Start on a random slide
		        beforeChange: function(){}, // Triggers before a slide transition
		        afterChange: function(){animateTextfromSlide(this);}, // Triggers after a slide transition
		        slideshowEnd: function(){}, // Triggers after all slides have been shown
		        lastSlide: function(){}, // Triggers when last slide is shown
		        afterLoad: function(){} // Triggers when slider has loaded
		    });

		$("#section-panel").css("display","block");

		// intervalVar=setInterval(function(){animateText()},7000);
	}
}

function animateTextfromSlide(obj)
{

	var myStr = $(".nivo-main-image").attr("src");
	var strFind = "bg";
	var strStart = myStr.indexOf(strFind);
	var idx = parseInt(myStr[strStart+2]);

	$("#animatedMsg").html("");
	$("#animatedMsg").css("color", animateLineColor[idx]);
	$("#animatedMsg").html(animateLine[idx]);
	// $("#animatedMsg").fadeIn("slow");
}

// function animateText()
// {
// 	if (aninmateLineCnt > 2)
// 		aninmateLineCnt = 0;

// 	$("#animatedMsg").html("");
// 	$("#animatedMsg").css("color", animateLineColor[aninmateLineCnt]);
// 	$("#animatedMsg").css("display", "hidden");	
// 	$("#animatedMsg").html(animateLine[aninmateLineCnt]);
// 	$("#animatedMsg").fadeIn("slow");
	 
// 	aninmateLineCnt++;
// }

// sliceDown
// sliceDownLeft
// sliceUp
// sliceUpLeft
// sliceUpDown
// sliceUpDownLeft
// fold
// fade
// random
// slideInRight
// slideInLeft
// boxRandom
// boxRain
// boxRainReverse
// boxRainGrow
// boxRainGrowReverse
</script>

<div class="container">
<div id="banner">
<img border="0" height="100" style="float:left; padding-left:75px; padding-top:15px" src="/ha/images/HAlogo.png">
<h1 id="ywTitle" style="margin:0;float:left; padding-left:45px; padding-bottom:0px; color:<?php print $haColor; ?>;padding-top:85px; font-size:25px;font-style:italic;" ></h1>
</div> <!-- end of banner -->

<?php include ('include/horizontalnav.php'); ?>

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
<div id="section-panel">
<div style="margin:auto; width:70%;">
<br />
<center><p class="boldTitle">Welcome to the Patient-Centric Collaborative Healthcare System</p>
<p><span class="emphasizePhraseMore">A</span> <span class="keyWord" >KEY</span> <span class="emphasizePhraseMore">technology that empowers the patient
to access and share all of their medical and health information with their Medical Providers.
</p>
<p class="boldTitle">
Health Allianze is dedicated to being the “world class” provider of quality healthcare for our clients through the power of Knowledge-Based Information and Care.
</p>
</center>
</div>
<br />
<div id="animatedMsg" style="text-align:center;" class="boldTitle">
</div>	
<br />
<center>
<img border="0" height="475" src="/ha/images/ATM Scenario Circles.png">
</center>
<br /><br /><br /><br />
</div> <!--end of section-article -->
</div> <!--end of section-panel -->
</div> <!-- end of container -->
</body>
</html>
