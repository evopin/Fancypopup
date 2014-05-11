<?php

class Shopgo_Featuredpopup_Block_Adminhtml_Featuredpopup_Edit_Tab_Formdate extends Mage_Adminhtml_Block_Widget_Form 

{
  protected function _prepareForm()
  {  
	  $form = new Varien_Data_Form();	
	  
	  $model = Mage::registry('featuredpopup_data');
	  
	  $fieldset = $form->addFieldset('featuredpopup_date', array('legend'=>Mage::helper('featuredpopup')->__('Date Settings')));
	  
	  $outputFormat = Mage::app()->getLocale()->getDateTimeFormat(Mage_Core_Model_Locale::FORMAT_TYPE_MEDIUM);


	  $fieldset->addField('from_date', 'date',array(
	      'name'      =>    'from_date',
	      'time'      =>    true,
          'class'     => 'required-entry',
          'required'  => true,	      
	      'format'    =>    $this->escDates(),
	      'label'     =>    Mage::helper('featuredpopup')->__('From:'),
	      'image'     =>    $this->getSkinUrl('images/grid-cal.gif')
	  ));

	  $fieldset->addField('to_date', 'date',array(
	      'name'      =>    'to_date',
	      'time'      =>    true,
          'class'     => 	'required-entry',
          'required'  => 	true,	      
	      'format'    =>    $this->escDates(),
	      'label'     =>    Mage::helper('featuredpopup')->__('To:'),
	      'image'     =>    $this->getSkinUrl('images/grid-cal.gif')
	  ));
	  
	  $form->setValues($model->getData());
	  
	  $this->setForm($form);
      return parent::_prepareForm();
  }


    private function escDates() {
	 	return 'yyyy-MM-dd HH:mm:ss';	
    }

  
}  
