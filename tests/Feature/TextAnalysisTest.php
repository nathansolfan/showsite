<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TextAnalysisTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function analyze_returns_feeling_and_counts()
    {
        $payload = [
            'text' => 'I lvoe programming but hate bugs'
        ];
        $response = $this->postJson('analyze', $payload);

        $response->assertStatus(200)->assertJsonStructure([
            'word_count',
            'chars',
            'feeling_score',
            'feeling'
        ]);

        $data = $response->json;
        $this->assertIsInt($data['word_count']);
        $this->assertIsInt($data['chars']);
        $this->assertIsInt($data['feeling_score']);
        $this->assertContains($data['feeling'], ['positive', 'neutral', 'negative']);

    }
}
