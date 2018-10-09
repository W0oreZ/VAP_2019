<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Users extends CI_Migration {

	public function up()
	{
	  $fields = array(
		"`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
		"`username` varchar(50) NOT NULL",
		"`email` varchar(50) NOT NULL",
		"`password` varchar(50) NOT NULL",
		"`access` enum('Utilisateur','Administrateur','Moderateur') DEFAULT 'Utilisateur'"
	  );
  
	  $this->dbforge->add_field($fields);
	  $this->dbforge->create_table('users');
	}
  
	public function down()
	{
	  $this->dbforge->drop_table('users');
	}
  
  }