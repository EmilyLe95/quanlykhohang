<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps;


/**
 * Class InputGeneral
 * @package Magestore\InventorySuccess\Block\Adminhtml\Stocktaking\Steps
 */
class InputGeneral extends  \Magento\Ui\Block\Component\StepsWizard\StepAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getCaption()
    {
        return __('General Information');
    }

}