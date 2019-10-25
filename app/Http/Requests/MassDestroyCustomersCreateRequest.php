<?php

namespace App\Http\Requests;

use App\CustomersCreate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCustomersCreateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('customers_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:customers_creates,id',
        ];
    }
}
