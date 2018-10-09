<div class="modal-body">
<div class="login-form">

<?php echo validation_errors();?>
<br />

<?php echo form_open();?>    
        <div class="form-group">
            <?php echo form_input('email','','class="form-control" placeholder="Enter your email"');?>
        </div>
        <div class="form-group">
            <?php echo form_password('password','','class="form-control" placeholder="Password"');?>
        </div>
        <div class="form-group">
        	<?php echo form_submit('submit','Log In','class="btn btn-primary btn-block"');?>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right"></a>
        </div>        
    <?php echo form_close(); ?>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
</div>
