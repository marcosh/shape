<?php

namespace Shape\Action;

use Shape\Parser\LoginParser;
use Shape\Domain\LoginService;
use Shape\Responder\LoginResponder;

class LoginActionFactory
{
    public function __invoke()
    {
        $parser = new LoginParser();
        $domain = new LoginService();
        $responder = new LoginResponder();

        return new LoginAction(
            $parser,
            $domain,
            $responder
        );
    }
}
