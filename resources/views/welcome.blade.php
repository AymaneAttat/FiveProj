<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Restaurent xxxx</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">

    <!-- Bootstrap core CSS -->
	<script src="https://kit.fontawesome.com/0f7fbb64e2.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
    <style>

		*{
			margin: 0;
			padding: 0;
		}
		body{
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 15px;
			color: #926239;
			line-height: 1.6;
		}
		#showcase{
			background-image: url('dist/images/start.jpg');
			height: 100vh;
			background-size: cover;
			background-position: center;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			text-align: center;
			padding: 0 20px;
		}      
		
		#showcase p{
			font-size: 20px;
		}
		#showcase h1{
			font-size: 40px;
			line-height: 1.0;
		}
		#showcase .button{
			font-size: 18px;
			text-decoration: none;
			color: #926239;
			border: #926239 1px solid;
			padding: 10px 20px;
			border-radius: 10px;
		}
    </style>
  </head>
  <body>
	<header id="showcase">
		<h1>Bienvenue sur xxxx restaurent</h1>
		<p>Trouvez ici Nourriture Fabuleuse avec des Ingrédient frais.</p>
		<a href="{{route('home')}}" class="button">Voir les plats</a>
	</header>
</body>
</html>