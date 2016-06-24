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
     * @var DecoderAdapter
     */
    private $decoderAdapter;
    
    /**
     * 
     * @param DecoderAdapter $decoderAdapter
     */
    public function __construct(DecoderAdapter $decoderAdapter = null) {
        $this->decoderAdapter = $decoderAdapter;
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
     * @param int $chanelNumber
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
        if (!is_null($this->decoderAdapter)) {
            if (!$this->decoderAdapter->getRunState()) {
                throw new Exception("Decoder is not on");
            }
            
            // Simple example
            switch ($this->chanel) {
                case 1:
                    $this->decoderAdapter->selectChanel(5);
                case 2:
                    $this->decoderAdapter->selectChanel(3);
                case 3:
                    $this->decoderAdapter->selectChanel(1);
            }
        } else {
            throw new Exception("There is no decoder attached");
        }
        
        return $this;
    }
    
}
