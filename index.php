<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>தமிழம் -  Thamizham - Religion of the Greatest Tamil Civilization   </title>

    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
	<meta property="og:url"           content="http://www.Thamizham.org" />
	<meta property="og:type"          content="Thamizham.org" />
	<meta property="og:title"         content="தமிழம் - தமிழனின் மதம் " />
	<meta property="og:description"   content="Dedicated to Murugan (Tamil Murukan) is often referred to as Tami? ka?avu? ('God of the Tamils') and is worshiped primarily in areas with Tamil influences." />
	<meta property="og:image"         content="http://thamizham.org/images/thamil-marai.jpg" />
	
		
  </head>

  <body>

	

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<a href='/'>
					<img src ='images/thamizham-logo-header.png' class='img-responsive'> 	
				</a>				
			</div>
			
			<div class="col-xs-12 col-sm-8 col-md-8">
				<h1> தமிழம் -  தமிழனின் மதம்   </h1>
				<h5>Thamizham - Religion of the Greatest Tamil Civilization  </h5>
				
				<?php include('include/top-menu.php'); ?>
				
			</div>
			
			
		</div>
		
		<hr>
		
		<div class="row">
		
		
				<?PHP 
					//include('include/search-bar.php') ; 
					
					include('include/whitelist.php') ; 
				?>
				
				<?PHP
				
						if (isset($_GET['page']))
						{
							
							
								
								
								
															
								if(in_array($_GET['page'], $whitelist) && file_exists("pages/".$_GET['page'].".php")) {
									include("pages/".$_GET['page'].".php");
								} else  {	
										include("pages/home.php");
																		
								}
								  
						}else {
							include("pages/home.php");
							
							
						}
				?>
				
		
	
		</div>
	
	
		

		
		
		
		
		
		
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    
    <!-- Latest compiled and minified JavaScript -->
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


	<!-- follow button -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1646566308924831";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<!-- Sahre button -->
		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Google analytics's tracking -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-75162299-1', 'auto');
	  ga('send', 'pageview');

	</script>


  </body>
</html>