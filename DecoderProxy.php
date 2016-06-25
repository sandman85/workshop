<?php

namespace TV;

/**
 * Description of DecoderProxy
 */
class DecoderProxy implements DecoderInterface {
    
    private $decoder = null;
    private $operator = null;
    
    public function __construct() {
        $this->decoder = new Decoder();
        $this->operator = new OperatorDecorator(new Operator());
    }

    public function getRunState() {
        return $this->decoder->getRunState();
    }

    public function getChanel() {
        return $this->decoder->getChanel();
    }

    public function turnOn() {
        $this->decoder->turnOn();
                
        return $this;
    }

    public function turnOff() {
        $this->decoder->turnOff();
                
        return $this;
    }

    public function chooseChanel($chanelNumber) {
        $this->operator->addChannelToCount($chanelNumber);
        
        $this->decoder->chanel = $chanelNumber;
        
        return $this;
    }
}
