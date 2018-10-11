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

	public function save_images($annonce_id,$images){

		foreach($images as $img){
			$data = array();
			$data['image']=$img['file_name'];
			$data['annonce_id']=$annonce_id;
			$data['isPrimary']=0;
			if($this->save($data)==null){
				return false;
			}

		}
		return true;

	} 
	
 }
