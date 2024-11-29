<?php
/*
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private UserPasswordEncoderInterface $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        // Créer un utilisateur fictif
        $user = new User();
        $user->setEmail('testuser@example.com');
        $user->setRoles(['ROLE_USER']);
        $password = $this->passwordEncoder->encodePassword($user, 'password123');
        $user->setPassword($password);

        // Persister l'utilisateur dans la base de données
        $manager->persist($user);

        // Un autre utilisateur fictif
        $admin = new User();
        $admin->setEmail('admin@example.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $password = $this->passwordEncoder->encodePassword($admin, 'adminpassword');
        $admin->setPassword($password);

        // Persister l'administrateur
        $manager->persist($admin);

        // Sauvegarder tous les utilisateurs dans la base de données
        $manager->flush();
    }
}
**/