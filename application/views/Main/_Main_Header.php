<!DOCTYPE html>
<html>
<head>
	<title>VAP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="VAP Project project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/VAP/public/Main/') ?>styles/bootstrap4/bootstrap.min.css">
	<link href="<?= base_url('/VAP/public/Main/') ?>plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/VAP/public/Main/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/VAP/public/Main/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/VAP/public/Main/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/VAP/public/Main/') ?>plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/VAP/public/Main/') ?>styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/VAP/public/Main/') ?>styles/responsive.css">
</head>
<body>
<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<!--<div class="logo"><a href="#">VAP</a></div>-->
							<div class="logo"><img src="<?=base_url('/public/Main/')?>images/logo.png" alt=""></button>

						</div>
					</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="user_icon"><img src="<?=base_url('/public/Main/')?>images/user.svg" alt=""></div>
								<div class="wishlist_content">
								<?php 
									if($this->session->userdata('loggedin') == true){
										echo '<div class="wishlist_text"><a href="User/Profile">Profile</a></div>';
									}else{
										echo '<div class="wishlist_text"><a href="User/Register">Register</a></div>';
									}
								?>
									
								<!--	<div class="wishlist_count">115</div>-->
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<!--<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>-->
									<div class="cart_content">
									<?php 
									if($this->session->userdata('loggedin') == true){
										echo '<div class="cart_text"><a href="User/Logout">Log out</a></div>';
									}else{
										echo '<div class="cart_text"><a href="User/Login">Log in</a></div>';
									}
									?>
										
										<!--<div class="cart_price">$85</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									 
			
									 
									<li class="hassubs">
										<a href="#">Informatique Multimedia<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="">
												<a href="#">Téléphones<i class="fas fa-chevron-right"></i></a>
												 
											</li>
											<li><a href="#">Tablettes<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Ordinateurs portabless<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Ordinateurs de bureaus<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Accessoires informatique et Gadgets<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Jeux vidéo et Consoles<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Appareils photo et Caméras<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Télévisions<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Vehicules<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="">
												<a href="#">Voitures<i class="fas fa-chevron-right"></i></a>
												 
											</li>
											<li><a href="#">Motos<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Vélos<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Véhicules Professionnels<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Bateaux<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Pièces et Accessoires pour véhicules<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Pour la maison et Jardin<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="">
												<a href="#">Electroménager et Vaisselles<i class="fas fa-chevron-right"></i></a>
												 
											</li>
											<li><a href="#">Meubles et Décoration<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">MJardin et Outils de bricolage<i class="fas fa-chevron-right"></i></a></li>
											 
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Habillement et bien etre<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="">
												<a href="#">Vêtements<i class="fas fa-chevron-right"></i></a>
											
											</li>
											<li><a href="#">Chaussures<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Montres et Bijoux<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Sacs et Accessoires<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Vêtements pour enfant et bébé<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Equipements pour enfant et bébé<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Produits de beauté<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">loisire et Divertissement<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="">
												<a href="#">Sports et Loisirs<i class="fas fa-chevron-right"></i></a>
									 
											</li>
											<li><a href="#">Animaux<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Instruments de Musique<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Art et Collections<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Voyages et Billetterie<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Films, Livres, Magazines<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Emploi et Sercices<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="">
												<a href="#">Offres d'emploi<i class="fas fa-chevron-right"></i></a>
												 
											</li>
											<li><a href="#">Demandes d'emploi<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Stages<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Services<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Cours et Formations<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Enteprise<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="">
												<a href="#">Business et Affaires commerciales<i class="fas fa-chevron-right"></i></a>
												 
											</li>
											<li><a href="#">Matériels Professionnels<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Stocks et Vente en gros<i class="fas fa-chevron-right"></i></a></li>
											 
				
										</ul>
									</li>
									 
  
									 
									<li><a href="#">Autres<i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Deposez annance<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Detaile<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									 
									<li><a href="blog.html">Listing<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		 