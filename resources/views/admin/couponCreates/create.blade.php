@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.couponCreate.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.coupon-creates.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('coupon_name') ? 'has-error' : '' }}">
                <label for="coupon_name">{{ trans('cruds.couponCreate.fields.coupon_name') }}</label>
                <input type="text" id="coupon_name" name="coupon_name" class="form-control" value="{{ old('coupon_name', isset($couponCreate) ? $couponCreate->coupon_name : '') }}">
                @if($errors->has('coupon_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('coupon_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.couponCreate.fields.coupon_name_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection