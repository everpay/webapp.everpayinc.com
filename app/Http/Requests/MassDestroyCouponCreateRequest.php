<?php

namespace App\Http\Requests;

use App\CouponCreate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCouponCreateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('coupon_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:coupon_creates,id',
        ];
    }
}
