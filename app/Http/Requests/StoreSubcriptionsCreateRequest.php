<?php

namespace App\Http\Requests;

use App\SubcriptionsCreate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreSubcriptionsCreateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('subcriptions_create_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'         => [
                'required',
            ],
            'price'        => [
                'required',
            ],
            'categories.*' => [
                'integer',
            ],
            'categories'   => [
                'array',
            ],
            'tags.*'       => [
                'integer',
            ],
            'tags'         => [
                'array',
            ],
        ];
    }
}
