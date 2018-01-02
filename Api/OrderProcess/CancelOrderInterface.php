<?php

namespace Magestore\InventorySuccess\Api\OrderProcess;

interface CancelOrderInterface
{
    /**
     * execute the process
     * 
     * @param \Magento\Sales\Model\Order\Item $item
     * @return bool
     */
    public function execute($item);
}