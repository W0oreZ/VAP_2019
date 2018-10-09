<?php 

 class messege_m extends MY_Model
 {
 	protected $_table_name = 'messeges';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	
	function __construct()
	{
		parent::__construct();
	}
	
 }
