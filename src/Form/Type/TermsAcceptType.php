<?php

declare(strict_types=1);

namespace Setono\SyliusTermsPlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class TermsAcceptType extends AbstractType
{
    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        /** @psalm-suppress MixedArrayAssignment */
        $view->vars['terms_link'] = $options['terms_link'];
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setRequired([
                'terms_link',
            ])
            ->setAllowedTypes('terms_link', ['string'])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'setono_sylius_terms_accept';
    }

    public function getParent(): string
    {
        return CheckboxType::class;
    }
}
