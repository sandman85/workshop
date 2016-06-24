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
    private $canal = 1;
    
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
    public function getCanal() {
        return $this->canal;
    }

    /**
     * 
     * @return \Decoder
     */
    public function on() {
        $this->runState = true;
        
        return $this;
    }
    
    /**
     * 
     * @return \Decoder
     */
    public function off() {
        $this->runState = false;
        
        return $this;
    }
    
    /**
     * 
     * @param int $canalNumber
     * @return \Decoder
     */
    public function selectCanal($canalNumber) {
        $this->canal = $canalNumber;
        
        return $this;
    }
}
