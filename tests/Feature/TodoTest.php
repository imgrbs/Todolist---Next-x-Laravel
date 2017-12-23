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
    public function testInsertOnlyTitleAndDescMustReturnError()
    {
      $response = $this->post('/api/todo',['title'=>'กินข้าว','description'=>'วันที่ 30 กุมภาพันธ์']);
      $this->assertEquals(500, $response->status());
    }
    public function testInsertTitleAndDescAndUserIDMustWork()
    {
      $response = $this->post('/api/todo',['title'=>'กินข้าว','description'=>'วันที่ 30 กุมภาพันธ์','user_id'=>1]);
      $this->assertEquals(200, $response->status());
    }
    public function testInsertTitleAndDescAndUserIDAndStatusMustWork()
    {
      $response = $this->post('/api/todo',['title'=>'กินข้าว','description'=>'วันที่ 30 กุมภาพันธ์','user_id'=>1, "status" => 1]);
      $this->assertEquals(200, $response->status());
    }
}
