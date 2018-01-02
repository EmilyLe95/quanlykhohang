<?php

namespace Magestore\InventorySuccess\Api\StockActivity;


interface StockMovementActionInterface
{
    /**
     * add a row into table os_stock_movement
     * 
     * @param array $data
     * @return \Magestore\InventorySuccess\Api\Data\StockMovement\StockMovementInterface 
     */
    public function addStockMovementAction($data = []);
}