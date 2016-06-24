<?php

namespace model;

/**
 * Description of user
 */
class user {
    /**
     *
     * @var int 
     */
    private $id;
    
    /**
     *
     * @var string 
     */
    private $name;
    
    /**
     *
     * @var \DateTime 
     */
    private $birthDate;
    
    public function __construct($id, $name, $birthDate) {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $birthDate;
    }
    
    /**
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * 
     * @return \DateTime
     */
    public function getBirthDate() {
        return $this->birthDate;
    }
    
}
