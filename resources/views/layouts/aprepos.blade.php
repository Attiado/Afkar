@extends('layouts.app')

@section('content')
<html>
<head>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
.titre h1{
    color:#fff;
}
    </style>

</head>

<body background=/images/meetings-page-bg.jpg>
@include('layouts.header')
<div class="titre">
   <h1> Merci pour votre candidature .. <br> Nous retournons vers vous dans les brefs délais ! </h1>
</div>

<!-- Code js pour rediriger la page vers home aprés quelques secondes -->
<script type="text/javascript">
var delai=2;
var url='/home'
setTimeout("document.location.replace(url)",delai+'000');
</script>
</body>

</html>
@endsection