<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TV;

/**
 * Description of RemoteController
 *
 * @author sandman
 */
class RemoteController {
    
    /**
     *
     * @var Telly 
     */
    private $telly;
    
    /**
     *
     * @var Decoder
     */
    private $decoder;
    
    /**
     * 
     * @param \TV\Telly $telly
     * @param \TV\Decoder $decoder
     */
    public function __construct() {
        $this->decoder = new Decoder();
        $this->telly = new Telly($this->decoder);
    }
    
    /**
     * 
     * @param int $chanelNumber
     * @return \TV\RemoteController
     */
    public function chooseChanel($chanelNumber) {
        $this->decoderOb->on();
        $this->tellyOb->on()
                ->selectChanel(1)
                ->translateChanelToDecoder();
        
        return $this;
    }
    
}
