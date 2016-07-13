<?php

namespace Shape\ValueObject;

class Email implements EmailInterface
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function __toString()
    {
        return $this->email;
    }
}
