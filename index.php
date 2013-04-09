<html>
<head>
<?php include ('include/head.php'); ?>
</head>
<body>
<script type="text/javascript" >
var titleBanner = "Collaborative Services";
var titleIndex = 0;
var intervalVar = "";

$(document).ready(function() {
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

		$("#section-panel").css("display","block");
	}
}

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
<h1 id="ywTitle" style="float:left; padding-left:35px; color:#445E83;padding-top:5px; font-size: 35px;" ></h1>
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
<div style="margin:auto; width:80%;">
<p>A KEY that empowers the patient 
to access and share all of their medical and health information with their Medical Providers.
</p>
<p>
Health Allianze is dedicated to being the “world class” provider of quality healthcare for our clients through the power of Knowledge-Based Information and Care.
</p>
<br /><br />
<center>
<img border="0" height="150" src="/ha/images/ATM Scenario Circles.png">
</center>
</div> <!--end of section-article -->
</div> <!--end of section-panel -->
</div> <!-- end of container -->
</body>
</html>
