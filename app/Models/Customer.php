<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Add fillable fields: name, email

    protected $fillable = [
        'name',
        'email'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
