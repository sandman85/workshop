<?php

namespace TV;

interface DecoderInterface {

    public function getRunState();

    public function getChanel();

    public function turnOn();

    public function turnOff();

    public function chooseChanel($chanelNumber);
}
