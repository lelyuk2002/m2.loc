<?php

namespace Codilar\Demo\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Session implements ObserverInterface
{
    private $logger;
    public function __construct()
    {
        $this->logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
    }

    /**
     * @param Observer $observer
     * @return void
     */

    public function execute(Observer $observer)
    {
        //$customer = $observer->getEvent()->getData('customer');
        $this->logger->debug('CST-Login');
        //$customer->setData("Hi123");
    }
}
