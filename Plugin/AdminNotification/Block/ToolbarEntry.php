<?php

namespace Magestore\InventorySuccess\Plugin\AdminNotification\Block;

class ToolbarEntry
{
    /**
     * @param \Magento\AdminNotification\Block\ToolbarEntry $toolbarEntry
     * @param $template
     * @return string
     */
    public function afterGetTemplate(\Magento\AdminNotification\Block\ToolbarEntry $toolbarEntry, $template)
    {
        $template = 'Magestore_InventorySuccess::lowstocknotification/notification/toolbar_entry.phtml';
        return $template;
    }
}