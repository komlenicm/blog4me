@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">

        <div class="card-header text-center">
            <h5>Edit blog settings</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('settings.update') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Site name</label>
                    <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Contact number</label>
                    <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Contact email</label>
                    <input type="email" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Update settings</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


@endsection