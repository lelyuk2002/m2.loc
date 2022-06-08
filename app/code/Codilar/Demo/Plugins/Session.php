<?php

namespace Codilar\Demo\Plugins;

class Session
{
    private $logger;
    public function __construct()
    {
        $this->logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
    }

    public function afterlogout($result)
    {
        $this->logger->debug('Codilar-Demo-afterLogout');
        return $result;
    }
}
