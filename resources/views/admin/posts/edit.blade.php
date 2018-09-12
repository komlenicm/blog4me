@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">

        <div class="card-header">
            <h5>Edit post: {{ $post->title }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('post.update',['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="category">Select category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"

                                    @if($post->category_id == $category->id)
                                        selected
                                    @endif

                            > {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">

                    <label for="tags">Select tag(s):</label>

                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"

                                          @foreach($post->tags as $t)

                                              @if($tag->id == $t->id)

                                                  checked
                                              @endif
                                          @endforeach

                                > {{ $tag->tag }} </label>
                        </div>
                    @endforeach
                </div>


                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="" rows="10" class="form-control">{{ $post->content }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Update post</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


@endsection

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
@endsection