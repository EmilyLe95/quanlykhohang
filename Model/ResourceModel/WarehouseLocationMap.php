<?php

namespace Magestore\InventorySuccess\Model\ResourceModel;

/**
 * Class Warehouse
 * @package Magestore\InventorySuccess\Model\ResourceModel
 */
class WarehouseLocationMap extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    const TABLE = 'os_warehouse_location';

    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::TABLE, 'id');
    }
    
}