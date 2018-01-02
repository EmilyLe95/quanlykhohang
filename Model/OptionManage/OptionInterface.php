<?php

namespace Magestore\InventorySuccess\Model\OptionManage;


interface OptionInterface
    extends \Magento\Framework\Option\ArrayInterface,
    \Magestore\InventorySuccess\Model\OptionManage\OptionHashInterface
{
    /**
     * @return mixed
     */
    public function toOptionArray();

    /**
     * @return mixed
     */
    public function toOptionHash();

}