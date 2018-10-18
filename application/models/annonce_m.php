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

	function get_available(){
		$this->_order_by = 'created_at';
		$annonces = $this->get_by('approved_by <> 0');
		if(count((array)$annonces)>0){
			return $annonces;
		}else{
			return false;
		}
	}
	
	function get_new(){
			$annonce = new stdClass();
			$annonce->id = '';
			$annonce->titre = '';
			$annonce->description = '';
			$annonce->ville_id = '';
			$annonce->ville_name = '';
			$annonce->categorie_id = '';
			$annonce->categorie_name = '';
			$annonce->details_id = '';
			$annonce->created_by = '';
			$annonce->approved_by = '';
			$annonce->images = array();
			
			return $annonce;
	}
 }
