<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\LowStockNotification\Rule;

class NewAction extends \Magestore\InventorySuccess\Controller\Adminhtml\LowStockNotification\AbstractLowStockNotification
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
