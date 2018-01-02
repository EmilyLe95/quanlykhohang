<?php


namespace Magestore\InventorySuccess\Model;

class WarehouseLocationMap extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magestore\InventorySuccess\Model\ResourceModel\WarehouseLocationMap');
    }
}