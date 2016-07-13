<?php

namespace Shape\ValueObject;

class InvalidPassword implements PasswordInterface
{
    private $password;

    private $violations;

    public function __construct($password, $violations)
    {
        $this->password = $password;
        $this->violations = $violations;
    }

    public function __toString()
    {
        return $this->password;
    }

    public function violations()
    {
        return $this->violations;
    }
}
