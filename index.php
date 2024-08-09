<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>VBMA FEEDBACK</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:black">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">VBMA FEEDBACK</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login"><b>Student</b></a></li>
		  <li><a href="index.php?info=faculty_login"><b>Faculty</b></a></li> 
          <li><a href="admin"><b>Admin</b></a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
     <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
     </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/ban1.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/ban5.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/ban2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
<!--------------------------------------About Us----------------------------------->



<section id="about">
   <div class="container">
   <div class="row">
   <div class="col-md-6">
      <h2>About Us</h2>
      <div class="about-content">
      <p>
      In today's world of online interaction and the strong growth of popularity of online courses, a need arises for a flexible, strengthened & easily integrated “VBMA  Online Student Feedback System”. This system is all about institutional and educational practices and processes that are taken into consideration, the student’s concerns of the level of the knowledge they receive. This procedure explains that there is a good relationship between the students learning environment and teachers. '
    </p>
    </div>
<button type="button"class="btn btn-primary">Read More</button>
</div>
<div class="col-md-6 skills-bar">
<p>College Courses </P  >
<div class="progress">
<div class="progress-bar"style="width:80%;">
  80%
</div>
</div>
<p>College Department </P  >
<div class="progress">
<div class="progress-bar"style="width:60%;">
  80%
</div>
</div> 
<p>Teaching Staff </P  >
<div class="progress">
<div class="progress-bar"style="width:85%;">
  80%
</div>
</div>
<p>College Cantine </P  >
<div class="progress">
<div class="progress-bar"style="width:50%;">
  80%
</div>
</div>
<div>
</div>
</div>

</section>

<!--------------------------------------End About Us----------------------------------->
<title>Non-Breaking Space</title>
</head>
<body>
<p>
 
</p>
</body>
</html>


<!------------------------------------------------- Features ------------------------------------------>
<section id="features1">
	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To ONLINE STUDENT FEEDBACK SYSTEM
            </h2>
						<div class="section_subtitle"><p>Features Provides By Us</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
						<h3 class="feature_title">Easy to Use</h3>
						<div class="feature_text"><p>The Complexity Of this Site Is Very Less and Easy to Use.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Fast And Trusted</h3>
						<div class="feature_text"><p>The System Will Work Fast And Also This Site Is Trusted. </p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
						<h3 class="feature_title">No Middle Intracton</h3>
						<div class="feature_text"><p>No Middle Interaction between Student Data And Admin.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Student Helping</h3>
						<div class="feature_text"><p>24H Student Helping For Their Trouble</p></div>
					</div>
				</div>

			</div>
		
</section>
<!------------------------------------------------- End Features ------------------------------------------>
<title>Non-Breaking Space</title>
</head>
<body>
<p>
 
</p>
</body>
</html>

<!---------------------Services--------------------->
<section id="services">
					<div class="section_title_container text-center">

<div class ="container">
 <centre>   <h1>FeedBack Pattern</h1> </centre>
  <div class="row services">
  <div class="col-md-3 text-center">
      <div class="icon">
      <img src="images/t1.jpg"height="80"width="80"></i>
      </div>
      <h3>College FeedBack</h3>
      <p>FeedBack Portal For VBMA Student</p>
      <p><a class="w3-button w3-black" href="#">Read More. </a></p>
    </div>
    <div class="col-md-3 text-center">
      <div class="icon">
      <img src="images/t2.jpg"height="80"width="80"></i>
      </div>
      <h3>Depart. FeedBack</h3>
      <p>FeedBack Portal For VBMA Student</p>
      <p><a class="w3-button w3-black" href="#">Read More. </a></p>
    </div>
    <div class="col-md-3 text-center">
      <div class="icon">
      <img src="images/t3.jpg"height="80"width="80"></i>
      </div>
      <h3>Course FeedBack</h3>
      <p>FeedBack Portal For VBMA Student</p>
      <p><a class="w3-button w3-black" href="#">Read More. </a></p>
    </div>
    <div class="col-md-3 text-center">
      <div class="icon">
      <img src="images/t4.jpg"height="80"width="80"></i>
      </div>
      <h3>Canteen FeedBack</h3>
      <p>FeedBack Portal For VBMA Student</p>
      <p><a class="w3-button w3-black" href="#">Read More. </a></p>
    </div>



</div>


<div>

</section>
			
			
			
			
				<?php } ?>
            </div>
            
    </div>
    <title>Non-Breaking Space</title>
</head>
<body>
<p>
 
</p>
</body>
</html>

    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#46337b">
		<span style="color:#FFFFFF">&copy;VBMA 2024  </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
