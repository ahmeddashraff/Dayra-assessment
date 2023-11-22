<?php

namespace App\Jobs;

use App\Models\Note;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateDefaultNote implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $note = Note::create([
            'title' => 'Your First Note',
            'content' => 'Welcome to our Note App',
            'user_id' => $this->data['id'],
        ]);

        echo "Default note is created for ". $this->data['email'];
    }
}
