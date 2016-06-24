<?php

namespace model;

/**
 * Description of UserFactory
 */
class UserFactory {

    private $users = [];

    public function getUser($id) {
        if (!isset($this->users[$id])) {
            $this->users[$id] = ($id % 2 == 0) ? $this->createUserData1($id) : $this->createUserData2($id);
        }

        return $this->users[$id];
    }

    // Mocked user create
    private function createUserData1($id) {
        $user = new User($id, "Kowalsky", new \DateTime('1990-01-01'));
        return $user;
    }

    private function createUserData2($id) {
        $user = new User($id, "Novak", new \DateTime('1985-01-01'));
        return $user;
    }

}
