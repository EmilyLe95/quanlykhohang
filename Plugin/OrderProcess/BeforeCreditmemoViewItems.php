<?php

namespace Magestore\InventorySuccess\Plugin\OrderProcess;

class BeforeCreditmemoViewItems {

    public function beforeGetItemRenderer(\Magento\Sales\Block\Adminhtml\Order\Creditmemo\View\Items $items, $type) 
    {
        if($type == \Magento\Bundle\Model\Product\Type::TYPE_CODE) {
            $type = 'inventorysuccess_'.$type;
        } else {
            $type = 'inventorysuccess_default';
        }
        return [$type];
    }

}
