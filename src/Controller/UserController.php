<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignUpType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

//use Symfony\Component\Security\Core\Security;

class UserController extends AbstractController
{
/*
    private Security $security;  // Déclaration de la dépendance

    // Injection de Security via le constructeur
    public function __construct(Security $security)
    {
        $this->security = $security;
    }
*/


    // Inscription de l'utilisateur
    #[Route('/signup', name: 'signup')]
    public function signUp(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(SignUpType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Hashage du mot de passe avant de l'enregistrer
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);

            // Enregistrer l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // Message flash pour la réussite de l'inscription
            $this->addFlash('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');

            return $this->redirectToRoute('signin');
        }

        return $this->render('user/signup.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Connexion de l'utilisateur
    #[Route('/signin', name: 'signin')]
    public function signIn(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('user/signin.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    // Déconnexion de l'utilisateur
    #[Route('/logout', name: 'logout')]
    public function logout(): void
    {
        // Géré par le firewall de sécurité Symfony
    }
    
    // Paramètres du compte utilisateur (affichage seulement)
    #[Route('/settings', name: 'settings')]
    public function settings(): Response
    {
        // Récupérer l'utilisateur authentifié
        $user = $this->security->getUser();

        // Vérifier si l'utilisateur est authentifié
        if (!$user) {
            // Si l'utilisateur n'est pas authentifié, rediriger vers la page de connexion
            return $this->redirectToRoute('signin');
        }

        // Passer l'utilisateur à la vue pour l'affichage des informations
        return $this->render('user/settings.html.twig', [
            'user' => $user,
        ]);
    }
}
    
