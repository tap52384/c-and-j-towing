<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $serviceList = [
            '24-hour-towing' => [
                'anchor-name' => '24-hour-towing',
                'catchy-desc-dark' => 'Flatbed towing.',
                'catchy-desc-light' => '24 hours a day, every day.',
                'details' => '',
                'font-awesome' => 'fa-clock-o',
                'display-name' => '24-Hour Towing'
            ],
            'battery-replacement' => [
                'anchor-name' => 'battery-replacement',
                'catchy-desc-dark' => 'Battery died?',
                'catchy-desc-light' => 'A new one is a call away.',
                'details' => 'If you suspect your battery is having problems, ' .
                'we can test it within minutes and jumpstart your vehicle. If ' .
                'you need a new one, we can sell you one and install it for ' .
                'you on the spot.',
                'font-awesome' => 'fa-battery',
                'display-name' => 'Battery Replacement'
            ],
            'fuel-delivery' => [
                'anchor-name' => 'fuel-delivery',
                'catchy-desc-dark' => 'Tank empty?',
                'catchy-desc-light' => 'We deliver both gas and diesel.',
                'details' => '',
                'font-awesome' => 'fa-car',
                'display-name' => 'Fuel Delivery & Refill'
            ],
            'locksmith-service' => [
                'anchor-name' => 'locksmith-service',
                'catchy-desc-dark' => 'Lockout recovery.',
                'catchy-desc-light' => 'See for yourself.',
                'details' => '',
                'font-awesome' => 'fa-unlock-alt',
                'display-name' => 'Locksmith Service & Car Unlocking'
            ],
            'roadside-service' => [
                'anchor-name' => 'roadside-service',
                'catchy-desc-dark' => '',
                'catchy-desc-light' => '',
                'details' => '',
                'font-awesome' => 'fa-road',
                'display-name' => 'Roadside Service'
            ],
            'tire-repair' => [
                'anchor-name' => 'tire-repair',
                'catchy-desc-dark' => '',
                'catchy-desc-light' => '',
                'details' => '',
                'font-awesome' => 'fa-wrench',
                'display-name' => 'Tire Repair & Replacement'
            ]
        ];

        // Share this array with all views
        // https://laravel.com/docs/5.8/views#sharing-data-with-all-views
        View::share('serviceList', $serviceList);
    }
}
