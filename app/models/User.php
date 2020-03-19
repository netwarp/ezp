<?php

namespace Models;

use Phalcon\Collection;

class User extends Collection
{
    public function initialize()
    {
        $this->setSource('users');
    }
}