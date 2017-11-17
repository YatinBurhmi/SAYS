
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
        <!--form enquiry validation -->
                <script>
function myFunction() {
    var inpObj = document.getElementById("phone");
    if (inpObj.checkValidity() == false) {
        document.getElementById("phone_valid").innerHTML = "Enter a valid phone no.";
  return false;
    } else {
        document.getElementById("phone_valid").innerHTML = "Input OK";
    } 
} 
</script>
        <!-------------------------------
         <script> function phonenumber(inputtxt)  
{ var phoneNoInput = document.enquiry.phone.value;
  var phoneno = /^\d{10}$/;  
  if((phoneNoInput.value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {  
        alert("message");  
        return false;  
        }  
       } </script> -->
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
   <!--CSS FOR TRACK COMPLAINT PART-->     
        <style> /*
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 450px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    padding: 20px;
}
</style>
	</head>
	<body>
	

<?php
// Start the session
session_start();
?>


	<div id="fh5co-header">
		<div class="container">
			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			<div id="fh5co-logo">
				<a href="index.php">SAYS - Services At Your Step<span>.</span></a>
			</div>
			<nav id="fh5co-main-nav">
				<ul>
					<li><a href="#" data-nav-section="home">Home</a></li>
					<li><a href="#" data-nav-section="portfolio">Services</a></li>
					<li><a href="#" data-nav-section="about">Admin Login</a></li>
					<li><a href="#" data-nav-section="contact">Register Complaints</a></li>
                    <li><a href="#" data-nav-section="track-complaint" >Track complaints</a></li>
				</ul>
			</nav>
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
							<h1 class="animate-box">We love to help you</h1>
							<div class="fh5co-go animate-box">

<!--


<div class="frmSearch">


<form autocomplete="off" method="post">
  <input type="text" id="search-box" name="search" placeholder="Search.." >





<div id="suggesstion-box"></div>
</form>							

</div> -->

	<a href="#" class="js-fh5co-next">
									See Our Services
									<span><i class="icon-arrow-down2"></i></span>
								</a>
								
							</div>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>
			</div>
		</div>

		<div id="fh5co-portfolio" data-section="portfolio">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">SERVICE</h2>
						<p class="fh5co-lead animate-box">Our aim is to provide services to the students in need. The students will be provided with all the services they were promised.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_1.jpg" style="width:357px; height:300px;"alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_2.jpg" style="width:357px; height:300px;"alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_3.jpg" style="width:357px; height:300px;"alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_4.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_5.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_6.jpg"style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_7.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_8.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_9.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_10.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_11.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pic_12.jpg" style="width:357px; height:300px;" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="portfolio-single.html" class="transition">
								<div>
									<span class="fh5co-meta">service</span>
									<h2 class="fh5co-title">SAYS  - Services At Your Step</h2>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div id="fh5co-about" data-section="about">
		<!--	<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
						<h2 class="fh5co-section-title">About</h2>
						<p class="fh5co-lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="fh5co-text with-plus">
							<h2>Rob Smith</h2>
							<span class="fh5co-meta">Photographer, Video Editor</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="fh5co-text">
							<h2>Jean Smith</h2>
							<span class="fh5co-meta">Photographer, Copy writer</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>

				</div>
			</div> -->
            <div class="container">  
                <div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
						<h2 class="fh5co-section-title">ADMIN LOGIN</h2>
						
					</div>
				</div>
   <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title" style="color: #f9ad81">Sign In </h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="Admin_check.php" ?>
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" style="width:100%;" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="" style="width:100%;">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" style="background-color: #f9ad81;" >  
  
  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
		</div>

		

		<div id="fh5co-contact" data-section="contact">
              
<div class="container">
      <div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
						<h2 class="fh5co-section-title">Register Complaints</h2>
						
					</div>
				</div>
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title" style="color: #f9ad81">Register A Complaint</h3>  
                </div>  
                <div class="panel-body">  
                    <form name="enquiry" method="post" action="sendotp.php" enctype="multipart/form-data" >
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Your Phone No." name="phone" style="width:100%;" type="text" autofocus>  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="SUBMIT" name="admin_login"  style="background-color: #f9ad81;" >  
  
  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
        </div>

		
			
		<div id="fh5co-testimony" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5" data-section="track-complaint">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">Track Complaint</h2>
						 <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title" style="color: #f9ad81">Track A Complaint</h3>  
                </div>  
                <div class="panel-body">  
                    <form name="tracking" method="post" action="trackresult.php" enctype="multipart/form-data" >
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Your Complaint ID" name="id" style="width:100%;" type="text" autofocus>  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="SUBMIT" name="admin_login"  style="background-color: #f9ad81;" >  
  
  
                        </fieldset>  
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

