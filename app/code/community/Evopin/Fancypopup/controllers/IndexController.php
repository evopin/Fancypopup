<?php

class Shopgo_Featuredpopup_IndexController extends Mage_Core_Controller_Front_Action {
	public function indexAction() {
		$collection = Mage::getModel('featuredpopup/featuredpopup')->getCollection();
		var_dump($collection);
	}
}