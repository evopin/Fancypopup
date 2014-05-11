<?php

class Shopgo_Featuredpopup_Block_Adminhtml_Featuredpopup extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {   	
    $this->_controller = 'adminhtml_featuredpopup';
    $this->_blockGroup = 'featuredpopup';
    $this->_headerText = Mage::helper('featuredpopup')
    ->__('Featured Popup');
    $this->_addButtonLabel = Mage::helper('featuredpopup')->__('Add Featured Popup');
    parent::__construct();
  }
}