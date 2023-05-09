<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'cities';
    protected $fillable = ['state_id', 'name'];

    
    public function state() {
        return $this->belongsTo(State::class, 'state_id', '_id');
    }

    public function employees() {
        return $this->hasMany(Employee::class);
    }
}
