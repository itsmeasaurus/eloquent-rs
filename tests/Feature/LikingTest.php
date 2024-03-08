<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikingTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function test_a_post_can_be_liked()
    {
        $this->actingAs(User::factory()->create());
        $post = Post::factory()->create(['user_id'=>2]);

        $post->like();

        $this->assertCount(1, $post->likes);
    }

    public function test_a_comment_can_be_liked()
    {
        $this->actingAs(User::factory()->create());
        $post = Comment::factory()->create();

        $post->like();

        $this->assertCount(1, $post->likes);
    }
}
