<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonce extends frontend_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

	public function View($id = null,$title=null,$categorie=null,$ville=null,$pMin=null,$pMax=null){
		$data = array();
		$data['categories']=(array)$this->categorie_m->get();
		$data['villes']=(array)$this->ville_m->get();
		$result = array();

		if($id != null)
		{
			$annonce = $this->annonce_m->get_details($id);
			if($annonce == false){
				redirect('home');
			}else
			{
				if($annonce->approved_by > 0)
				{
					$data['id'] = $annonce->id;
					$data['titre'] = $annonce->titre;
					$data['description'] = $annonce->description;
					$data['ville_id'] = $annonce->ville_id;
					$data['ville_name'] = $this->ville_m->get_name($annonce->ville_id);
					$data['categorie_id'] = $annonce->categorie_id;
					$data['categorie_name'] = $this->categorie_m->get_name($annonce->categorie_id);;
					$data['prix'] = $annonce->prix;
					$data['created_by'] = $annonce->created_by;
					$data['created_by_name'] = $this->profile_m->get_name($annonce->created_by);
					$data['primary_image'] = $this->annonce_image_m->get_primary($annonce->id);
					$data['images'] = $this->annonce_image_m->get_images($annonce->id);
				}
				else
				{
						redirect('annonce/view');
				}
			}

			$this->load->view('annonce/display',$data);
			return;
		}

		$title = $this->input->get('title');
		$categorie = $this->input->get('categorie');
		$ville= $this->input->get('ville');
		if($categorie==null){
			$categorie='all';
		}
		if($ville == null){
			$ville = 'Global';
		}

		if($title != null || $categorie != null || $ville != null)
		{
			$annonces = $this->annonce_m->get_filtered($title,$this->categorie_m->get_id($categorie),$this->ville_m->get_id($ville));
			foreach($annonces as $annonce){
				$result[$annonce->id]['id'] = $annonce->id;
				$result[$annonce->id]['titre'] = $annonce->titre;
				$result[$annonce->id]['description'] = $annonce->description;
				$result[$annonce->id]['ville_id'] = $annonce->ville_id;
				$result[$annonce->id]['ville_name'] = $this->ville_m->get_name($annonce->ville_id);
				$result[$annonce->id]['categorie_id'] = $annonce->categorie_id;
				$result[$annonce->id]['categorie_name'] = $this->categorie_m->get_name($annonce->categorie_id);
				$result[$annonce->id]['prix'] = $annonce->prix;
				$result[$annonce->id]['created_by'] = $annonce->created_by;
				$result[$annonce->id]['primary_image'] = $this->annonce_image_m->get_primary($annonce->id);
				$result[$annonce->id]['images'] = $this->annonce_image_m->get_images($annonce->id);
			}
			$data['annonces'] = $result;
		}
		else
		{
		$annonces = $this->annonce_m->get_available();
		if($annonces == false){
				echo 'error';
				return;
		}
		else
		{
			foreach($annonces as $annonce){
				$result[$annonce->id]['id'] = $annonce->id;
				$result[$annonce->id]['titre'] = $annonce->titre;
				$result[$annonce->id]['description'] = $annonce->description;
				$result[$annonce->id]['ville_id'] = $annonce->ville_id;
				$result[$annonce->id]['ville_name'] = $this->ville_m->get_name($annonce->ville_id);
				$result[$annonce->id]['categorie_id'] = $annonce->categorie_id;
				$result[$annonce->id]['categorie_name'] = $this->categorie_m->get_name($annonce->categorie_id);;
				$result[$annonce->id]['prix'] = $annonce->prix;
				$result[$annonce->id]['created_by'] = $annonce->created_by;
				$result[$annonce->id]['primary_image'] = $this->annonce_image_m->get_primary($annonce->id);
				$result[$annonce->id]['images'] = $this->annonce_image_m->get_images($annonce->id);
			}
			$data['annonces'] = $result;
			
			return;
		}

		}
		//-------------------------------------
		$this->load->view('annonce/display_all',$data);
		
		//------------------------------------------------------------------------------
		
	}

    public function Add(){
		$data['categories']=(array)$this->categorie_m->get();
		$data['villes']=(array)$this->ville_m->get();

		$this->load->view('annonce/annonce_add',$data);	
	}

	public function test_upload()
	{
		if(!$this->quick_register())
		{
			echo 'error';
			die();
		}
		
		$data['images'] = array();
		$ImageCount = count($_FILES['imagefiles']['name']);
		for($i = 0; $i < $ImageCount; $i++)
		{
			$_FILES['file']['name']       = $_FILES['imagefiles']['name'][$i];
			$_FILES['file']['type']       = $_FILES['imagefiles']['type'][$i];
			$_FILES['file']['tmp_name']   = $_FILES['imagefiles']['tmp_name'][$i];
			$_FILES['file']['error']      = $_FILES['imagefiles']['error'][$i];
			$_FILES['file']['size']       = $_FILES['imagefiles']['size'][$i];

			// File upload configuration
		
			$config['upload_path'] = './VAP/public/uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// Upload file to server
			if($this->upload->do_upload('file'))
			{
			   // Uploaded file data
			   $data['images'][$i] = $this->upload->data();
			}
		}
		if(count($data['images']) == $ImageCount)
		{ 
			
			$annonce = $this->annonce_m->array_from_post(array('titre','description','prix','ville_id','categorie_id'));
			if($this->session->userdata('id')==null)
			{
				$annonce['created_by'] = 99;
			}else{
			$annonce['created_by'] = $this->session->userdata('id');
			}
			$annonce_id = $this->annonce_m->save($annonce);
			if($annonce_id){
				if($this->annonce_image_m->save_images($annonce_id,$data['images']))
				{
					echo "success";
				}else{
					echo "an error occured";
				}
				
			}else{
				echo 'couldnt create annonce';
			}
		
		}
		else
		{
			$data['error'] = "Upload Error";
		}
		
		
	}

	public function quick_register()
	{
		$id = $this->user_m->register();
		if($id)
		{
			$user = $this->user_m->get_by(array('id'=>$id),TRUE);
			$profile_id = $this->profile_m->update_profile(null,$id);
			if($profile_id)
			{
				$profile = $this->profile_m->get_by(array('id'=>$profile_id),TRUE);
				if(count((array)$user)>0)
				{
					$data = array(
						'username'=> $user->username,
						'email'=> $user->email,
						'firstname' => $profile->nom,
						'lastname' => $profile->prenom,
						'image' => $profile->image,
						'id' => $profile->id,
						'access' => $user->access,
						'loggedin' => TRUE
					);
					$this->session->set_userdata($data);
					return true;
				}
				
			}
		}
	
		return false;

	}

	public function do_upload()
	{
		
		if($_FILES['files']['name'] != '')
		{
			$output='';

			$config['upload_path']          = './VAP/public/uploads/';
	        $config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['max_size']             = 0;

			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);
			
			for($count = 0 ; $count<count($_FILES['files']['name']) ; $count++)
			{
				$_FILES['file']['name']		= $_FILES['files']['name'][$count];
				$_FILES['file']['type']		= $_FILES['files']['type'][$count];
				$_FILES['file']['tmp_name']	= $_FILES['files']['tmp_name'][$count];
				$_FILES['file']['error']	= $_FILES['files']['error'][$count];
				$_FILES['file']['size']		= $_FILES['files']['size'][$count];
				
				$ran = 'vap-thum-'. date('Ymd-His-') . rand();

				$file_ext = pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);

				$_FILES["file"]["name"]=$ran.'.'.$file_ext;
				
						

				if($this->upload->do_upload('file'))
				{
					$data = array('dt' => $this->upload->data());
					
					$this->load->library('image_lib');
						$imgconfig['source_image'] = './public/uploads/'.$_FILES["file"]["name"];
						$imgconfig['wm_text'] = 'vap.ma';
						$imgconfig['wm_type'] = 'text';
						$imgconfig['wm_font_path'] = './system/fonts/texb.ttf';
						$imgconfig['wm_font_size'] = '20';
						$imgconfig['wm_font_color'] = 'ffffff';
						$imgconfig['wm_vrt_alignment'] = 'bottom';
						$imgconfig['wm_hor_alignment'] = 'center';
						$imgconfig['wm_padding'] = '0';
						$imgconfig['create_thumb'] = false;

						$this->image_lib->initialize($imgconfig);

						$this->image_lib->watermark();

					$output	.= '<div class="photo">
								<a class="remove" href="'.$data['dt']['file_name'].'" onclick="return false;"><i class="fa fa-trash"></i></a>
								<div class="photo-inner">
								<div class="photo-image">
								<img src="'.base_url('/VAP/public/uploads/').$data['dt']['file_name'].'">
								</div>
								<div class="photo-foot">
								<div class="checkbox"><label class="form-label ml-1">
								<input type="radio" name="images" value="'.$_FILES["file"]["name"].'" id="'.$ran.'" checked><span class="label-text">Photo principale</span></label>
								</div>
								</div>
								</div>
								</div>';

				}
				else{
					$error = array('error' => $this->upload->display_errors());
					print_r ($error);
					echo '<br> size of file = '.$_FILES['file']['size'].'<br>'	;
				}
			}
			echo $output;

		}
		
	}// End Function
	
	public function delete_img($img)
	{
		if(isset($img))
		{
		  $filename = './public/uploads/'.$img;
			
		  if (file_exists($filename)) 
		  {
			unlink($filename);
		  }
		}
	}// End function 
	

}

