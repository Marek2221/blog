@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one noiceborder"><i>Our School Blog!</i></h1>
                        <p>Click on a post to read it or Click "Add Post" to add your own post!</p>
                    </div>
                    <div class="col-4 coloredbox">
                        <h3><b>Create a new Post</b></h3>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                    </div>
                </div>      
                <br>          
                <div class="separator"></div><br>
                @forelse($posts as $post)
                    <ul>
                        <li><a class="Post-link" href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
