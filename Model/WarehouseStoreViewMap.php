<?php

namespace Magestore\InventorySuccess\Model;

class WarehouseStoreViewMap extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magestore\InventorySuccess\Model\ResourceModel\WarehouseStoreViewMap');
    }
}