<?php

declare(strict_types=1);

namespace App\Presenters;

use PL\NetteInertia\InertiaPresenter;


class BasePresenter extends InertiaPresenter
{
    protected function getAssetVersion(): string
    {
        // @todo
        return '1';
    }
}
