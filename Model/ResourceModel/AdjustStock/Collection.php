<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\AdjustStock;

/**
 * Class Collection
 * @package Magestore\InventorySuccess\Model\ResourceModel\AdjustStock
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('Magestore\InventorySuccess\Model\AdjustStock', 'Magestore\InventorySuccess\Model\ResourceModel\AdjustStock');
    }
}
