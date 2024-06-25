<?php

namespace Romainpathe\BreadcrumbsBundle\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Breadcrumb
{
    public string $label;
    public ?string $url = null;
    public bool $isCurrent = false;

    public function __construct(string $label, ?string $url = null, bool $isCurrent = false)
    {
        $this->label = $label;
        $this->url = $url;
        $this->isCurrent = $isCurrent;
    }

}