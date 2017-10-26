<?php

namespace Sahakavatar\StudiosModule\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'studios_module');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'studios_module');
        \Eventy::action('admin.menus', [
            "title" => "Studios Module",
            "custom-link" => "#",
            "icon" => "fa fa-gavel",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "Index",
                    "custom-link" => "/admin/studios-module",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]]);

        \Sahakavatar\Cms\Models\Routes::registerPages('sahak.avatar/studios_module');

    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }
}
