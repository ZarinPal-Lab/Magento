<?php
/**
 * Magento
 * @category   Payment
 * @package    Shd_zarinpalwg
 * @copyright  Copyright (c) 2013 Shayan Davarzani (shayandavarzani@gmail.com)
 * @see https://github.com/shayand
 */
class Shd_zarinpalwg_Block_Failure extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('zarinpalwg/failure.phtml');
    }

    /**
     * Get continue shopping url
     */
    public function getContinueShoppingUrl()
    {
        return Mage::getUrl('checkout/cart');
    }
}