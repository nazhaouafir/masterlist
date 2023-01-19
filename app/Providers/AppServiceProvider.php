<?php

namespace App\Providers;

use Illuminate\Database\Query\Builder ;
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
       Builder::macro('search',function($field, $string){
        return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
       });
       Builder::macro('type',function($field, $string){
        return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
       });
       Builder::macro('color',function($field, $string){
        return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
       });
       Builder::macro('volume',function($field, $string){
        return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
       });
       Builder::macro('modevolume',function($field, $string){
        return $string ? $this->where($field, 'like', '%'.$string.'%') : $this;
       });
       
    }
}
