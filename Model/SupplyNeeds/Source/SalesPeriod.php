<?php


namespace Magestore\InventorySuccess\Model\SupplyNeeds\Source;

/**
 * Class SalesPeriod
 * @package Magestore\InventorySuccess\Model\SupplyNeeds\Source
 */

class SalesPeriod extends AbstractSource
{

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->_supplyNeeds->getSalesPeriod();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => (string)$value,
                'value' => (string)$key,
            ];
        }
        return $options;
    }
}
