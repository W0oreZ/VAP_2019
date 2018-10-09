<h3><?php echo empty($user->id) ? 'Add New User' : 'Edit User' ?></h3>
<p><?php echo validation_errors(); ?></p>
<?php echo form_open(); ?>
<div class="modal-body">
<table class="table">
	<tr>
		<td>Username</td>
		<td><?php echo form_input('username',set_value('username',$user->username));?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo form_input('email',set_value('email',$user->email));?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><?php echo form_password('password');?></td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<td><?php echo form_password('confirm_password');?></td>
	</tr>
	<tr>
		<td><?php echo form_submit('submit','save','class="btn btn-primary"'); ?></td>
	</tr>
</table>
</div>
<?php echo form_close(); ?>