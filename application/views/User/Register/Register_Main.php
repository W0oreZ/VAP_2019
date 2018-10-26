<?php
$this->load->view('User/auth_Header');
?>
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
			<h3>Welcome</h3>
			<p>You are 30 seconds away from earning your own money!</p>
			<a href="<?=base_url()?>User/Login"><input type="submit" name="" value="Login"></a><br/>
		</div>
		<div class="col-md-9 register-right">
			<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Employee</h3>
                    <form action='<?=base_url()?>User/Register' method='POST'>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo form_error('username'); ?>
                                    <input type="text" class="form-control" placeholder="Enter Your Username *" value="<?php echo set_value('username'); ?>" name ="username"/>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('email'); ?>
                                    <input type="email" class="form-control" placeholder="Your Email *" value="<?php echo set_value('email'); ?>" name="email"/>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('password'); ?>
                                    <input type="password" class="form-control" placeholder="Password *" value="<?php echo set_value('password'); ?>" name="password"/>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('confirmpassword'); ?>
                                    <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="confirmpassword"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="<?php echo set_value('nom'); ?>" name="nom"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="<?php echo set_value('prenom'); ?>" name="prenom"/>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister"  value="Register" style="margin:0 auto"/>
                        </div>
                    </form>
                </div>

			</div>
		</div>
	</div>
</div>
<?php
$this->load->view('User/auth_Footer');