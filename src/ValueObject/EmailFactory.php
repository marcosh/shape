<?php

namespace Shape\ValueObject;

class EmailFactory
{
    public function __invoke($email)
    {
        $filteredValue = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($filteredValue === false) {
            return new InvalidEmail($email, ['invalid email']);
        }

        return new Email($email);
    }
}
