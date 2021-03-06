
@extends('layouts.app')
@section('nav') fixed-top
@endsection

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner" role="listbox">
    <!-- Slide One - Set the background image for this slide in the line below -->
    <div class="carousel-item active" style="background-image: url('img/bg4.png')">
      <div class=" text-left">
        <div class="container" >
        <h2 class="lead">FamilyShare macht es einfach, <br> mit ihrer Familie in Kontakt zu bleiben </h2>
        <h2> Zuschauen. Zuhören. <br> Zusammensein. </h2>
      </div>
      </div>
    </div>
    <!-- Slide Two - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('img/bg3.jpg')">
      <div class=" text-left">
        <div class="container" >
        <h2 class="lead">Menschlich & Sozial</h2> <h2> FamilyShare ist Ausdruck eines tief <br> 
        sitzenden Wunsches: Mehr Lebensfreude <br> für Senioren</h2>
       
        </div>
      </div>
    </div>
    
    <!-- Slide Three - Set the background image for this slide in the line below -->
    <div class="carousel-item" style="background-image: url('img/bg6.jpg')">
      <div class=" text-left">
        <div class="container" >
          <h2 class="lead"></h2> <h2> "Dank FamilyShare kann <br> 
          ich meinem Vater an schönen <br> Momenten teilhaben lassen."</h2>
          <p style="font-size: 20px;">Laura K. - FamilyShare Nutzerin aus Dortmund</p>
         
          
      </div>
      
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>


<!--<section id="hero" class="wow fadeIn">
  <div class="hero-container">
    <h1>Welcome to FamilyShare</h1>
    <h2>macht es einfach, mit ihrer Familie in Kontakt zu bleiben</h2>
  </div>
</section>


==========================
  Get Started Section
============================-->
<section id="get-started" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">

      <h2>Auf einen Blick</h2>
      <p class="separator">Unsere wichtigsten Features</p>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-4">
        <div class="feature-block">

          <img src="img/svg/smile.svg" alt="img" class="img-fluid">
          <h4>Zusammensein</h4>
          <p>Mit FamilyShare die Familie online und in Echtzeit sehen und hören 
            </p>
         

        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="feature-block">

          <img src="img/svg/alt.svg" alt="img" class="img-fluid">
          <h4>Für Senioren entwickelt</h4>
          <p> <br> Absoluter Durchblick, mit einer schlanken Bedienoberfläche und großen, kontrastreichen Symbolen
          </p>
          

        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="feature-block">

          <img src="img/svg/software.svg" alt="img" class="img-fluid">
          <h4>Regelbasiert</h4>
          <p> <br> Wann das Zuschauen möglich sein soll, kann die Familie bequem im Regelmenü einstellen</p>
         

        </div>
      </div>

    </div>
  </div>

</section>



<!--==========================
  Features Section
============================-->

<section id="features" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Unsere Features</h2>
      <p class="separator"></p>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/werkzeug.svg" alt="img" class="img-fluid">
          <h4>Installation vor Ort
          </h4>
          <p>Für Premium-Kunden übernehmen wir die Installation ihrer Kamera für Sie vor Ort</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/Uhr.svg" alt="img" class="img-fluid">
          <h4>Service rund um die Uhr</h4>
          <p>Sie haben Fragen? Wir sind rund um die Uhr für Sie da</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/laptop.svg" alt="img" class="img-fluid">
          <h4>Ausgelegt für alle Geräte</h4>
          <p>Sie wollen unsere App auf Ihrem Handy oder Tablet benutzen? Kein Problem</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/audio.svg" alt="img" class="img-fluid">
          <h4>Audio Support</h4>
          <p>FamilyShare unterstützt unilaterale audiovisuelle Streams und sorgt so für ein noch besseres virtuelles Erlebnis</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/hd.svg" alt="img" class="img-fluid">
          <h4>Full HD Support</h4>
          <p>FamilyShare kann hochauflösende Videostreams empfangen und anzeigen</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/schild.svg" alt="img" class="img-fluid">
          <h4>Datenschutz</h4>
          <p>Ihre Privatsphäre ist uns wichtig. Deshalb sind ihre Daten auf deutschen Servern gespeichert</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/update.svg" alt="img" class="img-fluid">
          <h4>Neue Updates und Features</h4>
          <p>Wir veröffentlichen regelmäßig Updates und neue Features</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="img/svg/alt.svg" alt="img" class="img-fluid">
          <h4>Einfaches bezahlen</h4>
          <p>Alle gängigen Zahlungsmittel werden akzeptiert</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!--==========================
  Pricing Table Section
============================-->
<section id="pricing" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">

      <h2>Unsere Preise</h2>
      <p class="separator"></p>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-4">
        <div class="block-pricing">
          <div class="table">
            <h4>Testversion</h4>
            <h2>Kostenlos</h2>
            <ul class="list-unstyled">
              
              <li> 14 Tage gültig</li>
              
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"></i>Jetzt ausprobieren</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="block-pricing">
          <div class="table">
            <h4>Standard</h4>
            <h2>5€ pro Monat</h2>
            <ul class="list-unstyled">
              
              <li> Alle Funktionen</li>
            
           
            </ul>
            <div class="table_btn">
              <a href="{{ route('register') }}" class="btn"><i class="fa fa-shopping-cart"></i>Buchen</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="block-pricing">
          <div class="table">
            <h4>Zusatzservice</h4>
            <h2>Einmalig 75€</h2>
            <ul class="list-unstyled">
              
              <li> Exklusive Installation vor Ort</li>
              
            </ul>
            <div class="table_btn">
              <a href="{{ route('register') }}" class="btn"><i class="fa fa-shopping-cart"></i>Buchen</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
       <!-- <div class="block-pricing">
          <div class="table">
            <h4>profeesional</h4>
            <h2>$29</h2>
            <ul class="list-unstyled">
              <li><b>4 GB</b> Ram</li>
              <li><b>7/24</b> Tech Support</li>
              <li><b>40 GB</b> SSD Cloud Storage</li>
              <li>Monthly Backups</li>
              <li>Palo Protection</li>
            </ul>
            <div class="table_btn">
              <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
            </div>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</section>

<!--==========================
  Screenshots Section
============================
<section id="screenshots" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>App Gallery</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>
    </div>
  </div>

  <div class="container">
    <div class="owl-carousel owl-theme">

      <div><img src="img/screen/1.jpg" alt="img"></div>
      <div><img src="img/screen/2.jpg" alt="img"></div>
      <div><img src="img/screen/3.jpg" alt="img"></div>
      <div><img src="img/screen/4.jpg" alt="img"></div>
      <div><img src="img/screen/5.jpg" alt="img"></div>
      <div><img src="img/screen/6.jpg" alt="img"></div>
      <div><img src="img/screen/7.jpg" alt="img"></div>
      <div><img src="img/screen/8.jpg" alt="img"></div>
      <div><img src="img/screen/9.jpg" alt="img"></div>

    </div>
  </div>

</section>-->

<!--==========================
  Video Section


<section id="video" class="text-center wow fadeInUp">
  <div class="overlay">
    <div class="container-fluid container-full">

      <div class="row">
        <a href="#" class="js-modal-btn play-btn" data-video-id="s22ViV7tBKE"></a>
      </div>

    </div>
  </div>
</section>-->

<!--==========================
  Team Section
============================-->
<section id="team" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">

      <h2>Das Team</h2>
      <p class="separator"></p>

    </div>
  </div>

  <div class="container">
    <div class="row text-center">
      <div class="col-lg-3">
      </div>
      <div class="col-lg-3">
        <div class="team-block bottom">
          <img src="img/team/Noel.jpg" class="" alt="img">
          <div class="team-content">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <span>Manager</span>
            <h4>Noel</h4>
          </div>
        </div>
      </div>

    <div class="col-lg-3">
        <div class="team-block bottom">
          <img src="img/team/Gabriel.jpg"  alt="img">
          <div class="team-content">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <span>Manager</span>
            <h4>Gabriel</h4>
          </div>
        </div>
      </div>
 <!--
      <div class="col-md-6 col-md-4 col-lg-3">
        <div class="team-block bottom">
          <img src="img/team/3.jpg" class="img-responsive" alt="img">
          <div class="team-content">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <span>manager</span>
            <h4>Kimberly Tran</h4>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-md-4 col-lg-3">
        <div class="team-block bottom">
          <img src="img/team/4.jpg" class="img-responsive" alt="img">
          <div class="team-content">
            <ul class="list-unstyled">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <span>manager</span>
            <h4>Kimberly Tran</h4>
          </div>
        </div>
      </div>-->

    </div>
  </div>
</section>






<!--==========================
  Trenner
============================-->
<section id="newsletter" class="newsletter text-center wow fadeInUp">
  <div class="overlay padd-section">
    <div class="container">

    

      


    </div>
  </div>
</section>
<section id="tutorial">
  <div class="container padd-section wow fadeInUp">
    <div class="section-title text-center">

      <h2>Wie funktioniert es?</h2>
      <h4>In diesem Video zeigen wir Ihnen wie sie unseren Service benutzen können</h4>

    </div>
  
    <div class="embed-responsive embed-responsive-16by9">
    <iframe style="border-right:2px;border-left:2px" class="embed-responsive-item" src="https://www.youtube.com/embed/dUj2l3fCX3g" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
  </div>
  </div>
</section>
<!--==========================
  Contact Section
============================-->
<section id="contact" class="padd-section wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Kontakt</h2>
      <p class="separator">Haben sie Fragen? Schreiben Sie uns.</p>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="fa fa-map-marker"></i>
            <p>TU Dortmund<br>Dortmund, Do 44227</p>
          </div>

          <div class="email">
            <i class="fa fa-envelope"></i>
            <a href="mailto:info@family-share.de"><p>info@family-share.de</p></a>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p>0231 135246</p>
          </div>
        </div>

        <!--<div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>-->

      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <div id="errormessage"></div>
          <form name="contactform" method="post" action="#email">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Titel" data-rule="minlen:4" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Nachricht"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Nachricht versenden</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- E-mail script------------------------------------------->

 
<!-- <div id="email">Your message has been sent. Thank you!</div> -->
 

 
</section><!-- #contact -->





<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<footer id="sticky-footer" class="py-2 bg-dark text-white-50">
  <div class="container text-center">
    <small>CopyRight © 2020 FamilyShare All Rights Reserved</small>
  </div>
</footer>
    @endsection