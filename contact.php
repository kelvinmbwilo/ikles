<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Business clean web templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<link id="callCss" rel="stylesheet" href="themes/current/bootstrap.min.css" type="text/css" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/css/base.css" rel="stylesheet" type="text/css">
	<style type="text/css" id="enject"></style>
</head>
<body>
<?php include 'topmenu.php' ?>
<!--Header Ends================================================ -->
<section id="mapSection"> 
<div id="myMap" style="height:400px">
<!-- please edit in (js code which is available in the foote section) longitude and longitude of your location  -->
</div>	
</section>
<!-- Page banner -->
<!--
<section id="bannerSection" style="background:url(themes/images/banner/contact.png) no-repeat center center #000;">
	<div class="container" >	
		<h1 id="pageTitle">Contact <small> :We love to hear from you</small> 
		<span class="pull-right toolTipgroup">
			<a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="themes/images/facebook.png" alt="facebook" title="facebook"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="themes/images/twitter.png" alt="twitter" title="twitter"></a>
			<a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="themes/images/youtube.png" alt="youtube" title="youtube"></a>
		</span>
		</h1>
	</div>
</section> 
-->
<!-- Page banner end -->

<section id="bodySection"> 	
	<div class="container">					
	<div class="row">
			<div class="span4" style="text-align: left">
                            		
			<h3> IKLLAC &Consultancy </h3>	
				P. O.BOX 9800 	<br/>
				Dar es Salaam-Tanzania<br/><br/>
				info@mysite.com<br/>
				﻿Tel +255 (0) 712 569 555<br/>
                                <a href="mailto:dijaah@yahoo.com">dijaah@yahoo.com</a> or <a href="mailto:addhas@gmail.com">addhas@gmail.com</a>
			</div>
			<div class="span4">
					
			</div>
			<div class="span4">
				<h3>  Email Us</h3>
				<form class="form-horizontal">
				<fieldset>
				  <div class="control-group">
				   
					  <input type="text" placeholder="name" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" placeholder="email" class="input-xlarge"/>
				   
				  </div>
				   <div class="control-group">
				   
					  <input type="text" placeholder="subject" class="input-xlarge"/>
				  
				  </div>
				  <div class="control-group">
					  <textarea rows="4" id="textarea" class="input-xlarge"></textarea>
				   
				  </div>

                                    <button class="btn btn-large" type="button"> <i class="icon-envelope"></i> Send Message</button>

				</fieldset>
			  </form>
			</div>
		</div>

		</div>
</section>
 <!-- Footer
  ================================================== -->
<?php include 'footer.php'; ?>
<a href="#" class="btn" style="position: fixed; bottom: 38px; right: 10px; display: none; " id="toTop"> <i class="icon-arrow-up"></i> Go to top</a>
<!-- Javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="themes/js/jquery-1.8.3.min.js"></script>
	<script src="themes/js/bootstrap.min.js"></script>
	<script src="themes/js/bootstrap-tooltip.js"></script>
    <script src="themes/js/bootstrap-popover.js"></script>
	<script src="themes/js/business_ltd_1.0.js"></script>
 
	 <!-- Google map jquery files -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="themes/js/jquery.gmap.js"></script>
	<script>
		// Google map data ==============================================================================
	  $(document).ready(function(){
		$("#myMap").gMap({ controls: false,
						  scrollwheel: false,
			  draggable: true,
		  markers: [{ latitude: -6.806344,  		//your company location latitude 
					  longitude: 39.256868,		//your company location longitude
					  icon: { image: "http://www.google.com/mapfiles/marker.png",
							  iconsize: [42, 48],
							  iconanchor: [42,48],
							  infowindowanchor: [14, 0] } },
					],
		  icon: { image: "http://www.google.com/mapfiles/marker.png", 
				  iconsize: [28, 48],
				  iconanchor: [14, 48],
				  infowindowanchor: [14, 0] },
		  latitude: -6.806344,
		  longitude: 39.256868,
		  zoom: 16, });
	  });
	</script>
	


</body>
</html>