<?php include ('../include/doctype.php'); ?>
<head>
<?php include ('../include/head.php'); ?>

<style>
.picbio {
	display:block;
	height: 30px;
	width: 90px;
	background-image: url('../images/Web Team Biography Button.png');
	background-size: 95px;
	border: none;
	text-decoration: none;
	background-repeat: no-repeat;
}

.picbio:hover {
	background-image: url('../images/Web Team Biography Buttonselected.png');
}

.picreas {
	display:block;
	height: 30px;
	width: 90px;
	background-image: url('../images/Web Team Reason for HA Button.png');
	background-size: 95px;
	border: none;
	text-decoration: none;
	background-repeat: no-repeat;
}

.picreas:hover {
	background-image: url('../images/Web Team Reason for HA Buttonselected.png');
}

.teamList tr {
	height: 50px;
	color:<?php print $haColor; ?>;
	font-size:110%;
	font-variant:small-caps;
}

.teamList a {
	height: 50px;
	width:100px;
}

.bioDialog {
	display:none;
}
</style>

<script type="text/javascript" >
$(document).ready(function() {
	$(".picbio").click(function() {
		$(".container").fadeTo('slow',0.2);
		$(".bioDialog").html("");

		if ( (typeof eval(this.id)) != 'string')
			var msg = "<p>Coming Soon!</p>"
		else
			var msg = eval(this.id);

		$(".bioDialog").html(msg);

		$(".bioDialog").dialog({
			position: { my: 'center top', at:'center bottom', of: '#banner' },
			width:800,
			height:450,
			title:"Biography",
			close : function (event,ui)
			{
				$(".container").css({'opacity':100});
			}
		});
	});

	$(".picreas").click(function() {
		$(".container").fadeTo('slow',0.2);
		$(".bioDialog").html("");

		if ( (typeof eval(this.id)) != 'string')
			var msg = "<p>Coming Soon!</p>"
		else
			var msg = eval(this.id);
		$(".bioDialog").html(msg);

		$(".bioDialog").dialog({
			position: { my: 'center top', at:'center bottom', of: '#banner' },
			width:800,
			height:450,
			title:"Reason why I joined",
			close : function (event,ui)
			{
				$(".container").css({'opacity':100});
			}
		});
	});
    
});
</script>

</head>
<body>
<?php include ('../include/biographys.php'); ?>
<?php include ('../include/reasons.php'); ?>

<?php include ('../include/banner.php'); ?>   

<?php include ('../include/horizontalnav.php'); ?>

<div id="main-content">
<div class="habreadcrumbs" style="color:<?php print $haColor; ?>;">
Company Info > Team	
</div> <!-- end of habreadcrumbs -->
<div id="section-panel">
<h2>Team</h2>
<div class="section-article">

<div style="font-size:110%;padding-bottom:25px;">Management Team</div>

<table class="teamList" style="">
	<tr>
		<td>Tammy Jamieson</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Chief Executive Officer</td>
		<td style="width:75px;">&nbsp;</td>
		<td>
			<a href="#" id="tjb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="tjr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Steven Paris</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Chief Technology Officer</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="spb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="spr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Bruce Simkins</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Chief Operations Officer</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="bsb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="bsr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Andrew Armata</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Executive Vice President Business Development</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="aab" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="aar" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>John Barbaro</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Vice President of Sales</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="jbb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="jbr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Don Christensen</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Executive Vice President of Data Architecture</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="dcb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="dcr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Tarrant Cutler Jr.</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Vice President of Product Development</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="tcb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="tcr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Sandra Friedman</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Vice President of Partnerships</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="sfb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="sfr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Roland Joy</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Vice President of Medical Affairs</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="rjb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="rjr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
	<tr>
		<td>Twila McInnis</td>
		<td>&nbsp;-&nbsp;</td>
		<td>Vice President of Policy & Compliance</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="tmb" class="picbio" onclick="return false;"></a>
		</td>
		<td>&nbsp;</td>
		<td>
			<a href="#" id="tmr" class="picreas" onclick="return false;"></a>
		</td>
	</tr>
</table>	

<br /><br /><br />
<div style="font-size:110%;padding-bottom:25px;">Advisory Team</div>
<div style="color:<?php print $haColor; ?>;font-variant:small-caps;">
David Cochran, MD
<br />
Paul Lecat, MD
<br />
Richard Reidy
<br />
Barbara Sampson
<br />
William Stason, MD
</div>
<br /><br />

<!-- jquery dialog -->
<div class="bioDialog" title="">
</div>
<div> <!-- end of section-article -->
</div> <!-- end of section-panel -->
</div> <!--end of main-content -->
</div> <!-- end of container -->
</body>
</html>