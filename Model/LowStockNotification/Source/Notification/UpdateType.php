<?php

namespace Magestore\InventorySuccess\Model\LowStockNotification\Source\Notification;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class IsActive
 */
class UpdateType extends \Magestore\InventorySuccess\Model\LowStockNotification\Source\AbstractSource implements OptionSourceInterface
{

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->_notificationFactory->create()->getAvailableUpdateType();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
