<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\LowStockNotification\Notification;

/**
 * Resource Model Supplier
 */
class Product extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init('os_lowstock_notification_product', 'notification_product_id');
    }
}