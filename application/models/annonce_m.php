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
	
 }
