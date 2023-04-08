<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route('random')]
    public function homepage(): Response
    {
        //return new Response('Hello world');
        return $this->render('base.html.twig',[]);

    }
}


