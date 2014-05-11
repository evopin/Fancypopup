<?php

class Shopgo_Featuredpopup_Helper_Data extends Mage_Core_Helper_Abstract
{

	public function getStatusOptions() {
		return array(
			'0' => Mage::helper('featuredpopup')->__('Disabled'), 
			'1' => Mage::helper('featuredpopup')->__('Enabled')
		);
	}
	
	public function getIsEnabled() {
		return (bool) Mage::getStoreConfigFlag('featuredpopup/general/active');
	}


}