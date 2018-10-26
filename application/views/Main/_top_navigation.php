<body>
	<!-- HEADER -->
	<header>
		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="<?=base_url()?>Home">
<!--					<img src="./img/logo.png" alt="">-->
                    <h1 class="ap"><span id="v">V</span>AP</h1>
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form action='<?=base_url()?>annonce/view' id='searchform'>
							<input class="input search-input" name='title' type="text" placeholder="Enter your keyword" id="search" >
							
							<select class="input search-categories" form='searchform' name='categorie'>
								<option value="all">All Categories</option>
								<?php
        						foreach($categories as $cat){
									if($cat->nom != 'all')
									{
										echo '<option value="';
            							echo $cat->nom;
            							echo '">';
            							echo $cat->nom;
            							echo '</option>';
									}
      							  }
      							?>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->

				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
                                <!--   login php  -->
                                <?php if($this->session->userdata('loggedin') == true){
                                    echo '<strong class="text-uppercase">';
                                    echo '  '.$this->session->userdata('username').'  ';
                                    echo ' <i class="fa fa-caret-down"></i></strong></div>';
                                    echo '<a href="'.base_url().'Profile/index/';
                                    echo $this->session->userdata('id');
                                    echo'" class="text-uppercase">Profile</a> / <a href="'.base_url().'User/Logout" class="text-uppercase">Deconnecter</a>
                                    <ul class="custom-menu">
                                        <li><a href="'.base_url().'Profile/index/"';echo $this->session->userdata('id');echo '"><i class="fa fa-user-o"></i>Profile</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>Favoris</a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i> Messages</a></li>
                                        <li><a href="#"><i class="fa fa-unlock-alt"></i> Compte</a></li>
                                        <li><a href="'.base_url().'User/Logout"><i class="fa fa-user-plus"></i> Deconnection</a></li>
                                    </ul>
                                    ';
                                }else{
                                    echo '<strong class="text-uppercase">Account<i class="fa fa-caret-down"></i></strong></div>';
                                    echo '
                                    <a href="'.base_url().'User/Login" class="text-uppercase">Login</a> / <a href="'.base_url().'User/Register" class="text-uppercase">Register</a>
                                    <ul class="custom-menu">
                                        <li><a href="'.base_url().'User/Login"><i class="fa fa-user-o"></i>Profile</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>Favoris</a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                                        <li><a href="'.base_url().'User/Login"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                        <li><a href="'.base_url().'User/Register"><i class="fa fa-user-plus"></i> Cree Un Compte</a></li>
                                    </ul>
                                    ';
                                }

                                ?>
                                <!-- -------------->
						</li>
						<!-- /Account -->


						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list" >
						<?php foreach($categories as $cat):?>
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#">
							<?php echo $cat->nom;
							if($cat->nom != "all"):?>
							<i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li><h3 class="list-links-title">Sous-Categories</h3></li>
											<li><a href="#">exemples</a></li>
											<li><a href="#">exemples</a></li>
											<li><a href="#">exemples</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
										<li><h3 class="list-links-title"></br></h3></li>
											<li><a href="#">exemples</a></li>
											<li><a href="#">exemples</a></li>
											<li><a href="#">exemples</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
										<li><h3 class="list-links-title"></br></h3></li>
											<li><a href="#">exemples</a></li>
											<li><a href="#">exemples</a></li>
											<li><a href="#">exemples</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">NEW COLLECTION</h2>
												<h3 class="white-color font-weak">HOT DEAL</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
							<?php endif;?>
						</li>
							<?php endforeach;?>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="<?=base_url()?>Home">Accueil</a></li>
						<li><a href="<?=base_url()?>Annonce/view">Listing</a></li>
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner06.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Women’s</h3>
												</div>
											</a>
											<hr>
										</div>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner07.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Men’s</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner08.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Accessories</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="#">
												<img src="./img/banner09.jpg" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">Bags</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
								
								</div>
							</div>
						</li>
						<li><a href="#">Sales</a></li>
						<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="index.html">Accueil</a></li>
								<li><a href="products.html">Products</a></li>
								<li><a href="product-page.html">Product Details</a></li>
								<li><a href="checkout.html">Checkout</a></li>
							</ul>
				
						</li>
							<li ><button type="button" class="btn btn-success"  id="btn-da"><a href="<?=base_url()?>annonce/add"><span id="dat">Deposez Annonce</span></a></button>
									</li>
					</ul>
					
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->