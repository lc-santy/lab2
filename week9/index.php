<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
        <link rel="stylesheet" href="nav-bar.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
      <nav>
        <div class="home">
            <a href="index.php"><img src="images/dot.png"></a>
        </div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="index.php">HOME</a></li>
            <li><a href="aboutme.php">ABOUT ME</a></li>
			<li><a href="contact.php">CONTACT</a></li>
            <li><a href="References.php">REFERENCES</a></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
            <span class="icons">
                <a href="https://www.facebook.com/profile.php?id=100003531320849">
				<i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/catwheezie/">
                <i class="fab fa-instagram"></i></a>
				<a href="https://twitter.com/CatsHeld">
                <i class="fab fa-twitter"></i></a>
				<a href="https://github.com/lc-santy">
                <i class="fab fa-github"></i></a>
            </span>
        </ul>
    </nav>
    <!-- Main -->
    <div class="main" id="bgchanger">
        <div class="sub-container">
			<p class="p2">My Personal Webpage</p>
			<p class="p3">Leander Santy</p>
			<p class="p4"> 					
				In this webpage you will be able to know more about me<br>
				such as my personal details, education background, hobbies<br>
				and interests, etc.<br>
			</p>

			<button class="dl"><a href="Webpage.html">Discover</a></button>
            
            <p class="contact-me">Contact Me</p>
            <ul class="footer-ul">
                <li><a href="https://www.facebook.com/profile.php?id=100003531320849"><img src="images/facebook.png"></a></li>
                <li><a href="https://twitter.com/CatsHeld"><img src="images/twitter.png"></a> </li>
                <li><a href="https://www.instagram.com/catwheezie/"><img src="images/instagram.png"></a> </li>
                <li><a href="https://github.com/lc-santy"><img src="images/github.png"></a></li>
            </ul>
        </div>

        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="controller">
                    <div id="controls">
                        <button class="previous"><i class="fa-solid fa-angle-left"></i></button>
                        <button class="next"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="my-slider">
                    <div>
                        <div class="slide">
                            <div class="slide-img img-1" data-img="images/carousel/hutaobg.jpg" 
							data-title1="Genshin Impact's" 
							data-title2="Hu Tao" 
							data-desc="My main in Genshin Impact. Hu Tao is a 5 star Pyro Polearm<br>DPS 
							that excels in single-target combat and dealing high<br>reaction damage"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-2" data-img="images/carousel/niloubg.png" 
							data-title1="Gendhin Impact's" 
							data-title2="Nilou" 
							data-desc="Nilou is a 5 star Hydro Sword character and is best used 
							in a<br>Dendro and Hydro exclusive team, due to the very unique<br>
							way she creates special Dendro Cores, and the damage she<br>creates 
							scaled off her health."></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-3" data-img="images/carousel/raidenbg.png" 
							data-title1="Genshin Impact's" 
							data-title2="Raiden Shogun" 
							data-desc="Raiden Shogun is a 5 star Electro Polearm character that is 
							best<br>used as a burst support/sub dps who can restore energy for<br>
							the entire team while dealing damage onfield
							"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-4" data-img="images/carousel/sorakabg.jpg" 
							data-title1="League of Legend's" 
							data-title2="Soraka" 
							data-desc="My main in League of Legends. Soraka is the type of support champion<br>
							that brings amazing heals and prevents the enemy team to unleash<br>all their skills 
							on your team with her great crowd control skill."></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-5" data-img="images/carousel/leblancbg.jpg" 
							data-title1="League of Legend's" 
							data-title2="LeBlanc" 
							data-desc="LeBlanc is generally best utilised as a potential kill lane<br>
							in the early game and as a sidelane threat in the mid to late game."></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-6" data-img="images/carousel/leonabg.jpg" 
							data-title1="League of Legend's" 
							data-title2="Leona" 
							data-desc="Leona is a pure tank, specializing in disruption and 
							soaking up damage<br>for her teammates. She has great mobility 
							and excels at helping take<br>down enemy targets quickly."></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-7" data-img="images/carousel/osubg.gif" 
							data-title1="osu!" 
							data-title2="203,667" 
							data-desc="My global rank in the game osu!, osu! is a free-to-play 
							rhythm game<br> primarily developed, published, and created by Dean 
							<q>peppy</q> Herbert."></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-8" data-img="images/carousel/pasaybg.jpg" 
							data-title1="Place of Birth" 
							data-title2="Pasay City" 
							data-desc="Pasay, also known as the travel city, is one of the most 
							populated cities<br>in Metro Manila filled with busy markets, karaoke 
							bars, shopping malls and<br>world-class art galleries."></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-9" data-img="images/carousel/prebg.jpg" 
							data-title1="Preschool" 
							data-title2="CCMP" 
							data-desc="Ching Chay Tho Memorial Preschool is where I attended preschool
							"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-10" data-img="images/carousel/elembg.jpg" 
							data-title1="Elementary" 
							data-title2="PPCHA" 
							data-desc="In elementary, I went to Philippine Pasay Chung Hua 
							Academy"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-11" data-img="images/carousel/hsbg.jpg"
							data-title1="High School" 
							data-title2="PCNSHS" 
							data-desc="In high school and senior high school, I went to Pasay 
							City National Science High School"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-12" data-img="images/carousel/collbg.jpg"
							data-title1="College" 
							data-title2="APC" 
							data-desc="Currently enrolled in BSIT at Asia Pacific College "></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-13" data-img="images/carousel/movbg.jpg"
							data-title1="Hobbies & Interests" 
							data-title2="Movies & Series" 
							data-desc="I enjoy binge watching movies and series no matter the genre"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-14" data-img="images/carousel/musicbg.png"
							data-title1="Hobbies & Interests" 
							data-title2="Music" 
							data-desc="Listening to music has always been something I have 
							been fond of."></div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-15" data-img="images/carousel/gambg.jpg"
							data-title1="Hobbies & Interests" 
							data-title2="Video Games" 
							data-desc="Ever since I was given a console as a kid, I have always enjoyed
							playing<br>different kinds of games. Now I play in my PC usually with
							friends<br>in online multiplayer games."></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
<script src="tinyslider.js"></script>
<script src="navbar.js"></script>
<script>
    var default_title1 = 'My Personal Webpage';
    var default_title2 = 'Leander Santy';
    var default_desc = 'In this webpage you will be able to know more about me<br>\
                such as my personal details, education background, hobbies<br>\
                and interests, etc.<br>';

    $(".slide-img").each(function(i,elem){
        var img = $(this).data("img");
        var title1 = $(this).data("title1");
        var title2 = $(this).data("title2");
        var desc = $(this).data("desc");

        $(this).on("mouseover",function(){
            $("#bgchanger").css({
                "background":"linear-gradient(to top, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.3) 50%), url("+img+")",
                "background-repeat":"no-repeat",
                "background-position": "center",
                "background-size": "cover",
            });

            $(".p2").html(title1);
            $(".p3").html(title2);
            $(".p4").html(desc);
        });


        $(this).on("mouseout",function(){
            $("#bgchanger").removeAttr("style");
            $(".p2").html(default_title1);
            $(".p3").html(default_title2);
            $(".p4").html(default_desc);
        }); 
    });

</script>
