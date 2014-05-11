<?php

class Shopgo_Featuredpopup_Block_Adminhtml_Featuredpopup_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'featuredpopup';
        $this->_controller = 'adminhtml_featuredpopup';
        
        $this->_updateButton('save', 'label', Mage::helper('featuredpopup')->__('Save'));
        $this->_updateButton('delete', 'label', Mage::helper('featuredpopup')->__('Delete'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('featuredpopup_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'featuredpopup_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'featuredpopup_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('featuredpopup_data') && Mage::registry('featuredpopup_data')->getId() ) {
            return Mage::helper('featuredpopup')->__("Edit '%s'.", $this->htmlEscape(Mage::registry('featuredpopup_data')->getPopupName()));
        } else {
            return Mage::helper('featuredpopup')->__('New Featured Popup');
        }
    }
}