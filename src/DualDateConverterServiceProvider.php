<?php

namespace TahaaZare\DualDateConverter;

use Illuminate\Support\ServiceProvider;

class DualDateConverterServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/helpers/DualDateHelper.php' => app_path('Helpers/DualDateHelper.php'),
        ], 'dual-date-helper');
    }

    public function register(): void {}
}
