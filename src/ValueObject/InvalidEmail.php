<?php

namespace Shape\ValueObject;

class InvalidEmail implements EmailInterface
{
    private $email;

    private $violations;

    public function __construct($email, $violations)
    {
        $this->email = $email;
        $this->violations = $violations;
    }

    public function __toString()
    {
        return $this->email;
    }

    public function violations()
    {
        return $this->violations;
    }
}
