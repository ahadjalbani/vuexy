@extends('layouts.backend.master')

@section('content')


<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">POST DATA</h4>
      </div>
      <div class="card-body">
        <form  method="POST" action="{{route('post.update',$post->id)}}"  class="form form-horizontal">
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label"    for="name">Name</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  class="form-control" value="{{$post->name}}" name="name" placeholder=" Name">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="detail">Detail</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  value="{{$post->Detail}}" class="form-control" name="detail" placeholder="Detail">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
              </div>
            </div>
              </div>
            </div>
            <div class="col-sm-9 offset-sm-3">
              <div class="mb-1">
              </div>
            </div>
            <div class="col-sm-9 offset-sm-3">
              <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endsection
