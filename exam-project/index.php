<?php
 $errName = "";
 $errEmail ="";
 $errMessage ="";
 $result = "";
 if (isset($_POST["submit"])) {
   $name = $_POST['Name'];
   $email = $_POST['email'];
   $message = $_POST['Message'];
   $from = 'Contact Form';
   $to = 'liegevaffel@gmail.com';
   $subject = 'Message from Contact form of Liege website';
   
   $body ="From: $name\n E-Mail: $email\n Message:\n $message";
   // Check if name has been entered
   if (!$_POST['Name']) {
     $errName = 'Please enter your name';
   }
     
   //Check if message has been entered
   if (!$_POST['Message']) {
     $errMessage = 'Please enter your message';
   }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
 if (mail ($to, $subject, $body, $from)) {
   $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
 } else {
   $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
 }
}
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Liège waffles by Casper Elbech - the best dessert what you can get in Aarhus city.">
<meta name="author" content="Group 5 - Eivydas Barysas, Thomas Aagard Poulsen, Gabriel-Florin Pojum, Dāvis Ābols">
<title>Liège waffles</title>

<!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- favicon -->
<link rel="icon" href="img/favicon.png" type="image/png"/>

<!-- Styles -->
<link href="css/styles.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
  <!-- Intro screen -->
  <section id="home">
      <!-- Navigation -->
    <nav id="top-nav" class="navbar navbar-expand-lg navbar-dark fixed-top nav-bg">
      <div class="container">
        <a class="js-scroll-trigger navbar-brand" href="#home">
          <img src="img/logo.jpg" width="60" height="60" alt="Liege logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#my-product">Product</a>
            </li>
            <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#video">Process</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#menu">Menu</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#testimonials">Testimonials</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#schedule" >Schedule</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <h1 class="kadisoka-blue">Freelance waffle chef</h1>
          <br>
          <h2 id="by-casper">Casper Elbech</h2>
        </div>
      </div>
      <div class="row">
                <div class="col-lg-12 mx-auto">
        <a id="find-out-more" class="btn btn-xl js-scroll-trigger" href="#about"><img src="img/arrow-down.png" alt="arrow-down"/></a> </div>
      </div>
      </div>
    </div>
  </header>
	</section>
  
  <!-- about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-xl-7"></div>
        <div class="col-xl-5 mx-auto">
          <h2 class="kadisoka-orange section-heading">About me</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4"></div>
        <div class="col-xl-6 mx-auto text-left">
          <p class="paddings text-box text-faded mb-4">Hello, my name is Casper Elbech and I am a freelance waffle chef that cooks in private events and festivals so that I can share my love of the Liège waffle with others. You can contact me below or continue reading about my passion.<br>
            <a href="#" data-toggle="modal" data-target="#about-me-modal" class="orange-button btn btn-light btn-xl">Read more</a></p>
        </div>
        <!-- About Me Expanded (Modal) -->
        <div class="modal fade" id="about-me-modal">
          <div class="about-me-modal modal-dialog modal-lg">
            <div class="modal-content"> 
              
              <!-- Modal Header -->
              <div class="modal-header">
                <h2 class="paddings-modal-header kadisoka-orange modal-title">About me</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="paddings modal-body">
                <p>My waffle-passion began three years ago when I, Casper Elbech, came to visit Belgium for the first time. Though it was not the taste of waffles that drove me there.<br>
                  <br>
                  You see, when I first arrived in Belgium, I didn’t even like waffles – but that quickly changed. I was surprised to discover that the Belgian waffles are not as sweet and bland as the ones I was used to from home. Afterwards the thoughts of introducing Denmark to these delicious waffles began to intrigue me.<br>
                  <br>
                  So, in the fall of 2016, I was given the opportunity to present those waffles to Master Chef Jesper Koch, gastronomic Chef at Aarhus Central Food Market. Then, things started moving really fast for me and a few months later I had quit my job and began my waffle-adventure.<br>
                  <br>
                  See the article about me in Aarhus Update:<br>
                  <a href="http://aarhusupdate.dk/liege-aarhus-anmeldelse/">http://aarhusupdate.dk/liege-aarhus-anmeldelse/</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-pics row">
        	<div class="col-xl-12 mx-auto">
        		<img class="img-fluid" src="img/about-pic-mobile.jpg" alt="Casper Elbech">
        	</div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- My product section -->
  <section id="my-product">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 mx-auto">
          <h2 class="kadisoka-orange section-heading">My product</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-6 text-left">
          <p class="paddings text-box text-faded mb-4">To the Belgian people, waffles are more than just a snack – they are a national treasure. Every region has their own recipe, which they pass down from generation to generation.<br>
            <a href="#" data-toggle="modal" data-target="#my-product-modal" class="orange-button btn btn-light btn-xl">Read more</a></p>
        </div>
        <!-- My product Expanded (Modal) -->
        <div class="modal fade" id="my-product-modal">
          <div class="my-product-modal modal-dialog modal-lg">
            <div class="modal-content"> 
              
              <!-- Modal Header -->
              <div class="modal-header">
                <h2 class="paddings-modal-header kadisoka-orange modal-title">My product</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="paddings modal-body">
                <p>To the Belgian people, waffles are more than just a snack – they are a national treasure. Every region has their own recipe, which they pass down from generation to generation.<br>
                  <br>
                  I have been blessed with the ability to collect a recipe from the eastern region of Belgium; Liège. There, the waffles are characterized by a special pearl sugar that contributes to the delicious caramelized crust. My waffles are served all natural, with berry cream, Belgian chocolate or a poached egg, bacon and garden cress.</p>
              </div>
            </div>
          </div>
        </div>
                <div class="mobile-pics row">
        	<div class="col-xl-12 mx-auto">
        		<img class="img-fluid" src="img/my-product-pic-mobile.jpg" alt="My products">
        	</div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Video section -->
  <section id="video">
    <div class="container">
      <div class="row">
        <div class="col-xl-6"></div>
        <div class="col-xl-6 mx-auto">
          <h2 class="kadisoka-orange section-heading">Process</h2>
          <p>See how my waffles are being made from the scratch.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 mx-auto">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h_A42-3PazE?rel=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Menu section -->
  <section id="menu">
    <div class="container">
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-5 mx-auto">
          <h2 class="kadisoka-orange section-heading">Menu</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3"></div>
        <div class="col-xl-5">
          <ul class="paddings text-box text-faded mb-4">
            <li>• Classic waffle</li>
            <li>• Waffle with chocolate</li>
            <li>• Waffle with topping</li>
            <li>• Waffle with homemade icecream</li>
            <li>• Waffle with bacon and pouched egg</li>
            <li>• Belgian pearl sugar</li>
          </ul>
        </div>
                        <div class="mobile-pics row">
        	<div class="col-xl-12 mx-auto">
        		<img class="img-fluid" src="img/menu-pic-mobile.jpg" alt="Waffle with bacon and pouched egg">
        	</div>
        </div>
      </div>
    </div>
  </section>

<!-- Testimonials section -->
<section id="testimonials">
          <div class="container">
       <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-5 mx-auto text-center">
          <h2 id="testimonials-heading" class="text-center kadisoka-orange section-heading">Testimonials</h2>
      </div>
  <div class="card col-xl-11 mt-2">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="w-100 carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xl-12 mx-auto">
                  <p class="paddings text-box text-faded mb-4 review">“Great waffles and amazing service! So crispy and fresh out of the iron, with cream or chocolate.” <br><a href="https://www.facebook.com/pg/liegevaffel/reviews/?ref=page_internal">- Ole Dahl Valgreen, 9 November 2016.</a><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xl-12 mx-auto">
                  <p class="paddings text-box text-faded mb-4 review">“There is not much to say beyond: YUM! You are doing well, Casper.” <br><a href="https://www.facebook.com/pg/liegevaffel/reviews/?ref=page_internal">- Camilla Bloch Vorum, 19 November 2016.</a><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xl-12 mx-auto">
                  <p class="paddings text-box text-faded mb-4 review">“These waffles are the best waffles I have ever tasted.” <br><a href="https://www.facebook.com/pg/liegevaffel/reviews/?ref=page_internal">- Amanda Nielsen, 15 October 2016.</a><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
	</div>
</section>

<!-- My schedule -->
<section id="schedule">
  <div class="container">
    <div class="row">
        <div class="col-xl-5 mx-auto text-center">
          <h2 id="testimonials-heading" class="text-center kadisoka-orange section-heading">Schedule</h2>
          <p>Here you can see on which days I am available for hiring.</p>
      </div>
    </div>
          <div class="row">
         <div class="col-xl-8 mx-auto">
          <div class="embed-responsive embed-responsive-16by9">
 <iframe id="g-calendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=2&amp;hl=da&amp;bgcolor=%23cc9933&amp;src=abolzzy%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FRiga" style="border:solid 1px #777" width="800" height="240" frameborder="0" scrolling="no"></iframe>
			 </div>
	</div>
</div>
</div>
</div>
</section>
<!-- Contact -->
<section id="contact">
<div class="container">
      <div class="row">
        <div class="col-xl-8 mx-auto text-center">
          <h2 class="text-center kadisoka-orange section-heading">Contact me</h2>
          <p>You are welcome to write me an e-mail with a description of your wishes and I will contact with you within 24 hours. Hope to see you soon! :)</p>
        </div>
      </div>
	<div class="row">
		<form role="form" id="contact-form" class="contact-form">
                    <div class="row">
                		<div class="col-xl-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
                  		</div>
                  	</div>
                    	<div class="col-xl-6">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-xl-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="text-center col-xl-12">
                  <button type="submit" class="btn main-btn">Send mail</button>
                  </div>
                  </div>
                </form>
	</div>
	</div>
  </section>
<!-- footer -->
<footer>
              <div id="language" class="text-center">
                <span>Language:</span>
                <a href="index.php" class="active-lang">en</a>
          <a href="dk_index.php">dk</a>
        </div>
		<ul id="footer-ul" class="text-center">
              <li"><a href="https://www.facebook.com/liegevaffel/"><img src="img/facebook_icon1.png" alt="Facebook Icon"/></a></li>
      <li"><a href="https://www.instagram.com/liegevaffel/"><img src="img/instagram_icon1.png" alt="Instagram Icon"/></a></li>
		<li><a href="tel:+45 50 48 32 03">+45 50 48 32 03</a></li>
		<li><a href="mailto:&#108;&#105;&#101;&#103;&#101;&#118;&#097;&#102;&#102;&#101;&#108;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">&#108;&#105;&#101;&#103;&#101;&#118;&#097;&#102;&#102;&#101;&#108;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a> </li>
			<li>#liegevaffel</li>
			<li><img src="img/transparent_bike1.png" alt="Liege bike" id="bike"/></li>
			</ul>
			<div class="row">
				<div class="col-xl-3 mx-auto text-center">
					<span>&copy; All rights reserved, 2017</span>
				</div>
			</div>
</div>

<!-- jQuery --> 
<script src="jquery/jquery.min.js"></script> 

<!-- Plugin JavaScript --> 
<script src="jquery-easing/jquery.easing.min.js"></script>

<!-- Bootstrap core JavaScript --> 
<script src="bootstrap/js/bootstrap.bundle.min.js"></script> 

<!-- Scripts --> 
<script src="js/scripts.js"></script>
</body>
</html>
