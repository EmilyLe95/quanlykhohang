<?php


namespace Magestore\InventorySuccess\Api\Data\Warehouse;

interface ProductSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get items.
     *
     * @return \Magestore\InventorySuccess\Api\Data\Warehouse\ProductInterface[] Array of collection items.
     */
    public function getItems();

    /**
     * Set items.
     *
     * @param \Magestore\InventorySuccess\Api\Data\Warehouse\ProductInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null);
}
