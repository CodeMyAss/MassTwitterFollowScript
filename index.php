<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>kFollower - Free Mass Twitter Follower</title>
 

		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="assets/plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
		<link href="assets/plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
		<link href="assets/plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet">
		<link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="assets/plugins/summernote/summernote.min.css" rel="stylesheet">
		<link href="assets/plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
		<link href="assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
		<link href="assets/plugins/c3-chart/c3.min.css" rel="stylesheet">
		<link href="assets/plugins/slider/slider.min.css" rel="stylesheet">
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
 
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 
	<body class="tooltips">
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href='index.php'><img src="assets/img/logo.png" alt="kFollower Logo"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					
			
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<div class="sidebar-left sidebar-nicescroller">
				<ul class="sidebar-menu">
					<li><a href='index.php'><i class="fa fa-dashboard icon-sidebar"></i>Dashboard</a></li>
					<li><a href='faqs.php'><i class="fa fa-info icon-sidebar"></i>FAQs</a></li>
					<li><a href='contact.php'><i class="fa fa-envelope icon-sidebar"></i>Contact</a></li>
					
				</ul>
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->
			
			
			
			
			
			
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				<div class="container-fluid">
				
				<!-- Begin page heading -->
				<center><h1 class="page-heading">Dashboard</h1></center>
				<!-- End page heading -->
				
					<!-- BEGIN EXAMPLE ALERT -->
					<center><div class="alert alert-info alert-bold-border fade in alert-dismissable" >
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <p><strong>Welcome!</strong></p>
					  <p class="text-muted">Enjoy this free Twitter Mass Follow Script coded by <a class="alert-link" href="http://www.hackforums.net/member.php?action=profile&uid=2227376">Kasual</a> created.</p><p class="text text-danger"><i>Make sure you have cURL enabled, or this will not work!</i></p>
					</div></center>
					<!-- END EXAMPLE ALERT -->

				
							<form action="" method="post">


<center>
<label>Twitter Accounts</label>
<textarea class="form-control" placeholder="User:Pass" name="twitterids" id="twitterids" cols="45" rows="8"></textarea>
<br>
<label>Twitter Username</label>
<input type="text" class="form-control" name="userid" id="userid" placeholder="Enter Twitter Username">
<br>
<button class="btn btn-block btn-info" id="btn" type="submit">Begin</button>
</form>
<br>


<?php

$numba = 0;
set_time_limit(false);
error_reporting(false);
function logintotwitter($username, $password)
{
$username = trim($username);
$password = trim($password);
$url = "https://twitter.com/?lang=en";
$referrer = "https://twitter.com/";
$cookie = "kunal.txt";     
$ch = curl_init();
curl_setopt_array($ch, Array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_COOKIEJAR => $cookie,
        CURLOPT_COOKIEFILE => $cookie,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTBDFff GTB7.0 (.NET CLR 3.5.30729)',
        CURLOPT_REFERER => $referrer,
        CURLOPT_FOLLOWLOCATION => true,
            ));
        $data = curl_exec ($ch);
        curl_close($ch);

        $pattern = '/<input type=[\'\"]hidden[\'\"] name=[\'\"]authenticity_token[\'\"] value=[\'\"](.*?)[\'\"]/i';
        preg_match($pattern,$data,$match);
        if(count($match)>0)
        {
            $authenticitytoken=$match[1];
        }


        $referrer = $url;

        $url = "https://twitter.com/sessions";

        $postfields = array("session[username_or_email]"=>$username, "session[password]"=>$password, "redirect_after_login"=>"/", "authenticity_token"=>$authenticitytoken, "scribe_log"=>"", "return_to_ssl"=>"true");

$ch = curl_init();
curl_setopt_array($ch, Array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_COOKIEJAR => $cookie,
        CURLOPT_COOKIEFILE => $cookie,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $postfields,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTBDFff GTB7.0 (.NET CLR 3.5.30729)',
        CURLOPT_REFERER => $referrer,
        CURLOPT_FOLLOWLOCATION => true,
            ));
        $data = curl_exec ($ch);
        curl_close($ch);

        if(stristr($data, "Sign out"))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function follow($userid,$theuser,$thepass)
    {
        $userid = trim($userid);
        
        $url = "https://twitter.com/$userid";
        $referrer = "https://twitter.com/";
        $cookie = "kunal.txt";

$ch = curl_init();
curl_setopt_array($ch, Array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_COOKIEJAR => $cookie,
        CURLOPT_COOKIEFILE => $cookie,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTBDFff GTB7.0 (.NET CLR 3.5.30729)',
        CURLOPT_REFERER => $referrer,
        CURLOPT_FOLLOWLOCATION => true,
          ));
        $data = curl_exec ($ch);
        curl_close($ch);

        $pattern = '/<input type=[\'\"]hidden[\'\"] value=[\'\"](.*?)[\'\"] name=[\'\"]authenticity_token[\'\"]/i';
        preg_match($pattern,$data,$match);
        if(count($match)>0)
        {
            $authenticitytoken=$match[1];
        }

        $pattern = '/<div class=[\'\"]profile-card-inner[\'\"] data-screen-name=[\'\"]'.$userid.'[\'\"] data-user-id=[\'\"](.*?)[\'\"]>/i';
        preg_match($pattern,$data,$match);
        if(count($match)>0)
        {
            $followid=$match[1];
        }
        
        $url = "https://twitter.com/i/user/follow";
        $referrer = "https://twitter.com/$userid";
        $cookie = "kunal.txt";

        $postfields = array("authenticity_token"=>$authenticitytoken, "user_id"=>$followid);

        $ch = curl_init();
curl_setopt_array($ch, Array(
        CURLOPT_URL => $url,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_COOKIEJAR => $cookie,
        CURLOPT_COOKIEFILE => $cookie,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $postfields,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 6.0; fr; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTBDFff GTB7.0 (.NET CLR 3.5.30729)',
        CURLOPT_REFERER => $referrer,
        CURLOPT_FOLLOWLOCATION => true,
        ));
        $data = curl_exec ($ch);
        curl_close($ch);
		$file = fopen('turd.txt', 'a');
        fwrite($file, $theuser. " followed" . $userid. "\n");
    }
    if(count($_POST)>0)
    {
        $twitterlogins = explode("\n", $_POST["twitterids"]);
        $userid = explode(",", $_POST["userid"]);
		$kuser = $_POST["userid"];
		$toflwcount = count($userid);
        $countids = count($twitterlogins);
        for($i=0;$i<$countids;$i++)
        {
            if (!(preg_match("/[a-zA-Z0-9]+/i", $twitterlogins[$i])))
            {
                continue;
            }
            $twittercred = explode(":", $twitterlogins[$i]);
            $loggedin = logintotwitter($twittercred[0], $twittercred[1]);
            if($loggedin == 1)
            {
			for($q=0;$q<$toflwcount;$q++)
			{
			follow($kuser,$twittercred[0], $twittercred[1]);
			}
                
                $numba++;
                echo "<p class=text text-success".$twittercred[0]." Has followed ".$kuser. " </p><p class=text text-info> #" .$numba."</p><br/>";
                $file = fopen('good.txt', 'a');
                                fwrite($file, $twittercred[0]. ":" . $twittercred[1]. "\n");

                flush();
                ob_flush();
            }
            @unlink("kunal.txt");
        }
    }
?>		
							
					
					
					
				
					
							
					
					
				
				</div><!-- /.container-fluid -->
				
	
			
				<!-- BEGIN FOOTER -->
				<footer>
					&copy; 2014 <a href="http://www.hackforums.net/member.php?action=profile&uid=2227376">kFollower</a><br />
					Coded by <a href="http://www.hackforums.net/member.php?action=profile&uid=2227376" target="_blank">Kasual</a>.
				</footer>
				<!-- END FOOTER -->

				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/retina/retina.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
 
		<!-- PLUGINS -->
		<script src="assets/plugins/skycons/skycons.js"></script>
		<script src="assets/plugins/prettify/prettify.js"></script>
		<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
		<script src="assets/plugins/icheck/icheck.min.js"></script>
		<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
		<script src="assets/plugins/mask/jquery.mask.min.js"></script>
		<script src="assets/plugins/validator/bootstrapValidator.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/bootstrap.datatable.js"></script>
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		<script src="assets/plugins/markdown/markdown.js"></script>
		<script src="assets/plugins/markdown/to-markdown.js"></script>
		<script src="assets/plugins/markdown/bootstrap-markdown.js"></script>
		<script src="assets/plugins/slider/bootstrap-slider.js"></script>
		
		<!-- EASY PIE CHART JS -->
		<script src="assets/plugins/easypie-chart/easypiechart.min.js"></script>
		<script src="assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>
		
		<!-- KNOB JS -->
		<!--[if IE]>
		<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
		<![endif]-->
		<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/jquery-knob/knob.js"></script>

		<!-- FLOT CHART JS -->
		<script src="assets/plugins/flot-chart/jquery.flot.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.tooltip.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>

		<!-- MORRIS JS -->
		<script src="assets/plugins/morris-chart/raphael.min.js"></script>
		<script src="assets/plugins/morris-chart/morris.min.js"></script>
		
		<!-- C3 JS -->
		<script src="assets/plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
		<script src="assets/plugins/c3-chart/c3.min.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script>
		
	</body>
</html>