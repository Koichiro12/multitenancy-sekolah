<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
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
        //
        view()->composer('*',function($view){
            if(Auth::check()){
                $view->with('data_users',User::join('user_profiles','user_profiles.id_user','=','users.id')->where([['users.id','=',auth()->user()->id]])->get(['users.*','user_profiles.*','users.id as id_user'])->first());
            }
            });
        date_default_timezone_set('Asia/Jakarta');
    }
}
