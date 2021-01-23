<?php

declare(strict_types=1);

namespace App\Presenters;


final class AboutPresenter extends BasePresenter
{
    public function renderDefault(): void
    {
        $this->inertia([
            'foo' => 'bar',
        ]);
    }
}
