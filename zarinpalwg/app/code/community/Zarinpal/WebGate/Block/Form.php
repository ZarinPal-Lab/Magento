<?php
/**
 * Magento
 * @category   Payment
 * @package    Zarinpal_WebGate
 * @copyright  Copyright (c) 2013 Shayan Davarzani (shayandavarzani@gmail.com)
 * @see https://github.com/shayand
 */
class Zarinpal_WebGate_Block_Form extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('WebGate/form.phtml');
    }

    public function getPaymentImageSrc()
    {
    	$locale = strtolower(Mage::app()->getLocale()->getLocaleCode());
    	$imgSrc = $this->getSkinUrl('images/WebGate/'.$locale.'_outl.gif');

    	if (!file_exists(Mage::getDesign()->getSkinBaseDir().'/images/WebGate/'.$locale.'_outl.gif')) {
    		$imgSrc = $this->getSkinUrl('images/WebGate/intl_outl.gif');
    	}
    	return $imgSrc;
    }
}