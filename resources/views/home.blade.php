@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
    <div id="title" style="text-align: center;">
        <h1>Learn Laravel 5</h1>
        <div style="padding: 5px; font-size: 16px;">Learn Laravel 5</div>
    </div>
    <hr />
    <div id="content">
        <ul>
            @foreach ($articles as $article)
            <li style="margin: 50px 0;">
                <div class="title">
                    <a href="{{ url('article/' . $article->id) }}">
                        <h4>{{ $article->title }}</h4>
                    </a>
                </div>
                <div class="body">
                    <p>{{ $article->body }}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
