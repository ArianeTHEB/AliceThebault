<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrendreRdvController extends AbstractController
{
    #[Route('/prendre_rdv', name: 'prendre_rdv')]
    public function index(): Response
    {
        return $this->render('prendre_rdv/prendreRdv.html.twig');
    }
}
