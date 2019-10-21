@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customersCreate.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.customersCreate.fields.id') }}
                        </th>
                        <td>
                            {{ $customersCreate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customersCreate.fields.name') }}
                        </th>
                        <td>
                            {{ $customersCreate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customersCreate.fields.email') }}
                        </th>
                        <td>
                            {{ $customersCreate->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Roles
                        </th>
                        <td>
                            @foreach($customersCreate->roles as $id => $roles)
                                <span class="label label-info label-many">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customersCreate.fields.payment_response_code') }}
                        </th>
                        <td>
                            {{ $customersCreate->payment_response_code }}
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