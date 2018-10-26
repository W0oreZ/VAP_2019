<?php
$this->load->view('User/auth_Header');
?>
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			<img src="<?=base_url('VAP/public/main/img/')?>logoVAP.png" alt=""/>
			<h3>Welcome Back</h3>
			<p>You are 30 seconds away from earning your own money!</p>
			<a href="<?=base_url()?>User/Register"><input type="submit" name="" value="Register"></a><br/>
		</div>
		<div class="col-md-9 register-right">
			<div>
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Login</h3>
                    <form action='<?=base_url()?>User/Login' method='POST'>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo form_error('username'); ?>
                                    <input type="text" class="form-control" placeholder="Enter Your Username *" value="<?php echo set_value('username'); ?>" name ="username"/>
                                </div>
                                <div class="form-group">
                                    <?php echo form_error('password'); ?>
                                    <input type="password" class="form-control" placeholder="Password *" value="<?php echo set_value('password'); ?>" name="password"/>
                                </div>
								<input type="submit" class="btnRegister"  value="Login" style="margin:0 auto"/>
                            </div>
                            
                        </div>
                    </form>
                </div>

			</div>
		</div>
	</div>
</div>
<?php
$this->load->view('User/auth_Footer');