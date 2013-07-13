<?php
/**
 * Magento
 * @category   Payment
 * @package    Shd_zarinpalwg
 * @copyright  Copyright (c) 2013 Shayan Davarzani (shayandavarzani@gmail.com)
 * @see https://github.com/shayand
 */
class Shd_zarinpalwg_Block_Form extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('zarinpalwg/form.phtml');
    }

    public function getPaymentImageSrc()
    {
    	$locale = strtolower(Mage::app()->getLocale()->getLocaleCode());
    	$imgSrc = $this->getSkinUrl('images/zarinpalwg/'.$locale.'_outl.gif');

    	if (!file_exists(Mage::getDesign()->getSkinBaseDir().'/images/zarinpalwg/'.$locale.'_outl.gif')) {
    		$imgSrc = $this->getSkinUrl('images/zarinpalwg/intl_outl.gif');
    	}
    	return $imgSrc;
    }
}