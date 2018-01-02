<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\LowStockNotification\Rule\Product;

/**
 * Collection Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(
            'Magestore\InventorySuccess\Model\LowStockNotification\Rule\Product',
            'Magestore\InventorySuccess\Model\ResourceModel\LowStockNotification\Rule\Product'
        );
    }
}