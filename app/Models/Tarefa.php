<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'tarefa', 'data_limite_conclusao'];

    public function user () {
        return $this->belogsTo('App\Models\User');
    }
}
