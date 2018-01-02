<?php

namespace Magestore\InventorySuccess\Model\SupplyNeeds\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class AbstractSource
 * @package Magestore\InventorySuccess\Model\SupplyNeeds\Source
 */

abstract class AbstractSource implements OptionSourceInterface
{
    /**
     * @var \Magestore\InventorySuccess\Model\SupplyNeeds
     */
    protected $_supplyNeeds;

    /**
     * Warehouse constructor.
     * @param \Magestore\InventorySuccess\Model\SupplyNeeds $supplyNeeds
     */
    public function __construct(\Magestore\InventorySuccess\Model\SupplyNeeds $supplyNeeds)
    {
        $this->_supplyNeeds = $supplyNeeds;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [];
    }
}
