<?php


namespace Magestore\InventorySuccess\Api\Warehouse;

interface ShipmentItemManagementInterface
{
    /**
     * Get Warehouse by shipment id
     * 
     * @param int $shipmentId
     * @return int
     */
    public function getWarehouseByShipmentId($shipmentId);
  
}          