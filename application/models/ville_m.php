<?php 

 class ville_m extends MY_Model
 {
	
 	protected $_table_name = 'villes';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	
	function __construct()
	{
		parent::__construct();
	}

	function get_name($id){
		return $this->get_by(array('id'=>$id),true)->nom;
	}

	function get_id($name){
		return $this->get_by(array('nom'=>$name),true)->id;
	}
	
 }
