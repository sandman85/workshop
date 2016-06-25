<?php

namespace TV;

/**
 * Description of RemoteController
 *
 * @author sandman
 */
class RemoteController extends RemoteControllerAbstract {

    /**
     * 
     * @param \TV\Telly $telly
     * @param \TV\Decoder $decoder
     */
    public function __construct() {
        $this->decoderAdapter = new DecoderAdapter(new DecoderProxy());
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
