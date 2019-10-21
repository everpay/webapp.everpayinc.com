<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CreatePayment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCreatePaymentRequest;
use App\Http\Requests\UpdateCreatePaymentRequest;
use App\Http\Resources\Admin\CreatePaymentResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreatePaymentApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('create_payment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CreatePaymentResource(CreatePayment::all());
    }

    public function store(StoreCreatePaymentRequest $request)
    {
        $createPayment = CreatePayment::create($request->all());

        return (new CreatePaymentResource($createPayment))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CreatePayment $createPayment)
    {
        abort_if(Gate::denies('create_payment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CreatePaymentResource($createPayment);
    }

    public function update(UpdateCreatePaymentRequest $request, CreatePayment $createPayment)
    {
        $createPayment->update($request->all());

        return (new CreatePaymentResource($createPayment))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CreatePayment $createPayment)
    {
        abort_if(Gate::denies('create_payment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createPayment->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
