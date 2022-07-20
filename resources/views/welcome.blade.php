@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <div class="separator"></div>
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Welcome to <b><i>{{ config('app.name') }}</i></b>. 
                <br>The place where students can freely express their opinions or share their experiences.</p>
                <br>
                <a href="/blog" class="btn btn-primary">Show Blogs</a><br><br>
                <a href="/blog/create/post" class="btn btn-primary">Create a new Post</a>
            </div>
        </div><br>
        <div class="separator"></div><br>
        <img src="https://i0.wp.com/zs3-wyszkow.pl/wp-content/uploads/2020/12/szkolazs3-min.jpg?fit=1920%2C1200&ssl=1" style="height:250px; margin-left: 32%;" alt="Image of our school"><br><br>
        <div class="separator"></div>
    </div>

    @endsection
