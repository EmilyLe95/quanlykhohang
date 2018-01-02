<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\LowStockNotification\Rule;

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
            'Magestore\InventorySuccess\Model\LowStockNotification\Rule',
            'Magestore\InventorySuccess\Model\ResourceModel\LowStockNotification\Rule'
        );
    }
}