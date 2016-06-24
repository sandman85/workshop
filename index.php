<?php

$decoderOb = new TV\Decoder();
$tellyOb = new TV\Telly($decoderOb);

$decoderOb->on();
$tellyOb->on()
        ->selectCanal(1)
        ->translateCanalToDecoder();