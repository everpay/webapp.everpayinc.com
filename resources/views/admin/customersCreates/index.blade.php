@extends('layouts.admin')
@section('content')
@can('customers_create_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.customers-creates.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.customersCreate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.customersCreate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CustomersCreate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.customersCreate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.customersCreate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.customersCreate.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.customersCreate.fields.roles') }}
                        </th>
                        <th>
                            {{ trans('cruds.customersCreate.fields.payment_response_code') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customersCreates as $key => $customersCreate)
                        <tr data-entry-id="{{ $customersCreate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $customersCreate->id ?? '' }}
                            </td>
                            <td>
                                {{ $customersCreate->name ?? '' }}
                            </td>
                            <td>
                                {{ $customersCreate->email ?? '' }}
                            </td>
                            <td>
                                @foreach($customersCreate->roles as $key => $item)
                                    <span class="badge badge-info">{{ $item->title }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $customersCreate->payment_response_code ?? '' }}
                            </td>
                            <td>
                                @can('customers_create_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.customers-creates.show', $customersCreate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('customers_create_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.customers-creates.edit', $customersCreate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('customers_create_delete')
                                    <form action="{{ route('admin.customers-creates.destroy', $customersCreate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('customers_create_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.customers-creates.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-CustomersCreate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection