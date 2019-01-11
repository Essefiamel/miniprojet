<?php
//ini_set("display_errors",0);error_reporting(0);
$html=<<<html
<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">

	<title>liste de produit</title>




	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.php">PRODUITS</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="ajouter.php">AJOUTER PRODUIT</a></li>
									<li><a href="supprimer.php">SUPRIMER PRODUIT</a></li>
									<li><a href="modifier.php">MODIFIER PRODUIT</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>

		
		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 gtco-heading text-center">
						<h2>Liste de produit </h2>
						
					</div>
					 
				</div>  
				<form method="get" action="mod.php">
				 <div class="input-group">
                            <div class="input-group-prepend">
                                  <span class="input-group-text" id="">caracterstique de produit </span>
                            </div>
                             <input type="text" class="form-control" name="id" placeholder="id de produit a modifier">
                          <input type="text" class="form-control" name="name" placeholder="nouvelle nom de produit">
                           <input type="text" class="form-control" name="cat" placeholder="nouvelle categorie de produit">
                          <input class="btn btn-primary" type="submit" value="MODIFY" >
                    </div>
                   </form>
				</div>
				
				</div>
<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
html;
echo $html;

try{
    $conn = new PDO("mysql:host=localhost;dbname=produits;charset=utf8","root","");
    $result = $conn->query ("SELECT * FROM produit");
    $result->setFetchMode(PDO::FETCH_ASSOC);


    echo"<table class='table table-bordered'>";
    while ($row=$result->fetch()){
        echo"<tr>";

        $idp = $row['num_prod'] ;
        $name = $row ['nom_prod'] ;
        $ca=$row['categorie'];



        echo"<th scope='row'>ID</th>";
        echo"<td>$idp</td>";
        echo"<th scope='row'>Nom</th>";
        echo"<td>$name</td>";
        echo"<th scope='row'>Catergorie</th>";
        echo"<td>$ca</td>";
        echo "</tr>";
    }
}



catch(Exception $e){
    echo "error : ".$e->getMessage();
}






?>