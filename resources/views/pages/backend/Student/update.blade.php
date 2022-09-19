@extends('layouts.backend.master')

@section('content')


<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Post DATA</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('student.update',$student->id)}}"  class="form form-horizontal">
            @csrf
            @method('PUT')

            <div class="from-group">
                <input type="file" name="image" class="form-control"/><br>
                <button type="button" class="btn btn-success" >Upload</button>
            </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-9">
                  <label class="col-form-label" for="name">Student Name</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  class="form-control"  value="{{$student->name}}" name="name" placeholder="First Name">
                </div>
              </div>
              <div class="col-sm-9">
                <label class="col-form-label" for="email">Email</label>
              </div>
              <div class="col-sm-9">
                <input type="text"  class="form-control" value="{{$student->email}}" name="email" placeholder="First Name">
              </div>
            </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-9">
                  <label class="col-form-label" for="program">Program</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  class="form-control"  value="{{$student->program}}" name="program" placeholder="program">
                </div>
              </div>
              <label class="col-form-label" for="university">university</label>
            </div>
            <div class="col-sm-9">
              <input type="text"  class="form-control"  value="{{$student->university}}" name="university" placeholder="university">
            </div>
          </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
              </div>
            </div>
            <div class="col-sm-9 offset-sm-3">
              <div class="mb-1">
              </div>
            </div>
            <div class="col-sm-9 offset-sm-3">
              <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">update Student</button>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endsection
