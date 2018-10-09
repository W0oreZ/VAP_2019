<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_messeges extends CI_Migration {

  public function up()
  {
    $fields = array(
        "`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
        "`sender_id` INT(11) UNSIGNED NOT NULL",
	      "`target_id` INT(11) UNSIGNED NOT NULL",
	      "`header` VARCHAR(120) NULL DEFAULT 'Instant'",
	      "`content` TEXT NOT NULL",
	      "`sent_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP",
	      "`read_at` DATETIME NULL DEFAULT NULL"
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->create_table('messeges');  
  }

  public function down()
  {
    $this->dbforge->drop_table('messeges');
  }
 }