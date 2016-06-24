<?php

namespace TV;

/**
 * Description of Telly
 *
 * @author sandman
 */
class Telly {
    
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
     * @var Decoder
     */
    private $decoder;
    
    /**
     * 
     * @param Decoder $decoder
     */
    public function __construct(Decoder $decoder = null) {
        $this->decoder = $decoder;
    }
    
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
     * @return \Telly
     */
    public function on() {
        $this->runState = true;
        
        return $this;
    }
    
    /**
     * 
     * @return \Telly
     */
    public function off() {
        $this->runState = false;
        
        return $this;
    }
    
    /**
     * 
     * @param int $canalNumber
     * @return \Telly
     */
    public function selectCanal($canalNumber) {
        $this->canal = $canalNumber;
        
        return $this;
    }
    
    /**
     * 
     * @return \Telly
     * @throws Exception
     */
    public function translateCanalToDecoder() {
        if (!$this->decoder->getRunState()) {
            throw new Exception("Decoder is not on");
        }
        
        if (!is_null($this->decoder)) {
            // Simple example
            switch ($this->canal) {
                case 1:
                    $this->decoder->selectCanal(5);
                case 2:
                    $this->decoder->selectCanal(3);
                case 3:
                    $this->decoder->selectCanal(1);
            }
        } else {
            throw new Exception("There is no decoder attached");
        }
        
        return $this;
    }
    
}
