<?php

namespace model;

/**
 * Description of user
 */
class User {
    
    /**
     *
     * @var UserData
     */
    private $userData;

    /**
     * 
     * @param int $id
     * @param string $name
     * @param \DateTime $birthDate
     */
    public function __construct($id, $name, $birthDate) {
        $this->userData = new UserData($id, $name, $birthDate);
    }
    
    /**
     * 
     * @return string
     */
    public function toString() {
        return $this->userData->getName() .' '. $this->userData->getBirthDate()->format('Y-m-d');
    }
    
}
