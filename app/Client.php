<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    Protected $fillable=['name', 'problem', 'image', 'date'];
}
