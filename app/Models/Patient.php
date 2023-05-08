<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function actions()
    {
        return $this->hasMany(Action::class, 'Patien_ID');
    }
}
