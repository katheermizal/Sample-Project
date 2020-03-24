<?php

namespace Megatronic\ScrolltoTop\Model\Source;

class Position extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    public function getAllOptions() {
        if (!$this->_options) {
            $this->_options = [
                ['label' => 'Right', 'value' => 1],
                ['label' => 'Left', 'value' => 2]
            ];
        }
        return $this->_options;
    }
}