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
	
 }
