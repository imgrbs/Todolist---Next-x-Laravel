<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'todo';
  protected $fillable = ['title', 'description', 'status'];
}
