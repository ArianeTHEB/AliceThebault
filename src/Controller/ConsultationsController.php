<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsultationsController extends AbstractController
{
    #[Route('/consultations', name: 'consultations')]
    public function index(): Response
    {
        return $this->render('consultations/consultations.html.twig');
    }
}
