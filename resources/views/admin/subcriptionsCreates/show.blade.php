@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.subcriptionsCreate.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.id') }}
                        </th>
                        <td>
                            {{ $subcriptionsCreate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.name') }}
                        </th>
                        <td>
                            {{ $subcriptionsCreate->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.description') }}
                        </th>
                        <td>
                            {!! $subcriptionsCreate->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.price') }}
                        </th>
                        <td>
                            ${{ $subcriptionsCreate->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Categories
                        </th>
                        <td>
                            @foreach($subcriptionsCreate->categories as $id => $category)
                                <span class="label label-info label-many">{{ $category->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tags
                        </th>
                        <td>
                            @foreach($subcriptionsCreate->tags as $id => $tag)
                                <span class="label label-info label-many">{{ $tag->name }}</span>
                            @endforeach
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