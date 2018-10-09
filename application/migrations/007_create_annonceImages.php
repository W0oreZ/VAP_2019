<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_annonceImages extends CI_Migration {

  public function up()
  {
    $fields = array(
        "`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
        "`annonce_id` INT(10) UNSIGNED NOT NULL",
        "`image` VARCHAR(50) NOT NULL",
        "`isPrimary` TINYINT(1) NOT NULL DEFAULT '0'",
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->create_table('annonce_images');  
  }

  public function down()
  {
    $this->dbforge->drop_table('annonce_images');
  }
 }