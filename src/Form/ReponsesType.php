<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use App\Entity\ReponsesQuestionnaireGeneral;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReponsesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Question1', MoneyType::class, [
                'label' => '1. A combien estimez-vous la valeur de votre patrimoine en Euros ?'
            ])
            ->add('Question2', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ],
                'expanded' => true,
                'label' => '2. Estimez-vous être particulièrement sensible sur les questions du développement durable ?'
            ])
            ->add('Question3', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ],
                'expanded' => true,
                'label' => '3. Est-il important pour vous d’investir dans des entreprises avec un bilan carbone faible ?'
            ])
            ->add('Question4', ChoiceType::class, [
                'choices' => [
                    'le secteur industriel' => 1,
                    'le secteur de la santé – bien être' => 2,
                    'le secteur des innovations technologiques' => 3,
                    'le secteur du tourisme' => 4,
                    'de la gastronomie – de l’alimentaire' => 6,
                    'le secteur du cinéma' => 7,
                    'des arts et de la culture' => 8
                ],
                'expanded' => true,
                'multiple' => true,
                'label' => '4. Parmi ces différents secteurs économiques, dans lequel ou lesquelles préféreriez-vous investir ?'
            ])
            ->add('Question5', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ],
                'expanded' => true,
                'label' => '5. Souhaitez-vous investir de préférence dans des entreprises situez proche de votre région ?'
            ])
            ->add('Question6', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ],
                'expanded' => true,
                'label' => '6. Avez-vous une attirance particulière pour les entreprises familiales ?'
            ])
            ->add('Question7', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ],
                'expanded' => true,
                'label' => '7. Avez-vous une attirance particulière pour les entreprises qui représentent une histoire ou défendent un savoir faire ?'
            ])
            ->add('Question8', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ],
                'expanded' => true,
                'label' => '8. Désirez-vous investir dans des PME étrangères ?'
            ])
            ->add('Question9', ChoiceType::class, [
                'choices' => [
                    'diversifier mon épargne' => 1,
                    'investir d’une manière plus durable' => 2,
                    'le côté humain des investissements participatifs' => 3,
                    'parier sur la réussite
financière d’un projet afin d’obtenir mes meilleures chances de gains' => 4

                ],
                'expanded' => true,
                'multiple' => true,
                'label' => '9. Quels sont vos principales motivations pour vous tourner vers des investissements participatifs ?'
            ])
            ->add('save', SubmitType::class, [
                'label' => "Valider",
                
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReponsesQuestionnaireGeneral::class,
        ]);
    }
}
