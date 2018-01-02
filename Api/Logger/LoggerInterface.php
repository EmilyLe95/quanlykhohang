<?php

namespace Magestore\InventorySuccess\Api\Logger;


interface LoggerInterface
{
    /**
     * 
     * @param string $message
     * @param string $section
     */
    public function log($message, $section = null);
}