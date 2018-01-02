<?php

namespace Magestore\InventorySuccess\Block\Adminhtml\AdjustStock\Import;
/**
 * Class Form
 * @package Magestore\InventorySuccess\Block\Adminhtml\AdjustStock\Import
 */
class Form extends  \Magestore\InventorySuccess\Block\Adminhtml\Import\Form {

    /**
     * Get adjust stock csv sample link
     *
     * @return mixed
     */
    public function getCsvSampleLink() {
        $url = $this->getUrl('inventorysuccess/adjuststock/downloadsample',
                array(
                    '_secure' => true,
                    'id' => $this->getRequest()->getParam('id')
                ));
        return $url;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent() {
        return 'Please choose a CSV file to import product adjust stock. You can download this sample CSV file';
    }

    /**
     * Get import urk
     *
     * @return mixed
     */
    public function getImportLink() {
        return $this->getUrl('inventorysuccess/adjuststock/import',
                array(
                    '_secure' => true,
                    'id' => $this->getRequest()->getParam('id')
                ));
    }

    /**
     * Get import title
     *
     * @return string
     */
    public function getTitle() {
        return 'Import products';
    }

}