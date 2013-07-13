<?php
/**
 * Magento
 * @category   Payment
 * @package    Shd_zarinpalwg
 * @copyright  Copyright (c) 2013 Shayan Davarzani (shayandavarzani@gmail.com)
 * @see https://github.com/shayand
 */
class Shd_zarinpalwg_Block_Info extends Mage_Payment_Block_Info
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('zarinpalwg/info.phtml');
    }

    public function getMethodCode()
    {
        return $this->getInfo()->getMethodInstance()->getCode();
    }

    public function toPdf()
    {
        $this->setTemplate('zarinpalwg/pdf/info.phtml');
        return $this->toHtml();
    }
}