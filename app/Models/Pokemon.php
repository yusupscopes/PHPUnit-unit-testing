<?php

namespace App\Models;

class Pokemon
{
    public $firstName;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}
