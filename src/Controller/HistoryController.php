<?php

namespace App\Controller;

use App\Repository\BorrowingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoryController extends AbstractController
{
    // Affiche l'historique des emprunts de l'utilisateur
    #[Route('/history', name: 'history')]
    public function index(BorrowingRepository $borrowingRepository): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        if (!$user) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas authentifié
            return $this->redirectToRoute('signin');
        }

        // Récupérer les emprunts de l'utilisateur
        $borrowings = $borrowingRepository->findBy(['user' => $user]);

        return $this->render('history/index.html.twig', [
            'borrowings' => $borrowings,
        ]);
    }
}

