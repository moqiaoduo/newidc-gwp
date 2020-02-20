<?php

namespace NewIDC\Plugin\Server\GWP;

use Illuminate\Support\ServiceProvider;
use NewIDC\Plugin\Facade\PluginManager;

class GWPServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PluginManager::register(new Plugin());
    }
}