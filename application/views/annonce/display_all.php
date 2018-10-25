<?php $this->load->view('Main/_Main_Header'); ?>

<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
                            <!-- Product Single -->
<?php foreach($annonces as $annonce):?>
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
									<a href="<?php echo '/annonce/view/'.$annonce['id'] ?>">
										<button class="main-btn quick-view"><i class="fa fa-search-plus" ></i>Afficher les details</button></a>
										<img src="<?php echo base_url('/VAP/public/images/annonce/').$annonce['primary_image'] ?>" alt="primaryImage" width='200' height='400'>
										
									</div>
									<div class="product-body">
										<h3 class="product-price" id="<?php echo $annonce['id'] ?>"><a href="<?php echo '/annonce/view/'.$annonce['id'] ?>"><?php echo $annonce['titre'] ?></a></h3>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
										<h2 class="product-name"><a href="<?php echo '/annonce/view?ville='.$annonce['ville_id'] ?>"><?php echo $annonce['ville_name'] ?></a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart" href="<?php echo '/annonce/view/'.$annonce['id'] ?>"></i> Go to Page</button>
										</div>
									</div>
								</div>
                            </div>
                            
<?php endforeach;?>
						
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sort By:</span>
								<select class="input">
										<option value="0">Position</option>
										<option value="0">Price</option>
										<option value="0">Rating</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store bottom filter -->
<?php $this->load->view('Main/_Main_Footer'); ?>