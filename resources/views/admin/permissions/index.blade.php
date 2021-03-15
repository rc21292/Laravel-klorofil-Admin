@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <a class="btn btn-success pull-right" href="{{ route('admin.permissions.create') }}">
    {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
  </a>
  <h3 class="page-title">{{ trans('cruds.permission.title_singular') }} {{ trans('global.list') }}</h3>
  <!-- OVERVIEW -->
  <div class="panel panel-headline">
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th width="10">

              </th>
              <th>
                {{ trans('cruds.permission.fields.id') }}
              </th>
              <th>
                {{ trans('cruds.permission.fields.title') }}
              </th>
              <th>
                &nbsp;
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($permissions as $key => $permission)
            <tr data-entry-id="{{ $permission->id }}">
              <td>

              </td>
              <td>
                {{ $permission->id ?? '' }}
              </td>
              <td>
                {{ $permission->name ?? '' }}
              </td>
              <td>
                <a class="btn btn-xs btn-primary" href="{{ route('admin.permissions.show', $permission->id) }}">
                  {{ trans('global.view') }}
                </a>

                <a class="btn btn-xs btn-info" href="{{ route('admin.permissions.edit', $permission->id) }}">
                  {{ trans('global.edit') }}
                </a>

                <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                </form>
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')

@endsection