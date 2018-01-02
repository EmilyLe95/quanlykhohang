<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps;


/**
 * Class Confirm
 * @package Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps
 */
class Confirm extends  \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('Complete Stocktake');
    }

}