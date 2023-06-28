<?php

namespace Tests\Unit;

use Tests\TestCase;

class ReviewerTest extends TestCase
{
    public function test_show_reviewer(): void
    {
        $response = $this->get('/reviewer');
        $response->assertStatus(200);
    }
}