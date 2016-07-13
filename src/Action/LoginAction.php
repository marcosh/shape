<?php

namespace Shape\Action;

use Shape\Parser\LoginParser;
use Shape\Domain\LoginService;
use Shape\Responder\LoginResponder;

use Psr\Http\Message\ServerRequestInterface as Request;

class LoginAction
{
    /**
     * @var LoginRequestParser
     */
    private $parser;

    /**
     * @var LoginService
     */
    private $domain;

    /**
     * @var LoginResponder
     */
    private $responder;

    public function __construct(
        LoginParser $parser,
        LoginService $domain,
        LoginResponder $responder
    ) {
        $this->parser = $parser;
        $this->domain = $domain;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        $input = $this->parser->parse($request);

        $payload = $this->domain->process($input);

        return $this->responder->createResponse($payload);
    }
}
