<?php

namespace Magestore\InventorySuccess\Plugin\OrderProcess;

class BeforeShippingCreateItems {

    public function beforeGetItemRenderer(\Magento\Shipping\Block\Adminhtml\Create\Items $items, $type) 
    {
        if($type == \Magento\Bundle\Model\Product\Type::TYPE_CODE) {
            $type = 'inventorysuccess_'.$type;
        } else {
            $type = 'inventorysuccess_default';
        }
        return [$type];
    }

}
