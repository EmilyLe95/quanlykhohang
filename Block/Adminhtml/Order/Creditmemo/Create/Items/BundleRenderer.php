<?php


namespace Magestore\InventorySuccess\Block\Adminhtml\Order\Creditmemo\Create\Items;

class BundleRenderer extends \Magento\Bundle\Block\Adminhtml\Sales\Order\Items\Renderer
{
    /**
     * is Auto Return enabled
     * 
     * @return bool
     */
    public function isAutoReturn()
    {
        return $this->stockConfiguration->isAutoReturnEnabled();        
    }
}