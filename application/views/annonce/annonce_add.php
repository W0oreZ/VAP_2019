<?php $this->load->view('Main/_Main_Header'); ?>


<form class="form-horizontal">
<fieldset class="ff">
<!-- Form Name -->
<div class="aside">
<div class="aside-title"><h1>Information Sur Votre Annonce</span></h1>
</div></div>
<form class="firstform">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="titreinput">Titre</label>  
  <div class="col-md-6">
  <input id="titreinput" name="titre" type="text" placeholder="Donnez un titre descriptif à votre annonce.." class="form-control input-md" required="true">
  <span class="help-block">Exemple : Chaussures de jogging homme Adidas Glide bleues, pointure 44</span>  
  </div>
</div>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Catégorie:</label>
  <div class="col-md-6">
    <select id="selectbasic" name="categorie_id" class="form-control">
     <option value="0" disabled="" selected="">---Choisissez une catégories---</option>
      <?php
        foreach($categories as $cat){
            echo '<option value="';
            echo $cat->id;
            echo '">';
            echo $cat->nom;
            echo '</option>';
        }
      ?>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descrip">Description:</label>
  <div class="col-md-4">       
   <input id="descrip" name="description" type="text" placeholder="Description..." class="form-control input-md" required="true">             
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectville">Ville:</label>
  <div class="col-md-6">
    <select id="selectville" name="selectville" class="form-control">
     
       <option value="0" disabled="" selected="">---Choisissez une ville---</option>
       <?php
        foreach($categories as $cat){
            echo '<option value="';
            echo $cat->id;
            echo '">';
            echo $cat->nom;
            echo '</option>';
        }
      ?>

    </select>
  </div>
</div>

<!-- Multiple Radios (inline) 
<div class="form-group">
  <label class="col-md-4 control-label" for="AnnoncesType">Type Annonces:</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="AnnoncesType-0">
      <input type="radio" name="AnnoncesType" id="AnnoncesType-0" value="1" checked="checked">
      Offre
    </label> 
    <label class="radio-inline" for="AnnoncesType-1">
      <input type="radio" name="AnnoncesType" id="AnnoncesType-1" value="2">
      Demande
    </label>
  </div>
</div>
-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Prix:</label>  
  <div class="col-md-6">
  <input id="textinput" name="prix" type="number" placeholder="DH" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- File Button --> 
<div class="upfile">
<div class="form-group">
 	   <div class="col-md-6">
      <form action="Annonce/do_upload" enctype="multipart/form-data" method="post" accept-charset="utf-8">
     
        
<!--              -->
<div class="container" id="upimg">
    <fieldset class="form-group">
        <div class="imaglink" ><a href="javascript:void(0)" onclick="$('#pro-image').click()" >
    <img src="<?=base_url('/public/main/')?>img/upload%20image.png" alt="" width="60px" height="50px"></a>
       <div class="divUI">
       <a href="javascript:void(0)" onclick="$('#pro-image').click()" id="UploadImg">Upload Image</a></div></div>
        <input type="file" id="pro-image" name="imagefile[]" style="display: none;" class="form-control" multiple placeholder="
Savez vous que les annonces avec photos sont 10 fois plus consultés que celles qui n'en ont pas !">
    </fieldset>
    <div class="preview-images-zone">
    </div>
</div>

            
            
          </form>
	      
	      
	  </div>
</div>
</div>
</form>
<?php if($this->session->userdata('loggedin') == false): ?>

<form class="form-horizontal">
<fieldset>


<!-- Form Name -->
<div class="aside">
<div class="aside-title"><h1>2<span class="ordinal">éme</span></h1>
</div></div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="usertype"></label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="usertype-0">
      <input type="radio" name="usertype" id="usertype-0" value="1" checked="fals">
      Particulier
    </label> 
    <label class="radio-inline" for="usertype-1">
      <input type="radio" name="usertype" id="usertype-1" value="2">
      Professionel
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="np">Nom:</label>  
  <div class="col-md-6">
  <input id="np" name="np" type="text" placeholder="Nom et Prenom" class="form-control input-md" required="true">
  <span class="help-block">ex:Sara mark</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tele">Téléphone:</label>  
  <div class="col-md-6">
  <input id="tele" name="tele" type="text" placeholder="06 xx xx xx xx" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="email@address.dom" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Mot de passe " class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confermer Mot de passe:</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Mot de passe" class="form-control input-md" required="true">
    
  </div>
</div>
    
<?php endif;?>
<!-- Form Name -->
<div class="aside">
<div class="aside-title"><h1>3<span class="ordinal">éme</span></h1>
</div></div>
<div class="form-group">
   <input type="radio" name="radios" id="radios-0" value="1" checked="">En validant mon annonce, j'accepte les <a href="http://vap.somitic.com/index.php/Welcome/regles_utilisation">Règles d'utilisation</a> du site Vap.ma..
 
</div>

</fieldset>
</form>
    
</fieldset>
</form>
<!-- Button (Double) -->
<div class="form-group" id="btn_val">

  <div class="col-md-8">
    <button id="val" name="button1id" class="btn btn-success"><img src="img/UI_3_-20-512.png" alt="" width="10px" height="10px">Valider</button>
    <button id="eff" name="button2id" class="btn btn-danger"><img src="img/wrong-2-512.png" alt="" width="10px" height="10px">Effacer</button>
  </div>
</div>

<?php $this->load->view('Main/_Main_Footer'); ?>