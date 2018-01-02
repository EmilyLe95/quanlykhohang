<?php

namespace Magestore\InventorySuccess\Model\ResourceModel\TransferStock\TransferActivity;

use \Magestore\InventorySuccess\Model\ResourceModel\AbstractCollection;


class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'activity_id';



    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magestore\InventorySuccess\Model\TransferStock\TransferActivity', 'Magestore\InventorySuccess\Model\ResourceModel\TransferStock\TransferActivity');
    }
    
}
