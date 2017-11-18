<?php
/**
 * Created by PhpStorm.
 * User: shreyash
 * Date: 18/11/2017
 * Time: 06:26 PM
 */

class Migration_Add_users extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 250,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '60',
            ),
            'firstname' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'lastname' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'ip' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'last_login' => array(
                'type' => 'datetime',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('email');
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}