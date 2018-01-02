<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\TransferStock;

abstract class AbstractRequest extends \Magestore\InventorySuccess\Controller\Adminhtml\TransferStock\AbstractTransfer
{
    public function __construct(
        \Magestore\InventorySuccess\Controller\Adminhtml\Context $context
    ){
        parent::__construct($context);
    }
}
