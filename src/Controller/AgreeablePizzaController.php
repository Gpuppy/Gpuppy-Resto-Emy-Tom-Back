<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgreeablePizzaController extends AbstractController
{
    #[Route('/agreeable/pizza', name: 'app_agreeable_pizza')]
    public function index(): Response
    {
        return $this->render('agreeable_pizza/index.html.twig', [
           "age" => 30
        ]);
    }
}

//'controller_name' => 'AgreeablePizzaController',