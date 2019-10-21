@extends('layouts.admin')
@section('content')
@can('create_payment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.create-payments.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.createPayment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.createPayment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CreatePayment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.createPayment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.createPayment.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.createPayment.fields.uuid') }}
                        </th>
                        <th>
                            {{ trans('cruds.createPayment.fields.customer_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.createPayment.fields.payment_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.createPayment.fields.customer_email') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($createPayments as $key => $createPayment)
                        <tr data-entry-id="{{ $createPayment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $createPayment->id ?? '' }}
                            </td>
                            <td>
                                {{ $createPayment->amount ?? '' }}
                            </td>
                            <td>
                                {{ $createPayment->uuid ?? '' }}
                            </td>
                            <td>
                                {{ $createPayment->customer_name ?? '' }}
                            </td>
                            <td>
                                {{ $createPayment->payment_type ?? '' }}
                            </td>
                            <td>
                                {{ $createPayment->customer_email ?? '' }}
                            </td>
                            <td>
                                @can('create_payment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.create-payments.show', $createPayment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('create_payment_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.create-payments.edit', $createPayment->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('create_payment_delete')
                                    <form action="{{ route('admin.create-payments.destroy', $createPayment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('create_payment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.create-payments.massDestroy') }}",
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
  $('.datatable-CreatePayment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection