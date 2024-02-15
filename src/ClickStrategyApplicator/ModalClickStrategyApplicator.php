<?php

declare(strict_types=1);

namespace Setono\SyliusTermsPlugin\ClickStrategyApplicator;

final class ModalClickStrategyApplicator implements ClickStrategyApplicatorInterface
{
    public function applyClickStrategy(string $termsLink): string
    {
        // Dirty implementation, but...
        $termsLink = preg_replace('/href="(.*?)"/', 'href="\1/partial"', $termsLink);

        return preg_replace('/<a/', '<a class="setono-terms-modal-link"', $termsLink);
    }
}
