<?php

declare(strict_types=1);

namespace Setono\SyliusTermsPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class TermsTranslationType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'setono_sylius_terms.form.terms.name',
                'help' => 'setono_sylius_terms.form.terms.name_help',
            ])
            ->add('slug', TextType::class, [
                'label' => 'setono_sylius_terms.form.terms.slug',
            ])
            ->add('label', TextType::class, [
                'label' => 'setono_sylius_terms.form.terms.label',
                'help' => 'setono_sylius_terms.form.terms.label_help',
            ])
            ->add('content', TextareaType::class, [
                'required' => false,
                'label' => 'setono_sylius_terms.form.terms.content',
                'help' => 'setono_sylius_terms.form.terms.content_help',
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'setono_sylius_terms_terms_translation';
    }
}
