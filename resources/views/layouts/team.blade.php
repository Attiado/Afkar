@extends ('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <!-- Design by foolishdeveloper.com -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rédacteurs - AfKar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
.team-area{
    padding-top: 5%;
}
.single-team{
  box-shadow:0px 7px 7px 2px rgba(0,0,0,0.1);
    background-color: white;
    margin-bottom: 10px;
  margin-left:10px;
 
}
.single-team:hover .social{
    cursor: pointer;
    opacity: 1;
    transform: rotateY(0deg) scale(1, 1);
}
.img-area{
    overflow: hidden;
    position: relative;
}
.img-area img{
    width: 100%;
}
.img-area:hover img{
    transform: scale(1.2)
}
.img-area img{
    transition: all 0.4s ease 0s;
}
@media (max-width: 768px){
    .img-area img{
        display: inline-block;
    }
}
.img-area .social{
    background-color: rgba(0,0,0,0.7);
    position: absolute;
    text-align: center;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    opacity: 0;
    transition: .5s;
    transform: rotateY(180deg) scale(0.5, 0.5);
}
.img-area .social ul{
    text-align: center;
    position: relative;
    top: 175px;
}
.img-area .social ul li a{
    border: 1px solid #fff;
    color: #fff;
    display: block;
    font-size: 20px;
    height: 40px;
    width: 40px;
    line-height: 40px;
    text-align: center;
}
.img-area .social ul li a:hover{
    background-color: #fff;
    color: #000;
    border: 1px solid transparent;
}
.img-text{
    padding: 25px;
    color: black;
    text-align: center;
}
.img-text h4{
    margin: 0 0 5px;
    font-size: 18px;
   font-family: sans-serif;
    letter-spacing: 5px;
}
.img-text h5{
    font-size: 17px;
    color: #545154

}

  </style>
      <link rel="stylesheet" href="/css/home.css">

</head>
<body>
@include('layouts.header')
  <section class="upcoming-meetings" id="meetings">
  
  <!-- ***** Header Area Start ***** -->
 
  <br>
  <!-- ***** Header Area End ***** -->
 <div class="team-area">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="images/team/team1.jpg" class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Attia Dhouha</h4>
            <h5>Rédactrice</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="images/team/team2.jpg" class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Rjeb Ridha</h4>
            <h5>Rédacteur</h5>
          </div>
        </div>
      </div>
     <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="images/team/team3.jpg" class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Ouchem Ayet </h4>
            <h5>Rédactrice</h5>
          </div>
        </div>
      </div>
     <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="/images/team/team4.jpg"  class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Dridi Samir</h4>
            <h5>Rédacteur</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="images/team/team5.jpg" class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Selmi Chiraz</h4>
            <h5>Rédactrice</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="/images/team/team6.jpg"  class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Attia Salma</h4>
            <h5>Rédactrice</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="/images/team/team6.jpg"  class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Attia Salma</h4>
            <h5>Rédactrice</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-10">
        <div class="single-team">
          <div class="img-area">
            <img src="/images/team/team6.jpg"  class="img-responsive" alt="">
            <div class="social">
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="img-text">
            <h4>Attia Salma</h4>
            <h5>Rédactrice</h5>
          </div>
        </div>
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
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Tous nos catégories</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>Les derniéres articles</a></li>

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
          <p class="h6">© All rights Reversed.<a class="text-green ml-2" href="#" target="_blank">to AfKar</a></p>
        </div>
        <hr>
      </div>  
    </div>
  </section>
</body>
</html>

@endsection