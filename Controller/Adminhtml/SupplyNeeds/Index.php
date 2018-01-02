<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\SupplyNeeds;


class Index extends \Magestore\InventorySuccess\Controller\Adminhtml\SupplyNeeds\AbstractSupplyNeeds
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();

        $resultPage->setActiveMenu('Magestore_InventorySuccess::supplyneeds');
        $resultPage->getConfig()->getTitle()->prepend(__('Supply Needs'));
        $resultPage->addBreadcrumb(__('Supply Needs'), __('Supply Needs'));

        return $resultPage;
    }
}