<?php

namespace App\Listeners;

use App\Events\AnouncePosted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

class SendAnounceToUsers implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AnouncePosted  $event
     * @return void
     */
    public function handle(AnouncePosted $event)
    {
        $anouncement = $event->anounce;
        
        User::chunk(200, function($items) use ($anouncement) {
            foreach($items as $user)
            {
                $user->anouncements()->create(['anouncement_id' => $anouncement->id]);
            }
            
        });
    }
}
