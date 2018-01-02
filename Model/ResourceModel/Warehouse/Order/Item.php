<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\Warehouse\Order;


class Item extends \Magestore\InventorySuccess\Model\ResourceModel\AbstractResource
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('os_warehouse_order_item', 'warehouse_order_item_id');
    }
}