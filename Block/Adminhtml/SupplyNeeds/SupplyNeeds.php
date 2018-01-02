<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\SupplyNeeds;

/**
 * class \Magestore\InventorySuccess\Block\Adminhtml\SupplyNeeds\SupplyNeeds
 *
 * @category    Magestore
 * @package     Magestore\InventorySuccess\SupplyNeeds
 * @module      Inventorysuccess
 * @author      Magestore Developer
 */
class SupplyNeeds extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param \Magento\Framework\Message\ManagerInterface $messageManager
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ){
        parent::__construct($context, $data);
    }
}