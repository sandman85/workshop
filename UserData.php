<?php

namespace model;

/**
 * @author sandman
 */
class UserData {
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
    
    /**
     * 
     * @param int $id
     * @param string $name
     * @param \DateTime $birthDate
     */
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
