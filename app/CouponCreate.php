<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CouponCreate extends Model
{
    use SoftDeletes;

    public $table = 'coupon_creates';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'uuid',
        'created_at',
        'updated_at',
        'deleted_at',
        'coupon_name',
    ];
}
