<?php

namespace Magestore\InventorySuccess\Plugin\CatalogSearch\Model\Search\FilterMapper;

use Magento\Framework\App\ResourceConnection;
use Magento\Framework\DB\Select;

if (!class_exists('Magento\CatalogSearch\Model\Search\FilterMapper\StockStatusFilter')) {

    /**
     * Class StockStatusFilter
     * Adds filter by stock status to base select
     */
    class StockStatusFilter
    {
    }
} else {
    class StockStatusFilter extends \Magento\CatalogSearch\Model\Search\FilterMapper\StockStatusFilter
    {
    }
}


