<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BoardTest extends TestCase
{
    /**
     * Display content test.
     *
     * @return void
     */
    public function testIndex()
    {
        $post = factory(\App\Models\Board::class)->create();
        $post->save();

        $response = $this->get('board');
        $response->assertSee('My board')
            ->assertSee($post->title)
            ->assertSee($post->content);
    }
}
