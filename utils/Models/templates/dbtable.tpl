<?="<?php\n"?>

/**
 * Add your description here
 * 
 */

class <?=$params['module']?>_Model_DbTable_<?=$params['filename']?> extends Zend_Db_Table_Abstract
{
        /**
         * $_name - name of database table
         *
         * @var string
         */
	protected $_name='<?=strtolower($params['table'])?>';

        /**
         * $_id - this is the primary key name

         *
         * @var string

         */
	protected $_id='<?=$params['primarykey']?>';



   <?=$params['referencemap']?>
   
   
}


