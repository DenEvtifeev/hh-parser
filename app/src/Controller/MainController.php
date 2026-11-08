<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function homePage(): Response
    {
        $smtCount = 100000;

        $mySmth = [
            'name' => 'John Doe',
            'class' => 'Test',
            'smth' => 123,
        ];
        return $this->render('main/home.html.twig',
            [
                'smtCount' => $smtCount,
                'mySmth' => $mySmth,
            ]
        );
    }
}
