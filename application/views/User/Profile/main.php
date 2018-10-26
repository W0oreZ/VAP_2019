<?php $this->load->view('Main/_Main_Header')?>


<div class="container bootstrap snippet" style="margin-top: 2.5%">
    <div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>

    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
        
      </div><hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Edit <i class="fas fa-pen"></i></div>
            <div class="panel-body"><a id="security-tab" data-toggle="tab" href="#edit-security" role="tab" aria-controls="profile" aria-selected="false" onclick="hidenav()" >Security <i class="fa fa-lock"></i></a>
        
            </div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Annons Valider</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Annons Non Valider</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Annons En-Attente</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Total des annons</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
        
                        <div class="profile-head">
                              
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" style="visibility: visible" id="nav-o">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#annons" role="tab" aria-controls="home" aria-selected="true">Edit les Annons</a>
                                </li>
                                <li class="nav-item" style="visibility: visible" id="nav-o">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="profile" aria-selected="false">Edit les info</a>
                                </li>
                          <li id="nav-security" style="visibility: hidden"><a id="nav-security" data-toggle="tab" href="#edit-security" role="tab" aria-controls="profile" aria-selected="false">Security <i class="fa fa-lock"></i></a></li>
                            </ul>
                        </div>
       
              <!-- section -->
    <div class="tab-content profile-tab" id="myTabContent">
<div class="tab-pane fade" id="annons" role="tabpanel" aria-labelledby="home-tab">
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<form id="checkout-form" class="clearfix">
		
	
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Annons Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
                                        <th class="text-center">Catégor</th>
										<th class="text-center">Ville</th>
										<th class="text-center">CD</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
											 <button type="button" class="btn btn-outline-secondary">Plus détail ?</button>
											</ul>
										</td>
										
										<td class="price text-center" style="width: 10%" ><input type="text" class="form-control" value="50 DH"><br></td>
										
										<td class="cat text-center" style="width: 15%"> 
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                             <option value="1">women</option>
                                              <option value="2">men</option>
                                            </select></td>
										
										<td class="ville text-center" style="width: 15%"> 
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">safi</option>
                                              <option value="2">casa</option>
                                            </select></td>
										<td class="validation text-center"><button type="button" class="btn-out-oui">Success</button>

</td>

										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
				            <tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
                                            <button type="button" class="btn btn-outline-secondary">Plus détail ?</button>

											</ul>
										</td>
										
										<td class="price text-center" style="width: 10%" ><input type="text" class="form-control" value="50 DH"><br></td>
										
										<td class="cat text-center" style="width: 15%"> 
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                      <option value="1">women</option>
                                              <option value="2">men</option>
                                            </select></td>
										
										<td class="ville text-center" style="width: 15%"> 
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">Safi</option>
                                              <option value="2">Casa</option>
                                            </select></td>
										<td class="validation text-center"><button type="button" class="btn-out-no">Blocked</button></td>

										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
				            </tr>
			            	<tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
	                                        <button type="button" class="btn btn-outline-secondary">Plus détail ?</button>

											</ul>
										</td>
										
										<td class="price text-center" style="width: 10%" ><input type="text" class="form-control" value="50 DH"><br></td>
										
										<td class="ville text-center" style="width: 15%"> 
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                        <option value="1">women</option>
                                              <option value="2">men</option>
                                            </select></td>
										
										<td class="ville text-center" style="width: 15%"> 
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                              <option value="1">Safi</option>
                                              <option value="2">Casa</option>
                                            </select></td>
										<td class="validation text-center"><button type="button" class="btn-out-att">En Attente</button></td>

										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
				            </tr>
								</tbody>
			
							</table>
							<div class="pull-left">
                                <button type="button" class="btn btn-success">Valider ?</button>
                                <button type="button" class="btn btn-danger">Annuler ?</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
    </div></div>
	<!-- /section -->
       <div class="tab-pane fade" id="edit-profile" role="tabpanel" aria-labelledby="profile-tab">
           <div class="section-2">
         <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Save"/>
                    </div>
                </div>
                <div class="row">
           
                    <div class="col-md-8">
                                
                                 <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="edit-name" placeholder="Name">
                                            </div>
                                        </div>
                                      <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Prenom:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="edit-prenom" placeholder="Prenom">
                                            </div>
                                        </div>
                                          <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Tele:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="Edit-phone" placeholder="06 XX XX XX XX">
                                            </div>
                                        </div>
                                        <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Adresse:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="Edit-adr">
                                            </div>
                                        </div>
                                                <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Date de naissance:</label>
                                            </div>
                                            <div class="col-md-6">
                                                    <input type="date" class="Edit-birth">
                                            </div>
                                        </div>
                   
                        
                    </div>
                </div>
                
            </form>           
        </div>
         </div>
        </div>
         <!--/section-->
                <div class="tab-pane fade" id="edit-security" role="tabpanel" aria-labelledby="security-tab">

         <div class="section-3">
           
                    <div class="col-md-8">
                                    <div class="row">
                    <div class="col-md-4">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Save"/>
                    </div>
                </div>
                                 <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Username:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="edit-user" >
                                            </div>
                                        </div>
                                      <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Email:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="edit-email" >
                                            </div>
                                        </div>
                                          <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Confirmer Email:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="Edit-ConfirmerEmail">
                                            </div>
                                        </div>
                                        <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Old Password:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="Edit-OldPass">
                                            </div>
                                        </div>
                                                <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>New Password:</label>
                                            </div>
                                            <div class="col-md-6">
                                                    <input type="date" class="Edit-NewPass">
                                            </div>
                                        </div>
                                                   <div class="row"  id="row-edit">
                                            <div class="col-md-6">
                                                <label>Confirmer Password:</label>
                                            </div>
                                            <div class="col-md-6">
                                                    <input type="date" class="Edit-ConfirmerPass">
                                            </div>
                                        </div>
                   
                        
                    </div>
                </div>
           </div>
        
            </div>

 
<!--section-2-->


          <!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    </div>

<?php $this->load->view('Main/_Main_Footer')?>