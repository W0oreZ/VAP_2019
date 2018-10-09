<?php $this->load->view('admin/components/_layout_header') ?>

</head>


<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top" >
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="../../uploads/Images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('admin/dashboard') ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('admin/pages') ?>">Pages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('admin/user') ?>">Users</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacts</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('admin/user/logout') ?>">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


<div class="container-fluid">
	
</div>

<?php $this->load->view($subview);?>

<?php $this->load->view('admin/components/_layout_footer') ?>