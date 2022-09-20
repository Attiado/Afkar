@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/postulerstyle.css">

	</head>

	<body>
    
		<div class="wrapper" style="background-image: url('/images/redacteur.jpg');">
			<div class="inner">
				<form action="">
					<h3>Postuler </h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Nom</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-wrapper">
							<label for="">Prénom</label>
							<input type="text" class="form-control" required>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Mail</label>
						<input type="text" class="form-control" required>
					</div>
					<label for="avatar">Cv :

<input type="file"
       id="avatar" name="avatar"
       accept=".doc,.docx,.pdf" >

					<div class="checkbox">
						<label>
							<input type="checkbox"> I accept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
                  <button><a href="{{ URL::to('aprepos')}}">Postuler !</a></button>

                  <button><a href="{{ URL::to('home')}}">Retourner !</a></button>
				</form>
			</div>
		</div>
		
	</body>
</html>

@endsection