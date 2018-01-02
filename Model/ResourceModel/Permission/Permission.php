<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\Permission;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Permission
 * @package Magestore\InventorySuccess\Model\ResourceModel\Permission
 */
class Permission extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('os_permission', 'id');
    }
}
