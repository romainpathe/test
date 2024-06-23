<?php

namespace RomainPathe\BreadcrumbsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BreadcrumbBundle extends Bundle
{

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

}