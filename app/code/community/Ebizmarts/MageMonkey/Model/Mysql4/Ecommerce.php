<?php

/**
 * Ecommerce360 Mysql4 model
 *
 */
class Ebizmarts_MageMonkey_Model_Mysql4_Ecommerce extends Mage_Core_Model_Mysql4_Abstract
{

	/**
	 * Initialize
	 *
	 * @return void
	 */
    public function _construct()
    {
        $this->_init('monkey/ecommerce', 'id');
    }
}