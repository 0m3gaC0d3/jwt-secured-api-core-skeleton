<?php

declare(strict_types=1);

namespace App\Controller;

use OmegaCode\JwtSecuredApiCore\Annotation\ControllerAnnotation;
use OmegaCode\JwtSecuredApiCore\Service\ControllerAnnotationService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class StandardController
{
    private ControllerAnnotationService $controllerAnnotationService;

    public function __construct(ControllerAnnotationService $controllerAnnotationService)
    {
        $this->controllerAnnotationService = $controllerAnnotationService;
    }

    /**
     * @ControllerAnnotation(route="/", method="get", protected=false)
     */
    public function getAction(Request $request, Response $response): Response
    {
        ob_start();
        include __DIR__ . '/../../res/welcome.php';
        $content = ob_get_contents();
        ob_end_clean();
        $response->getBody()->write((string) $content);

        return $response;
    }
}
