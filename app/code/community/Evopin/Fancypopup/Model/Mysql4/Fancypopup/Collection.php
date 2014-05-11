<?php

class Shopgo_Featuredpopup_Model_Mysql4_Featuredpopup_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('featuredpopup/featuredpopup');
    }
    
    /**
     * Add Filter by store
     *
     * @param int|Mage_Core_Model_Store $store
     * @return Mage_Cms_Model_Mysql4_Page_Collection
     */
    public function addStoreFilter($store, $withAdmin = true)
    {
    	
        if ($store instanceof Mage_Core_Model_Store) {
            $store = array($store->getId());
        }

        $this->getSelect()->join(
            array('store_table' => $this->getTable('shopgo_featuredpopup_store')),
            'main_table.featuredpopup_id = store_table.featured_id',
            array()
        )
        ->where('store_table.store_id in (?)', ($withAdmin ? array(0, $store) : $store))
        ->group('main_table.featuredpopup_id');

        return $this;
    }
    
    
    
}