<?php


namespace Magestore\InventorySuccess\Api\Data\TransferStock;


interface TransferActivityInterface
{
    const ACTIVITY_TYPE_DELIVERY = "delivery";
    const ACTIVITY_TYPE_RECEIVING = "receiving";
    const ACTIVITY_TYPE_RETURN = "return";
}