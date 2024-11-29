<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    // Page d'accueil
    #[Route('/', name: 'home_index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'title' => 'Accueil',
        ]);
    }

    // Page de contact
    #[Route('/contact', name: 'home_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'title' => 'Contact',
        ]);
    }
}
