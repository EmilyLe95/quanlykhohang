<?php

namespace Magestore\InventorySuccess\Model\LowStockNotification\Notification;

class Product extends \Magento\Framework\Model\AbstractModel
    implements \Magestore\InventorySuccess\Api\Data\LowStockNotification\Notification\ProductInterface
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Magestore\InventorySuccess\Model\ResourceModel\LowStockNotification\Notification\Product');
    }
}