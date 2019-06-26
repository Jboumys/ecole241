<?php

namespace App\Form;

use App\Entity\Requerant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RequerantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('nationalite')
            ->add('adresse')
            ->add('tel')
            ->add('pieceIdentification', PieceIdentificationType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Requerant::class,
        ]);
    }
}
