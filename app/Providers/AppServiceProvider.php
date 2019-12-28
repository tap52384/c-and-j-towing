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
                'details' => 'Let us know where your vehicle is and where it ' .
                'needs to go anywhere in the Triangle and surrounding areas. We ' .
                'tow motorcycles too!',
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
                'catchy-desc-light' => 'We can fill it up.',
                'details' => 'C & J Towing Services can deliver both gasoline ' .
                'and diesel to your vehicle whenever you need it. Your days of ' .
                'worrying about running out of gas are over.',
                'font-awesome' => 'fa-car',
                'display-name' => 'Fuel Delivery & Refill'
            ],
            'locksmith-service' => [
                'anchor-name' => 'locksmith-service',
                'catchy-desc-dark' => 'Lockout recovery.',
                'catchy-desc-light' => 'No keys? No problem.',
                'details' => 'No need to panic; our experienced team can help ' .
                'you regain access to your car when you\'ve been locked out.',
                'font-awesome' => 'fa-unlock-alt',
                'display-name' => 'Locksmith Service & Car Unlocking'
            ],
            // 'roadside-service' => [
            //     'anchor-name' => 'roadside-service',
            //     'catchy-desc-dark' => '',
            //     'catchy-desc-light' => '',
            //     'details' => '',
            //     'font-awesome' => 'fa-road',
            //     'display-name' => 'Roadside Service'
            // ],
            'tire-repair' => [
                'anchor-name' => 'tire-repair',
                'catchy-desc-dark' => 'Flat tires. Blown tires.',
                'catchy-desc-light' => 'Repaired and replaced.',
                'details' => 'Day or night, feel free to call us if when you are ' .
                'on the side of the road with due to issues with your tires. We ' .
                'can bring and install replacements and get you back on the road ' .
                'in no time.',
                'font-awesome' => 'fa-wrench',
                'display-name' => 'Tire Repair & Replacement'
            ]
        ];

        // Share this array with all views
        // https://laravel.com/docs/5.8/views#sharing-data-with-all-views
        View::share('serviceList', $serviceList);
    }
}
