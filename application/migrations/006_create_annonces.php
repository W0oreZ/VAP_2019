<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_annonces extends CI_Migration {

	public function up()
	{
	  $fields = array(
		"`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
		"`titre` VARCHAR(50) NOT NULL",
			"`description` TEXT NOT NULL",
			"`prix` FLOAT NOT NULL",
	    "`ville_id` INT(10) UNSIGNED NOT NULL",
	    "`details_id` INT(10) UNSIGNED NOT NULL",
	    "`categorie_id` INT(10) UNSIGNED NOT NULL",
	    "`created_by` INT(10) UNSIGNED NOT NULL",
	    "`approved_by` INT(10) UNSIGNED NOT NULL",
	    "`created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP",
	    "`updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
	  );
  
	  $this->dbforge->add_field($fields);
	  $this->dbforge->create_table('annonces');
	}
  
	public function down()
	{
	  $this->dbforge->drop_table('annonces');
	}
  
  }