<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_patients extends CI_Migration {

  public function up()
    {$this->dbforge->add_field(array(
     'id' => array(
        'type' => 'INT',
          'constraint' => 11,
          'unsigned' => TRUE,
          'auto_increment' => TRUE,
      ),
      'photo' => array(
        'type' => 'VARCHAR',
        'null' => TRUE,
      ),
      'full_name' => array(
        'type' => 'VARCHAR',
      ),
      'mother_name' => array(
        'type' => 'VARCHAR',
      ),
      'birthday' => array(
        'type' => 'DATE',
      ),
      'cpf' => array(
        'type' => 'VARCHAR',
        'constraint' => '14',
        'unique' => TRUE
      ),
      'cns' => array(
        'type' => 'VARCHAR',
        'constraint' => '18',
        'unique' => TRUE
      ),
      'cep' => array(
        'type' => 'VARCHAR',
        'constraint' => '9',
      ),
      'address' => array(
        'type' => 'VARCHAR',
      ),
      'number' => array(
        'type' => 'INT',
        'constraint' => '11',
        'unsigned' => TRUE,
      ),
      'complement' => array(
        'type' => 'VARCHAR',
        'null' => TRUE,
      ),
      'localization' => array(
        'type' => 'VARCHAR',
        'null' => TRUE,
      ),
      'district' => array(
        'type' => 'VARCHAR',
      ),
      'city' => array(
        'type' => 'VARCHAR',
      ),
      'state_abbr' => array(
        'type' => 'VARCHAR',
        'constraint' => '2',
      ),
      'created_at' => array(
        'type' => 'TIMESTAMP',
        'null' => TRUE,
      ),
      'updated_at' => array(
        'type' => 'TIMESTAMP',
        'null' => TRUE,
      ),
      'deleted_at' => array(
        'type' => 'TIMESTAMP',
        'null' => TRUE,
      ),
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('patients');
    }

    public function down()
    {
     $this->dbforge->drop_table('patients');
    }

}       