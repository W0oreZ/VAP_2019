<?php $this->load->view('Main/_Main_Header'); ?>

<?php echo var_dump($error) ?>
<?php echo form_open_multipart('Annonce/test_upload');?>

<h1>Depot de l'annonce </h1>

<br/><br/>

Titre : 
<input type="text" name="titre" placeholder="Entrer le titre de l'annonce..." />
<br /><br />
Images : 
<input type="file" name="imagefiles[]" multiple size="200" />
<br /><br />


Description : 
<input type="textarea" name="description"/>
<br /><br />

Prix : 
<input type="Number" name="prix" />DH
<br /><br />

Categorie : 
<?php echo form_dropdown('categorie_id',$categories); ?>
<br /><br/>

Ville : 
<?php echo form_dropdown('ville_id',$villes); ?>
<br /><br/>

<input type="submit" value="upload" />

</form>


<?php $this->load->view('Main/_Main_Footer'); ?>