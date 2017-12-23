<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Todo;

class TodoRepository
{

  public function create ($data) 
  {
    try {
      $result = DB::table('todo')->insert(
        [
          'title' => array_get($data, 'title'),
          'description' => array_get($data, 'description'),
          'user_id' => array_get($data, 'user_id')
        ]
      );
      return $result;
    } catch (QueryException $e) {
      return $e;
    }
  }

  public function get ()
  {
    $todos = DB::table('todo')->get();
    return $todos;
  }
}
