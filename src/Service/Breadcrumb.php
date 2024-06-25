<?php

namespace RomainPathe\BreadcrumbsBundle\Service;

class Breadcrumb
{

    private array $items = [];

    public function addItem(string $title, string $url): void
    {
        $this->items[] = [
            'title' => $title,
            'url' => $url
        ];
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function reset(): void
    {
        $this->items = [];
    }

    public function removeLastItem(): void
    {
        array_pop($this->items);
    }

    public function removeItem(int $index): void
    {
        unset($this->items[$index]);
    }

}