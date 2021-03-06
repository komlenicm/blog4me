@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">

        <div class="card-header">
            <h5>Create a new user</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">User</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Save user</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


@endsection