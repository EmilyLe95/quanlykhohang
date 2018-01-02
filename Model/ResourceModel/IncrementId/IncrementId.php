<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\IncrementId;

class IncrementId extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('os_increment_id', 'increment_id');
    }
}
