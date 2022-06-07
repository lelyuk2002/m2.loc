<?php
namespace Attribute\Ethical\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Extensionoption extends AbstractSource
{
    protected $optionFactory;

    public function getAllOptions()
    {
        $this->_options = [];
        $this->_options[] = ['label' => 'Type 1', 'value' => 't1'];
        $this->_options[] = ['label' => 'Type 2', 'value' => 't2'];
        $this->_options[] = ['label' => 'Type 3', 'value' => 't3'];

        return $this->_options;
    }


}
