@extends('layouts.app')

@section('content')

    <div class="row col-md-9 col-lg-9 col-md-offset-1 col-lg-offset-1" style="background: white;">
    <h1>Create new path </h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      <form method="post" action="{{ route('paths.store') }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="path">Path<span class="required">*</span></label>
                                <input   placeholder="Enter path"
                                          id="path"
                                          required
                                          name="path"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>

                            @if($project_id != null)
                            <input type="hidden" name="project_id" value="{{ $project_id}}"/>
                            @endif

                            <div class="form-group">
                                <label for="path-content">Description</label>
                                <textarea placeholder="Enter description"
                                          style="resize: vertical"
                                          id="path-content"
                                          name="description"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
                        </form>

      </div>
</div>

@endsection
