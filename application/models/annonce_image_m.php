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

	public function get_primary($id){
		$image = $this->get_by(array('annonce_id'=>$id , 'isPrimary'=> 1),true);
		if(count((array)$image))
		return $image->image;
		else {
			return 'noimg.png';
		}
	}

	public function get_images($id){
		$result = array();
		$images = $this->get_by(array('annonce_id'=>$id , 'isPrimary'=> 0),false);
		if(count((array)$images)<=0){
			$result[] = 'noimg.png';
		}
		foreach($images as $img){
			$result[] = $img->image;
		}

		return $result;
	}
	
 }
