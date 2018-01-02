<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\TransferStock;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Magestore\InventorySuccess\Model\TransferStock;

/**
 * Class SaveButton
 */
class Back extends \Magestore\InventorySuccess\Block\Adminhtml\TransferStock\AbstractTransferStock
    implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("window.history.back();"),
            'class' => 'back',
            'sort_order' => 10
        ];
    }
}
