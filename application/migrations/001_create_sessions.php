<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Sessions extends CI_Migration {

  public function up()
  {
    $fields = array(
      "id int(40) NOT NULL AUTO_INCREMENT PRIMARY KEY",
      "ip_address varchar(45) DEFAULT '0' NOT NULL",
      "user_agent varchar(250) NOT NULL",
      "timestamp int(10) unsigned DEFAULT 0 NOT NULL",
      "data text NOT NULL",
    );

    $this->dbforge->add_field($fields);
    $this->dbforge->create_table('ci_sessions');
    $this->db->query('ALTER TABLE ci_sessions ADD KEY last_activity_idx (timestamp)');  
  }

  public function down()
  {
    $this->dbforge->drop_table('ci_sessions');
  }
 }