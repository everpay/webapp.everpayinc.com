<?php

namespace App\Http\Controllers\Admin;

use App\CouponCreate;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCouponCreateRequest;
use App\Http\Requests\StoreCouponCreateRequest;
use App\Http\Requests\UpdateCouponCreateRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CouponCreateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('coupon_create_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $couponCreates = CouponCreate::all();

        return view('admin.couponCreates.index', compact('couponCreates'));
    }

    public function create()
    {
        abort_if(Gate::denies('coupon_create_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.couponCreates.create');
    }

    public function store(StoreCouponCreateRequest $request)
    {
        $couponCreate = CouponCreate::create($request->all());

        return redirect()->route('admin.coupon-creates.index');
    }

    public function edit(CouponCreate $couponCreate)
    {
        abort_if(Gate::denies('coupon_create_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.couponCreates.edit', compact('couponCreate'));
    }

    public function update(UpdateCouponCreateRequest $request, CouponCreate $couponCreate)
    {
        $couponCreate->update($request->all());

        return redirect()->route('admin.coupon-creates.index');
    }

    public function show(CouponCreate $couponCreate)
    {
        abort_if(Gate::denies('coupon_create_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.couponCreates.show', compact('couponCreate'));
    }

    public function destroy(CouponCreate $couponCreate)
    {
        abort_if(Gate::denies('coupon_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $couponCreate->delete();

        return back();
    }

    public function massDestroy(MassDestroyCouponCreateRequest $request)
    {
        CouponCreate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
