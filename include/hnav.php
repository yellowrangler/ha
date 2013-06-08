<script type="text/javascript">
    $(document).ready(function() {
        $("#hmenu").jMenu({
            absoluteLeft:0,
            ulWidth : 'auto',
            effects : {
                effectSpeedOpen : 300,
                effectTypeClose : 'slide'
            },
            animatedText : false
        });
    });
</script>
<div id="horizontal-nav">
<ul id="hmenu" style="font-variant:small-caps; ">
    <li>
        <a class="fNiv" href="#">&nbsp;</a>
    </li>
    <li>
        <a class="fNiv" href="/ha/">Home</a>
    </li>
    <li>
        <a class="fNiv" href="#">Patients</a>
        <ul>
            <li><a href="/ha/patients/collaboration.php">Collaboration</a></li>
            <li><a href="/ha/patients/technology.php">Technology</a></li>
            <li><a href="/ha/patients/usingthekey.php">Using the KEY</a></li>
            <li><a href="/ha/patients/signup.php">Sign Up</a></li>
            <li><a href="/ha/patients/support.php">Support</a></li>
        </ul>
    </li>
    <li>
        <a class="fNiv" href="#">Providers</a>
        <ul>
            <li><a href="/ha/providers/collaboration.php">Collaboration</a></li>
            <li><a href="/ha/providers/advantages.php">Advantages</a></li>
            <li><a href="/ha/providers/technology.php">Technology</a></li>
            <li><a href="/ha/providers/support.php">Support</a></li>
        </ul>
    </li>
    <li>
        <a class="fNiv" href="#">Insurers</a>
        <ul>
            <li><a href="/ha/payors/collaboration.php">Collaboration</a></li>
            <li><a href="/ha/payors/technology.php">Technology</a></li>
            <li><a href="/ha/payors/membership.php">Membership</a></li>
            <li><a href="/ha/payors/support.php">Support</a></li>
        </ul>
    </li>
    <li>
        <a class="fNiv" href="#">Company Info</a>
        <ul>
            <li><a href="/ha/aboutus/culture.php">Mission &amp; Goal</a></li>
            <li><a href="/ha/aboutus/team.php">Team</a></li>
            <li><a href="/ha/aboutus/news.php">News</a></li>
            <li><a href="/ha/aboutus/career.php">Career</a></li>
            <li><a href="/ha/aboutus/contactus.php">Contact Us</a></li>
        </ul>
    </li>
</ul>
</div> <!-- end of horizontal-nav  -->
