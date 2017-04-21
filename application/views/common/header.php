<!DOCTYPE html>
<html>
<head>
	<title>NapSpace-Home, Experience - all at one place</title>
	<base href="<?= $this->config->item('base_url');?>/"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Napspace,hostels" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/header_styles.css" rel="stylesheet">
	<link href="css/header_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>	
	<script src="js/jquery.js"></script>
	<script src="js/header_scripts.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script src="js/home/typed.js" type="text/javascript"></script>
	<script src="js/home/anim.js" type="text/javascript"></script>
	<script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="text/javascript">
	    $(document).ready(function () {
	        $('#horizontalTab').easyResponsiveTabs({
	            type: 'default', //Types: default, vertical, accordion           
	            width: 'auto', //auto or any width like 600px
	            fit: true   // 100% fit in a container
	        });
	        $('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
	    });
	</script>
	<script>
	    $(function () {
	      $("#slider").responsiveSlides({
	      	auto: true,
	      	speed: 500,
	        namespace: "callbacks",
	        pager: true,
	      });
	    });
	</script>
</head>
<body >
<!--header-->
	<div class="navigation">
		<div class="container-fluid">
			<nav class="pull">
				<ul>
					<li><a  href="index.html">Home</a></li>
					<li><a  href="about.html">About Us</a></li>
					<li><a  href="blog.html">Blog</a></li>
					<li><a  href="terms.html">Terms</a></li>
					<li><a  href="privacy.html">Privacy</a></li>
					<li><a  href="contact.html">Contact</a></li>
				</ul>
			</nav>			
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1><a href="">NapSpace</a></h1>
			</div>
			<div class="top-nav">
				<ul class="right-icons">
					<li><span ><i class="glyphicon glyphicon-phone"> </i>+91-8980 274484</span></li>
					<li><a  href="login.html"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
					<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
					
				</ul>
				<div class="nav-icon">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>
					<div id="small-dialog" class="mfp-hide">
							    <!----- tabs-box ---->
						<div class="sap_tabs">	
						     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								  <ul class="resp-tabs-list">
								  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
									  <div class="clearfix"></div>
								  </ul>				  	 
								  <div class="resp-tabs-container">
								  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
										 	<div class="facts">
											  	<div class="login">
													<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
											 		<input type="submit" value="">
											 	</div>        
									        </div>
								  		</div>
									     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="facts">									
												<div class="login">
													<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
											 		<input type="submit" value="">
											 	</div> 
									        </div>	
										 </div>									
									      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
											 <div class="facts">
												<div class="login">
													<input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">		
											 		<input type="submit" value="">
											 	</div> 
									         </div>	
									    </div>
							      </div>
							 </div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>
</div>