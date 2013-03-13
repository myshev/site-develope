<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('benefits', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'title' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'text' => 
             array(
              'type' => 'string',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '',
              'notnull' => '',
              'autoincrement' => '',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('services', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'title' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'text' => 
             array(
              'type' => 'string',
              'fixed' => '0',
              'unsigned' => '',
              'primary' => '',
              'notnull' => '',
              'autoincrement' => '',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('benefits');
        $this->dropTable('services');
    }
}