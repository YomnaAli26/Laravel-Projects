<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::connection()->setQueryGrammar(new \App\Database\Query\Grammars\MySqlGrammar);
        Paginator::useBootstrap();
        Relation::morphMap([
            'post' => Post::class,

        ]);
    }
}
