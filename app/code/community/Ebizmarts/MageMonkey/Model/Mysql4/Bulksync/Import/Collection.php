<?php

/**
 * Bulksync Import collection
 *
 */
class Ebizmarts_MageMonkey_Model_Mysql4_Bulksync_Import_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

	/**
	 * Initialize
	 *
	 * @return void
	 */
    public function _construct()
    {
        parent::_construct();
        $this->_init('monkey/bulksync_import');
    }

	/**
	 * Override parent method
	 *
	 * @see Varien_Data_Collection
	 * @param string $className
	 * @return Ebizmarts_MageMonkey_Model_Mysql4_Bulksync_Export_Collection
	 */
    function setItemObjectClass($className)
    {
        $this->_itemObjectClass = 'Ebizmarts_MageMonkey_Model_BulksyncImport';
        return $this;
    }

}