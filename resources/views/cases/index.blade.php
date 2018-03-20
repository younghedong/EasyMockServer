@extends('layouts.app')
@section('content')
<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Cases <a class="pull-right btn btn-primary btn-sm" href="/cases/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Create new</a>
  </div>
  <div class="panel-body">
    <ul class="list-group">
        @foreach($cases as $case)
        <li class="list-group-item"><a href="{{'/paths/create/'.$case->id}}">{{$case->name}}</a></li>
        @endforeach
    </ul>
  </div>
</div>

</div>

@endsection
