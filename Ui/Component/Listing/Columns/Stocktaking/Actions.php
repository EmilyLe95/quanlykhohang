<?php

namespace Magestore\InventorySuccess\Ui\Component\Listing\Columns\Stocktaking;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;

class Actions extends \Magestore\InventorySuccess\Ui\Component\Listing\Columns\Actions
{
    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    protected $_editUrl = 'inventorysuccess/stocktaking/edit';
    
}
