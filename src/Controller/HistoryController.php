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
       

        // Récupérer les emprunts de l'utilisateur
        $borrowings = $borrowingRepository->findAll();

        return $this->render('history/index.html.twig', [
            'borrowings' => $borrowings,
        ]);
    }
}

