<?php

namespace Jake\LaravelBaijiayun;

use Illuminate\Foundation\Application as LaravelApplication;
use Jake\Baijiayun\BJCloud;


class BaiJiaCloudServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->setupConfig();

        $this->app->singleton('baijiacloud', function () {
            $config = config('baijiacloud');
            return new BJCloud($config);
        });
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/config.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('baijiacloud.php')], 'laravel-baijiacloud');
        }

        $this->mergeConfigFrom($source, 'baijiacloud');
    }

}
