<?php


namespace Magestore\InventorySuccess\Controller\Adminhtml\TransferStock;


abstract class AbstractTransfer extends \Magestore\InventorySuccess\Controller\Adminhtml\AbstractAction
{
    
    public function __construct(
        \Magestore\InventorySuccess\Controller\Adminhtml\Context $context
    ) {
        parent::__construct($context);

    }
}
