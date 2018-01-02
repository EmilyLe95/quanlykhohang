<?php

namespace Magestore\InventorySuccess\Api\OrderProcess;

interface CreateShipmentInterface
{
    /**
     * execute the process
     * 
     * @param \Magento\Sales\Model\Order\Shipment\Item $item
     * @return bool
     */
    public function execute($item);
}