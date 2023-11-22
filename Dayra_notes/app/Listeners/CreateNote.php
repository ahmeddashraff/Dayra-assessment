<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Models\Note;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateNote implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        $user = $event->user;

        Note::create([
            'title' => 'Welcome Note',
            'content' => 'Welcome to our note-taking app, ' . $user->name . '!',
            'user_id' => $user->id,
        ]);
    }
}
