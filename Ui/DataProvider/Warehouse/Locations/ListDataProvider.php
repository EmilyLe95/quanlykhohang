<?php


namespace Magestore\InventorySuccess\Ui\DataProvider\Warehouse\Locations;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Magestore\InventorySuccess\Model\ResourceModel\WarehouseLocationMap\CollectionFactory;
use Magento\Framework\Module\Manager;

/**
 * Class Mapping
 * @package Magestore\InventorySuccess\Ui\DataProvider\Warehouse\Locations
 */
class ListDataProvider extends AbstractDataProvider
{
    /**
     * Mapping constructor.
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param Collection $collection
     * @param Warehouse $warehouseOptions
     * @param Location $locationOptions
     * @param Manager $moduleManager
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collection,
        Manager $moduleManager,
        array $meta = [],
        array $data = []
    )
    {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collection->create()->getLocationCollection();
    }
}