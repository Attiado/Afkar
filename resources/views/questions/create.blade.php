@extends('layouts.app')

@section('content')
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Poser un question à Afkar</title>

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
            <p> <em> AfKar</em> Le plus grand blog du monde ! </p>
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


  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="{{ route('questions.store') }}" method="post">
              @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Poser votre question ! </h2>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input name="titre" type="text" id="titre" placeholder="Le titre du question ..*" value="{{$question->titre}}" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="contenu" type="text" class="form-control" id="contenu" placeholder="Le Contenu..." required="">{{$question->contenu}}</textarea>
                    </fieldset>
                  </div>
                
                  <div class="col-lg-12">
                    <fieldset>
                      <input name="proprietaire" type="text" id="proprietaire" placeholder="Le proprietaire du question ..*" value="{{ Auth::user()->name }}" required=""> {{$question->proprietaire}}
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Publier</button>
                      <button type="reset" id="form-submit" class="button">Annuler</button>

                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>



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
  </section>
</body>
</html>


@endsection