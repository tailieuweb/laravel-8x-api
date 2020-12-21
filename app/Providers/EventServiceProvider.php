<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use function Illuminate\Events\queueable;
use Illuminate\Support\Facades\Event;


use App\Events\PodcastProcessed;
use App\Listeners\SendPodcastNotification;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];
    

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        
    Event::listen(
        PodcastProcessed::class,
        [SendPodcastNotification::class, 'handle']
    );

    Event::listen(queueable(function (PodcastProcessed $event) {
        //
    }) ->onConnection('redis')->onQueue('podcasts')->delay(now()->addSeconds(10)));
    }
    
}

    
