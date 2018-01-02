<?php

namespace Magestore\InventorySuccess\Api\StockActivity;


interface StockActivityInterface
{
    /**
     * Get Entity Id
     * 
     * @return int
     */
    public function getId();
    
    /**
     * get stockactivity-product model
     * 
     * @return StockActivityProductInterface
     */
    public function getStockActivityProductModel();
    
    /**
     * Get resource model of stock activity object
     * 
     * @return \Magento\Framework\Model\ResourceModel\Db\AbstractDb
     */
    public function getResource();
}