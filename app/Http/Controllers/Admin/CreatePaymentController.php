<?php

namespace App\Http\Controllers\Admin;

use App\CreatePayment;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCreatePaymentRequest;
use App\Http\Requests\StoreCreatePaymentRequest;
use App\Http\Requests\UpdateCreatePaymentRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreatePaymentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('create_payment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createPayments = CreatePayment::all();

        return view('admin.createPayments.index', compact('createPayments'));
    }

    public function create()
    {
        abort_if(Gate::denies('create_payment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.createPayments.create');
    }

    public function store(StoreCreatePaymentRequest $request)
    {
        $createPayment = CreatePayment::create($request->all());

        return redirect()->route('admin.create-payments.index');
    }

    public function edit(CreatePayment $createPayment)
    {
        abort_if(Gate::denies('create_payment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.createPayments.edit', compact('createPayment'));
    }

    public function update(UpdateCreatePaymentRequest $request, CreatePayment $createPayment)
    {
        $createPayment->update($request->all());

        return redirect()->route('admin.create-payments.index');
    }

    public function show(CreatePayment $createPayment)
    {
        abort_if(Gate::denies('create_payment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.createPayments.show', compact('createPayment'));
    }

    public function destroy(CreatePayment $createPayment)
    {
        abort_if(Gate::denies('create_payment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $createPayment->delete();

        return back();
    }

    public function massDestroy(MassDestroyCreatePaymentRequest $request)
    {
        CreatePayment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
