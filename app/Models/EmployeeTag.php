<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class EmployeeTag extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'employee_tags';
    protected $fillable = ['employee_id', 'tag_id'];

    public function employee() {
        return $this->hasMany(Employee::class);
    }

    public function tag() {
        return $this->hasMany(Tag::class);
    }
}
