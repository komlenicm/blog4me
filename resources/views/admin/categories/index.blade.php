@extends('layouts.app')

@section('content')

    <div class="card card-body">

        <div class="panel-header text-center">Categories</div>

            <table class="table table-bordered table-hover">
                <thead>
                <th>
                    Category name
                </th>

                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
                </thead>


                <tbody>
                @if($categories->count() > 0)
                @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->name }} </td>


                        <td>
                            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-info">
                               Edit
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>

                @endforeach

                @else
                    <tr>
                        <th colspan="5" class="text-center">No categories yet</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection