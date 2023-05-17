<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['fname', 'lname', 'session', 'semester', 'roll_no'];


    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
