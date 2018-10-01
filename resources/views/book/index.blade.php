@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">BOOKS</div>

                    <div class="panel-body">
                        {{ link_to_route('book.create', 'Create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="5%">id</th>
                                <th width="25%">Title</th>
                                <th width="15%">Author</th>
                                <th width="10%">Price</th>
                                <th width="10%">Pages</th>
                                <th width="15%">Publisher</th>
                                <th width="10%">Year</th>
                                <th width="10%">Hardcover</th>


                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->price}}</td>
                                    <td>{{$book->pages}}</td>
                                    <td>{{$book->publisher}}</td>
                                    <td>{{$book->year}}</td>
                                    <td>{{$book->hardcover}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $book->id], 'method' => 'DELETE'])}}
                                        {{ link_to_route('book.show', 'info', [$book->id], ['class' => 'btn btn-info btn-xs']) }} |
                                        {{ link_to_route('book.edit', 'edit', [$book->id], ['class' => 'btn btn-success btn-xs']) }}
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