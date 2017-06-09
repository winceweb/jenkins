<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testBasicExample()
    {
      $response = $this->call('GET', '/');
    	$view = $response->original;
    	$this->assertEquals('Vous y êtes !', $view['message']);
    }
}
