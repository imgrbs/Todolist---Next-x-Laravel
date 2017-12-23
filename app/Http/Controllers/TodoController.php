<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TodoRepository;

class TodoController extends Controller
{
  protected $todos;
  

  function __construct(
    TodoRepository $todos
  ) {
    $this->todos = $todos;
  }
  
  function create (Request $request)
  {
    $data = $request->all();
    $result = $this->todos->create($data);
    return $data;
  }

  function get ()
  {
    $todos = $this->todos->get();
    return $todos;
  }
}
