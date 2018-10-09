<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_details extends CI_Migration {

  public function up()
  {
    $fields = array(
        "`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
        "`annonce_id` INT(10) UNSIGNED NULL DEFAULT NULL",
	    "`field_name` VARCHAR(50) NULL DEFAULT NULL",
	    "`field_value` VARCHAR(50) NULL DEFAULT NULL",
	    "`field_description` VARCHAR(50) NULL DEFAULT NULL"
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->create_table('details');  
  }

  public function down()
  {
    $this->dbforge->drop_table('details');
  }
 }