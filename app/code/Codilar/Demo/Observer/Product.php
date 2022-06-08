<?php

namespace Codilar\Demo\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Product implements ObserverInterface
{

    /**
     * @param Observer $observer
     * @return void
     */

    public function execute(Observer $observer)
    {
        $collection = $observer->getEvent()->getData('collection');
        foreach ($collection as $product) {
            $price = $product->getData('price');
            $name = $product->getData('name');
            if ($price < 10) {
                $name .= 'So cheap';
            } else {
                $name .= 'So expensive';
            }
            $product->setData('name', $name);
        }
    }
}
