<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\Warehouse;

/**
 * Class Index
 * @package Magestore\InventorySuccess\Controller\Adminhtml\Warehouse
 */
class Index extends AbstractWarehouse
{
    const ADMIN_RESOURCE = 'Magestore_InventorySuccess::warehouse_list';
    
    /**
     * Warehouse grid
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Warehouses'));
        return $resultPage;
    }
}