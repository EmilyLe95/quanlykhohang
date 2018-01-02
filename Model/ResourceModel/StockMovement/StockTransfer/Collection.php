<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\StockMovement\StockTransfer;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'stock_transfer_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magestore\InventorySuccess\Model\StockMovement\StockTransfer', 'Magestore\InventorySuccess\Model\ResourceModel\StockMovement\StockTransfer');
    }

}