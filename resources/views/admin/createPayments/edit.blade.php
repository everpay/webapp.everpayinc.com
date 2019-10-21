@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.createPayment.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.create-payments.update", [$createPayment->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('uuid') ? 'has-error' : '' }}">
                <label for="uuid">{{ trans('cruds.createPayment.fields.uuid') }}</label>
                <input type="text" id="uuid" name="uuid" class="form-control" value="{{ old('uuid', isset($createPayment) ? $createPayment->uuid : '') }}">
                @if($errors->has('uuid'))
                    <em class="invalid-feedback">
                        {{ $errors->first('uuid') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.createPayment.fields.uuid_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('customer_name') ? 'has-error' : '' }}">
                <label for="customer_name">{{ trans('cruds.createPayment.fields.customer_name') }}</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control" value="{{ old('customer_name', isset($createPayment) ? $createPayment->customer_name : '') }}">
                @if($errors->has('customer_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('customer_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.createPayment.fields.customer_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('payment_type') ? 'has-error' : '' }}">
                <label for="payment_type">{{ trans('cruds.createPayment.fields.payment_type') }}</label>
                <input type="text" id="payment_type" name="payment_type" class="form-control" value="{{ old('payment_type', isset($createPayment) ? $createPayment->payment_type : '') }}">
                @if($errors->has('payment_type'))
                    <em class="invalid-feedback">
                        {{ $errors->first('payment_type') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.createPayment.fields.payment_type_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('customer_email') ? 'has-error' : '' }}">
                <label for="customer_email">{{ trans('cruds.createPayment.fields.customer_email') }}</label>
                <input type="text" id="customer_email" name="customer_email" class="form-control" value="{{ old('customer_email', isset($createPayment) ? $createPayment->customer_email : '') }}">
                @if($errors->has('customer_email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('customer_email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.createPayment.fields.customer_email_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection