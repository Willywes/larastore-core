<?php

namespace Willywes\Larastore;

use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Stmt\Label;

class LarastoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function register()
    {
        //
    }
}
?>
