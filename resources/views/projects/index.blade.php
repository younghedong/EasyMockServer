@extends('layouts.app')
@section('content')
<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Projects <a class="pull-right btn btn-primary btn-sm" href="/projects/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Create new</a>
  </div>
  <div class="panel-body">
    <ul class="list-group">
        @foreach($projects as $project)
        <li class="list-group-item"><a href="{{'/paths/create/'.$project->id}}">{{$project->name}}</a></li>
        @endforeach
    </ul>
  </div>
</div>

</div>

@endsection
