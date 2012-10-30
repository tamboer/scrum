<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TeamHasPlayer', 'scrum');

/**
 * Base_TeamHasPlayer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $fk_id_team
 * @property integer $fk_id_player
 * @property Team $Team
 * @property Player $Player
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_TeamHasPlayer extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('team_has_player');
        $this->hasColumn('fk_id_team', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('fk_id_player', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
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
        $this->hasOne('Team', array(
             'local' => 'fk_id_team',
             'foreign' => 'id_team'));

        $this->hasOne('Player', array(
             'local' => 'fk_id_player',
             'foreign' => 'id_player'));
    }
}