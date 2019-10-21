@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.createPayment.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.createPayment.fields.id') }}
                        </th>
                        <td>
                            {{ $createPayment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createPayment.fields.amount') }}
                        </th>
                        <td>
                            ${{ $createPayment->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createPayment.fields.uuid') }}
                        </th>
                        <td>
                            {{ $createPayment->uuid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createPayment.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $createPayment->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createPayment.fields.payment_type') }}
                        </th>
                        <td>
                            {{ $createPayment->payment_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.createPayment.fields.customer_email') }}
                        </th>
                        <td>
                            {{ $createPayment->customer_email }}
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