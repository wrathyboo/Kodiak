<?php

namespace App\Providers;
use App\Policies\PostPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
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
        //
        // $this->registerPolicies();
 
        // Gate::define('update-post', function (User $user, Post $post) {
        // return $user->id === $post->user_id;
        // });
    }
}
