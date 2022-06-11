<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    //informando o eloquent para ignorar o campo abaixo, pq na tabela não vai ter o created_at e update_at
    public $timestamps = false;

    protected $fillable = ['release_type','person','description','amount','due_date']; //informando os objstos que devem ser persitidos
}