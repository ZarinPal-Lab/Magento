<?php
/**
 * Magento
 * @category   Payment
 * @package    Zarinpal_WebGate
 * @copyright  Copyright (c) 2013 Shayan Davarzani (shayandavarzani@gmail.com)
 * @see https://github.com/shayand
 */
class Zarinpal_WebGate_Block_Info extends Mage_Payment_Block_Info
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('WebGate/info.phtml');
    }

    public function getMethodCode()
    {
        return $this->getInfo()->getMethodInstance()->getCode();
    }

    public function toPdf()
    {
        $this->setTemplate('WebGate/pdf/info.phtml');
        return $this->toHtml();
    }
}