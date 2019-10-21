<?php

namespace App\Http\Controllers\Admin;

use App\CustomersCreate;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCustomersCreateRequest;
use App\Http\Requests\StoreCustomersCreateRequest;
use App\Http\Requests\UpdateCustomersCreateRequest;
use App\Role;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomersCreateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customers_create_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customersCreates = CustomersCreate::all();

        return view('admin.customersCreates.index', compact('customersCreates'));
    }

    public function create()
    {
        abort_if(Gate::denies('customers_create_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.customersCreates.create', compact('roles'));
    }

    public function store(StoreCustomersCreateRequest $request)
    {
        $customersCreate = CustomersCreate::create($request->all());
        $customersCreate->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.customers-creates.index');
    }

    public function edit(CustomersCreate $customersCreate)
    {
        abort_if(Gate::denies('customers_create_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $customersCreate->load('roles');

        return view('admin.customersCreates.edit', compact('roles', 'customersCreate'));
    }

    public function update(UpdateCustomersCreateRequest $request, CustomersCreate $customersCreate)
    {
        $customersCreate->update($request->all());
        $customersCreate->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.customers-creates.index');
    }

    public function show(CustomersCreate $customersCreate)
    {
        abort_if(Gate::denies('customers_create_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customersCreate->load('roles');

        return view('admin.customersCreates.show', compact('customersCreate'));
    }

    public function destroy(CustomersCreate $customersCreate)
    {
        abort_if(Gate::denies('customers_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customersCreate->delete();

        return back();
    }

    public function massDestroy(MassDestroyCustomersCreateRequest $request)
    {
        CustomersCreate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
