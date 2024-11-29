



<?php
// src/DataFixtures/BorrowingFixtures.php
/*
namespace App\DataFixtures;

use App\Entity\Borrowing;
use App\Entity\Book;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BorrowingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Récupérer des utilisateurs et des livres existants
        $user = $manager->getRepository(User::class)->findOneByEmail('testuser@example.com');
        $admin = $manager->getRepository(User::class)->findOneByEmail('admin@example.com');

        // Assurez-vous que vous avez au moins un utilisateur et un livre dans votre base de données
        if (!$user || !$admin) {
            throw new \Exception('L\'utilisateur ou l\'administrateur n\'existe pas.');
        }

        // Ajouter des livres fictifs (vous devez vous assurer que des livres existent déjà)
        $book1 = $manager->getRepository(Book::class)->findOneBy(['titre' => 'Le Petit Prince']);
        $book2 = $manager->getRepository(Book::class)->findOneBy(['titre' => 'Le Rouge et le Noir']);

        if (!$book1 || !$book2) {
            throw new \Exception('Les livres nécessaires n\'existent pas.');
        }

        // Créer un emprunt fictif pour l'utilisateur
        $borrowing1 = new Borrowing();
        $borrowing1->setUser($user);
        $borrowing1->setBook($book1);
        $borrowing1->setBorrowDate(new \DateTime('-5 days')); // Date d'emprunt de 5 jours avant
        $borrowing1->setReturnDate(null); // Le livre n'est pas encore retourné

        // Créer un emprunt fictif pour l'administrateur
        $borrowing2 = new Borrowing();
        $borrowing2->setUser($admin);
        $borrowing2->setBook($book2);
        $borrowing2->setBorrowDate(new \DateTime('-10 days')); // Date d'emprunt de 10 jours avant
        $borrowing2->setReturnDate(new \DateTime('-2 days')); // Livre retourné il y a 2 jours

        // Persister les emprunts
        $manager->persist($borrowing1);
        $manager->persist($borrowing2);

        // Sauvegarder les emprunts dans la base de données
        $manager->flush();
    }
}

*/
