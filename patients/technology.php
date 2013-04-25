<html>
<head>
<?php include ('../include/head.php'); ?>
</head>
<body>
<script type="text/javascript" >

$(document).ready(function() {
    $("#playVideo").click(function(event) {
        playMe();
    });
});

function playMe()
{
    var embedCode = '<object width="534" height="400"><param name="movie" value="http://www.youtube-nocookie.com/v/xJb3UJsLATc?hl=en_US&amp;version=3&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube-nocookie.com/v/xJb3UJsLATc?hl=en_US&amp;version=3&amp;rel=0" type="application/x-shockwave-flash" width="534" height="400" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
        
    $("#videocontainer").html(embedCode);

    event.preventDefault();

    window.scrollTo(0, document.body.scrollHeight);
}
</script>

<?php include ('../include/banner.php'); ?>   

<?php include ('../include/horizontalnav.php'); ?>

<div id="main-content">
<div class="habreadcrumbs" style="color:<?php print $patientColor; ?>;">
Patients > Technology	
</div> <!-- end of habreadcrumbs -->
<div id="section-panel">
<h2>Technology-Enabled Service</h2>
<br />
<div class="section-article">
<span style="font-variant:small-caps;color:<?php print $patientColor; ?>">Problem:</span>  Currently you do not have your combined medical records at your finger tips nor does your medical provider.  There is no patient-centric record system.  Your medical records are fragmented throughout the health care system.
<br /><br />
<span style="font-variant:small-caps;color:<?php print $patientColor; ?>">Solution:</span>  Health Allianze is the company that pulls together all your medical record data.  We solve the medical record fragmentation through the use of a <span class="keyWord" >KEY</span>.
<br /><br />
Health Allianze invites you to experience care and medical treatment the way it was intended:  personalized and based on the knowledge of your unique medical  history and health needs.  You deserve the best possible care every time you visit a physician.  
<br /><br />
With Health Allianze’s information technology-enabled services, you will be empowered to access and share all your healthcare records with providers at all times. 
<br /><br />
The <span class="keyWord" >KEY</span> will unlock the door for you to have direct control over the distribution of your medical and health information. You will be able to share your full medical  and health history with your provider no matter where you are in the world.
<br /><br /><br />
<center>
<span style="font-variant:small-caps;font-weight:bold;color:<?php print $patientColor; ?>">The Healthcare Problem</span>
<br /><br />
<span style="font-variant:small-caps;font-weight:bold;color:<?php print $patientColor; ?>">Fragmentation of Patient Information</span>
</center>
<br />
With isolated Patient Records of Information, there is NO Collaboration of the Patient’s care between their Medical Providers.  Each Doctor, Nurse, Surgeon, Dentist, Chiropractor, Ophthalmologist, Orthopedic, Pediatrician and Radiologist must rely on the Patient to provide information about prior medical care or constantly do the same investigation through tests and procedures to find the cause and cure for the Patient.  This is time consuming, ineffective and inefficient for the patient and costly for Patients and Insurers.
<br /><br />
<center>
<span style="font-variant:small-caps;font-weight:bold;color:<?php print $patientColor; ?>">The Health Allianze Solution</span>
</center>
<br />
Health Allianze gives you the technology and provides a service to ensure that you have the exact medical information from all of your medical providers so that they are caring for you in a Collaborative way, not as isolated individuals.  Each medical provider will have your comprehensive medical record to review and contribute to with their expertise.  this approach of collaborating will provide you with the “BEST” quality of care effectively and efficiently within a value oriented cost structure. 
<center>
<div id="videocontainer" style="padding-top:45px;">
<a href="#" onclick="playMe()" ><img border="0" title="Click on this image to see the video!" src="/ha/images/patientfragmentation.png"></a>
<br />
<button id="playVideo" type="button">Play Video</button>
</center>
</div> <!-- end of videocontainer -->
</center>
<br /><br /><br />
<div> <!-- end of section-article -->
</div> <!-- end of section-panel -->
</div> <!--end of main-content -->
</div> <!-- end of container -->
</body>
</html>
