<section>
<h1>Users Page</h1>
<p>
<?php echo anchor('admin/user/edit','<i class="fa fa-plus" style="color:green"></i> Add a User');?>
</p>
<div class="container-fluid col-10">
<table class="table table-stripped">
  <thead class="thead-light">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count((array)$users)): foreach($users as $user): ?>
       
      <tr>
        <td><?php echo $user->username; ?></th>
        <td><?php echo anchor('admin/user/edit/'.$user->id,$user->email) ?></td>
        <td><?php echo btn_edit('admin/user/edit/'.$user->id);?></td>
        <td><?php echo btn_delete('admin/user/delete/'.$user->id);?></td>
      </tr>

    <?php endforeach;?>   
    <?php endif;?>
  </tbody>
</table>
</div>
</section>