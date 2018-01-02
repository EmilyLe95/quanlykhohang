<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\SupplyNeeds\Edit\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 */
class SaveButton extends \Magestore\InventorySuccess\Block\Adminhtml\SupplyNeeds\AbstractSupplyNeeds
                 implements ButtonProviderInterface
{
    /**
     * Save button
     *
     * @return array
     */
    public function getButtonData()
    {

        return [
            'label' => __('Show Supply Needs'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 30,
        ];
    }
}
