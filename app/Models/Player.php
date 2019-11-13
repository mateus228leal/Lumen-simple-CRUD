<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model{

    protected $table = 'table_players';

    protected $fillable = [
        'name',
        'age',
        'play_position',
        'status'
        ];
}
