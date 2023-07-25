<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::macro('whereLike', function($attributes, $terms){
            $this->where(function($query) use ($attributes, $terms) {
                foreach(Arr::wrap($attributes) as $attribute) {
                    foreach(Arr::wrap($terms) as $term){
                        $query->orWhere($attribute, 'LIKE', $term);
                    }
                }
            });
            return $this;
        });
    }
}
