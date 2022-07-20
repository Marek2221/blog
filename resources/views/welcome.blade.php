@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <div class="separator"></div>
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Welcome to <b><i>Our School Blog</i></b>. 
                <br>The place where students can freely express their opinions or share their experiences.</p>
                <br>
                <a href="/blog" class="btn btn-primary">Show Blogs</a><br><br>
                <a href="/blog/create/post" class="btn btn-primary">Create a new Post</a>
            </div>
        </div><br>
        <div class="separator"></div>
    </div>

    @endsection
