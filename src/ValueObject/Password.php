<?php

namespace Shape\ValueObject;

class Password implements PasswordInterface
{
    private $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function __toString()
    {
        return $this->password;
    }
}
