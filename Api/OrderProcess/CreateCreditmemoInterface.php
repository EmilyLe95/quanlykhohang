<?php


namespace Magestore\InventorySuccess\Api\OrderProcess;

interface CreateCreditmemoInterface
{

    /**
     * execute the process
     * 
     * @param \Magento\Sales\Model\Order\Creditmemo\Item $item
     * @return bool
     */
    public function execute($item);
    
}