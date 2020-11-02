<?php

declare(strict_types=1);

namespace App\Action\Standard;

use OmegaCode\JwtSecuredApiCore\Action\AbstractAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class WelcomeAction extends AbstractAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $content = file_get_contents(APP_ROOT_PATH . 'res/welcome.html');
        $response->getBody()->write((string) $content);

        return $response;
    }
}
