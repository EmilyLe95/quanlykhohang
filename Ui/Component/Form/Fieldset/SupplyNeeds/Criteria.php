<?php


namespace Magestore\InventorySuccess\Ui\Component\Form\Fieldset\SupplyNeeds;

use Magento\Framework\View\Element\UiComponentInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Ui\Component\Form\Fieldset;

/**
 * Class Websites Fieldset
 */
class Criteria extends Fieldset
{
    /**
     * Store manager
     *
     * @var StoreManager
     */
    protected $storeManager;

    protected $_context;
    /**
     * Constructor
     *
     * @param ContextInterface $context
     * @param StoreManager $storeManager
     * @param UiComponentInterface[] $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        array $components = [],
        array $data = []
    ) {
        $this->_context = $context;
        parent::__construct($context, $components, $data);

    }

    /**
     * Prepare component configuration
     *
     * @return void
     */
    public function prepare()
    {
        parent::prepare();
        if(!$this->_context->getRequestParam('top_filter', false))
            $this->_data['config']['opened'] = true;
    }
}