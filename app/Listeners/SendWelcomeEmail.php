<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

// class SendWelcomeEmail
// {
//     /**
//      * Create the event listener.
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Handle the event.
//      */
//     public function handle(UserRegistered $event): void
//     {
//         //
//     }
// }

class SendWelcomeEmail implements ShouldQueue
{
    use InteractsWithQueue;

    public function __construct()
    {
        //
    }

    public function handle(UserRegistered $event)
    {
        $user = $event->user;
        
        // Dummy Email Logic
        \Log::info("Welcome Email Sent to: " . $user->email);
    }
}
