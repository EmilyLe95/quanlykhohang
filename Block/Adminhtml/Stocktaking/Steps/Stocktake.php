<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps;


/**
 * Class Stocktake
 * @package Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps
 */
class Stocktake extends  \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('Stocktake');
    }

}