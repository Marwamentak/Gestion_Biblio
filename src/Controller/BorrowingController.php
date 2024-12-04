<?php

// src/Controller/BorrowingController.php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\Borrowing;
use App\Form\BorrowingType;
use App\Form\ReturnType;  // Importer le formulaire ReturnType
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BorrowingController extends AbstractController
{
    // Emprunter un livre (ajouter les informations de l'étudiant)
    #[Route('/borrow/{id}', name: 'borrow')]
    public function borrow(Book $book, Request $request, EntityManagerInterface $entityManager): Response
    {
        
        // Créer un nouvel emprunt
        $borrowing = new Borrowing();
        $borrowing->setBook($book);

        // Créer le formulaire d'emprunt
        $form = $this->createForm(BorrowingType::class, $borrowing);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($borrowing);
            $entityManager->persist($book);
            $entityManager->flush();

            $this->addFlash('success', 'Vous avez emprunté le livre avec succès.');

            return $this->redirectToRoute('borrowings');
        }

        return $this->render('borrowing/borrow.html.twig', [
            'form' => $form->createView(),
            'book' => $book,
        ]);
    }

    // Afficher tous les emprunts de l'utilisateur connecté
    #[Route('/borrowings', name: 'borrowings')]
    public function listBorrowings(EntityManagerInterface $entityManager): Response
    {
        $borrowings = $entityManager->getRepository(Borrowing::class)->findAll();
        //$user = $this->getUser();
        //$borrowings = $user ? $user->getBorrowings() : [];

        return $this->render('borrowing/index.html.twig', [
            'borrowings' => $borrowings,
        ]);
    }

    // Rendre un livre
    #[Route('/return/{id}', name: 'return')]
    public function returnBook(Borrowing $borrowing, Request $request, EntityManagerInterface $entityManager): Response
    {
        /*Vérifier que l'utilisateur est bien celui qui a emprunté le livre
        if ($borrowing->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas retourner ce livre.');
        }*/

        // Créer le formulaire de retour
        $form = $this->createForm(ReturnType::class, $borrowing);

        // Traiter la soumission du formulaire de retour
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour la date de retour et l'état du livre
            //$borrowing->setReturnDate(new \DateTime());
            //$borrowing->getBook()->setIsBorrowed(false); // Marquer le livre comme disponible

            // Sauvegarder les changements
            $entityManager->flush();

            $this->addFlash('success', 'Le livre a été retourné avec succès.');

            return $this->redirectToRoute('borrowings');
        }

        return $this->render('borrowing/return.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
