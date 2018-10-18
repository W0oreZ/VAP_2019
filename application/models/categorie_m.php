<?php 

 class categorie_m extends MY_Model
 {
 	protected $_table_name = 'categories';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	
	function __construct()
	{
		parent::__construct();
	}
	
	function get_name($id){
		return $this->get_by(array('id'=>$id),true)->nom;
	}
 }
