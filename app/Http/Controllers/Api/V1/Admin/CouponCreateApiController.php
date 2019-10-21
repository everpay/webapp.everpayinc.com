<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CouponCreate;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCouponCreateRequest;
use App\Http\Requests\UpdateCouponCreateRequest;
use App\Http\Resources\Admin\CouponCreateResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CouponCreateApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('coupon_create_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CouponCreateResource(CouponCreate::all());
    }

    public function store(StoreCouponCreateRequest $request)
    {
        $couponCreate = CouponCreate::create($request->all());

        return (new CouponCreateResource($couponCreate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CouponCreate $couponCreate)
    {
        abort_if(Gate::denies('coupon_create_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CouponCreateResource($couponCreate);
    }

    public function update(UpdateCouponCreateRequest $request, CouponCreate $couponCreate)
    {
        $couponCreate->update($request->all());

        return (new CouponCreateResource($couponCreate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CouponCreate $couponCreate)
    {
        abort_if(Gate::denies('coupon_create_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $couponCreate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
