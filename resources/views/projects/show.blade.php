@extends('layouts.app')

@section('content')


<div class="row col-md-9 col-lg-9 col-sm-9 pull-left ">
      <div class="jumbotron" >
        <h1>{{ $project->name }}</h1>
        <p class="lead">{{ $project->description }}</p>
      </div>
</div>

@endsection
