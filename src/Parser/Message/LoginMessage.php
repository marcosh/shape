<?php

namespace Shape\Parser\Message;

use Shape\ValueObject\EmailFactory;
use Shape\ValueObject\PasswordFactory;

class LoginMessage
{
    private $email;

    private $password;

    public function __construct($email, $password)
    {
        $emailFactory = new EmailFactory();
        $passwordFactory = new PasswordFactory();

        $this->email = $emailFactory($email);
        $this->password = $passwordFactory($password);
    }
}
