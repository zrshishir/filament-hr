<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'states';
    protected $fillable = ['country_id', 'name'];
    /**
     * country relationship
     *
     * @return void
     */
    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function cities() {
        return $this->hasMany(City::class);
    }
}
