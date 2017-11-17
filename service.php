
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SAYS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readJob.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
window.location.assign("phonenumber.php")
}
</script>
	</head>
	<body>
	



	<div id="fh5co-header">
		<div class="container">
			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			<div id="fh5co-logo">
				<a href="index.php">SAYS - Services At Your Step<span>.</span></a>
			</div>
		</div>
	</div>
	<div id="fh5co-main">
		<div class="fh5co-overlay-mobile"></div>
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row text-center">
				
							<div class="fh5co-go animate-box">
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title" style="color:#f9ad81">Enter Complaint Details</h3>
                </div>  
                <div class="panel-body">  
  <?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
 
?>

                    
    <form name="enquiry" action="book_service.php" method="POST" enctype="multipart/form-data">
    
    Your name:<br>
    <input name="name" type="text" value="" size="30" style="width:250px; resize:none;
    padding: 12px 20px;
    margin: 8px 0;
     display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;" /><br>
    
    Your roll number:<br>
    <input name="rollnumber" type="text" value="" size="30"required style="width:250px; resize:none;
    padding: 12px 20px;
    margin: 8px 0;
     display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;"  /><br>
    Your room number:<br>
    <input name="roomnumber" type="text" value="" size="30"required style="width:250px; resize:none;
    padding: 12px 20px;
    margin: 8px 0;
     display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;" /><br>
     Your problem description:<br>
    <input name="problem" type="text" value="" size="300"required style="width:250px; resize:none;
    padding: 12px 20px;
    margin: 8px 0;
     display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;" /><br>
    
    <input type="file" name="image" /><br>
    <input type="submit" value="Book" style="
    width: 30%; height:50px;
    background-color: #f9ad81;
    color: white;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: none;
    border-radius: 4px;
    cursor: pointer;"    >
    </form>

                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  

							</div>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   
			  	</ul>
			</div>
		</div>
        </div>
		

		<div id="fh5co-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<p>&copy; SAYS - Services At Your Step</p>
													</div>
					</div>
					<div class="col-md-6 col-sm-6 animate-box">
						<div class="fh5co-footer-widget">
							<ul class="fh5co-social pull-right">
								<li>
									<a href="#"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-vine"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-behance"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-google"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-vimeo"></i></a>
								</li>
							</ul>
						<div class="fh5co-footer-widget">
					</div>
				</div>
			</div>
		</div>
            </div>

	</div> <!-- END fh5co-page -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

