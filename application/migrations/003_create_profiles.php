<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Profiles extends CI_Migration {

	public function up()
	{
	  $fields = array(
		"`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
		"`nom` varchar(50) DEFAULT 'N/A'",
		"`prenom` varchar(50) DEFAULT 'N/A'",
		"`date_naissance` date DEFAULT NULL",
		"`adresse` tinytext",
		"`image` varchar(50) DEFAULT NULL",
		"`rating` int(10) DEFAULT '0'",
		"`is_activated` int(11) DEFAULT NULL",
		"`is_online` tinyint(1) DEFAULT '0'",
		"`user_id` int(10) UNSIGNED NOT NULL"
	  );
  
	  $this->dbforge->add_field($fields);
	  $this->dbforge->create_table('profiles');
	}
  
	public function down()
	{
	  $this->dbforge->drop_table('profiles');
	}
  
  }