<?php $this->load->view('Main/_Main_Header'); ?>


<form class="form-horizontal" action="test_upload" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<fieldset class="ff">
<!-- Form Name -->
<div class="aside">
<div class="aside-title"><h1>Information Sur Votre Annonce</span></h1>
</div></div>

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
  <label class="col-md-4 control-label" for="ville_id">Ville:</label>
  <div class="col-md-6">
    <select id="ville_id" name="ville_id" class="form-control">
     
       <option value="0" disabled="" selected="">---Choisissez une ville---</option>
       <?php
        foreach($villes as $ville){
            echo '<option value="';
            echo $ville->id;
            echo '">';
            echo $ville->nom;
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

<div class="row">
<!-- File Button --> 
<div class="col-md-12 mb-40">
	<h6 class="mt-20">AJOUTEZ JUSQU'À 6 PHOTOS (<span id="coaj"> 6</span> IMAGES RESTANTES)</h6>
	<span class="photos" id="uploaded_images">
		<?php  
		$r=explode(',', set_value('imgcount'));
		if (!empty($r[0])) :
			for ($i=0; $i < (count($r)); $i++):
				$ran=explode('.', $r[$i]);
			echo '<div class="photo"><a class="remove" href="'.$r[$i].'" onclick="return false;"><i class="fa fa-trash"></i></a><div class="photo-inner"><div class="photo-image"><img src="'.base_url('/VAP/Public/uploads/').$r[$i].'"></div><div class="photo-foot">
			<div class="checkbox"><label class="form-label ml-1"><input type="radio" name="images" value="'.$r[$i].'" id="'.$ran[0].'" '.set_radio('images', $r[$i]).'><span class="label-text">Photo principale</span></label></div>
			</div></div></div>';
			endfor;
		endif;
		 ?>
	</span>
	<span id="loader"></span>
	<div class="photo fileinput fileinput-new" id="uploader">
		<span class="btn-upload">
		<i class="fa fa-camera"></i>
		<i class="fa fa-plus-circle"></i>
		<input type="file" name="files"  id="files" accept="image/jpeg,image/gif,image/png,image/bmp" multiple>
		<div id="remaining-images" class="blue-badge">Ajouter</div>
		</span>
	</div>
	<input type="hidden" name="imgcount" value="<?php echo set_value('imgcount'); ?>" id="imgcount" style="width: 0px">
	<div class="row">
		<div class="col-2 p-0">
			<i class="fa fa-camera fa-3x mr-2"></i>
		</div>
		<div class="col-10 p-0">
			<p class="mt-20 "> Savez vous que les annonces avec photos sont 10 fois plus consultés que celles qui n'en ont pas !</p>
		</div>
	</div>
</div>
</div>

<?php if($this->session->userdata('loggedin') == false): ?>


<fieldset>
<!-- Form Name -->
<div class="aside">
<div class="aside-title"><h1>2<span class="ordinal">éme</span></h1>
</div></div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="account_type"></label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="account_type-0">
      <input type="radio" name="account_type" id="account_type-0" value="Particulier" checked="true">
      Particulier
    </label> 
    <label class="radio-inline" for="account_type-1">
      <input type="radio" name="account_type" id="account_type-1" value="Professionel" checked="false">
      Professionel
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="np">Nom:</label>  
  <div class="col-md-6">
  <input id="np" name="nom" type="text" placeholder="Nom et Prenom" class="form-control input-md" required="true">
  <span class="help-block">ex:Benjeloune</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="np">Prenom:</label>  
  <div class="col-md-6">
  <input id="np" name="prenom" type="text" placeholder="Nom et Prenom" class="form-control input-md" required="true">
  <span class="help-block">ex:Ahmed</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tele">Téléphone:</label>  
  <div class="col-md-6">
  <input id="tele" name="telephone" type="text" placeholder="06 xx xx xx xx" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="email@address.dom" class="form-control input-md" required="true">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-6">
  <input id="username" name="username" type="text" placeholder="ZeroW21547" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
  <div class="col-md-4">
    <input id="passwordinput" name="password" type="password" placeholder="Mot de passe " class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confermer Mot de passe:</label>
  <div class="col-md-4">
    <input id="passwordinput" name="confirmpassword" type="password" placeholder="Mot de passe" class="form-control input-md" required="true">
    
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

    
</fieldset>

<!-- Button (Double) -->
<div class="form-group" id="btn_val">

  <div class="col-md-8">
    <input type='submit' id="val" name="button1id" class="btn btn-success"><img src="img/UI_3_-20-512.png" alt="" width="10px" height="10px">Valider</button>
    <button id="eff" name="button2id" class="btn btn-danger"><img src="img/wrong-2-512.png" alt="" width="10px" height="10px">Effacer</button>
  </div>
</div>
      </form>

<?php $this->load->view('Main/_Main_Footer'); ?>