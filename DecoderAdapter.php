<?php

namespace TV;

/**
 * Description of DecoderAdapter
 */
class DecoderAdapter {
    
    /**
     *
     * @var Decoder 
     */
    private $decoder;
    
    /**
     * 
     * @param \TV\Decoder $decoder
     */
    public function __construct(Decoder $decoder) {
        $this->decoder = $decoder;
    }
    
    /**
     * 
     * @return \TV\decoderAdapter
     */
    public function on() {
        $this->decoder->turnOn();
        
        return $this;
    }
    
    /**
     * 
     * @return \TV\decoderAdapter
     */
    public function off() {
        $this->decoder->turnOff();
        
        return $this;
    }
    
    /**
     * 
     * @param int $chanelNumber
     * @return \TV\decoderAdapter
     */
    public function selectChanel($chanelNumber) {
        $this->decoder->chooseChanel($chanelNumber);
        
        return $this;
    }
    
    public function getRunState() {
        return $this->decoder->getRunState();
    }
    
}
