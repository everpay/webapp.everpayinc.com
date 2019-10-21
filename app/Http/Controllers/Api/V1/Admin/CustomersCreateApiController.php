<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CustomersCreate;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomersCreateRequest;
use App\Http\Requests\UpdateCustomersCreateRequest;
use App\Http\Resources\Admin\CustomersCreateResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomersCreateApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customers_create_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomersCreateResource(CustomersCreate::with(['roles'])->get());
    }

    public function store(StoreCustomersCreateRequest $request)
    {
        $customersCreate = CustomersCreate::create($request->all());
        $customersCreate->roles()->sync($request->input('roles', []));

        return (new CustomersCreateResource($customersCreate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CustomersCreate $customersCreate)
    {
        abort_if(Gate::denies('customers_create_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomersCreateResource($customersCreate->load(['roles']));
    }

    public function update(UpdateCustomersCreateRequest $request, CustomersCreate $customersCreate)
    {
        $customersCreate->update($request->all());
        $customersCreate->roles()->sync($request->input('roles', []));

        return (new CustomersCreateResource($customersCreate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CustomersCreate $customersCreate)
    {
        abort_if(Gate::denies('customers_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customersCreate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
