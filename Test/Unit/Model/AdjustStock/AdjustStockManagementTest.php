<?php

namespace Magestore\InventorySuccess\Test\Unit\Model\AdjustStock;

use Magestore\InventorySuccess\Model\AdjustStock\AdjustStockManagement;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager as ObjectManagerHelper;

class AdjustStockManagementTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
        $this->objectManagerHelper = new ObjectManagerHelper($this);
        $this->adjustStockManagement = $this->objectManagerHelper
                                            ->getObject('Magestore\InventorySuccess\Model\AdjustStock\AdjustStockManagement');
        
    }
    
    public function testGenerateCode()
    {
        $code = $this->adjustStockManagement->generateCode();
        $this->assertEquals('code123', $code);
    }
}