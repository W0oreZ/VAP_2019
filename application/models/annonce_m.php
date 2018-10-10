<?php 

 class annonce_m extends MY_Model
 {
 	protected $_table_name = 'annonces';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_timestamps = TRUE;
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_new(){
			$annonce = new stdClass();
			$annonce->id = '';
			$annonce->titre = '';
			$annonce->description = '';
			$annonce->ville_id = '';
			$annonce->categorie_id = '';
			$annonce->details_id = '';
			$annonce->created_by = '';
			$annonce->approved_by = '';
			
			return $annonce;
	}
 }
