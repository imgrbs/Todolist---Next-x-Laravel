<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertNullObjectMustReturnError()
    {
      $response = $this->post('/api/todo',[]);
      $this->assertEquals(500, $response->status());
    }
    public function testInsertOnlyTitleMustReturnError()
    {
      $response = $this->post('/api/todo',['title'=>'กินข้าว']);
      $this->assertEquals(500, $response->status());
    }
}
