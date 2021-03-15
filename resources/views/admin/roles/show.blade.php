@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h3 class="page-title">{{ trans('global.show') }} {{ trans('cruds.role.title_singular') }}</h3>
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-body">
            <div class="mb-2">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.role.fields.id') }}
                            </th>
                            <td>
                                {{ $role->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.role.fields.title') }}
                            </th>
                            <td>
                                {{ $role->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Permissions
                            </th>
                            <td>
                                @foreach($role->permissions()->pluck('name') as $permission)
                                <span class="label label-info label-many">{{ $permission }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>

            <nav class="mb-3">
                <div class="nav nav-tabs">

                </div>
            </nav>
            <div class="tab-content">

            </div>
        </div>
    </div>
</div>
@endsection