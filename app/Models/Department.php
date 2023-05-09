<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'departments';
    protected $fillable = ['name'];

    public function employees() {
        return $this->hasMany(Employee::class);
    }
}
