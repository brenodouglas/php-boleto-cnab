<?php
namespace App\Action;

use Slim\Http\Request;
use Slim\Http\Response;

final class HomeAction extends BaseAction
{

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'home.twig');
        return $response;
    }
}
