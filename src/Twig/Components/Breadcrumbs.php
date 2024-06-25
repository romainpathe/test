<?php

namespace Romainpathe\BreadcrumbsBundle\Twig\Components;

use RomainPathe\BreadcrumbsBundle\Interface\BreadcrumbInterface;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Breadcrumbs implements BreadcrumbInterface
{
    private array $items;


    public function addItem(string $label, ?string $url = null, bool $isCurrent = false): void
    {
        $this->items[] = new Breadcrumb($label, $url, $isCurrent);
    }

    public function getItems(): array
    {
        return $this->items;
    }
}