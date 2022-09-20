@extends('layouts.app')

@section('content')

<html>
<head>

 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    
    <!-- Additional CSS Files -->
   
    <style>
.navbar-nav {
    width: 100%
}

@media(min-width:568px) {
    .end {
        margin-left: auto
    }
}

@media(max-width:768px) {
    #post {
        width: 100%
    }
}

#clicked {
    padding-top: 1px;
    padding-bottom: 1px;
    text-align: center;
    width: 100%;
    background-color: #ecb21f;
    border-color: #a88734 #9c7e31 #846a29;
    color: black;
    border-width: 1px;
     border-style: solid;
    border-radius: 13px
}

#profile {
    background-color: unset
}


body {
    background-color: black
}

#nav-items li a,
#profile {
    text-decoration: none;
    color: rgb(224, 219, 219);
    background-color: black
}

.comments {
    margin-top: 5%;
    margin-left: 20px
}


.darker {
    border: 1px solid #ecb21f;
    background-color: black;
    float: right;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px
}

.comment {
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: #a12c2f;
    float: left;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px
}

.comment h4,
.comment span,
.darker h4,
.darker span {
    display: inline
}
.Jnab {
float:right;
}

.comment p,
.comment span,
.darker p,
.darker span {
    color: rgb(184, 183, 183)
}

h1,
h4 {
    color: white;
    font-weight: bold
}

label {
    color: rgb(212, 208, 208)
}

.redacteur{
    color:yellow;
}
</style>
</head>
<body>
<!-- notre header -->
@include('layouts.header')

<!-- Main Body -->
<section>
    <div class="container">
        <div class="row">
        <h1>Questions / Réponse</h1> 
  
        <a class="btn btn-link float-end" href="{{ route('questions.create') }}">Poser un question</a>

        @foreach ($questions as $question) {{-- Loop Questions --}}
            <div class="col-sm-8 col-md-10 col-12 pb-4">
                <div class="comment mt-4 text-justify float-left"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>{{ $question->titre }}</h4> <span>{{ $question->created_at }}</span> <br>
                    <p>{{ $question->contenu }}</p>
                    <p> Publié par <em class="redacteur">{{ $question->proprietaire }} </em> </p> 
                    <a href="{{ URL::to('commenter')}}"> Commenter </a>
                    <div class="Jnab">
                       <a href="{{ URL::to('commenter')}}"> Voir les commentaires </a>
                </div>
                </div>

            </div>
            @endforeach  
        </div>
    </div>
</section>

</body>
</html>

@endsection