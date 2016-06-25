<?php

namespace TV;

/**
 * Description of RemoteControllerComposite
 */
class RemoteControllerComposite extends RemoteControllerAbstract {
    protected $remoteControllers = [];
    
    public function addRemoteController($remoteController) {
        array_push($this->remoteControllers, $remoteController);
    }
    
    public function chooseChanel($chanelNumber) {
        foreach ($this->remoteControllers as $remoteController) {
            $remoteController->chooseChanel($chanelNumber);
        }
    }
}
