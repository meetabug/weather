<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/16
 * Time: 10:59
 */

namespace Meetabug\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class,function (){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class,'weather');
    }

    public function provides()
    {
        return [Weather::class,'weather'];
    }
}