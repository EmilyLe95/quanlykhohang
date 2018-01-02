<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\LowStockNotification\Notification;

class Grid extends \Magestore\InventorySuccess\Controller\Adminhtml\LowStockNotification\AbstractLowStockNotification
{
    public function execute()
    {
        $resultLayout = $this->_resultLayoutFactory->create();
        return $resultLayout;
    }
}