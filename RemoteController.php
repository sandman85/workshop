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
     * @var DecoderAdapter
     */
    private $decoderAdapter;
    
    /**
     * 
     * @param \TV\Telly $telly
     * @param \TV\Decoder $decoder
     */
    public function __construct() {
        $this->decoderAdapter = new DecoderAdapter(new Decoder());
        $this->telly = new Telly($this->decoderAdapter);
    }
    
    /**
     * 
     * @param int $chanelNumber
     * @return \TV\RemoteController
     */
    public function chooseChanel($chanelNumber) {
        $this->decoderAdapter->on();
        $this->telly->on()
                ->selectChanel($chanelNumber)
                ->translateChanelToDecoder();
        
        return $this;
    }
    
}
