<?php

namespace Shape\Parser;

use Psr\Http\Message\ServerRequestInterface as Request;

class LoginParser
{
    public function parse(Request $request)
    {
        $requestBody = $request->getParsedBody();

        $email = $requestBody['email'];
        $password = $requestBody['password'];

        return new Message\LoginMessage($email, $password);
    }
}
