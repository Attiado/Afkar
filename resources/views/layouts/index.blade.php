
@section('content')

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Afkar</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/owl.css">
    <link rel="stylesheet" href="/css/lightbox.css">

  </head>

<body>
    <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
          <p>  <em> AfKar</em> Le plus grand blog du monde !  </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  @include('layouts.header')
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  
  <section class="section main-banner" id="top" data-section="section1">

      <video autoplay muted loop id="bg-video">
          <source src="images/course-video.mp4" type="video/mp4" />
      </video>
      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div>
                <div class="caption">
              <h2> AFKAR </h2>
              <p>Bienvenue sur<a rel="nofollow" href="" target="_blank">AfKar</a>. D??couvrez le monde avec nous !</p>
              <div class="main-button-red">
                  <div><a href="apropos.html"> En Savoir Plus </a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Meuilleurs Articles</h4>
                <p>************************************</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Meuilleurs Sujets</h4>
                <p>************************************</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Meuilleurs R??dacteurs</h4>
                <p> ************************************ </p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>News & Actualit??s</h4>
                <p>************************************</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Question & R??ponse</h4>
                <p>************************************</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Les derni??res articles</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Cat??gories</h4>
            <ul>
              <li><a href="#">Sant?? | </a></li>
              <li><a href="#">Cuisine| </a></li>
              <li><a href="#">Fashion | </a></li>
              <li><a href="#">Animaux | </a></li>
           <li><a href="#">Plantes | </a></li>
          <li><a href="#">Beaut?? | </a></li>
                                <li><a href="#">Travail | </a></li>
                                <li><a href="#">Amour | </a></li>
                                <li><a href="#">News | </a></li>
                                <li><a href="#">Education | </a></li>
                                <li><a href="#">Jeux | </a></li>
                                <li><a href="#">Sport | </a></li>
                                <li><a href="#">Sciences | </a></li>
                                <li><a href="#">Question & r??ponse</a></li>
            </ul>
            <div class="main-button-red">
              <a href="categories.html">Voir Plus</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Cin??ma</span>
                  </div>
                  <a href="article1.html"><img src="images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div> 
                  <a href="article1.html"><h4>PLUS VRAIES QUE NATURE</h4></a>
                  <p> Exemples de trois films cannois dans lesquels des <br>com??diennes non professionnelles tiennent des premiers r??les.</p>
               
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Sant??</span>
                  </div>
                  <a href="article2.html"><img src="images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="article2.html"><h4>IN??GAUX AU CORONAVIRUS</h4></a>
                  <p>MLes hommes r??sisteraient moins bien ?? l???infection. <br> Question de biologie et de mode de vie. </p>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Education</span>
                  </div>
                  <a href="article3.html"><img src="images/meeting-03.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href="article3.html"><h4>La valeur de l'??ducation</h4></a>
                  <p>
L'??ducation est un puissant agent de changement. Elle am??liore la sant?? et les moyens de subsistance..</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>Maison</span>
                  </div>
                  <a href="article4.html"><img src="images/meeting-04.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>30</span></h6>
                  </div>
                  <a href="article4.html"><h4>Am??nager votre salon</h4></a>
                  <p>Une maison en cette ??poque est un havre qui se constitue plusieurs espaces.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>R??joindre notre ??quipe !</h3>
                <p>
                  voulez vous rejoindre notre ??quipe des r??dacteurs professionnels ?

                </p>
                <div class="main-button-red">
                  <div ><a href="postuler.html">Postuler !</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>Commander des articles </h3>
                <p>Profitez de l'expertise de notre ??quipe et du savoir-faire de nos r??dacteurs professionnels pour faire r??diger vos textes, rapidement et sans effort</p>
                <div class="main-button-yellow">
                  <div ><a href="contact.html">Nous Contacter!</a></div>
              </div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Nos Cat??gories Populaires</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="img/img-03.jpg" alt="Course One">
              <div class="down-content">
                <h4>Sant??</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span> 25 Articles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="img/img-16.jpg" alt="Course Two">
              <div class="down-content">
                <h4> Fashion </h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>65 Articles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="img/img-13.jpg" alt="">
              <div class="down-content">
                <h4>Cin??ma</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>85 Articles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="img/img-07.jpg" alt="">
              <div class="down-content">
                <h4>News</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>1125 Articles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="img/img-10.jpg" alt="">
              <div class="down-content">
                <h4>Technologie</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span> 3200 Articles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="img/img-12.jpg" alt="">
              <div class="down-content">
                <h4> Education </h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>25 Articles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <img src="img/img-05.jpg" alt="">
              <div class="down-content">
               <a href="sport.html"> <h4>Sport</h4>  </a>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>45 Articles</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="item">
              <img src="img/img-04.jpg" alt="">
              <div class="down-content">
                <h4>Cuisine</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>43 Articles</span>
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

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A propos de AFKAR </h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content ">
                    <div class="count-digit">15</div>
                    <div class="count-title">Sujets</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">24</div>
                    <div class="count-title">R??dacteurs</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">4345</div>
                    <div class="count-title">Articles</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">9999</div>
                    <div class="count-title">Vues</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
    
  </section>


  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Nos liens</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Tous nos cat??gories</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Les derni??res articles</a></li>

            <li><a href="#"><i class="fa fa-angle-double-right"></i>Postuler</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>A propos</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Contact</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Nous Contacter</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#"><i class="fa fa-phone"></i>+216 56 76 06 15</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i>afkar01@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Adresse</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#"><i class="fa fa-location"></i>Tunisia</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
          
          </ul>
        </div>
        <hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p class="h6">?? All rights Reversed.<a class="text-green ml-2" href="#" target="_blank">to AfKar</a></p>
        </div>
        <hr>
      </div>  
    </div>
  </section>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/isotope.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/video.js"></script>
    <script src="js/slick-slider.js"></script>
    <script src="js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>

@endsection