<?php

/**
 * Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Category extends Base_Category {

  static public function getAll() {

  $q = Doctrine_Query::create()
            ->select("id_category, CONCAT(label) as label")
            ->from("Category")
            ->fetchArray();
  
  return $q;
  }

}