<?php

$decoderOb = new TV\Decoder();
$tellyOb = new TV\Telly($decoderOb);

$decoderOb->on();
$tellyOb->on()
        ->selectChanel(1)
        ->translateChanelToDecoder();