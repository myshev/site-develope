<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('benefits', 'image', 'string', '50', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '',
             'autoincrement' => '',
             ));
        $this->addColumn('services', 'image', 'string', '50', array(
             'fixed' => '0',
             'unsigned' => '',
             'primary' => '',
             'notnull' => '',
             'autoincrement' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('benefits', 'image');
        $this->removeColumn('services', 'image');
    }
}