<?php

namespace App\Form;

use App\Entity\Book;
use App\Enum\BooksType;
use App\Enum\BookState;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
            ])
            ->add('isbn', TextType::class, [
                'label' => 'ISBN',
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                /*
                'choices' => [
                    'Livre' => BooksType::LIVRE->value, // Utilisation de la valeur de l'énumération
                    'Dictionnaire' => BooksType::DICTIONNAIRE->value,
                    'Magazine' => BooksType::MAGAZINE->value,
                ],*/
                'choices' => BooksType::cases(), // Utilisation des cas directement
                'choice_label' => function (BooksType $choice) {
                    // Affiche le label (par exemple, 'Livre', 'Dictionnaire')
                    return match ($choice) {
                        BooksType::LIVRE => 'Livre',
                        BooksType::DICTIONNAIRE => 'Dictionnaire',
                        BooksType::MAGAZINE => 'Magazine',
                    };
                },
                'choice_value' => function (?BooksType $choice) {
                    // Permet de sauvegarder correctement la valeur dans la base de données
                    return $choice ? $choice->value : null;
                },
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                /*
                'choices' => [
                    'Disponible' => 'disponible',
                    'Emprunté' => 'emprunte',
                ],*/
                'choices' => BookState::cases(),
                'choice_label' => function (BookState $choice) {
                    return match ($choice) {
                        BookState::DISPONIBLE => 'Disponible',
                        BookState::EMPRUNTE => 'Emprunté',
                    };
                },
                'choice_value' => function (?BookState $choice) {
                    return $choice ? $choice->value : null;
                },
            ])
            ->add('editeur', TextType::class, [
                'label' => 'Éditeur',
            ])
            ->add('anneeEdition', IntegerType::class, [
                'label' => 'Année d\'édition',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Ajouter le Livre',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
