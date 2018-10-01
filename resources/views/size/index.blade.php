@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">SIZE</div>

                    <div class="panel-body">
                        {{ link_to_route('size.create', 'Create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="5%">id</th>
                                <th width="25%">Width</th>
                                <th width="15%">Height</th>



                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($sizes as $size)
                                <tr>
                                    <td>{{$size->id}}</td>
                                    <td>{{$size->width}}</td>
                                    <td>{{$size->height}}</td>

                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['size.destroy', $size->id], 'method' => 'DELETE'])}}
                                        {{ link_to_route('size.show', 'info', [$size->id], ['class' => 'btn btn-info btn-xs']) }} |
                                        {{ link_to_route('size.edit', 'edit', [$size->id], ['class' => 'btn btn-success btn-xs']) }}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                        {{Form::close()}}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection