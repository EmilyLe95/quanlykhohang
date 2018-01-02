<?php


namespace Magestore\InventorySuccess\Model\ResourceModel\IncrementId;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magestore\InventorySuccess\Model\IncrementId\IncrementId', 'Magestore\InventorySuccess\Model\ResourceModel\IncrementId\IncrementId');
    }
}
