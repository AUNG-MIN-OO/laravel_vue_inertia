<?php

namespace App\Providers;

use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        Paginator::useBootstrap();

        Inertia::share([
            'errors' => function () {
                return Session::get('errors')
                    ? Session::get('errors')->getBag('default')->getMessages()
                    : (object)[];
            },
        ]);

        Inertia::share('flash',function (){
            return[
                'success'=>Session::get('success'),
                'error'=>Session::get('error')
            ];
        });

        Inertia::share([
            'auth_user'=>function(){
                return Auth::user();
            },
            'tags'=>function(){
                return Tag::all();
            }
        ]);
    }
}
