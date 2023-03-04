<!DOCTYPE html>
<html>
    <head>
        <title>My Personal Webpage</title>
        <link rel="stylesheet" href="aboutme.css">
        <link rel="stylesheet" href="navbar.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" 
		rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" 
		rel="stylesheet">
        <link rel="stylesheet" 
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" 
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    </head>
    <body>
      <nav>
        <div class="aboutme">
            <a href="index.php"><img src="images/butterfly.png"></a>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="index.php">HOME</a></li>
            <li><a href="aboutme.php">ABOUT ME</a></li>
			<li><a href="contact.php">CONTACT</a></li>
            <li><a href="References.php">REFERENCES</a></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
            <span class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-github"></i>
            </span>
        </ul>
    </nav>
<script src="navbar.js"></script>
     <div class="label">
      <h3> About Me </h3>
  </div>
    <!--image card layout start-->
    <div class="container">
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <div class="image">
          <img src="images/personal.png" alt="">
          <div class="details">
            <h2> <strong>Personal<br>Information</strong></h2>
            <p>My name is Leander Lygel C. Santy, I am 20 years old. I currently live in Pasay 
			City with my family.</p>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/educ.jpg" alt="">
          <div class="details">
            <h2> <strong>Education </strong></h2>
            <p>I am currently enrolled in Asia Pacific College. I studied in Philippine Pasay 
			Chung Hua in elementary and Pasay City Science High School in high school and 
			senior high school</p>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/course.png" alt="">
          <div class="details">
            <h2><strong>COURSE</strong></h2>
            <p>I chose the course Bachelor of Science in Information Technologies because 
			ever since I was a kid, I have had interests in computers and how it works. 
			During my research on the different courses relating computers, the IT course was 
			the one that matches what I want to do in the future.</p>
          </div>
        </div>
        <!--image card end-->
      </div>
      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <div class="image">
          <img src="images/itexp.jpg" alt="">
          <div class="details">
            <h2><strong>IT EXPERIENCE</strong></h2>
            <p>Prior enrolling in college, I didn't have any IT experience. My current 
			experience in IT is the different tasks and exercises that was given to me 
			in my previous subjects.</p>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/hobby.png" alt="Damili Pottery">
          <div class="details">
            <h2><strong>HOBBIES & INTERESTS</strong></h2>
            <p>I play different online games such as Osu, LoL, and Genshin Impact. I also 
			like watching anime and vtubers.</p>
			<div class="more">
					<a href="#" class="read-more">Watch <span>Clips</span></a>
					<div class="icon-links">
						<a href="clips.php"><i class="fas fa-paperclip"></i></a>
					</div>
				</div>
			</div>
		    </div>
        <!--image card end-->
        <!--image card start-->
        <div class="image">
          <img src="images/goals.png" alt="">
          <div class="details">
            <h2><strong>GOALS IN LIFE</strong></h2>
            <p>
			Be financially stable<br>
			Live life without regrets<br>
			Treat my friend oragoon anywhere he wants</p>
          </div>
        </div>
        <!--image card end-->
      </div>
      <!--image row end-->
    </div>
    <!--image card layout end-->
  </body>
</html>
      