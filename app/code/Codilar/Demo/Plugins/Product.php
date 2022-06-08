<?php

namespace Codilar\Demo\Plugins;

class Product
{
    public function aftergetName(\Magento\Catalog\Model\Product $product, $name)
    {
        $price = $product->getData('price');
        if ($price < 10) {
            $name .= ' So cheap';
        } else {
            $name .= 'So expensive';
        }

        return $name;
    }
}
