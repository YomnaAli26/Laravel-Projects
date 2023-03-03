<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Post;

class PruneOldPostsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * The post instance.
     *
     * @var \App\Models\Post
     */
    public $posts;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->posts as $post)
        {
            $post->forceDelete();
        }
    }
}
