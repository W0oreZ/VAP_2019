<?php 

 class comment_m extends MY_Model
 {
 	protected $_table_name = 'comments';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_timestamps = TRUE;
	
	function __construct()
	{
		parent::__construct();
	}
	
 }
