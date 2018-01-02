<?php


namespace Magestore\InventorySuccess\Block\Adminhtml\Order\Creditmemo\Create\Items;


class DefaultRenderer extends \Magento\Sales\Block\Adminhtml\Items\Renderer\DefaultRenderer
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