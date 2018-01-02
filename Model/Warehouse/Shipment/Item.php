<?php

namespace Magestore\InventorySuccess\Model\Warehouse\Shipment;

class Item extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Magestore\InventorySuccess\Model\ResourceModel\Warehouse\Shipment\Item');
    }
}