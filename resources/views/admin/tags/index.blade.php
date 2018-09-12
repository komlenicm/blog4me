@extends('layouts.app')

@section('content')

    <div class="card card-body">

        <div class="panel-header text-center">Tags</div>

        <table class="table table-bordered table-hover">
            <thead>
            <th>
                Tag name
            </th>

            <th>
                Editing
            </th>
            <th>
                Deleting
            </th>
            </thead>


            <tbody>
            @if($tags->count() > 0)
                @foreach($tags as $tag)
                    <tr>
                        <td> {{ $tag->tag }} </td>


                        <td>
                            <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-sm btn-info">
                                Edit
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>

                @endforeach

            @else
                <tr>
                    <th colspan="5" class="text-center">No tags yet</th>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    </div>
@endsection