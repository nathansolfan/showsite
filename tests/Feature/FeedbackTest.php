<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_feedback_view(): void
    {
        $response = $this->get('/feedback');
        $response->assertStatus(200);
        $response->assertSee('form');
    }

    public function test_feedback_post()
    {
        $data = [
            'name'    => 'TestName',
            'email'   => 'testing@email',
            'message' => 'Good job'
        ];
        $response = $this->post('/feedback', $data);
        $response->assertRedirect('/feedback');
        $this->assertDatabaseHas('feedback', $data);

    }
}
