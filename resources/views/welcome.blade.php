@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Welcome to "Our School Blog". The place where students can freely express their opinions</p>
                <br>
                <a href="/blog" class="btn btn-primary">Show Blogs</a>
            </div>
        </div>
    </div>

    @endsection
