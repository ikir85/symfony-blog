<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                //nom du champ formulaire qui doit correspondre
                //au nom de l'attribut dans l'entité Category
                'name',
                 // type de champ de formulaire
                TextType::class, //input type="text"
                //tableau d'options
                [
                    //contenu de la balise label
                    'label' => 'Nom'
                ]
            )

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
