<?php
// src/DataFixtures/BookFixtures.php
/*
namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Créer un tableau de livres pour insérer plusieurs livres
        $books = [
            ['title' => 'Le Petit Prince', 'isbn' => '1234567890', 'type' => 'livre', 'editor' => 'Gallimard', 'year' => 1943],
            ['title' => 'Le Rouge et le Noir', 'isbn' => '9876543210', 'type' => 'livre', 'editor' => 'Penguin', 'year' => 1830],
            ['title' => 'National Geographic', 'isbn' => '5432167890', 'type' => 'magazine', 'editor' => 'National Geographic', 'year' => 2020],
        ];

        // Boucler sur le tableau de données et créer un livre pour chaque entrée
        foreach ($books as $bookData) {
            $book = new Book();
            $book->setTitre($bookData['title']);
            $book->setIsbn($bookData['isbn']);
            $book->setType($bookData['type']);
            $book->setEditeur($bookData['editor']);
            $book->setAnneeEdition($bookData['year']);
            $book->setIsBorrowed(false); // Par défaut, les livres ne sont pas empruntés

            // Persister chaque livre dans la base de données
            $manager->persist($book);
        }

        // Sauvegarder tous les objets persistés dans la base de données
        $manager->flush();
    }
}
*/