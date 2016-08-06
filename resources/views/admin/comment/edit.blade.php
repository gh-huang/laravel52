@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">编辑评论</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/comment/'.$comment->id) }}" method="POST">
            {{ method_field('PATCH') }}
            {!! csrf_field() !!}
            <input type="hidden" name="article_id" value="{{ $comment->article_id }}" />
            Nickname: <input type="text" name="nickname" class="form-control" required="required" value="{{ $comment->nickname }}" />
            <br>
            Email:
            <input type="text" name="email" class="form-control" required="required" value="{{ $comment->email }}" />
            <br>
            Website:
            <input type="text" name="website" class="form-control" required="required" value="{{ $comment->website }}" />
            <br>
            Content:
            <textarea name="content" rows="10" class="form-control" required="required">{{ $comment->content }}</textarea>
            <br>
            <button class="btn btn-lg btn-info">提交修改</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection