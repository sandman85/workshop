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
    private $chanel = 1;

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
    public function getChanel() {
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
    public function selectChanel($chanelNumber) {
        $this->chanel = $chanelNumber;
        
        return $this;
    }
    
    /**
     * 
     * @return \Telly
     * @throws Exception
     */
    public function translateChanelToDecoder() {        
        if (!is_null($this->decoder)) {
            if (!$this->decoder->getRunState()) {
                throw new Exception("Decoder is not on");
            }
            
            // Simple example
            switch ($this->chanel) {
                case 1:
                    $this->decoder->selectChanel(5);
                case 2:
                    $this->decoder->selectChanel(3);
                case 3:
                    $this->decoder->selectChanel(1);
            }
        } else {
            throw new Exception("There is no decoder attached");
        }
        
        return $this;
    }
    
}
