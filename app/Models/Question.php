<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['value'];

    public function answers()
    {
      return $this->hasMany(Answer::class);
    }

    public function path()
    {
      return route('questions.show', $this);
    }
    
}
