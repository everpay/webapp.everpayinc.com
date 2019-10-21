<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomersCreate extends Model
{
    use SoftDeletes;

    public $table = 'customers_creates';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'uuid',
        'name',
        'email',
        'created_at',
        'updated_at',
        'deleted_at',
        'payment_token',
        'payment_response_code',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
