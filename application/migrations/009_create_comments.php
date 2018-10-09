<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_comments extends CI_Migration {

  public function up()
  {
    $fields = array(
        "`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
        "`comment_content` TEXT NOT NULL",
        "`status` ENUM('published','edited','blocked') NULL DEFAULT 'published'",
        "`created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP",
        "`modified_at` TIMESTAMP NULL DEFAULT NULL",
        "`annonce_id` INT(10) UNSIGNED NULL DEFAULT NULL",
        "`user_id` INT(10) UNSIGNED NULL DEFAULT NULL"
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->create_table('comments');  
  }

  public function down()
  {
    $this->dbforge->drop_table('comments');
  }
 }