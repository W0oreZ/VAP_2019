<?php
/**
* 
*/
class MY_Model extends CI_Model
{
	/**
	model de base a utiliser pour tout les model avenir
	pour cree un nouveau model simplement : 
	class model_name extends MY_Model
	{
		*changer le nom de table et modifier les valeur par defaut si besoin
		protected $_table_name = 'profils';
		protected $_timestamps = TRUE;

		function __construct()
		{
			parent::__construct();
		}

	}
	*/
	//proprieter de table
	//----------------------------------------------------------------------------------
	//table name
	protected $_table_name = '';
	//table_primarykey ( par defaut id )
	protected $_primary_key = 'id';
	//type de cle primaire (par defaut int)
	protected $_primary_filter = 'intval';
	//order par defaut des query, si laissez vide les resultat seron par ordre id
	protected $_order_by='';
	//les rules des different champ a utiliser avec le form helper de CI
	public $rules=array();
	//si les champ created_at et updated_at son dans la table , si TRUE il seron modifier quand on effectue un CRUD sur la table
	protected $_timestamps = FALSE;
	//----------------------------------------------------------------------------------
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	function qui recuper tous les input et les place dans un array key value pair 

	ex:
	en appelant la function avec ces params : array_from_post(["nom","prenom"]);

	le resulta c'est un array de forme : ["nom"=>"khadiri","prenom"=>"abderrazak"]  
		
	*/
	
	public function array_from_post($fields){
		$data = array();
		foreach ($fields as $field) {
				$data[$field]= $this->input->post($field);
			}
		return $data;	
	}
	/**
	------------------------------------------------------------------------
	*/


	/**
	---------------------------------------------------------------------------
	function get, recuper un ou plusieur row d'une table
	get(1,true) , recuper un seul row qui a id=1
	get() , recuper tout les record de latable
	
	*/
	public function get($id=NULL, $single = FALSE){
		if($id != NULL){
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		
		if($single == TRUE){
			$method = 'row';
		}
		else{
			$method='result';
		}
		if($this->db->order_by($this->_order_by) == NULL ){
			$this->db->order_by($this->_order_by);
		}

		
		return $this->db->get($this->_table_name)->$method();
	}
	/** 
	--------------------------------------------------------------------------- 
	*/



	/**
	---------------------------------------------------------------------------
	recuper un ou plusieur row de la table suite a un array de key value pair
	*/
	public function get_by($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}
	/**
	---------------------------------------------------------------------------
	*/

	/**
	insert ou modifie les record d'une table et retourn l'id du row affecter
	*/
	public function save($data, $id = NULL){

		//timestamps
		if($this->_timestamps == TRUE){
			$now = date('Y-m-d H:i:s');
			$id || $data['created_at'] = $now;
			$data['modified_at'] = $now;
		}

		//insert
		if($id === NULL){
			if(isset($data[$this->_primary_key]))
				$data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}

		//update
		else{
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}

	/**
	supprime un record de la table
	*/
	public function delete($id){

		$filter = $this->_primary_filter;
		$id = $filter($id);

		if(!$id)
			return FALSE;
		$this->db->where($this->_primary_key,$id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
		return TRUE;

	}
}