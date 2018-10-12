<?php
    $params['title'] = 'Home';

    $this->load->view('Main/_Main_Header',$params);
    ?>

<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
                    <div class="view overlay zoom">
                        <a class="banner banner-1" href="#">
                            <img src="<?=base_url('VAP/public/images/villes/')?>safi.jpg" class = "img-thumbnail img-fluid" alt="">
                            <div class="mask flex-center rgba-blue-light">
                            <p class="white-color">SAFI</h2>
                            <p class="white-color">150 Annonces</h2>
                            </div>
                            <div class="banner-caption text-center">
                               
                            </div>
                        </a>
                    </div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
                <a class="banner banner-1" href="#">
						<img class = "img-thumbnail img-fluid" src="<?=base_url('VAP/public/images/villes/')?>agadir.jpg" alt="">
                        <div class="mask flex-center rgba-blue-light">
                            <h2 class="white-color">Agadir</h2>
                            <h3 class="white-color">102 Annonces</h2>
                        </div>
                        <div class="banner-caption text-center">
                            
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                <a class="banner banner-1" href="#">
						<img class = "img-thumbnail img-fluid" src="<?=base_url('VAP/public/images/villes/')?>casablanca.jpg" alt="">
						<div class="banner-caption text-center">
                            <h2 class="white-color">Casablanca</h2>
                            <h3 class="white-color">840 Annonces</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

            </div>
</div>


<?php
    $this->load->view('Main/_Main_Footer');
