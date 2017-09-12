<?php
namespace JSK\Editor;

use Illuminate\Support\ServiceProvider;

class EditorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/editor.php' => config_path('editor.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../public' => public_path(''),
        ], 'public');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['editor'];
    }
}
