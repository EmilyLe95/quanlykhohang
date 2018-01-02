<?php

namespace Magestore\InventorySuccess\Model\Permission;

use Magento\Framework\Model\AbstractModel;
use Magestore\InventorySuccess\Api\Data\Permission\PermissionInterface;

/**
 * Class Permission
 * @package Magestore\InventorySuccess\Model\Permission
 */
class Permission extends AbstractModel implements PermissionInterface
{
    /**
     * $objectType = warehouse
     */
    const PERMISSION_WAREHOUSE = 1;

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magestore\InventorySuccess\Model\ResourceModel\Permission\Permission');
    }
}
