<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps;


/**
 * Class PrepareProducts
 * @package Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps
 */
class PrepareProducts extends  \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('Prepare Products');
    }

}