<?php
namespace VnCosy\Document\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_documentFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \VnCosy\Document\Model\DocumentFactory $documentFactory
    )
    {
        $this->_documentFactory = $documentFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $document = $this->_documentFactory->create();
        $collection = $document->getCollection();
        foreach($collection as $item){

            print_r($item->getData());

        }
        exit();
    }
}
