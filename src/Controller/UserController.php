<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignUpType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    // Inscription de l'utilisateur
    #[Route('/signup', name: 'signup')]
    public function signUp(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(SignUpType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hashage du mot de passe avant de l'enregistrer
            /** @var string $password */
            $password = $form->get('password')->getData();

            $user->setPassword($passwordHasher->hashPassword($user, $password));

            // Enregistrer l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // Redirection après inscription
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
        
        
        if ($this->getUser()) {
            //die();
            return $this->redirectToRoute('book_list'); 
            //dd($this->getUser());
            //dump($error);
            //die();
        } 
        

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
        // Cette méthode est intentionnellement laissée vide.
        throw new \LogicException('Cette méthode est interceptée par le firewall Symfony.');
    }
}
