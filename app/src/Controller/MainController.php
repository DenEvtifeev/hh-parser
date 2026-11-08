<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/', name: 'home')]
    public function homePage(): Response
    {
        return new Response('хуй');
    }
}
