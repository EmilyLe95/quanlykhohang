<?php

namespace Magestore\InventorySuccess\Model\ResourceModel;

class Stocktaking extends AbstractResource
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('os_stocktaking', 'stocktaking_id');
    }
}
