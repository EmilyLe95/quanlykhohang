<?php


namespace Magestore\InventorySuccess\Block\Adminhtml\Order\Shipment\Create;


class Items extends \Magento\Shipping\Block\Adminhtml\Create\Items
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->setTemplate('Magestore_InventorySuccess::order/shipment/create/items.phtml');
        return $this;
    }
}