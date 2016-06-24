<?php

namespace TV;

/**
 * Description of Decoder
 *
 * @author sandman
 */
class Decoder {
    
    /**
     *
     * @var boolean
     */
    private $runState = false;
    
    /**
     *
     * @var type int
     */
    private $chanel = 1;
    
    /**
     * 
     * @return boolean
     */
    public function getRunState() {
        return $this->runState;
    }
    
    /**
     * 
     * @return int
     */
    public function getChanel() {
        return $this->chanel;
    }

    /**
     * 
     * @return \Decoder
     */
    public function turnOn() {
        $this->runState = true;
        
        return $this;
    }
    
    /**
     * 
     * @return \Decoder
     */
    public function turnOff() {
        $this->runState = false;
        
        return $this;
    }
    
    /**
     * 
     * @param int $chanelNumber
     * @return \Decoder
     */
    public function chooseChanel($chanelNumber) {
        $this->chanel = $chanelNumber;
        
        return $this;
    }
}
