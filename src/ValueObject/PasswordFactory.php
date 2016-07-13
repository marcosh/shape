<?php

namespace Shape\ValueObject;

class PasswordFactory
{
    const AT_LEAST_5_CHARACTERS = 1;

    public function __invoke($password)
    {
        $violations = $this->validate($password);

        if (!empty($violations)) {
            return new InvalidPassword($password, $violations);
        }

        return new Password($password);
    }

    private function validate($password)
    {
        $violations = [];

        if (strlen($password) <= 4) {
            $violations[] = self::AT_LEAST_5_CHARACTERS;
        }

        return $violations;
    }
}
