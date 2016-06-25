<?php

namespace TV;

/**
 * Description of OperatorDecorator
 */
class OperatorDecorator extends Operator {

    protected $operator;

    public function __construct(Operator $operator) {
        $this->operator = $operator;
    }

    public function addChannelToCount($channelNumber) {
        echo 'I will add ' . $channelNumber . ' to count';

        $this->operator->addChannelToCount($channelNumber);

        return $this;
    }

}
