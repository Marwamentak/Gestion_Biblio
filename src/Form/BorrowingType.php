<?php

namespace App\Form;

use App\Entity\Borrowing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Borrowing::class,
        ]);
    }
}
