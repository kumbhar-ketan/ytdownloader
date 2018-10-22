<?php
namespace KeTanKuMbhar\YTdownloader;

use Illuminate\Support\ServiceProvider;

class ServiceInitializer extends ServiceProvider{
    public function boot(){
        $this->loadViewsFrom(__DIR__.'/views','YTdownloader');
        $this->loadRoutesFrom(__DIR__.'/routes/send.php');
    }
    public function register(){
        $this->app->make('KeTanKuMbhar\YTdownloader\Handlers\ServiceHandler');
    }
}