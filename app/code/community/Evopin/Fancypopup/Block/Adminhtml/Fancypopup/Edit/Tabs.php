<?php

class Shopgo_Featuredpopup_Block_Adminhtml_Featuredpopup_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('featuredpopup_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('featuredpopup')->__('Featured Popup'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('featuredpopup')->__('Featured Popup'),
          'title'     => Mage::helper('featuredpopup')->__('Featured Popup'),
          'content'   => $this->getLayout()->createBlock('featuredpopup/adminhtml_featuredpopup_edit_tab_form')->toHtml(),
      ));
    
      $this->addTab('date_section', array(
          'label'     => Mage::helper('featuredpopup')->__('Date Settings'),
          'title'     => Mage::helper('featuredpopup')->__('Date Settings'),
          'content'   => $this->getLayout()->createBlock('featuredpopup/adminhtml_featuredpopup_edit_tab_formdate')
          ->toHtml(),
      ));
 
 
      
      $this->addTab('popup_section', array(
          'label'     => Mage::helper('featuredpopup')->__('Popup Settings'),
          'title'     => Mage::helper('featuredpopup')->__('Popup Settings'),
          'content'   => $this->getLayout()->createBlock('featuredpopup/adminhtml_featuredpopup_edit_tab_formpopup')->toHtml(),
      ));           
     
      return parent::_beforeToHtml();
  }


}