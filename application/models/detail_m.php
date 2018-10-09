<?php 

 class detail_m extends MY_Model
 {
 	protected $_table_name = 'details';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	
	function __construct()
	{
		parent::__construct();
	}
	
 }
