<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VetmentsController extends AbstractController
{
    /**
     * @Route("/vetments", name="app_vetments")
     */
    public function index(): Response
    {
        return $this->render('vetments/index.html.twig', [
            'controller_name' => 'VetmentsController',
        ]);
    }
}
