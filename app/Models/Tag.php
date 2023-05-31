<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tags';
    protected $fillable = ['name'];

    public function employees() {
        return $this->belongsToMany(Employee::class, null, 'tag_ids', 'employee_ids');
    }
}
