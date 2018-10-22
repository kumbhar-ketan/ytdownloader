<?php
namespace Ketanninja1993\YTdownloader;

use Illuminate\Support\ServiceProvider;

class ServiceInitializer extends ServiceProvider{
    public function boot(){
        $this->loadViewsFrom(__DIR__.'/views','YTdownloader');
        $this->loadRoutesFrom(__DIR__.'/routes/send.php');
    }
    public function register(){
        $this->app->make('Ketanninja1993\YTdownloader\Handlers\ServiceHandler');
    }
}