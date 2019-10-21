<?php

namespace App\Http\Requests;

use App\SubcriptionsCreate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySubcriptionsCreateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('subcriptions_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:subcriptions_creates,id',
        ];
    }
}
