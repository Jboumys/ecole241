<?php

namespace App\Form;

use App\Entity\PieceIdentification;
use App\Entity\Requerant;
use App\Entity\TypePiece;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PieceIdentificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', FileType::class, ['label' => 'Pièce d\'identification'])
            ->add('typePiece', EntityType::class, ['class' => TypePiece::class, 'choice_label' => 'nom'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PieceIdentification::class,
        ]);
    }
}
