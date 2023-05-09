<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'countries';
    protected $fillable = ['country_code', 'name'];

    public function employees() {
        return $this->hasMany(Employee::class);
    }

    public function states() {
        return $this->hasMany(State::class);
    }
}
