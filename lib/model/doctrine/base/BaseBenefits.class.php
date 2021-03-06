<?php

/**
 * BaseBenefits
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $text
 * @property string $image
 * 
 * @method string   getTitle() Returns the current record's "title" value
 * @method string   getText()  Returns the current record's "text" value
 * @method string   getImage() Returns the current record's "image" value
 * @method Benefits setTitle() Sets the current record's "title" value
 * @method Benefits setText()  Sets the current record's "text" value
 * @method Benefits setImage() Sets the current record's "image" value
 * 
 * @package    site-develope
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBenefits extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('benefits');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('text', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('image', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}