<?php

declare(strict_types=1);

namespace Setono\SyliusTermsPlugin\ClickStrategyApplicator;

final class ModalClickStrategyApplicator implements ClickStrategyApplicatorInterface
{
    public function applyClickStrategy(string $termsLink): string
    {
        return preg_replace('/<a/', '<a class="term-terms-modal-link"', $termsLink);
    }
}
