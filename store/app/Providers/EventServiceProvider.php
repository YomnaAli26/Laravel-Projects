<?php

namespace App\Providers;

use App\Events\OrderCreated;
use App\Listeners\DeductProductQuantity;
use App\Listeners\EmptyCart;
use App\Listeners\SendOrderCreatedNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
//        'order.created'=>[
//            DeductProductQuantity::class,
//            EmptyCart::class,
//        ],
       OrderCreated::class=>[
            DeductProductQuantity::class,
<<<<<<< HEAD
            EmptyCart::class,
=======
//            EmptyCart::class,
>>>>>>> d7c37c6a367d3bba9d45e42ed7a8bc95e7e6be86
           SendOrderCreatedNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
