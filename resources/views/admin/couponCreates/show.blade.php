@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.couponCreate.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCreate.fields.id') }}
                        </th>
                        <td>
                            {{ $couponCreate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCreate.fields.coupon_name') }}
                        </th>
                        <td>
                            {{ $couponCreate->coupon_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCreate.fields.uuid') }}
                        </th>
                        <td>
                            {{ $couponCreate->uuid }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection