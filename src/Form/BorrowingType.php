<?php

namespace App\Form;
use App\Enum\BorrowingState; 

use App\Entity\Borrowing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BorrowingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEtudiant', TextType::class, [
                'label' => 'Nom de l’étudiant',
            ])
            ->add('prenomEtudiant', TextType::class, [
                'label' => 'Prénom de l’étudiant',
            ])
            ->add('numCarteEtudiant', TextType::class, [
                'label' => 'Numéro de carte étudiant',
            ])
            ->add('telephoneEtudiant', TelType::class, [
                'label' => 'Numéro de téléphone',
            ])
            ->add('dateEmprunt', DateType::class, [
                'label' => 'Date d\'emprunt',
                'widget' => 'single_text', // Utilisation d'un champ de type date simple
                'required' => true,
            ])
            ->add('dateRetour', DateType::class, [
                'label' => 'Date de retour prévue',
                'widget' => 'single_text',
                'required' => false, // Facultatif si vous ne voulez pas obliger l'utilisateur à renseigner
            ])

            ->add('etat_retour', ChoiceType::class, [
                'label' => 'État du retour',
                'choices' => [
                    // Utilisation des cas directement de l'énumération BorrowingState
                    'En cours' => BorrowingState::EN_COURS,
                    'Rendu' => BorrowingState::RENDU,
                ],
                'choice_label' => function (BorrowingState $choice) {
                    // Vous pouvez définir le libellé affiché pour chaque option
                    return match ($choice) {
                        BorrowingState::EN_COURS => 'En cours',
                        BorrowingState::RENDU => 'Rendu',
                    };
                },
                'choice_value' => function (?BorrowingState $choice) {
                    // Permet de sauvegarder correctement la valeur dans la base de données
                    return $choice ? $choice->value : null;
                },
                'placeholder' => 'Sélectionner un état',  // Ajoute une option vide pour forcer un choix
            ]);

            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Borrowing::class,
        ]);
    }
}
