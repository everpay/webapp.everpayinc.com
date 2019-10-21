@extends('layouts.admin')
@section('content')
@can('subcriptions_create_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.subcriptions-creates.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.subcriptionsCreate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.subcriptionsCreate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SubcriptionsCreate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcriptionsCreate.fields.tag') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subcriptionsCreates as $key => $subcriptionsCreate)
                        <tr data-entry-id="{{ $subcriptionsCreate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $subcriptionsCreate->id ?? '' }}
                            </td>
                            <td>
                                {{ $subcriptionsCreate->name ?? '' }}
                            </td>
                            <td>
                                {{ $subcriptionsCreate->description ?? '' }}
                            </td>
                            <td>
                                {{ $subcriptionsCreate->price ?? '' }}
                            </td>
                            <td>
                                @foreach($subcriptionsCreate->categories as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @foreach($subcriptionsCreate->tags as $key => $item)
                                    <span class="badge badge-info">{{ $item->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('subcriptions_create_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.subcriptions-creates.show', $subcriptionsCreate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('subcriptions_create_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.subcriptions-creates.edit', $subcriptionsCreate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('subcriptions_create_delete')
                                    <form action="{{ route('admin.subcriptions-creates.destroy', $subcriptionsCreate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('subcriptions_create_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.subcriptions-creates.massDestroy') }}",
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
  $('.datatable-SubcriptionsCreate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection