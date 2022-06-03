<?php

namespace VnCosy\Document\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $_documentFactory;

    public function __construct(\VnCosy\Document\Model\DocumentFactory $documentFactory)
    {
        $this->_documentFactory = $documentFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            [
                'title'         => "Magento 2 Guide",
                'status'       => 1
            ],
            [
                'title'         => "ElasticSearch Step by Step",
                'status'       => 1
            ],
            [
                'title'         => "NodeJS",
                'status'       => 0
            ],
            [
                'title'         => "Blockchain",
                'status'       => 1
            ]       ];

        // ADD
        if (!empty($data)) {
            foreach ($data as $item) {
                $document = $this->_documentFactory->create();
                $document->addData($item)->save();
            }
        }
    }
}
