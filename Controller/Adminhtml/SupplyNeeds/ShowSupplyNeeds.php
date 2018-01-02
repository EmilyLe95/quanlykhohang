<?php

namespace Magestore\InventorySuccess\Controller\Adminhtml\SupplyNeeds;

class ShowSupplyNeeds extends \Magestore\InventorySuccess\Controller\Adminhtml\SupplyNeeds\AbstractSupplyNeeds
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if (!empty($data)) {
            $topFilter = base64_encode(serialize($data));
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/', [
                'top_filter' => $topFilter,
                'id' => 1
            ]);
        }
    }
}