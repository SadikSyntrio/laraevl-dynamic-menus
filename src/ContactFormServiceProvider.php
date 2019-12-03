<?php
    
namespace MySyntrio\contactform;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class ContactFormServiceProvider extends ServiceProvider {


    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'ContactForm');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    
    public function register()
    {
        //
    }
}
?>