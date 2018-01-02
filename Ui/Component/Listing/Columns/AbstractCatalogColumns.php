<?php

namespace Magestore\InventorySuccess\Ui\Component\Listing\Columns;

class AbstractCatalogColumns extends \Magento\Catalog\Ui\Component\Listing\Columns
{
    protected $columnsThumbnail = 'image';

    public function prepare()
    {
        $ret = parent::prepare();

        $this->_prepareColumns();
        return $ret;
    }

    protected function _prepareColumns()
    {
        foreach ($this->components as $id => $column) {
            if ($column instanceof \Magento\Ui\Component\Listing\Columns\Column) {
                if(!$this->checkProductSource() && ($id == $this->columnsThumbnail)) {
                    unset($this->components[$id]);
                }
            }
        }
    }

    protected function checkProductSource() {
        $om = \Magento\Framework\App\ObjectManager::getInstance();
        $helper = $om->get('Magestore\InventorySuccess\Helper\Data');
        return $helper->getShowThumbnailProduct();
    }
}
