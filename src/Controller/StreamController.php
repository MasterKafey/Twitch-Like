<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/stream')]
class StreamController extends AbstractController
{
    #[Route('/validate-key')]
    public function validateKey(Request $request): Response
    {
        $name = $request->request->get('name');

        $isAuthorize = $name === 'toto';

        if (!$isAuthorize) {
            throw $this->createAccessDeniedException();
        }

        return new Response('OK');
    }

    #[Route('/end')]
    public function end(): Response
    {

    }
}