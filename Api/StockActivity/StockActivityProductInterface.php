<?php

namespace Magestore\InventorySuccess\Api\StockActivity;


interface StockActivityProductInterface {
    
    /**
     * Get Resource Model
     * 
     * @return \Magento\Framework\Model\ResourceModel\Db\AbstractDb
     */
    public function getResource();
    
    /**
     * Get collection
     * 
     * @return \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
     */
    public function getCollection();
    
}