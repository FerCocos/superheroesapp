<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    use hasFactory;
    protected $table = 'superheroes';

    protected $fillable = ['real_name', 'name', 'picture', 'gender_id', 'universe_id'];
}
