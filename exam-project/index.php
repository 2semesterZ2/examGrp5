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
<html lang="da">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Liège waffles by Casper Elbech - the best dessert what you can get in Aarhus city.">
<meta name="author" content="Group 5 - Eivydas Barysas, Thomas Aagard Poulsen, Gabriel-Florin Pojum, Dāvis Ābols">
<title>Liège waffles</title>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 

<!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- favicon -->
<link rel="icon" href="img/favicon.png" type="image/png"/>

<!-- Styles -->
<link href="css/styles.min.css" rel="stylesheet">
</head>

<body>
    <div class="loader"></div>
  <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
  <!-- Wrapper -->
<div class="wrapper">
    <main role="main">
  <!-- Intro screen -->
  <section id="home">
      <!-- Navigation -->
    <nav role="navigation" id="top-nav" class="navbar navbar-expand-lg navbar-dark fixed-top nav-bg">
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
              <a class="js-scroll-trigger nav-link" href="#about">Om</a>
            </li>
            <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#my-product">Produkt</a>
            </li>
            <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#video">Proces</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#menu">Menu</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#testimonials">Anbefaling</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#schedule" >Tidsplan</a>
            </li>
                        <li class="nav-item">
              <a class="js-scroll-trigger nav-link" href="#contact">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <h1 class="kadisoka-blue">Freelance vaffel chef</h1>
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
          <h2 class="kadisoka-orange section-heading">Om mig</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4"></div>
        <div class="col-xl-6 mx-auto text-left">
          <p class="paddings text-box text-faded mb-4">Hej mit navn er Casper Elbech og jeg er en freelance kok, som kommer ud til private arrangement og festivals. Så kan jeg dele min kærligheden til Liège vafler med andre. Du kan kontakte mig læmgere nede eller du kan læse mere om min passion. .<br>
            <a href="#" data-toggle="modal" data-target="#about-me-modal" class="orange-button btn btn-light btn-xl">Læs mere</a></p>
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
                <article>
                <p> Min vaffel passion begyndte for tre år siden, hvor jeg Caspar Elbech besøgte Belgien for   første gang. Det var ikke smagen af vafler, da fik mig til dertil. 
                  <br>
                  <br>
                  Da jeg ankom til Belgien, kunne jeg ikke engang li vafler, men det ændrede sig hurtig, jeg blev overrasket over at finde ud af at belgiske vafler ikke er så søde og mild som den vi har herhjemme.  Efterfølgende poppede tanken flere gange op, på at introducere disse vidunderlige vafler til Danmark.  <br>
                  <br>
                  Så i efteråret 2016. Fik jeg muligheden for præsentere disse vafler for master chef Jesper Koch, gastromi chef ved Aarhus Central Food Market. Derefter gik tingene meget stærkt for mig og få måneder senere, havde jeg sagt mit job op og begyndte mit vaffel eventyr.   
                  <br>
                  <br>
                  Se artikel om mig fra Aarhus Update:<br>
                  <a href="http://aarhusupdate.dk/liege-aarhus-anmeldelse/">http://aarhusupdate.dk/liege-aarhus-anmeldelse/</a></p>
                </article>
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
          <h2 class="kadisoka-orange section-heading">Mit produkt</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-6 text-left">
          <p class="paddings text-box text-faded mb-4">For belgiske mennesker er vafler mere end bare en snack - de er en national skat. I hver region har de deres egen opskrifter, som er gået fra generation til generation. <br>
            <a href="#" data-toggle="modal" data-target="#my-product-modal" class="orange-button btn btn-light btn-xl">Læs mere</a></p>
        </div>
        <!-- My product Expanded (Modal) -->
        <div class="modal fade" id="my-product-modal">
          <div class="my-product-modal modal-dialog modal-lg">
            <div class="modal-content"> 
              
              <!-- Modal Header -->
              <div class="modal-header">
                <h2 class="paddings-modal-header kadisoka-orange modal-title">Mit produkt</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="paddings modal-body">
                <article>
                <p>For belgiske mennesker er vafler mere end bare en snack – de er nationalt skat. I hver region har de deres egen opskrifter, som er gået fra generation til generation. <br>
                  <br>
                  Jeg har været så heldig med at fået en opskrift fra den østlige region, Liege. Der er vaflerne karakteriseret med at man bruger en speciel perle sukker som bidrager til den dejlige lækre karamelliseret skorpe. Mine vafler bliver serveret alt naturlig som bær flødeskum, Belgisk chokolade eller pocherede æg, bacon og karse. </p>
                </article>
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
          <h2 class="kadisoka-orange section-heading">Proces</h2>
          <p>Se hvordan mine vafler bliver lavet fra bunden af. </p>
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
            <li>• Klassisk vaffel.</li>
            <li>• Vaffel med chokolade</li>
            <li>• Vaffel med topping</li>
            <li>• Vaffel med hjemmelavet is</li>
            <li>• Vaffel med bacon og pocherede æg</li>
            <li>• Belgisk perle sukker</li>
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
          <h2 id="testimonials-heading" class="text-center kadisoka-orange section-heading">Anbefalinger</h2>
      </div>
  <div class="card col-xl-11 mt-2">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
        <div class="w-100 carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xl-12 mx-auto">
                  <blockquote class="paddings text-box text-faded mb-4 review">“Gode vafler og fantastic service! Så sprøde og friske fra vaffeljernet og med flødeskum eller chokolade.” <br><a href="https://www.facebook.com/pg/liegevaffel/reviews/?ref=page_internal">- Ole Dahl Valgreen, 9 November 2016.</a><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a></blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xl-12 mx-auto">
                  <blockquote class="paddings text-box text-faded mb-4 review">“Der er ikke meget at sige mere end: Yum! Du gør det godt, Casper.” <br><a href="https://www.facebook.com/pg/liegevaffel/reviews/?ref=page_internal">- Camilla Bloch Vorum, 19 November 2016.</a><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a></blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-xl-12 mx-auto">
                  <blockquote class="paddings text-box text-faded mb-4 review">“Disse vafler er de bedste jeg har  smagt.” <br><a href="https://www.facebook.com/pg/liegevaffel/reviews/?ref=page_internal">- Amanda Nielsen, 15 October 2016.</a><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a></blockquote>
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
          <h2 id="testimonials-heading" class="text-center kadisoka-orange section-heading">Tidsplan</h2>
          <p>Her kan du se hvilke dage jeg er ledig til at blive hyrert.</p>
      </div>
    </div>
          <div class="row">
         <div class="col-xl-8 mx-auto">
          <div class="embed-responsive embed-responsive-16by9">
<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=abolzzy%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FStockholm" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
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
          <h2 class="text-center kadisoka-orange section-heading">Kontakt mig</h2>
          <p>Du er velkommen til at skrive en mail til mig, med en beskrivelse af dine ønsker og jeg vil kontakte jer inden for 24 timer. Håber vi ses snart !             :)</p>
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
                <a href="en_index.php" hreflang="en"><img src="img/english-flag-icon.ico" alt="english-flag-icon"></a>
          <a href="index.php" hreflang="da"><img src="img/danish-flag-icon.ico" alt="danish-flag-icon"></a>
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
					         <small>
            Gabriel Florin-Pojum, Eivydas Barysas, Thomas Aagaard Poulsen, Dāvis Ābols
            <br>&copy; All rights reserved, 2017</small>
				</div>
			</div>
    </main>
      <!-- Wrapper end -->
</div>

<!-- Plugin JavaScript --> 
<script src="jquery-easing/jquery.easing.min.js"></script>

<!-- Bootstrap core JavaScript --> 
<script src="bootstrap/js/bootstrap.bundle.min.js"></script> 

<!-- Scripts --> 
<script src="js/scripts.min.js"></script>
</body>
</html>
