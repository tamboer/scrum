<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Category', 'scrum');

/**
 * Base_Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_category
 * @property string $label
 * @property Doctrine_Collection $Play
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_Category extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('id_category', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('label', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Play', array(
             'local' => 'id_category',
             'foreign' => 'fk_id_category'));
    }
}