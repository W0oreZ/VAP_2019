<?php 

 class annonce_image_m extends MY_Model
 {
 	protected $_table_name = 'annonce_images';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	
	function __construct()
	{
		parent::__construct();
	}
	
 }
