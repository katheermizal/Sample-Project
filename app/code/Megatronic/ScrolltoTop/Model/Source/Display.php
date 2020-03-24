<?php

namespace Megatronic\ScrolltoTop\Model\Source;

class Display extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    public function getAllOptions() {
        if (!$this->_options) {
            $this->_options = [
                ['label' => 'Text Only', 'value' => 1],
                ['label' => 'Image Only', 'value' => 2],
                ['label' => 'Both Text and Image', 'value' => 3],
            ];
        }
        return $this->_options;
    }
}