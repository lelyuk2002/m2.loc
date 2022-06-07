<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Attribute\CustomAttribute\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Type extends AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Type 1'), 'value' => 'type1'],
                ['label' => __('Type 2'), 'value' => 'type2'],
                ['label' => __('Type 3'), 'value' => 'type3'],

            ];
        }
        return $this->_options;
    }
}
