@extends('layouts.backend.master')

@section('content')


<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">USER DATA</h4>
      </div>
      <div class="card-body">
        <form  method="POST" action="{{route('user.update',$user->id)}}"  class="form form-horizontal">
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label"    for="name">First Name</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  class="form-control" value="{{$user->name}}" name="name" placeholder="First Name">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email">Email</label>
                </div>
                <div class="col-sm-9">
                  <input type="email"  value="{{$user->email}}" class="form-control" name="email" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="contact-info">Mobile</label>
                </div>
                <div class="col-sm-9">
                  <input type="number"  value="{{$user->mobile}}"  class="form-control" name="mobile" placeholder="Mobile">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="password">Password</label>
                </div>
                <div class="col-sm-9">
                  <input type="password"   class="form-control" name="password" placeholder="Password">
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
