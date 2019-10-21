<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreatePayment extends Model
{
    use SoftDeletes;

    public $table = 'create_payments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'uuid',
        'amount',
        'created_at',
        'updated_at',
        'deleted_at',
        'payment_type',
        'customer_name',
        'customer_email',
    ];
}
