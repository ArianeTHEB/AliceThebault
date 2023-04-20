<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfosPratiquesController extends AbstractController
{
    #[Route('/infos_pratiques', name: 'infos_pratiques')]
    public function index(): Response
    {
        return $this->render('infos_pratiques/infosPratiques.html.twig');
    }

    #[Route('/monPsy', name: 'monPsy')]
    public function monPsy(): Response
    {
        return $this->render('infos_pratiques/monPsy.html.twig');
    }
}
