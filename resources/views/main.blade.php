<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SDS Logistics - Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

		<!-- Styles -->
		<livewire:styles>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css">@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap'); body{font-family: 'Roboto', serif !important;} .navbar{padding-top: 0px; border-top: #2560a6 5px solid;} .nav-item{margin-left: 10px; margin-right: 10px; padding-top: 10px; padding-left: 8px; padding-right: 8px; margin-top: -11px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; transition: .3s} .nav-item:hover{background: #2560a6;} .nav-item:hover a.nav-link{color:#FFF !important;} .nav-link{color: #2560a6 !important; transition: .3s;} .nav-link:hover{} .navbar-text{padding-left: 25px; padding-right: 25px; background: #2560a6; padding-top: 20px; margin-top: -16px; font-size: 14px; font-weight: 900; color: #FFF !important; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;} .container-fluid{padding-left: 0; padding-right: 0;} </style>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-light">
			<a href="#" class="navbar-brand"><img src="{{ url('/images/sds-logo.jpg') }}" width="154" height="41" alt="" srcset=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

			<div class="collapse navbar-collapse" id="mainMenu">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
					<li class="nav-item"><a href="#" class="nav-link">ABOUT US</a></li>
					<li class="nav-item"><a href="#" class="nav-link">TARIF PENGIRIMAN</a></li>
					<li class="nav-item"><a href="#" class="nav-link">TRACKING</a></li>
					<li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>
				</ul>
			</div>
			<span class="navbar-text">CONTACT US<br>0812 117 5550</span>
		</nav>
    <div class="container-fluid">
			<img src="{{asset('/images/logistics-company.jpg')}}" alt="" class="w-100">
		</div>
		<livewire:scripts>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
