<?php


/**
 * Checkout subscribe available status options source
 *
 */
class Ebizmarts_MageMonkey_Model_System_Config_Source_Checkoutsubscribe
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => Mage::helper('monkey')->__('Enabled - Checked by default')),
            array('value' => 2, 'label' => Mage::helper('monkey')->__('Enabled - Not Checked by default')),
            array('value' => 3, 'label' => Mage::helper('monkey')->__('Enabled - Force subscription')),
            array('value' => 0, 'label' => Mage::helper('monkey')->__('-- Disabled --'))
        );
    }
}