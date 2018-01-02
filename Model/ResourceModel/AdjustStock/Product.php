<?php


namespace Magestore\InventorySuccess\Model\ResourceModel\AdjustStock;

/**
 * Class Product
 * @package Magestore\InventorySuccess\Model\ResourceModel\AdjustStock
 */
class Product extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('os_adjuststock_product', 'adjuststock_product_id');
    }
}
