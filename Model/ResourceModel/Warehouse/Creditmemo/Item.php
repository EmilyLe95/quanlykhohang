<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\Warehouse\Creditmemo;


class Item extends \Magestore\InventorySuccess\Model\ResourceModel\AbstractResource
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('os_warehouse_creditmemo_item', 'warehouse_creditmemo_item_id');
    }
}