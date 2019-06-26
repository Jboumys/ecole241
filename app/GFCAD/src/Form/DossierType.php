<?php

namespace App\Form;

use App\Entity\Dossier;
use App\Entity\Requerant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule', IntegerType::class, ['label' => 'N° dossier'])
            ->add('requerant',EntityType::class,['class' => Requerant::class, 'choice_label' => 'identite'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dossier::class,
        ]);
    }
}
