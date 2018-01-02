<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\TransferStock\Request;

use Magestore\InventorySuccess\Api\Data\TransferStock\TransferPermission;

class NewAction extends \Magestore\InventorySuccess\Controller\Adminhtml\AbstractAction
{

    const ADMIN_RESOURCE = TransferPermission::REQUEST_STOCK_CREATE;

    public function execute()
    {

        $resultForward = $this->_resultForwardFactory->create();
        $resultForward->forward('edit');
        return $resultForward;

    }

}


