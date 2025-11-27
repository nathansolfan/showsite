<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuoteGeneratorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_page_loads_quote_elements()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSee('Quote Generator');

        $response->assertSee('Start / Next Quote');
        $response->assertSee('id="next-quote"', false);
    }

    public function test_quotes_endpoints_valid_json()
    {
        $response = $this->get('/quotes');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [
                'q',
                'a'
            ]
        ]);
        $this->assertGreaterThan(0, count($response->json()));

        //check data type
        $data = $response->json();
        if (!empty($data)) {
            $firstQuote = $data[0];
            $this->assertIsString($firstQuote['q']);
            $this->assertIsString($firstQuote['a']);
        }

    }
}
