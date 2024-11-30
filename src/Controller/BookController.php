<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    // Affichage et traitement du formulaire d'ajout de livre
    #[Route('/book/add', name: 'add_book')]
    public function addBook(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Créer une nouvelle instance de Book
        $book = new Book();

        // Créer le formulaire et associer l'objet Book
        $form = $this->createForm(BookType::class, $book);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrer l'objet Book dans la base de données
            $entityManager->persist($book);
            $entityManager->flush();

            // Ajouter un message flash pour la confirmation de l'ajout
            $this->addFlash('success', 'Le livre a été ajouté avec succès.');

            // Rediriger vers une autre page (par exemple, la liste des livres)
            return $this->redirectToRoute('book_list');
        }

        // Afficher le formulaire dans la vue
        return $this->render('book/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Liste des livres
    #[Route('/books', name: 'book_list')]
    public function listBooks(EntityManagerInterface $entityManager): Response
    {
        // Récupérer la liste des livres depuis la base de données
        $books = $entityManager->getRepository(Book::class)->findAll();
        /*
        $results = [];
        foreach($books => $book) {
            $results[] = [
                'id' => $book->getId();
                'titre' => $book->get
            ]
        }
        */
        // Afficher les livres dans la vue
        return $this->render('book/list.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/book/edit/{id}', name: 'edit_book')]
    public function editBook(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            throw $this->createNotFoundException('Livre introuvable.');
        }

        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Le livre a été modifié avec succès.');

            return $this->redirectToRoute('book_list');
        }

        return $this->render('book/edit.html.twig', [
            'form' => $form->createView(),
            'book' => $book,
        ]);
    }

    #[Route('/book/delete/{id}', name: 'delete_book', methods: ['POST', 'GET'])]
        public function deleteBook(int $id, EntityManagerInterface $entityManager): Response
        {
            $book = $entityManager->getRepository(Book::class)->find($id);

            if (!$book) {
                throw $this->createNotFoundException('Livre introuvable.');
            }

            $entityManager->remove($book);
            $entityManager->flush();

            $this->addFlash('success', 'Le livre a été supprimé avec succès.');

            return $this->redirectToRoute('book_list');
        }


}
