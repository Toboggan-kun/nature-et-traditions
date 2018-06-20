
<!DOCTYPE html>
<html>
<head>
	<title>Nature et traditions</title>

	<!-- BOOTSTRAP-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- BOOTSTRAP -->
	<!-- FEUILLE CSS -->
	<link rel="stylesheet" type="text/css" href="../resources/assets/css/style.css">
	<!-- FEUILLE CSS -->


</head>
<header>
	<!-- BARRE D'ONGLETS -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/home') }}">Accueil</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
		    	<li><a href="{{ url('/subscription') }}">Se connecter</a></li>
		    </ul>
		</div>
	</nav>
	<!-- BARRE D'ONGLETS -->

</header>
<center>
	<!-- DIV PRINCIPALE: 10% padding-left, 10% padding-right -->
	<div id="main_container">
		<h1>@yield('page_name')</h1> <!-- INDIQUE LE NOM DE LA PAGE --> 
	</div>
	<!-- DIV PRINCIPALE -->
</center>

		

