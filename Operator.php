<?php

namespace TV;

/**
 * Description of Operator
 */
class Operator {
    private $chanelCount = [];
    
    public function addChannelToCount($channelNumber) {
        if (!isset($this->chanelCount[$channelNumber])) {
            $this->chanelCount[$channelNumber] = 0;
        }
        
        ++$this->chanelCount[$channelNumber];
        
        return $this;
    }
        
}
