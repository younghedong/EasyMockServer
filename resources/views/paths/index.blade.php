@extends('layouts.app')
@section('content')
<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">paths <a class="pull-right btn btn-primary btn-sm" href="/paths/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Create new</a>
  </div>
  <div class="panel-body">
    <ul class="list-group">
        @foreach($paths as $path)
        <li class="list-group-item"><a href="{{'/cases/create/'.$path->id}}">{{$path->path}}</a></li>
        @endforeach
    </ul>
  </div>
</div>

</div>

@endsection
