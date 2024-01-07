<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_post_model()
    {
        Post::factory()->count(3)->create();

        $this->assertDatabaseCount('posts', 3);
    }
}
