<?php

class Shopgo_Featuredpopup_Model_Featuredpopup extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('featuredpopup/featuredpopup');
    }   
}