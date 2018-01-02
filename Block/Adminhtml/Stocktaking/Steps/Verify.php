<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps;


/**
 * Class Verify
 * @package Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps
 */
class Verify extends  \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('Complete Data Entry');
    }

}