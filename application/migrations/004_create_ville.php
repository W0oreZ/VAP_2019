<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_ville extends CI_Migration {

  public function up()
  {
    $fields = array(
        "`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
        "`nom` VARCHAR(50) NULL DEFAULT 'Global'",
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->create_table('villes');  
  }

  public function down()
  {
    $this->dbforge->drop_table('villes');
  }
 }