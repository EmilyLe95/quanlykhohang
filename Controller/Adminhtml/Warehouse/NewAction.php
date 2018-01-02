<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\Warehouse;

/**
 * Class NewAction
 * @package Magestore\InventorySuccess\Controller\Adminhtml\Warehouse
 */
class NewAction extends Edit
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Magestore_InventorySuccess::warehouse_create';
    
    public function execute()
    {
        return parent::execute();
    }
}