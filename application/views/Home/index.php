<?php
	$params['title'] = 'Home';
	$params['categories'] = $categories;

    $this->load->view('Main/_Main_Header',$params);
    ?>

<!-- section -->
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
		
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
<?php
    $this->load->view('Main/_Main_Footer');
