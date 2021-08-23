<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutingTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     *
     * @return void
     */
    function ルーティングテスト()
    {
        $this->get(route('top'))->assertStatus(200);
        $this->get(route('board.index'))->assertStatus(200);
        $this->get(route('board.create'))->assertStatus(200);
    }

}
