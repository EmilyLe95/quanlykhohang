<?php


namespace Magestore\InventorySuccess\Api\Warehouse;

interface CreditmemoItemManagementInterface
{
    /**
     * Get Warehouse by creditmemo item id
     * 
     * @param int $creditmemoItemId
     * @return int
     */
    public function getWarehouseByCreditmemoItemId($creditmemoItemId);
  
}          